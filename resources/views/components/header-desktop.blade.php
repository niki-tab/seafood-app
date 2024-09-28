<div class="hidden md:grid fixed top-0 left-0 w-full bg-sky-700 text-white p-4 px-12 z-10">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/{{app()->getLocale()}}" class=""><img src="{{ asset("images/logo/logo_centollo_01.png") }}" alt="logo" width="180" height="78"></img></a>
        
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('home.show', ['locale' => app()->getLocale()]) }}" class="{{ request()->routeIs('home.show') ? 'font-bold text-yellow-300' : 'text-white' }} hover:underline">{{ trans('components/header.menu-option-1') }}</a></li>
                <li><a href="{{ route(app()->getLocale() === 'es' ? 'shop.show.es' : 'shop.show.en', ['locale' => app()->getLocale()]) }}" class="{{ request()->routeIs('shop.show.es') || request()->routeIs('shop.show.en') ? 'font-bold text-yellow-300' : 'text-white' }} hover:underline">{{ trans('components/header.menu-option-2') }}</a></li>
                <li><a href="{{ route(app()->getLocale() === 'es' ? 'cart.show.es' : 'cart.show.en', ['locale' => app()->getLocale()]) }}" class="{{ request()->routeIs('cart.show.es') || request()->routeIs('cart.show.en') ? 'font-bold text-yellow-300' : 'text-white' }} hover:underline">{{ trans('components/header.menu-option-3') }}</a></li>
                <li><a href="{{ route(app()->getLocale() === 'es' ? 'contact.send.es' : 'contact.send.en', ['locale' => app()->getLocale()]) }}" class="{{ request()->routeIs('contact.send.es') || request()->routeIs('contact.send.en') ? 'font-bold text-yellow-300' : 'text-white' }} hover:underline">{{ trans('components/header.menu-option-4') }}</a></li>
                
            </ul>
        </nav>
    </div>
</div>
