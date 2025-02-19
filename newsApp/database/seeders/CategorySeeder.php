<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Development',
        ]);

        Category::create([
            'name' => 'Testing',
        ]);

        Category::create([
            'name' => 'Deployment',
        ]);
    }
}