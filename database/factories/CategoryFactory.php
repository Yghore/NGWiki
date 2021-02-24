<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'icon' => $this->faker->imageUrl(1000, 1000, null , true),
            'short_desc' =>  $this->faker->realText(100),
            'rank' => 1,
            'created_at' => $this->faker->date('d-m-Y'),
        ];
    }
}
