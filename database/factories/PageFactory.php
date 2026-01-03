<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition(): array
    {
        return [
            'title_sk' => $this->faker->word(),
            'title_en' => $this->faker->word(),
            'slug_sk' => $this->faker->slug(),
            'slug_en' => $this->faker->slug(),
            'photo' => $this->faker->word(),
            'text_sk' => $this->faker->text(),
            'text_en' => $this->faker->text(),
            'is_active' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
