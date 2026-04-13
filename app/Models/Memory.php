<?php

namespace App\Models;

use Database\Factories\MemoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Memory extends Model
{
    /** @use HasFactory<MemoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'contact',
        'story',
        'year',
        'relation',
        'photo_url',
    ];

    public function getPhotoUrlAttribute(?string $value): ?string
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
