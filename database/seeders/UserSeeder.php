<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Random\RandomException;

class UserSeeder extends Seeder
{
    /**
     * @throws RandomException
     */
    public function run(): void
    {
        $password = (config('app.env') !== 'production')
            ? 'password'
            : $this->getRandomString(16);

        $this->command->info('admin@bdelakoma-ai.sk: '.$password);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@bdelakoma-ai.sk',
            'password' => Hash::make($password),
            'email_verified_at' => now(),
        ]);
    }

    /** @noinspection PhpSameParameterValueInspection */
    /**
     * @throws RandomException
     */
    private function getRandomString(int $length): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $index = random_int(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}
