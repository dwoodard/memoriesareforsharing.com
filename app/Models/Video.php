<?php

namespace App\Models;

use Database\Factories\VideoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    /** @use HasFactory<VideoFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'filename',
        'url',
    ];

    public function getUrlAttribute(?string $value): ?string
    {
        if (! $value) {
            return null;
        }

        // If it's already a full URL, return as-is
        if (str_starts_with($value, 'http')) {
            return $value;
        }

        // Otherwise, generate the full CDN URL from the filename
        return Storage::disk('spaces')->url($value);
    }
}
