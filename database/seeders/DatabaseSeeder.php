<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now()
        ]);


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
