<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;
class ProductSizeVariationModel extends Model
{

    use HasFactory, HasTranslations;

    protected $table = 'product_size_variations';

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'product_id',
        'size_name',
        'size_description',
        'order',
    ];


    // Define the cast attributes
    protected $casts = [
        'id' => 'string',
        'product_id' => 'string',
        'size_name' => 'string',
        'size_description' => 'string',
        'order' => 'integer',
    ];

    public $translatable = ['size_name', 'size_description'];
}
