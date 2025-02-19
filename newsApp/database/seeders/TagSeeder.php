<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Task;

class TagSeeder extends Seeder
{
    public function run()
    {
        $tag1 = Tag::create(['name' => 'Urgent']);
        $tag2 = Tag::create(['name' => 'High Priority']);

        // Attach tags to tasks
        $task1 = Task::find(1); // "Update software"
        $task1->tags()->attach($tag1);

        $task2 = Task::find(2); // "Clean database"
        $task2->tags()->attach([$tag1->id, $tag2->id]);
    }
}