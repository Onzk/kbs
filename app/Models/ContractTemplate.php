<?php

namespace App\Models;

use App\Models\Contract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContractTemplate extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        "file",
        "demo",
        "title",
        "description",
        "price",
        "buyers",
    ];

    public function getSlugAttribute()
    {
        return str_replace(" ", "-", strtolower(trim($this->title)));
    }

    public function download()
    {
        try
        {
            return Storage::download(str_replace("storage", "public", $this->file), $this->slug);
        } catch (\Throwable $th)
        {
        }
    }

    public function get_buyers(): array
    {
        return json_decode($this->buyers ?? '[]', true);
    }

}
