<div class="container mx-auto px-4 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
        
        <div class="p-6">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $product->name }}</h1>
            <p class="text-gray-600 mb-4">{{ $product->description_1 }}</p>
            
            <div class="flex items-center justify-between mb-6">
                <span class="text-2xl font-bold text-gray-900">${{ number_format($product->price, 2) }}</span>
                <a href="{{ route('shop') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">{{ __('Back to Shop') }}</a>
            </div>
        </div>
    </div>
</div>