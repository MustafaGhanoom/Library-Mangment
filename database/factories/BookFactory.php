<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Book_Title' => fake()->sentence(),  // أو fake()->sentence() إذا كنت تريد اسمًا أطول
            'Author_name' => fake()->name(),
            'Book_Description' => fake()->paragraph(),
            // 'cover_image' => fake()->image(),
            'Book_Content' => fake()->paragraph(),
            'Available' => fake()->boolean(),
            'Category_id' => Category::inRandomOrder()->first()->id,  // الحصول على ID عشوائي من الجدول
        ];
    }
}
