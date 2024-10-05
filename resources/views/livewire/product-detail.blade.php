<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
        <!-- Product Image -->
        <div class="">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="m-auto w-3/4 h-auto object-cover rounded-lg shadow-lg">
        </div>

        <!-- Product Information -->
        <div class="flex flex-col justify-between">
            <div>
                <h1 class="text-4xl font-bold text-gray-800">{{ $product->name }}</h1>

                <p class="text-gray-600 mt-4">{{ $product->description_1 }}</p>

                <div class="text-lg font-semibold text-gray-800 mt-6">
                {{ trans('pages/product-detail.label-price') }}: {{ number_format($specificPrice, 2) }}€
                </div>
            </div>

            <!-- Quantity Selector and Add to Cart Button on the Same Row -->
            <div class="flex items-center justify-between mt-8">
                <div class="flex flex-col space-y-4"> <!-- Stacking the label, input, and button vertically -->

                    <!-- Size Variations Select Field -->
                    @if(!empty($productSizeVariations) && count($productSizeVariations) > 0)
                        <div class="flex flex-col">
                            <label for="size" class="text-gray-700">{{ trans('pages/product-detail.label-select-product-size') }}:</label>
                            <select id="size"  wire:change="updateSelectedSize($event.target.value)" wire:model="selectedSize" class="border border-gray-300 rounded-lg px-4 py-2 w-48">
                                @foreach($productSizeVariations->sortBy('order') as $Sizevariation)
                                    <option value="{{ $Sizevariation->id }}">{{ $Sizevariation->size_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    @if($selectedSize)
                        <!-- Size Variations Select Field -->
                        @if(!empty($productSizeVariations) && count($productSizeVariations) > 0)
                        @php
                            $selectedQuantity = $productSizeVariations->firstWhere('id', $selectedSize);
                        @endphp
                        <div class="flex flex-col mt-4">
                            <label for="quantity" class="text-gray-700">{{ trans('pages/product-detail.label-select-product-quantity') }}:</label>
                            <select id="quantity" wire:model="selectedQuantity" wire:change="updateSelectedQuanitity($event.target.value)" class="border border-gray-300 rounded-lg px-4 py-2 w-48">
                                @foreach($selectedQuantity->producQuantityVariations->sortBy('order') as $quantityVariation)
                                    <option value="{{ $quantityVariation->id }}">{{ $quantityVariation->quantity_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @else
                            <div class="flex flex-col">
                                <label for="quantity" class="text-gray-700">{{ trans('pages/product-detail.label-quantity') }}:</label>
                                <input type="number" id="quantity" wire:model="quantity" class="border border-gray-300 rounded-lg px-4 py-2 w-24" min="1" value="1">
                            </div>
                        @endif
                    @endif
                    <!-- Add to Cart Button -->
                    <div class="flex flex-col items-center">
                        <button wire:click="addToCart" class="bg-button-color-1 text-white px-6 py-3 rounded-lg hover:bg-sky-800 hover:text-button-color-1-hover">
                            {{ trans('pages/product-detail.button-add-to-cart') }}
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>