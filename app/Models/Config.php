<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Config extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "label",
        "value",
    ];

    public static function retreive(string $label, $default = null): ?string
    {
        return Config::firstWhere("label", $label)?->value ?? $default;
    }
}
