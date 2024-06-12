<?php

namespace Database\Seeders;

use App\Models\student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//run this file by using php artisan db:seed
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //for running seeder files
    //    $this->call([
    //         StudentSeeder::class
    //    ]);

        //for running factory files
        student::factory()->count(10)->create();
    }
}
