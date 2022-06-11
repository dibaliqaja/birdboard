<?php

namespace Database\Factories;

use App\Project;
use App\User;
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
        return [
            'title'       => $this->faker->sentence(4),
            'description' => $this->faker->sentence(4),
            'notes'       => 'Boo notes',
            'owner_id'    => User::factory()
        ];
    }
}
