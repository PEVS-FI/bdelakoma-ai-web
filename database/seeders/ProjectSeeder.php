<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::factory()->create([
            'menu_title_sk' => 'Nadácia Tatra banky',
            'menu_title_en' => 'Tatra banka Foundation',
            'title_sk' => 'Nadácia Tatra banky',
            'title_en' => 'Tatra banka Foundation',
            'slug_sk' => Str::slug('Nadácia Tatra banky'),
            'slug_en' => Str::slug('Tatra banka Foundation'),
        ]);

        Project::factory()->create([
            'menu_title_sk' => 'Fond SK-NIC',
            'menu_title_en' => 'Fond SK-NIC',
            'title_sk' => 'Fond SK-NIC',
            'title_en' => 'Fond SK-NIC',
            'slug_sk' => Str::slug('Fond SK-NIC'),
            'slug_en' => Str::slug('Fond SK-NIC'),
        ]);

        Project::factory()->create([
            'menu_title_sk' => 'Nadácia VÚB banky',
            'menu_title_en' => 'VUB Bank Foundation',
            'title_sk' => 'Nadácia VÚB banky',
            'title_en' => 'Fond SK-NIC',
            'slug_sk' => Str::slug('Nadácia VÚB banky'),
            'slug_en' => Str::slug('VUB Bank Foundation'),
        ]);
    }
}
