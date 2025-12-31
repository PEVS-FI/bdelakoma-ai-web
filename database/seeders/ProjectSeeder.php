<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::factory()->create([
            'name' => 'Nadácia Tatra banky',
            'length' => 'od do',
            'code' => 'code1',
            'annotation' => fake('sk')->realText(),
        ]);

        Project::factory()->create([
            'name' => 'Fond SK-NIC',
            'length' => 'od do',
            'code' => 'code2',
            'annotation' => fake('sk')->realText(),
        ]);

        Project::factory()->create([
            'name' => 'Nadácia VÚB banky',
            'length' => 'od do',
            'code' => 'code3',
            'annotation' => fake('sk')->realText(),
        ]);
    }
}
