<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProductModel;

class ProductDetail extends Component
{
    public $product;

    public $lang;

    public function mount($productSlug)
    {   
        $this->lang = app()->getLocale();

        $this->product = ProductModel::where("slug->".$this->lang, $productSlug)->first();
        
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
