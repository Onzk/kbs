<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Chat;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "firstname",
        "lastname",
        "email",
        "password",
        "photo",
        "enabled",
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

    public function fullname(): string
    {
        return $this->firstname . " " . strtoupper($this->lastname);
    }

    public function has_new_messages(): bool
    {
        return $this->count_new_messages() > 0;
    }

    public function count_new_messages(): int
    {
        return Chat::all()->whereNull("user_id")->where("readed", false)->count();
    }

    public function count_new_messages_from(string $key, $value): int
    {
        return Chat::all()
            ->whereNull("user_id")
            ->where("readed", false)
            ->where("{$key}_id", $value)
            ->count();
    }

    public function count_new_messages_from_category(string $key): int
    {
        return Chat::all()
            ->whereNull("user_id")
            ->where("readed", false)
            ->whereNotNull("{$key}_id")
            ->groupBy("{$key}_id")
            ->count();
    }

    public function messages()
    {
        return $this->chats()->whereNull("user_id")->get();
    }

    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class);
    }

}
