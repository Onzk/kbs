<?php

namespace App\Models;

use App\Models\Chat;
use App\Models\Contract;
use App\Models\Document;
use App\Models\Language;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Candidate extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids, SoftDeletes;

    protected $fillable = [
        "photo",
        "lastname",
        "firstname",
        "email",
        "tel",
        "about",
        "linkedin",
        "country",
        "domain",
        "default_comment",
        "default_rate",
        "enabled",
        "password",
        "nbyear",
        "deleted_at",
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        "password",
        "remember_token",
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            "email_verified_at" => "datetime",
            "password" => "hashed",
        ];
    }

    public function matchesWith(Position $position)
    {
        $in_string = strtolower(trim(join(" ", [
            $this->country ?? "",
            $this->about ?? "",
            $this->domain,
            $this->nbyear . " ans years",
            join("", collect($this->educations)->map(fn($model) => $model->toSimpleString())->toArray()),
            join("", collect($this->other_educations)->map(fn($model) => $model->toSimpleString())->toArray()),
            join("", collect($this->languages)->map(fn($model) => $model->toSimpleString())->toArray()),
            join("", collect($this->experiences)->map(fn($model) => $model->toSimpleString())->toArray()),
            $this->document?->toSimpleString() ?? "",
        ])));
        $in_string_position = strtolower(trim(join(" ", array_values($position->toArray()))));
        $count = similar_text($in_string, $in_string_position, $percent);
        return ($count * 100 / strlen($in_string_position)) + $percent >= 30;
    }

    public function has_governance_experience()
    {
        return $this->experience()?->governance_experience
            and $this->experience()?->motivation;
    }

    public function has_new_messages(): bool
    {
        return $this->count_new_messages() > 0;
    }

    public function count_new_messages(): int
    {
        return $this->messages()->where("readed", false)
            ->whereNotNull("user_id")
            ->count();
    }

    public function get_last_message()
    {
        return $this->chats->reverse()->first();
    }

    public function messages($make_readed = false)
    {
        $chats = $this->chats()->where("candidate_id", $this->id);
        if($make_readed){
            (clone $chats)->where("readed", false)->whereNotNull("user_id")
            ->each(fn($m) => $m->update(["readed" => true]));
        }
        return $chats->get();
    }

    public function marked_contracts()
    {
        return $this->contracts->whereNotNull('comment')->whereNotNull('rate');
    }

    public function rate(): float
    {
        $contracts = $this->marked_contracts();
        if ($contracts->count())
        {
            $rates = $contracts->pluck("rate");
            return round($rates->sum() / $rates->count(), 1);
        }
        return $this->default_rate ?? 0;
    }

    public function stars(): int
    {
        return (int) $this->rate();
    }

    public function experience()
    {
        return $this->experiences()->first();
    }

    public function skills(): array
    {
        return json_decode($this->experience()?->skills ?? '[]', true);
    }

    public function domains(): array
    {
        return json_decode($this->experience()?->domains ?? '[]', true);
    }

    public function get_cv()
    {
        $this->refresh();
        return $this->document?->cv;
    }
    public function get_references(): array
    {
        return json_decode($this->document?->references ?? '[]', true);
    }
    public function get_realisations(): array
    {
        return json_decode($this->document?->realisations ?? '[]', true);
    }
    public function get_links(): array
    {
        return json_decode($this->document?->links ?? '[]', true);
    }

    public function contracts(): HasMany
    {
        return $this->hasMany(Contract::class);
    }

    public function educations(): HasMany
    {
        return $this->hasMany(Education::class);
    }

    public function other_educations(): HasMany
    {
        return $this->hasMany(OtherEducation::class);
    }

    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class);
    }

    public function document(): HasOne
    {
        return $this->hasOne(Document::class);
    }

    public function languages(): HasMany
    {
        return $this->hasMany(Language::class);
    }

    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class);
    }

    public function fullname(): string
    {
        return $this->firstname . " " . strtoupper($this->lastname);
    }
}
