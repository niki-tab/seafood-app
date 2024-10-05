<?php

namespace App\Livewire;

use App\Models\ProducSizeVariationQuantityVariationPriceModel;
use Livewire\Component;
use App\Models\ProductModel;
use App\Models\ProductSizeVariationModel;
use App\Models\ProductQuantityVariationModel;

class ProductDetail extends Component
{
    public $product;

    public $productSizeVariations;

    public $productQuantityVariations;

    public $productSizeQuantityVariationsPrice;
    
    public $selectedSize;

    public $selectedQuantity;
    public $specificPrice = 5;
    public $lang;

    public function mount($productSlug)
    {   
        $this->lang = app()->getLocale();

        $this->product = ProductModel::where("slug->".$this->lang, $productSlug)->first();
        
        if($this->product){

            $productId = $this->product->id;
            $this->productSizeVariations = ProductSizeVariationModel::where("product_id", $productId)->with('producQuantityVariations')->get();

            $defaultSizeVariation = $this->productSizeVariations->firstWhere('order', 1);
            
            if($defaultSizeVariation){
                $this->selectedSize = $defaultSizeVariation->id;
            }
        }
        
        
        
    }

    public function updateSelectedSize($value)
    {   
        $this->selectedQuantity = $this->productSizeVariations->firstWhere('id', $value);
        
    }

    public function updateSelectedQuanitity($value)
    {   
        
        $producSizeVariationQuantityVariationPriceModel = ProducSizeVariationQuantityVariationPriceModel::where(
            [
                ["product_size_variation_id", $this->selectedSize],
                ["product_quantity_variation_id", $value],

            ]
        )->first();

        if($producSizeVariationQuantityVariationPriceModel){
            $this->specificPrice = $producSizeVariationQuantityVariationPriceModel->sale_price;
        }
        
    }

    

    public function render()
    {
        return view('livewire.product-detail');
    }
}
