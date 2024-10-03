<?php

namespace App\Livewire;

use Livewire\Component;

class ProductInformationTab extends Component
{   
    public $activeTab = 'recetas';

    public function setTab($tab)
    {   
        //dd('Tab set to: ' . $tab); // Just for testing
        $this->activeTab = $tab;
    }
    public function render()
    {
        return view('livewire.product-information-tab')->extends('layouts.app');
    }
}
