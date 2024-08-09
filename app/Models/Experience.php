<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "candidate_id",
        "actual_position",
        "actual_entreprise",
        "nbyear",
        "description",
        "skills",
        "domains",
        "governance_experience",
        "motivation",
    ];

    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }

    public function get_skills(): array
    {
        return json_decode($this->skills ?? "[]", true);
    }
    public function get_domains(): array
    {
        return json_decode($this->domains ?? "[]", true);
    }
}
