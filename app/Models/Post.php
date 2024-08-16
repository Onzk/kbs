<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "title",
        "photo",
        "description",
        "comments",
    ];

    public function get_short_description()
    {
        $description = strip_tags(str_replace("&nbsp; ", "", $this->description));
        return (strlen($description) > 90) ? substr($description, 0, 80) . '...' : $description;
    }

    public function get_comments(): array
    {
        return json_decode($this->comments ?? '[]', true);
    }
}
