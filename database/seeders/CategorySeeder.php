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
            ['title' => 'Wandelen'],
            ['title' => 'Uitjes'],
            ['title' => 'Natuur'],
            ['title' => 'Bomen'],
            ['title' => 'Bossen'],
            ['title' => 'Vogels'],
            ['title' => 'Dieren'],
            ['title' => 'Panda\'s'],
            ['title' => 'Beren'],
            ['title' => 'Herten']
        ];

        foreach($categories as $category) {
            $cat = new Category();
            
            $cat->title = $category['title'];

            $cat->save();
        }
    }
}
