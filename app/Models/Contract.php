<?php

namespace App\Models;

use App\Models\Candidate;
use App\Models\Entreprise;
use App\Models\ContractTemplate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contract extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "candidate_id",
        "entreprise_id",
        "contract_template_id",
        "status",
        "comment",
        "rate",
    ];

    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }

    public function entreprise(): BelongsTo
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function contractTemplate(): BelongsTo
    {
        return $this->belongsTo(ContractTemplate::class);
    }
}
