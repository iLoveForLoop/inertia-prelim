<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Electronics',
                'description' => 'Explore the latest gadgets, devices, and electronics, including smartphones, laptops, TVs, and accessories.',
            ],
            [
                'name' => 'Fashion',
                'description' => 'Discover trendy clothing, footwear, and accessories for men, women, and kids to elevate your style.',
            ],
            [
                'name' => 'Home & Kitchen',
                'description' => 'Find everything you need for your home, from furniture and decor to kitchen appliances and cookware.',
            ],
            [
                'name' => 'Beauty & Personal Care',
                'description' => 'Enhance your beauty routine with skincare, makeup, haircare, and personal grooming products.',
            ],
            [
                'name' => 'Sports & Outdoors',
                'description' => 'Gear up for your favorite sports and outdoor activities with equipment, apparel, and accessories.',
            ],
            [
                'name' => 'Automotive',
                'description' => 'Shop for car parts, tools, accessories, and maintenance products to keep your vehicle in top condition.',
            ],
            [
                'name' => 'Books & Stationery',
                'description' => 'Dive into a world of books, journals, stationery, and office supplies for work, school, or leisure.',
            ],
            [
                'name' => 'Toys & Games',
                'description' => 'Find fun and educational toys, games, and puzzles for kids and families to enjoy.',
            ],
            [
                'name' => 'Health & Wellness',
                'description' => 'Prioritize your well-being with vitamins, supplements, fitness equipment, and wellness products.',
            ],
            [
                'name' => 'Grocery & Food',
                'description' => 'Stock up on fresh groceries, snacks, beverages, and pantry essentials for your everyday needs.',
            ],
        ]);
    }
}