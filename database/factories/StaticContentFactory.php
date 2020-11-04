<?php

namespace Database\Factories;

use App\Models\StaticContent;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaticContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StaticContent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'static_content_id' => $this->faker->uuid,
            'tag' => 'visi',
            'title' => 'Visi & Misi',
            'content' => $this->faker->sentence($nbWords = 200),
        ];
    }
}
