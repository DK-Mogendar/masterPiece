<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'user_id'=> $this->faker->numberBetween(1,100),
            'title'=>$this->faker->sentence,
            'body'=>$this->faker->text(),
            'created_at'=> $this->faker->dateTimeBetween(startDate:'2020-01-01', endDate:'21-12-31'),
            'deleted_at'=>$this->faker->randomElement([
                null,
                $this->faker->dateTimeBetween(startDate:'2020-01-01', endDate:'21-12-31')
            ])
        ];
    }
}
