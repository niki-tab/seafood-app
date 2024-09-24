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
            'slug' => "centollo-bretaña",
            'origin' => "Bretaña",
            'product_type' => "Simple",
            'product_species_type' => "crab",
            'price' => 20,
            'sell_unit' => "unit",
            'stock' => "50",
            'stock_unit' => "unit",
            'out_of_stock' => true,
            'image' => 'images/product/centolla_product.jpg',
            'featured' => true,

        ]);

        $spiderCrab
        ->setTranslation('name', 'en', 'Spider crab')
        ->setTranslation('description', 'en', 'Spider crab originally from Brittany')
        ->setTranslation('slug', 'en', 'spider-crab-brittany')
        ->save();

        $oisters = ProductModel::create([

            'id' => (string) Str::uuid(),
            'name' => "Ostras",
            'description' => "Ostras originarias de Bretaña",
            'slug' => "ostras-bretaña",
            'origin' => "Bretaña",
            'product_type' => "Simple",
            'product_species_type' => "oister",
            'price' => 10,
            'sell_unit' => "kg",
            'stock' => "50",
            'stock_unit' => "unit",
            'out_of_stock' => false,
            'image' => 'images/product/ostras_product.jpg',
            'featured' => true,

        ]);

        $oisters
        ->setTranslation('name', 'en', 'Oysters')
        ->setTranslation('description', 'en', 'Oysters originally from Brittany')
        ->setTranslation('slug', 'en', 'oysters-brittany')
        ->save();

        $grouper = ProductModel::create([

            'id' => (string) Str::uuid(),
            'name' => "Mero",
            'description' => "Mero originario de Lanzarote",
            'slug' => "mero-islas-canarias",
            'origin' => "Lanzarote",
            'product_type' => "Simple",
            'product_species_type' => "grouper",
            'price' => 25,
            'sell_unit' => "kg",
            'stock' => "50",
            'stock_unit' => "unit",
            'out_of_stock' => true,
            'image' => 'images/product/mero_product.jpg',
            'featured' => true,

        ]);
        
        $grouper
        ->setTranslation('name', 'en', 'Grouper')
        ->setTranslation('description', 'en', 'Grouper originally from The Canary Islands')
        ->setTranslation('slug', 'en', 'grouper-canary-islands')
        ->save();
    }
}
