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

    public $quantityOptions;

    public $specificQuantity = 1;
    public $selectedQuantity;

    public $selectedQuantityId;
    public $specificPrice = 5;
    public $lang;

    public $test;

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

        $producSizeVariationQuantityVariationPriceModel = ProducSizeVariationQuantityVariationPriceModel::where(
            [
                ["product_size_variation_id", $defaultSizeVariation->id],
            ]
        )->with('productQuantity') // Eager load productQuantity relation
        ->get()
        ->sortBy('productQuantity.order') 
        ->map(function ($item) {
            return $item->productQuantity; 
        })
        ->values();

        /*$this->test = [
            ['id' => 1, 'quantity_name' => 'Small', 'order' => 1],
            ['id' => 2, 'quantity_name' => 'Medium', 'order' => 2],
            ['id' => 3, 'quantity_name' => 'Large', 'order' => 3],
        ];*/

        $productQuantityVariationModel = ProductQuantityVariationModel::where("product_id", $productId)->first();
        
        if($productQuantityVariationModel){

            foreach ($producSizeVariationQuantityVariationPriceModel as $producSizeVariationQuantityVariationPriceModelIndividual){
                
                $this->test[] = [
                    'id' => $productQuantityVariationModel->id,
                    'quantity_name' => $productQuantityVariationModel->quantity_name, // Append a random number to the quantity name
                    'order' => $productQuantityVariationModel->order, // Assuming the order corresponds to the ID
                ];

            }

        }else{
            $this->test = null;
        }
        
    }

    public function updateSelectedSize($value)
    {   

        /*$this->test = [
            ['id' => 1, 'quantity_name' => 'Smal2l'.rand(1,10), 'order' => 1],
            ['id' => 2, 'quantity_name' => 'Medium2'.rand(1,10), 'order' => 2],
            ['id' => 3, 'quantity_name' => 'Large2'.rand(1,10), 'order' => 3],
            ['id' => 4, 'quantity_name' => 'Largexxl2'.rand(1,10), 'order' => 4],
        ];*/
        //$this->test[] = ['id' => 4, 'quantity_name' => 'Largexxl2'.rand(1,10), 'order' => 4];

        //$this->test = ProductQuantityVariationModel::take(2)->get();
        //dd($this->test[])
        $this->test = array();

        $producSizeVariationQuantityVariationPriceModel = ProducSizeVariationQuantityVariationPriceModel::where(
            [
                ["product_size_variation_id", $value],
            ]
        )->get();
        //dd($producSizeVariationQuantityVariationPriceModel->toArray());
        foreach ($producSizeVariationQuantityVariationPriceModel as $producSizeVariationQuantityVariationPriceModelIndividual){
            
            $productQuantityVariationModel = ProductQuantityVariationModel::where("id", $producSizeVariationQuantityVariationPriceModelIndividual->product_quantity_variation_id)->first();
            //$quantityOptions[$productQuantityVariationModel->order] = $productQuantityVariationModel->id;

            if ($productQuantityVariationModel) {

                $this->test[] = [
                    'id' => $productQuantityVariationModel->id,
                    'quantity_name' => $productQuantityVariationModel->quantity_name, // Append a random number to the quantity name
                    'order' => $productQuantityVariationModel->order, // Assuming the order corresponds to the ID
                ];

            }

        }
        $this->test = collect($this->test)->sortBy('order')->values()->all();
        
        $producSizeVariationQuantityVariationPriceModel = ProducSizeVariationQuantityVariationPriceModel::where(
            [
                ["product_size_variation_id", $this->selectedSize],
                ["product_quantity_variation_id", $this->test[0]["id"]],

            ]
        )->first();

        if($producSizeVariationQuantityVariationPriceModel){

            $this->specificPrice = $producSizeVariationQuantityVariationPriceModel->sale_price;
            $this->selectedQuantity = $producSizeVariationQuantityVariationPriceModel->product_quantity_variation_id;
        }
    }

    public function updateSelectedQuanitity($value)
    {   
        //dd($this->test);
        $producSizeVariationQuantityVariationPriceModel = ProducSizeVariationQuantityVariationPriceModel::where(
            [
                ["product_size_variation_id", $this->selectedSize],
                ["product_quantity_variation_id", $value],

            ]
        )->first();

        if($producSizeVariationQuantityVariationPriceModel){
            $this->specificPrice = $producSizeVariationQuantityVariationPriceModel->sale_price;
        }

        $this->selectedQuantity = $value;

        
    }

    

    public function render()
    {
        return view('livewire.product-detail');
    }
}
