<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expert extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "photo",
        "firstname",
        "lastname",
        "speciality",
        "facebook",
        "linkedin",
        "tweeter",
    ];
}
