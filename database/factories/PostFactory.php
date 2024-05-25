<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
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
        // Memastikan ada setidaknya satu user yang tersedia
        $user = User::inRandomOrder() ?? User::factory(10)->create();

        // Memastikan ada setidaknya satu kategori yang tersedia
        $category = Category::inRandomOrder() ?? Category::factory(5)->create();

        return [
            'title' => fake()->sentence(),
            'author_id' => $user->id,
            'category_id' => $category->id,
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text()
        ];
    }
}
