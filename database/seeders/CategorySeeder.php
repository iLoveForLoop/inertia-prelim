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
            ['name' => 'Electronics'],
            ['name' => 'Fashion'],
            ['name' => 'Home & Kitchen'],
            ['name' => 'Beauty & Personal Care'],
            ['name' => 'Sports & Outdoors'],
            ['name' => 'Automotive'],
            ['name' => 'Books & Stationery'],
            ['name' => 'Toys & Games'],
            ['name' => 'Health & Wellness'],
            ['name' => 'Grocery & Food'],

        ]);
    }
}