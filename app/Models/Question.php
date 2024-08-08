<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "last_name",
        "first_name",
        "email",
        "title",
        "description",
        "answer",
    ];
}
