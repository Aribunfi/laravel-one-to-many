<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++) {
            $project = new Project;
            $project->title = $faker->word();
            $project->year = $faker->unique()->numberBetween(1, 100);
            $project->type = $faker->randomElement(['lunga', 'corta', 'cortissima']);
            $project->time = $faker->numberBetween(1, 6);
            $project->description = $faker->paragraph(8);
            $project->img = "https://picsum.photos/300/200";
            $project->save();
    }
}
}