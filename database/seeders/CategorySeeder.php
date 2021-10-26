<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Dating',
                'slug' => 'dating'
            ],
            [
                'name' => 'Education',
                'slug' => 'education'
            ],
            [
                'name' => 'Finance',
                'slug' => 'finance'
            ],
            [
                'name' => 'Health & Fitness',
                'slug' => 'health-fitness'
            ]
        ];

        foreach ($categories as $category) {
            Category::create(array(
                'name' => $category["name"],
                'slug' => $category["slug"]
            ));
        }
    }
}
