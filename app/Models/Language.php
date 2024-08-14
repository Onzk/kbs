<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "candidate_id",
        "title",
        "speaking",
        "reading",
        "writing",
    ];

    public function toSimpleString()
    {
        return join(" ", [
            $this->title,
            "parlé ". $this->parse($this->speaking),
            "lire ". $this->parse($this->reading),
            "écrit ". $this->parse($this->writing),
        ]);
    }

    public function parse($value): string
    {
        return ["Débutant", "Intermédiaire", "Avancé"][$value - 1];
    }

    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }
}
