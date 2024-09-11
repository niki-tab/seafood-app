<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Product Image -->
        <div>
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-auto object-cover rounded-lg shadow-lg">
        </div>

        <!-- Product Information -->
        <div class="flex flex-col justify-between">
            <div>
                <h1 class="text-4xl font-bold text-gray-800">{{ $product->name }}</h1>

                <p class="text-gray-600 mt-4">{{ $product->description_1 }}</p>

                <div class="text-lg font-semibold text-gray-800 mt-6">
                {{ trans('pages/product-detail.label-price') }}: ${{ number_format($product->price, 2) }}
                </div>
            </div>

            <!-- Quantity Selector and Add to Cart Button on the Same Row -->
            <div class="flex items-center justify-between mt-8">
                <div class="flex items-center space-x-4">
                    <label for="quantity" class="text-gray-700">{{ trans('pages/product-detail.label-quantity') }}:</label>
                    <input type="number" id="quantity" wire:model="quantity" class="border border-gray-300 rounded-lg px-4 py-2 w-24" min="1" value="1">
                </div>

                <button wire:click="addToCart" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">
                    {{ trans('pages/product-detail.button-add-to-cart') }}
                </button>
            </div>
        </div>
    </div>
</div>