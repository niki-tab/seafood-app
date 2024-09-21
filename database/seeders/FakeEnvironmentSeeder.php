<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\ProductModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FakeEnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $spiderCrab = ProductModel::create([

            'id' => (string) Str::uuid(),
            'name' => "Centollo",
            'description' => "Centollo originario de Bretaña",
            'origin' => "Bretaña",
            'product_type' => "Simple",
            'product_species_type' => "crab",
            'price' => 20,
            'sell_unit' => "unit",
            'stock' => "50",
            'stock_unit' => "unit",
            'image' => 'images/product/centolla_product.jpg',
            'featured' => true,

        ]);

        $oisters = ProductModel::create([

            'id' => (string) Str::uuid(),
            'name' => "Ostras",
            'description' => "Ostras originarias de Bretaña",
            'origin' => "Bretaña",
            'product_type' => "Simple",
            'product_species_type' => "oister",
            'price' => 10,
            'sell_unit' => "kg",
            'stock' => "50",
            'stock_unit' => "unit",
            'image' => 'images/product/ostras_product.jpg',
            'featured' => true,

        ]);

        $grouper = ProductModel::create([

            'id' => (string) Str::uuid(),
            'name' => "Mero",
            'description' => "Mero originario de Lanzarote",
            'origin' => "Lanzarote",
            'product_type' => "Simple",
            'product_species_type' => "grouper",
            'price' => 25,
            'sell_unit' => "kg",
            'stock' => "50",
            'stock_unit' => "unit",
            'image' => 'images/product/mero_product.jpg',
            'featured' => true,

        ]);
        
    }
}
