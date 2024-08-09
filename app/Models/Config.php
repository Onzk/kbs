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
        "min_year",
        "cantidate_cautious",
        "entreprise_cautious",
        "linkedin",
        "facebook",
        "tweeter",
    ];
}
