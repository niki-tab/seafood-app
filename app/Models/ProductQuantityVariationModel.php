<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;
class ProductQuantityVariationModel extends Model
{

    use HasFactory, HasTranslations;

    protected $table = 'product_quantity_variations';

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'product_id',
        'quantity_name',
        'quantity_description',
        'order',
    ];


    // Define the cast attributes
    protected $casts = [
        'id' => 'string',
        'product_id' => 'string',
        'quantity_name' => 'string',
        'quantity_description' => 'string',
        'order' => 'integer',
    ];

    public $translatable = ['quantity_name', 'quantity_description'];

    public function producSizeVariations()
    {
        return $this->belongsToMany(ProductSizeVariationModel::class, "product_size_variation_quantity_variation_prices", "product_quantity_variation_id", "product_size_variation_id");
    }
}
