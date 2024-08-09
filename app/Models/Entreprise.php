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
        "hq_address",
        "website",
        "description",
        "photo",
        "presentation_movie",
        "links",
        "diversity_policy",
        "enabled",
    ];

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
