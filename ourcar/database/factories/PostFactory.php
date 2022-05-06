<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name =$this->faker->unique()->sentence();
        return [
            'marca' => $name,
            'modelo' => $name,
            'descripcion' => $this->faker->text(250),
            'puertas' => $this->faker->randomElement([3,5]),
            'combustible'  => $name,
            'anio'  => $this->faker->numberBetween([0,2005]),
            'km' => $this->faker->numberBetween([0,50000]),
            'ciudad' => $name,
            'cv'  => $this->faker->numberBetween([0,2005]),

            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
