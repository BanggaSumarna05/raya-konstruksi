<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['id' => 1],
            [
                'name' => 'Admin Raya Konstruksi',
                'email' => 'admin@rayakonstruksi.com',
                'password' => bcrypt('password'),
            ]
        );

        $this->call([
            ProjectSeeder::class,
            BlogSeeder::class,
            ClientSeeder::class,
        ]);
    }
}
