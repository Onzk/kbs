<?php

namespace App\Models;

use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "entreprise_id",
        "title",
        "description",
        "skills",
        "experiences",
        "remuneration",
        "workplace",
    ];

    public static function parse($type)
    {
        return [
            "salary_range" => "Fourchette de Salaire",
            "package" => "Package",
        ][$type];
    }

    public function entreprise(): BelongsTo
    {
        return $this->belongsTo(Entreprise::class);
    }
}
