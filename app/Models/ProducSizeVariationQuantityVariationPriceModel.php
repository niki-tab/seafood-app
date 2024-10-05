<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProducSizeVariationQuantityVariationPriceModel extends Model
{

    use HasFactory;

    protected $table = 'product_size_variation_quantity_variation_prices';

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'product_id',
        'product_size_variation_id',
        'product_quantity_variation_id',
        'shop_price',
        'shop_discounted_price',
        'sale_price',
        'discounted_price',
        'currency',
    ];

    // Define the cast attributes
    protected $casts = [
        'id' => 'string',
        'product_id' => 'string',
        'product_size_variation_id' => 'string',
        'product_quantity_variation_id' => 'string',
        'shop_price' => 'float',
        'shop_discounted_price' => 'float',
        'sale_price' => 'float',
        'discounted_price' => 'float',
        'currency' => 'string',
    ];

}
