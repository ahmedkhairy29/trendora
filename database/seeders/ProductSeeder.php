<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Product 1',
            'slug' => Str::slug('Product 1'), 
            'description' => 'This is the first product',
            'price' => 100,
        ]);

        Product::create([
            'name' => 'Product 2',
            'slug' => Str::slug('Product 2'), 
            'description' => 'This is the second product',
            'price' => 150,
        ]);
    }
}
