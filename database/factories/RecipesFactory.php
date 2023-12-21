<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipes>
 */
class RecipesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(20),
            'origin'=>$this->faker->name(),
            'publication_date'=> $this->faker->date(),
            'steps'=>$this->faker->numberBetween(2,50),
            'image'=>'Sushi-Japan-sushi.jpeg',
            'category_id'=>$this->faker->numberBetween(1,4)
        ];
    }
}
