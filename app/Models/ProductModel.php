<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'description',
        'origin' => 'string',
        'product_type',
        'product_species_type',
        'price',
        'sell_unit',
        'stock',
        'stock_unit',
        'image',
        'featured',
    ];


    // Define the cast attributes
    protected $casts = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'origin' => 'string',
        'product_type' => 'string',
        'product_species_type' => 'string',
        'price' => 'float',
        'sell_unit' => 'string',
        'stock' => 'string',
        'stock_unit' => 'string',
        'image' => 'string',
        'featured' => 'boolean',
    ];
}
