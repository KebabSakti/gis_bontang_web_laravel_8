<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;
use Bluemmb\Faker\PicsumPhotosProvider;


class GalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new PicsumPhotosProvider($this->faker));

        return [
            'gallery_id' => $this->faker->uuid,
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'caption' => $this->faker->sentence($nbWords = 50, $variableNbWords = true),
            'image' => $this->faker->imageUrl(640, 480),
        ];
    }
}
