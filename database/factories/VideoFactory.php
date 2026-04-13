<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->firstName();

        return [
            'name' => $name,
            'filename' => 'videos/'.Str::slug($name).'_'.time().'.mp4',
            'url' => env('DO_SPACES_CDN', 'https://example.nyc3.cdn.digitaloceanspaces.com').'/videos/'.Str::slug($name).'_'.time().'.mp4',
        ];
    }
}
