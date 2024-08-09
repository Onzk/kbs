<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "lastname",
        "firstname",
        "email",
        "title",
        "description",
        "answer",
    ];
}
