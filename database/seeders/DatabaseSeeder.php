<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MediaSeeder;
use Database\Seeders\CustomerSeeder;
use Database\Seeders\RoleTableSeeder;
use Database\Seeders\UserTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RoleTableSeeder::class,
            UserTableSeeder::class,
            MediaSeeder::class,
            CustomerSeeder::class,
        ]);
    }
}
