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
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $this->call(accountTypeSeeder::class);
        $this->call(bloodTypeSeeder::class);
        $this->call(nationalitySeeder::class);
        $this->call(religionSeeder::class);
        $this->call(genderSeeder::class);
    }
}
