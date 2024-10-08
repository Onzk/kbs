<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $fillable =
    [
        "candidate_id",
        "cv",
        "references",
        "realisations",
        "links",
    ];

    public static function init($candidate): static
    {
        if ($doc = $candidate->document) return $doc;
        return Document::create([
            "candidate_id" => $candidate->id,
            "cv" => "",
        ]);
    }

    public function toSimpleString()
    {
        return join(" ", [
            join(" ", array_values(collect($this->get_realisations())
                ->map(fn($m) => str_replace("storage/candidate/realisations/$this->candidate_id/", "", $m))
                ->toArray())),
            join(" ", array_values(collect($this->get_references())
                ->map(fn($m) => str_replace("storage/candidate/references/$this->candidate_id/", "", $m))
                ->toArray())),
            join(" ", array_values(collect($this->get_links())->pluck("link")->toArray())),
        ]);
    }

    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }

    public function get_references(): array
    {
        return json_decode($this->references ?? "[]", true);
    }
    public function get_realisations(): array
    {
        return json_decode($this->realisations ?? "[]", true);
    }
    public function get_links(): array
    {
        return json_decode($this->links ?? "[]", true);
    }
}
