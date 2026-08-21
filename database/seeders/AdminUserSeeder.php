<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = env('ADMIN_EMAIL', app()->environment('production') ? null : 'admin@avark.in');
        $password = env('ADMIN_PASSWORD', app()->environment('production') ? null : 'admin123');

        if (! $email || ! $password) {
            throw new \LogicException('ADMIN_EMAIL and ADMIN_PASSWORD must be set when seeding an admin user in production.');
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => env('ADMIN_NAME', 'Maruti Hospital Administrator'),
                'password' => Hash::make($password),
            ]
        );
    }
}
