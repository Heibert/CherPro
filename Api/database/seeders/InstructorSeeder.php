<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Instructor;
use App\Models\Programa;
use Faker\Generator as Faker;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /* function (Faker $faker) */
    public function run()
    {
        for ($i=0; $i < 1; $i++) {
            Instructor::factory()->create();
        }
    }
}
