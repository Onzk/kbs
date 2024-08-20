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
        "entreprise_file",
        "admin_file",
        "candidate_file",
        "title",
        "status",
        "comment",
        "rate",
        "deleted_at",
    ];

    public function getStateAttribute()
    {
        return $this->trashed() ? "SUPPRIME" : [
            "pending" => "EN ATTENTE",
            "ongoing" => "EN COURS",
            "finished" => "TERMINE",
            "aborted" => "ANNULE",
        ][$this->status];
    }

    public function getCanOngoAttribute()
    {
        return $this->entreprise_file
            and $this->admin_file
            and $this->candidate_file;
    }

    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class)->withTrashed();
    }


    public function entreprise(): BelongsTo
    {
        return $this->belongsTo(Entreprise::class)->withTrashed();
    }
}
