<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class Cart extends Component
{
    public $cartItems = [];
    public $totalPrice = 0;

    public function mount()
    {
        $this->cartItems = Session::get('cart', []);
        $this->calculateTotal();
    }

    public function removeItem($productId)
    {
        $this->cartItems = array_filter($this->cartItems, function($item) use ($productId) {
            return $item['id'] !== $productId;
        });

        Session::put('cart', $this->cartItems);
        $this->calculateTotal();
    }

    public function calculateTotal()
    {
        $this->totalPrice = array_reduce($this->cartItems, function($total, $item) {
            return $total + ($item['price'] * $item['quantity']);
        }, 0);
    }

    public function render()
    {
        //return view('livewire.cart');
        return view('livewire.cart');
    }
}