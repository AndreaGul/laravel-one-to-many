<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        

        for($i = 0; $i<50; $i++){

            $project = new Project();
            $project->title = $faker->sentence(3);
            $project->slug = Str::of($project->title)->slug('-');
            $project->author = $faker->name();
            $project->description = $faker->paragraph();
            $project->creation_date = $faker->date();
            $project->last_update = $faker->date();
            $project->contributors = $faker->sentence(3);
            $project->lang = $faker->sentence(3);
            $project->link_github = $faker->url();

            $project->save();
        }

       
    }
}
