<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProductModel;

class ProductDetail extends Component
{
    public $product;

    public function mount($id)
    {
        $this->product = ProductModel::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.product-detail')->extends('layouts.app');
    }
}
