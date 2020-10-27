<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Bluemmb\Faker\PicsumPhotosProvider;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new PicsumPhotosProvider($this->faker));

        return [
            'news_id' => $this->faker->uuid,
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'content' => $this->faker->sentence($nbWords = 50, $variableNbWords = true),
            'tag' => $this->faker->sentence($nbWords = 1, $variableNbWords = true),
            'image' => $this->faker->imageUrl(640, 480),
            'view' => mt_rand(0, 100),
        ];
    }
}
