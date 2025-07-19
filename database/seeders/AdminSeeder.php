<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payload = [
            'name' => 'Administator',
            'email' => 'Admin@website.com',
            'password' => bcrypt('Sukses2026')
        ];

        $check = User::where('email', $payload['email'])->first();
        if (is_null($check)) {
            User::create($payload);
        }
    }
}
