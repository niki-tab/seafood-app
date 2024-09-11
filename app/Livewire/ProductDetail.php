<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProductModel;

class ProductDetail extends Component
{
    public $product;

    public function mount($productId)
    {
        $this->product = ProductModel::findOrFail($productId);
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
