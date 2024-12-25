<?php

namespace Database\Factories;

use App\Helpers\Models\Team;
use App\Helpers\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Helpers\Models\User>
 */
class FilmFactory extends Factory
{
    protected $model = Film::class;

    public function definition(): array
    {
        return [
            'title' => $this-> faker->sentence,
            'description' => $this ->faker->year,
            'year'=> $this->faker->year
        ];
    }

}
