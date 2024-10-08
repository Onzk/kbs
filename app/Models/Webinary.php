<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Webinary extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "title",
        "url",
        "photo",
        "movie",
        "datetime",
        "description",
    ];
}
