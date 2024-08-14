<?php

namespace App\Models;

use App\Models\Chat;
use App\Models\Contract;
use App\Models\Position;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Entreprise extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids, SoftDeletes;

    protected $fillable = [
        "name",
        "sector",
        "size",
        "email",
        "hq_address",
        "website",
        "description",
        "photo",
        "presentation_movie",
        "links",
        "diversity_policy",
        "enabled",
        "password",
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

    public function get_links(): array
    {
        return json_decode($this->links ?? '[]', true);
    }

    public function has_new_messages(): bool
    {
        return count($this->messages()->where(["readed", false], ["user_id", "!=", null])->toArray()) > 0;
    }

    public function messages()
    {
        return $this->chats()->where("entreprise_id", $this->id)->get();
    }

    public function positions(): HasMany
    {
        return $this->hasMany(Position::class);
    }

    public function contracts(): HasMany
    {
        return $this->hasMany(Contract::class);
    }

    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class);
    }
}
