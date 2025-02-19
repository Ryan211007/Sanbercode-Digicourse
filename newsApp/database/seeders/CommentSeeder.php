<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    public function run()
    {
        Comment::create([
            'content' => 'This task is almost complete.',
            'task_id' => 1, // References "Update software"
        ]);

        Comment::create([
            'content' => 'Need to clean up old records.',
            'task_id' => 2, // References "Clean database"
        ]);
    }
}