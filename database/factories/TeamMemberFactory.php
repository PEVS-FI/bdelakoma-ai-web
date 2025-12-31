<?php

namespace Database\Factories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TeamMemberFactory extends Factory
{
    protected $model = TeamMember::class;

    public function definition(): array
    {
        return [
            'title_before' => $this->faker->word(),
            'first_name' => $this->faker->firstName(),
            'surname' => $this->faker->word(),
            'title_after' => $this->faker->word(),
            'annotation' => $this->faker->word(),
            'skills' => $this->faker->words(),
            'photo' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
