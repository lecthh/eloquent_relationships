<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author_id' => Author::factory(),
        ];
    }
}
