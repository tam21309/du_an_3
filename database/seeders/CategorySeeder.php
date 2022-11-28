<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Son YSL';
        $category->quantity = '3';
        $category->image = 'uploads/YSL.jpg';
        $category->save();

        $category = new Category();
        $category->name = 'Son MAC';
        $category->quantity = '3';
        $category->image = 'uploads/son TAM.jpg';
        $category->save();

        $category = new Category();
        $category->name = 'Skincare';
        $category->quantity = '3';
        $category->image = 'uploads/kem trị mụn.avif';
        $category->save();

        $category = new Category();
        $category->name = 'Phấn';
        $category->quantity = '3';
        $category->image = 'uploads/phấn2.jpg';
        $category->save();

        $category = new Category();
        $category->name = 'Nước Hoa';
        $category->quantity = '4';
        $category->image = 'uploads/nuoc hoa.jpg';
        $category->save();


        
    }
}
