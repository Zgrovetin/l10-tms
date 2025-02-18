<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();
        $categories = Category::all();

        for ($i = 0; $i < 100; $i++) {
            $project = $projects->random();
            $category = $categories->random();
            \App\Models\Task::factory()->create([
                'project_id' => $project->id,
                'category_id' => $category->id,
            ]);
        }


    }
}
