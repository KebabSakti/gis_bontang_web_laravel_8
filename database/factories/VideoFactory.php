<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'video_id' => $this->faker->uuid,
            'title' => $this->faker->sentence,
            'caption' => $this->faker->sentence($nbWords = 200),
            'link' => '',
        ];
    }
}
