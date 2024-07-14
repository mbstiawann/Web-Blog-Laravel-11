<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_name'=> 'Web Design',
            'slug'=> 'web-design',
            'color'=> 'red'
        ]);
        Category::create([
            'category_name'=> 'UI UX',
            'slug'=> 'ui-ux',
            'color'=> 'blue'
        ]);
        Category::create([
            'category_name'=> 'Machine Learning',
            'slug'=> 'machine-learning',
            'color'=> 'green'
        ]);
        Category::create([
            'category_name'=> 'Backend Developer',
            'slug'=> 'be-developer',
            'color'=> 'yellow'
        ]);
        Category::create([
            'category_name'=> 'Fullstack Developer',
            'slug'=> 'fs-developer',
            'color'=> 'purple'
        ]);
    }
}
