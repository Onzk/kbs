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
use Illuminate\Foundation\Auth\User as Authenticatable;

class Candidate extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids;

    protected $fillable = [
        "photo",
        "lastname",
        "firstname",
        "email",
        "tel",
        "linkedin",
        "country",
        "domain",
        "default_comment",
        "default_rate",
        "enabled",
    ];

    public function contracts(): HasMany
    {
        return $this->hasMany(Contract::class);
    }

    public function educations(): HasMany
    {
        return $this->hasMany(Education::class);
    }

    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class);
    }

    public function document(): HasOne {
        return $this->hasOne(Document::class);
    }

    public function languages(): HasMany{
        return $this->hasMany(Language::class);
    }

    public function chats() : HasMany {
        return $this->hasMany(Chat::class);
    }
}
