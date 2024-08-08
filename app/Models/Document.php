<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = ["candidate_id", "cv", "references", "realisations", "links"];

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
