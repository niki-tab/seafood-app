@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-sky-700 text-white overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero-background.jpg') }}" alt="Fresh Seafood" class="w-full h-full object-cover opacity-50">
    </div>
    <div class="relative z-10 container mx-auto px-6 py-16 flex flex-col items-center text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">{{ trans('pages/home.hero_title') }}</h1>
        <p class="text-lg md:text-2xl mb-8">{{ trans('pages/home.hero_subtitle') }}</p>
        <a href="{{ url('/shop') }}" class="bg-white text-sky-700 py-3 px-6 rounded-lg text-lg font-semibold hover:bg-gray-200">{{ trans('pages/home.shop_now') }}</a>
    </div>
</section>

<!-- About Us Section -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">{{ trans('pages/home.about_title') }}</h2>
        <p class="text-lg mb-8">{{ trans('pages/home.about_description') }}</p>
        <a href="{{ url('/contact') }}" class="bg-sky-700 text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-sky-600">{{ trans('pages/home.contact_us') }}</a>
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
                    <p class="text-gray-600 mb-4">{{ $product->description }}</p>
                    <span class="text-lg font-bold">{{ $product->price }}</span>
                    <a href="{{ route('product.show', $product->id) }}" class="block mt-4 bg-sky-700 text-white py-2 px-4 rounded-lg text-center hover:bg-sky-600">{{ trans('pages/home.view_product') }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
