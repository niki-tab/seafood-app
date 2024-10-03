<?php

namespace App\Livewire;

use App\Models\ProductSizeVariationModel;
use Livewire\Component;
use App\Models\ProductModel;

class ProductDetail extends Component
{
    public $product;

    public $productSizeVariations;
    

    public $lang;

    public function mount($productSlug)
    {   
        $this->lang = app()->getLocale();

        $this->product = ProductModel::where("slug->".$this->lang, $productSlug)->first();
        
        if($this->product){

            $productId = $this->product->id;
            $this->productSizeVariations = ProductSizeVariationModel::where("product_id", $productId)->get();

        }
        
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
