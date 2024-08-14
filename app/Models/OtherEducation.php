<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class OtherEducation extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = "other_educations";

    protected $fillable = [
        "candidate_id",
        "title",
        "description",
        "type",
    ];

    public function toSimpleString()
    {
        return join(" ", [
            $this->title,
            $this->description,
            [
                "ongoing_training" => "Formation Continue",
                "certification" => "Certification",
                "accredidation" => "Accrédidation"
            ][$this->type],
        ]);
    }

    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }
}
