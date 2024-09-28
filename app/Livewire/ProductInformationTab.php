<?php

namespace App\Livewire;

use Livewire\Component;

class ProductInformationTab extends Component
{   
    public $activeTab = 'precio';

    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }
    public function render()
    {
        return view('livewire.product-information-tab');
    }
}
