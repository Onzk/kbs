<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ["candidate_id", "title", "speaking", "reading", "writing"];

    public function candidate() : BelongsTo {
        return $this->belongsTo(Candidate::class);
    }

}
