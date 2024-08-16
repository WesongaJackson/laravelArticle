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
        //
        $categories = [
            'Health',
            'Technology',
            'Relationship',
            'Politics',
            'Entertainment',
            'Sports',
            'Fashion',
            'Education',
            'Business',
            'Travel',
            'Food',
            'Music',
            'Movies',
        ];
        foreach ($categories as $item) {
            $category = new Category();
            $category->name = $item;
            $category->save();
        }
    }
}
