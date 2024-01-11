<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Labore reprehenderit occaecat eiusmod anim proident.',
            'price' => 19.50,
            'quantity' => 3,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'Eiusmod mollit elit nulla exercitation. Culpa excepteur do cillum magna est non dolore irure non qui. 
            Id aliqua occaecat duis culpa aute laboris amet in consectetur cupidatat. In officia ex ipsum voluptate consequat. 
            Ullamco culpa adipisicing nulla officia sunt exercitation non culpa irure anim amet proident sint ea. 
            Adipisicing tempor sint aliquip culpa ut.',
            
        ]);
    }
}
