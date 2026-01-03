<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Random\RandomException;

/** @mixin Factory<Project> */
class ProjectFactory extends Factory
{
    protected $model = Project::class;

    /**
     * @throws RandomException
     */
    public function definition(): array
    {
        $text = '<p>' . implode('</p><p>', $this->faker->paragraphs(random_int(5, 10))) . '</p>';

        return [
            'code' => $this->faker->word(),
            'menu_title_sk' => $this->faker->name(),
            'menu_title_en' => $this->faker->name(),
            'title_sk' => $this->faker->name(),
            'title_en' => $this->faker->name(),
            'length_sk' => $this->faker->word(),
            'length_en' => $this->faker->word(),
            'slug_sk' => Str::slug($this->faker->word()),
            'slug_en' => Str::slug($this->faker->word()),
            'text_sk' => $text,
            'text_en' => $text,
            'is_active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
