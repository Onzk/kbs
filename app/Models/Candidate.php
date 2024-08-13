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

    public function has_new_messages(): bool
    {
        return count($this->messages()->where(["readed", false], ["user_id", "!=", null])->toArray()) > 0;
    }

    public function messages()
    {
        return $this->chats()->where("candidate_id", $this->id)->get();
    }

    public function marked_contracts()
    {
        return $this->contracts->where(['comment', '!=', null], ["rate", "!=", null]);
    }

    public function rate(): float
    {
        if ($this->contracts()->count()) {
            $rates = collect($this->contracts)->pluck("rates");
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
