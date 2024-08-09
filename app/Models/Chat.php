<?php

namespace App\Models;

use App\Models\User;
use App\Models\Candidate;
use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chat extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "user_id",
        "candidate_id",
        "entreprise_id",
        "content",
        "readed",
    ];

    public function at()
    {
        return $this->created_at->diffInDays() >= 1
            ? $this->created_at->locale('fr')->diffForHumans()
            : $this->created_at;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }
    public function entreprise(): BelongsTo
    {
        return $this->belongsTo(Entreprise::class);
    }
}
