<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BrowserSeeder::class,
            ProjectSeeder::class,
            CategorySeeder::class,
            TaskSeeder::class,
            CommentSeeder::class,
            TagSeeder::class,
        ]);
    }
}