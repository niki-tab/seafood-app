<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;
class ProductModel extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'products';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'description_1',
        'description_2',
        'origin_general',
        'origin_specific',
        'product_type',
        'species_type',
        'food_type',
        'price_from',
        'sell_unit',
        'sell_mode',
        'stock',
        'stock_unit',
        'out_of_stock',
        'image',
        'featured',
    ];


    // Define the cast attributes
    protected $casts = [
        'id' => 'string',
        'name' => 'string',
        'slug' => 'string',
        'description_1' => 'string',
        'description_2' => 'string',
        'origin_general' => 'string',
        'origin_specific' => 'string',
        'product_type' => 'string',
        'species_type' => 'string',
        'food_type' => 'string',
        'price_from' => 'float',
        'sell_unit' => 'string',
        'sell_mode' => 'string',
        'stock' => 'string',
        'stock_unit' => 'string',
        'out_of_stock' => 'boolean',
        'image' => 'string',
        'featured' => 'boolean',
        'meta_title' => 'string',
        'meta_description' => 'string',
    ];

    public $translatable = ['name', 'description_1', 'description_2', 'origin_general', 'origin_specific', 'slug', 'meta_title', 'meta_description', 'food_type'];
}
