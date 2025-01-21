<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">{{trans('pages/products.title-page') }}</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $product->name }}</h2>
                    <p class="text-gray-600 mb-4">{{ Str::limit($product->description_1, 100) }}</p>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-lg font-bold text-gray-900">${{ number_format($product->price, 2) }}</span>
                        <a href="{{ route(app()->getLocale() === 'es' ? 'product.show.es' : 'product.show.en', ['locale' => app()->getLocale(), 'productSlug' => $product->slug]) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">{{ __('View Product') }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>