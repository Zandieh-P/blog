<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $excerpt = collect($this->faker->paragraphs(2))
        ->map(function ($item) {return ("<p>{$item}</p>");})->implode('');
        $body = collect($this->faker->paragraphs(6))
        ->map(function ($item) {return ("<p>{$item}</p>");})->implode('');
        return array(
            'user_id' =>User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'excerpt' => $excerpt,
            'body' => $body
        );
    }
}
