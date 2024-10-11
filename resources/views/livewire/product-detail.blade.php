<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-0 mb-20">
        <!-- Product Image -->
        <div class="flex flex-col items-center md:items-start justify-center md:pt-0">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="mx-auto w-3/4 h-4/6 object-cover rounded-lg shadow-lg">

            <!-- Carousel Below the Main Image -->
            <div class="w-3/4 max-w-3xl mt-8 mx-auto">
                <!-- Carousel -->
                <div class="flex justify-between space-x-4" style="height: calc(100% / 1;">
                    <!-- Image 1 -->
                    <div class="flex-1">
                        <img src="{{ asset($product->image) }}" alt="Image 1" class="w-full h-full object-cover shadow-lg">
                    </div>
                    <!-- Vertical Line -->
                    <div class="w-1 bg-gray-300"></div>
                    <!-- Image 2 -->
                    <div class="flex-1">
                        <img src="{{ asset($product->image) }}" alt="Image 2" class="w-full h-full object-cover shadow-lg">
                    </div>
                    <!-- Vertical Line -->
                    <div class="w-1 bg-gray-300"></div>
                    <!-- Image 3 -->
                    <div class="flex-1">
                        <img src="{{ asset($product->image) }}" alt="Image 3" class="w-full h-full object-cover shadow-lg">
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Information -->
        <div class="flex flex-col justify-between px-4 md:px-0 mt-2">
            <div>
                @if($product->out_of_stock == false)
                    <p class="text-l text-white my-6 bg-green-600 rounded px-2 inline-block">{{ trans('pages/home.label-product-stock-available') }}</p>
                @else
                    <p class="text-l text-white my-6 bg-red-700 rounded px-2 inline-block">{{ trans('pages/home.label-product-no-stock-available') }}</p>
                @endif
                <h1 class="text-4xl font-bold text-gray-800">{{ $product->name }}</h1>

                <p class="text-gray-600 mt-4 w-4/5">{{ $product->description_1 }}</p>

                <div class="text-lg font-semibold text-gray-800 mt-6">
                {{ trans('pages/product-detail.label-price') }}: {{ number_format($specificPrice, 2) }}€
                </div>
            </div>

            <!-- Quantity Selector and Add to Cart Button on the Same Row -->
            <div class="flex items-center justify-between mt-8 space-x-4">
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
                        <div class="flex flex-col mt-4">
                            <label for="quantity" class="text-gray-700">{{ trans('pages/product-detail.label-select-product-quantity') }}:</label>
                            <select id="quantity" wire:model="selectedQuantity" wire:change="updateSelectedQuanitity($event.target.value)" class="border border-gray-300 rounded-lg px-4 py-2 w-48">
                                @foreach($test as $testIndividual)
                                    <option value="{{ $testIndividual["id"] }}" >{{$testIndividual["quantity_name"]}}</option>
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
                    <div class="flex items-center space-x-4 mt-8">
                        <!-- Quantity Input Field -->
                        <div class="flex items-center space-x-2">
                            <input type="number" id="quantity" wire:model="specificQuantity" class="border border-gray-300 rounded-lg px-4 py-2 w-20 text-center" min="1" value="1">
                        </div>

                        <!-- Add to Cart Button -->
                        <button wire:click="addToCart" 
                                class="bg-button-color-1 text-white px-6 py-3 rounded-lg hover:bg-sky-800 hover:text-button-color-1-hover 
                                {{ $product->out_of_stock ? 'opacity-50 cursor-not-allowed' : '' }}" 
                                {{ $product->out_of_stock ? 'disabled' : '' }}>
                            {{ trans('pages/product-detail.button-add-to-cart') }}
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>