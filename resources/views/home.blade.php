@extends('layouts.app')
@metadata
@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden">
    <div class="relative z-10 container mx-auto px-6 py-16 flex flex-col items-center text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">{{ trans('pages/home.hero_title') }}</h1>
        <h2 class="text-lg md:text-2xl mb-8">{{ trans('pages/home.hero_subtitle') }}</h2>
        <a href="{{ route('shop.show', ['locale' => app()->getLocale()]) }}" class="bg-sky-700 text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-yellow-300 hover:text-sky-700">{{ trans('pages/home.shop_now') }}</a>
    </div>
</section>

<!-- About Us Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-3xl font-bold mb-4">{{ trans('pages/home.about_title') }}</h1>
        <h2 class="text-lg mb-8">{{ trans('pages/home.about_description_1') }}</h2>
        <h2 class="text-lg mb-8">{{ trans('pages/home.about_description_2') }}</h2>
        <a href="{{ route('contact.send', ['locale' => app()->getLocale()]) }}" class="bg-sky-700 text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-yellow-300 hover:text-sky-700">{{ trans('pages/home.contact_us') }}</a>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-16">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-8">{{ trans('pages/home.featured_products') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProducts as $product)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ $product->name }}</h3>
                    <div class="text-left">
                    <p class="text-l text-black mb-2"><strong>{{ trans('pages/home.label-product-origin') }}  </strong>{{ $product->origin }}</p>
                    <span class="text-l text-black mb-4"><strong>{{ trans('pages/home.label-product-fresh-stock') }} </strong>{{ $product->price }}</span>
                    <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'productId' => $product->id]) }}" class="block mt-4 bg-sky-700 text-white py-2 px-4 rounded-lg text-center hover:bg-yellow-300 hover:text-sky-700">{{ trans('pages/home.view_product') }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
