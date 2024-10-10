<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\ProductModel;
use Illuminate\Database\Seeder;
use App\Models\ProductSizeVariationModel;
use App\Models\ProductQuantityVariationModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ProducSizeVariationQuantityVariationPriceModel;

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
            'description_1' => "Procedente de Francia. Oceano Atlántico",
            'description_2' => "La centolla de Francia es sinónimo de calidad y sabor refinado. Un producto excepcional que puedes disfrutar en cualquier momento del año. En Rutas del Mar, traemos directamente desde las costas francesas las centollas más frescas, seleccionadas cuidadosamente para ofrecerte lo mejor del mar. La centolla francesa es una alternativa exquisita a la centolla gallega.",
            'slug' => "centollo-bretaña",
            'origin_general' => "Francia",
            'origin_specific' => "Bretaña",
            'product_type' => "simple",
            'product_species_type' => "crab",
            'price_from' => 20,
            'sell_unit' => "unit",
            'sell_mode' => "per-unit",
            'stock' => "50",
            'stock_unit' => "unit",
            'out_of_stock' => true,
            'image' => 'images/product/centolla_product.jpg',
            'featured' => true,

        ]);

        $spiderCrab
        ->setTranslation('name', 'en', 'Spider crab')
        ->setTranslation('description_1', 'en', 'Sourced from France. Atlantic Ocean')
        ->setTranslation('description_2', 'en', 'The French spider crab is synonymous with quality and refined flavor. An exceptional product that you can enjoy at any time of the year. At Rutas del Mar, we bring the freshest spider crabs directly from the French coasts, carefully selected to offer you the best of the sea. The French spider crab is an exquisite alternative to the Galician spider crab.')
        ->setTranslation('origin_general', 'en', 'France')
        ->setTranslation('origin_specific', 'en', 'Brittany')
        ->setTranslation('slug', 'en', 'spider-crab-brittany')
        ->save();

        $oisters = ProductModel::create([

            'id' => (string) Str::uuid(),
            'name' => "Ostras",
            'description_1' => "Nuestras ostras frescas son cuidadosamente recolectadas por cultivadores apasionados, quienes mantienen viva la tradición de la recolección sostenible directamente del océano. Estas ostras se destacan por su sabor pronunciado, equilibrado con un toque salino que realza su textura suave y carnosa. La elección perfecta para los amantes del marisco. Disfruta de la frescura y autenticidad de estas joyas marinas, con entrega a domicilio en menos de 24 horas, garantizando su calidad y sabor en su mejor momento.",
            'description_2' => "La ostra francesa es un verdadero placer para los amantes del marisco, conocida por su delicado sabor y textura inconfundible. <br>En Rutas del Mar, contamos con las ostras de los mejores cultivadores franceses para que disfrutes de este manjar todo el año. Con su frescura incomparable, la ostra francesa se convierte en una opción excepcional para cualquier ocasión especial o para los paladares más exigentes.",
            'slug' => "ostras-bretaña",
            'origin_general' => "Francia",
            'origin_specific' => "Bretaña",
            'product_type' => "variable",
            'product_species_type' => "oister",
            'price_from' => 10,
            'sell_unit' => "kg",
            'sell_mode' => "per-box",
            'stock' => "50",
            'stock_unit' => "unit",
            'out_of_stock' => false,
            'image' => 'images/product/ostras_product.jpg',
            'featured' => true,

        ]);

        $oisters
        ->setTranslation('name', 'en', 'Oysters')
        ->setTranslation('description_1', 'en', 'Sourced from France. Atlantic Ocean')
        ->setTranslation('description_2', 'en', 'The French oyster is a true delight for seafood lovers, known for its delicate flavor and unmistakable texture. <br>At Rutas del Mar, we source oysters from the finest French farmers so you can enjoy this delicacy all year round. With its unparalleled freshness, the French oyster becomes an exceptional option for any special occasion or for the most discerning palates.')
        ->setTranslation('origin_general', 'en', 'France')
        ->setTranslation('origin_specific', 'en', 'Brittany')
        ->setTranslation('slug', 'en', 'oysters-brittany')
        ->save();

        $oisterProductSizeVariation1 = ProductSizeVariationModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'size_name' => "Talla 1",
            'size_description' => "Talla 1",
            'order' => 1,
        ]);
        
        $oisterProductSizeVariation1
        ->setTranslation('size_name', 'en', 'Size 1')
        ->setTranslation('size_description', 'en', 'Size 1')
        ->save();

        $oisterProductSizeVariation2 = ProductSizeVariationModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'size_name' => "Talla 2",
            'size_description' => "Talla 2",
            'order' => 2,
        ]);
        
        $oisterProductSizeVariation2
        ->setTranslation('size_name', 'en', 'Size 2')
        ->setTranslation('size_description', 'en', 'Size 2')
        ->save();

        $oisterProductSizeVariation3 = ProductSizeVariationModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'size_name' => "Talla 3",
            'size_description' => "Talla 3",
            'order' => 3,
        ]);
        
        $oisterProductSizeVariation3
        ->setTranslation('size_name', 'en', 'Size 3')
        ->setTranslation('size_description', 'en', 'Size 3')
        ->save();
        


        $oisterProductQuantityVariationModel1 = ProductQuantityVariationModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'quantity_name' => "Caja 12 unidades",
            'quantity_description' => "Caja 12 unidades",
            'order' => 1,
        ]);
        
        $oisterProductQuantityVariationModel1
        ->setTranslation('quantity_name', 'en', 'Box 12 units')
        ->setTranslation('quantity_description', 'en', 'Box 12 units')
        ->save();

        $oisterProductQuantityVariationModel2 = ProductQuantityVariationModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'quantity_name' => "Caja 24 unidades",
            'quantity_description' => "Caja 24 unidades",
            'order' => 2,
        ]);
        
        $oisterProductQuantityVariationModel2
        ->setTranslation('quantity_name', 'en', 'Box 24 units')
        ->setTranslation('quantity_description', 'en', 'Box 24 units')
        ->save();

        $oisterProductQuantityVariationModel3 = ProductQuantityVariationModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'quantity_name' => "Caja 36 unidades",
            'quantity_description' => "Caja 36 unidades",
            'order' => 3,
        ]);
        
        $oisterProductQuantityVariationModel3
        ->setTranslation('quantity_name', 'en', 'Box 36 units')
        ->setTranslation('quantity_description', 'en', 'Box 36 units')
        ->save();

        $oisterVariationPrices1 = ProducSizeVariationQuantityVariationPriceModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'product_size_variation_id' => $oisterProductSizeVariation1->id,
            'product_quantity_variation_id' => $oisterProductQuantityVariationModel1->id,
            'sale_price' => 15.6,
            'discounted_price' => null,
            'currency' => "€",
        ]);

        $oisterVariationPrices2 = ProducSizeVariationQuantityVariationPriceModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'product_size_variation_id' => $oisterProductSizeVariation1->id,
            'product_quantity_variation_id' => $oisterProductQuantityVariationModel2->id,
            'sale_price' => 31.2,
            'discounted_price' => null,
            'currency' => "€",
        ]);

        $oisterVariationPrices3 = ProducSizeVariationQuantityVariationPriceModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'product_size_variation_id' => $oisterProductSizeVariation1->id,
            'product_quantity_variation_id' => $oisterProductQuantityVariationModel3->id,
            'sale_price' => 46.8,
            'discounted_price' => null,
            'currency' => "€",
        ]);

        $oisterVariationPrices4 = ProducSizeVariationQuantityVariationPriceModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'product_size_variation_id' => $oisterProductSizeVariation2->id,
            'product_quantity_variation_id' => $oisterProductQuantityVariationModel1->id,
            'sale_price' => 15.6,
            'discounted_price' => null,
            'currency' => "€",
        ]);

        $oisterVariationPrices5 = ProducSizeVariationQuantityVariationPriceModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'product_size_variation_id' => $oisterProductSizeVariation2->id,
            'product_quantity_variation_id' => $oisterProductQuantityVariationModel2->id,
            'sale_price' => 31.2,
            'discounted_price' => null,
            'currency' => "€",
        ]);

        $oisterVariationPrices6 = ProducSizeVariationQuantityVariationPriceModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'product_size_variation_id' => $oisterProductSizeVariation2->id,
            'product_quantity_variation_id' => $oisterProductQuantityVariationModel3->id,
            'sale_price' => 46.8,
            'discounted_price' => null,
            'currency' => "€",
        ]);

        $oisterVariationPrices7 = ProducSizeVariationQuantityVariationPriceModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'product_size_variation_id' => $oisterProductSizeVariation3->id,
            'product_quantity_variation_id' => $oisterProductQuantityVariationModel1->id,
            'sale_price' => 15.6,
            'discounted_price' => null,
            'currency' => "€",
        ]);

        $oisterVariationPrices8 = ProducSizeVariationQuantityVariationPriceModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'product_size_variation_id' => $oisterProductSizeVariation3->id,
            'product_quantity_variation_id' => $oisterProductQuantityVariationModel2->id,
            'sale_price' => 31.2,
            'discounted_price' => null,
            'currency' => "€",
        ]);

        $oisterVariationPrices9 = ProducSizeVariationQuantityVariationPriceModel::create([
            'id' => (string) Str::uuid(),
            'product_id' => $oisters->id,
            'product_size_variation_id' => $oisterProductSizeVariation3->id,
            'product_quantity_variation_id' => $oisterProductQuantityVariationModel3->id,
            'sale_price' => 46.8,
            'discounted_price' => null,
            'currency' => "€",
        ]);


        $grouper = ProductModel::create([

            'id' => (string) Str::uuid(),
            'name' => "Mero",
            'description_1' => "Procedente de España. Oceano Atlántico",
            'description_2' => "El mero es un manjar del mar, apreciado por su carne firme y sabor suave, ideal para los paladares más exigentes. En Rutas del Mar, seleccionamos los mejores ejemplares de mero de las costas españolas, garantizando frescura y calidad en cada pieza. Este pescado versátil es perfecto para una gran variedad de preparaciones culinarias y está disponible durante todo el año para que puedas disfrutar de su inigualable sabor en cualquier momento.",
            'slug' => "mero-islas-canarias",
            'origin_general' => "España",
            'origin_specific' => "Lanzarote",
            'product_type' => "simple",
            'product_species_type' => "grouper",
            'price_from' => 25,
            'sell_unit' => "kg",
            'sell_mode' => "per-kilo",
            'stock' => "50",
            'stock_unit' => "unit",
            'out_of_stock' => true,
            'image' => 'images/product/mero_product.jpg',
            'featured' => true,

        ]);
        
        $grouper
        ->setTranslation('name', 'en', 'Grouper')
        ->setTranslation('description_1', 'en', 'Sourced from Spain. Atlantic Ocean')
        ->setTranslation('description_2', 'en', 'The grouper is a delicacy of the sea, appreciated for its firm flesh and mild flavor, perfect for the most discerning palates. At Rutas del Mar, we select the finest grouper specimens from the Spanish coasts, ensuring freshness and quality in every piece. This versatile fish is ideal for a wide variety of culinary preparations and is available year-round, so you can enjoy its unparalleled flavor at any time.')
        ->setTranslation('origin_general', 'en', 'Spain')
        ->setTranslation('origin_specific', 'en', 'Lanzarote')
        ->setTranslation('slug', 'en', 'grouper-canary-islands')
        ->save();
    }
}
