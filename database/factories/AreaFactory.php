<?php

namespace Database\Factories;

use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

class AreaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Area::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'area_id' => $this->faker->uuid,
            'code' => mt_rand(1000, 9999),
            'name' => $this->faker->city,
            'tag' => 'provinsi',
            'caption'=> $this->faker->sentence,
        ];
    }
}
