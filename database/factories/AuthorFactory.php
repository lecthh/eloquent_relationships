<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AuthorFactory extends Factory
{
    protected $model = Author::class;
    public function definition()
    {
        return [
        'name' => $this->faker->name,
        ];
    }
}
