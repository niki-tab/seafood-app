<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\ProductModel;

class Shop extends Component
{
    public $products;

    public function mount()
    {
        $this->products = ProductModel::all();
    }

    public function render()
    {
        return view('livewire.shop')->extends('layouts.app');
    }
}
