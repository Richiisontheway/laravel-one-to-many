<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//models
use App\Models\Project;

//helpers
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //per svuotare il tutto nel caso ci fossero dei dati
        Project::truncate();
        //per ciclare gli elementi
        for ($i=0; $i < 10; $i++) { 
            $project = new Project();
            $title = fake()->sentence();
            $project->title = $title;
            //slug per averlo come il titolo
            $slug = Str::slug($title);
            $project->slug = $slug;
            $project->image = fake()->imageUrl(200,200,'dog',true);
            $project->description = fake()->paragraph();
            $project->date = fake()->dateTimeThisCentury();
            $project->save();
        }
    }
}
