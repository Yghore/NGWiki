<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->randomDigit(),
            'author' => 1,
            'category_id' => 1,
            'desc_short' => $this->faker->text(80),
            'title' =>  $this->faker->realText(10),
            'icon' => $this->faker->imageUrl(1000, 1000, null , true),
            'body' => $this->faker->randomHtml(10, 10),
            'created_at' => $this->faker->date('d-m-Y'),
        ];
    }
}
