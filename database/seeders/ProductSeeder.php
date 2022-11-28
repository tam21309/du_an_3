<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Product();
        $role->name = 'Son YSL';
        $role->price = 125000;
        $role->describe = 'Mô tả sản phẩm: Màu Đỏ Đất';
        $role->category_id  = 2;
        $role->image = 'uploads/YSL.jpg';
        $role->save();

        $role = new Product();
        $role->name = 'Son MAC';
        $role->price = 650000;
        $role->describe = 'Mô tả sản phẩm: Màu Cam';
        $role->category_id  = 3;
        $role->image = 'uploads/son TAM.jpg';
        $role->save();

        $role = new Product();
        $role->name = 'Skincare';
        $role->price = 350000;
        $role->describe = 'Mô tả sản phẩm: Trị Mụn - Trắng Da';
        $role->category_id  = 4;
        $role->image = 'uploads/kem trị mụn.avif';
        $role->save();

        $role = new Product();
        $role->name = 'Nước Hoa';
        $role->price = 650000;
        $role->describe = 'Mô tả sản phẩm: Quyến Rũ';
        $role->category_id  = 5;
        $role->image = 'uploads/nuoc hoa.jpg';
        $role->save();

        $role = new Product();
        $role->name = 'Phấn';
        $role->price = 650000;
        $role->describe = 'Mô tả sản phẩm: Mỏng - Lâu Phai';
        $role->category_id  = 7;
        $role->image = 'uploads/phấn.jpg';
        $role->save();
    }
}
