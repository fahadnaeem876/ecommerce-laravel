<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'iPhone 12',
            'description' => 'Latest Apple iPhone 12',
            'price' => 999.99,
            'stock' => 100,
            'category_id' => 2,
            'seller_id' => 1,
        ]);
    }
}
