<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\LessonSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();



        $this->call(CourseSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(LessonSeeder::class);


        foreach (range(1, 5) as $num) {
            DB::table('category_course')->insert([
                'course_id' => $num,
                'category_id' => $num,
            ]);
        }
    }
}
