<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
//php artisan make:seeder StudentSeeder
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students=[
            [
                'name'=>'Anuj',
                'city'=>'Ambala'
            ],
            [
                'name'=>'Abhishek',
                'city'=>'Sonipat'
            ],
            [
                'name'=>'Shashank',
                'city'=>'Kalka'
            ]
        ];
        forEach($students as $i){
            student::insert($i);
        }
        // student::create([
        //     'name'=>'Him',
        //     'city'=>'Faridabad'
        // ]);
    }
}
