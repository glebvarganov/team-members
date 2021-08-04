<?php

namespace Database\Factories;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $colors = ['#7da7d9', '#8493ca', '#8781bd', '#bd8dbf', '#f4989d'];

        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'timeline_from' => $this->faker->dateTimeBetween('now', '+1 week'),
            'timeline_to' => $this->faker->dateTimeBetween('+2 weeks', '+10 weeks'),
            'color' => $colors[rand(0, count($colors) - 1)],
            'type' => 'organization'
        ];
    }
}
