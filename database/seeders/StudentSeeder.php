<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for($i = 1; $i <= 10; $i++){

        //     student::create([
        //         'name'=>fake()->name,
        //         'phone'=>fake()->PhoneNumber(),
        //         'address'=>fake()->Address,
        //         'password'=>fake()->password,
        //         'email'=>fake()->email,
        //     ]);
        // }
        // $jsonData = File::get(path:'database/json/students.json');
        // $students = collect(json_decode($jsonData));
        
        // $students->each(function($student){
        //     student::create([
        //         'name'=>$student->name,
        //         'email'=>$student->email
        //     ]);
        // });

        student::factory()->count(10)->create();

    }
}
