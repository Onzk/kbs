<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "photo",
        "first_name",
        "last_name",
        "speciality",
        "facebook",
        "linkedin",
        "tweeter",
    ];
}
