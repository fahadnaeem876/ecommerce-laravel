<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;


class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Review::create([
            'user_id' => 1,
            'product_id' => 1,
            'rating' => 5,
            'comment' => 'Great product!',
        ]);
    }
}
