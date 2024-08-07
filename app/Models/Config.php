<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "min_year",
        "cantidate_cautious",
        "entreprise_cautious",
        "linkedin",
        "facebook",
        "tweeter",
    ];
}
