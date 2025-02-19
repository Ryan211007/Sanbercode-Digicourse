<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::create([
            'task_name' => 'Update software',
            'progress' => 55,
            'label' => '55%',
            'user_id' => 1, // References user John Doe
            'project_id' => 1, // References Project Alpha
            'category_id' => 1, // References Development
            'browser_id' => 1, // References Internet Explorer 4.0
        ]);

        Task::create([
            'task_name' => 'Clean database',
            'progress' => 70,
            'label' => '70%',
            'user_id' => 2, // References user Jane Smith
            'project_id' => 2, // References Project Beta
            'category_id' => 2, // References Testing
            'browser_id' => 2, // References Internet Explorer 5.0
        ]);
    }
}