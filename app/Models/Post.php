<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function getRouteKeyName(): string
    {
        return 'title';
    }

    public function getSlugAttribute()
    {
        return strtolower(str_replace(" ", "-", trim($this->title)));
    }

    public function get_short_description(int $max = 90)
    {
        $description = strip_tags(str_replace("&nbsp; ", "", $this->description));
        return (strlen($description) > $max) ? substr($description, 0, $max - 10) . '...' : $description;
    }

    public function get_comments(): array
    {
        return json_decode($this->comments ?? '[]', true);
    }
}
