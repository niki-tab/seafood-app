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
        'description',
        'origin' => 'string',
        'product_type',
        'product_species_type',
        'price',
        'sell_unit',
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
        'description' => 'string',
        'origin' => 'string',
        'product_type' => 'string',
        'product_species_type' => 'string',
        'price' => 'float',
        'sell_unit' => 'string',
        'stock' => 'string',
        'stock_unit' => 'string',
        'out_of_stock' => 'boolean',
        'image' => 'string',
        'featured' => 'boolean',
    ];

    public $translatable = ['name', 'description', 'slug'];
}
