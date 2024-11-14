<div class="md:hidden bg-button-color-1 text-white h-28 fixed top-0 w-full">
    <div class="flex justify-between items-center"> 
        <!-- Logo (on the left) -->
        <div class="text-left mt-2 p-4">
            <a href="/{{app()->getLocale()}}" class="">
                <img src="{{ asset('images/logo/logo_new_02.png') }}" alt="logo" width="200" height="78">
            </a>
        </div>

        <!-- Hamburger Menu (on the right) -->
        <div class="text-right mr-4 p-4">
            <!-- Toggle Menu on Click -->
            <button id="hamburgerMenu" class="focus:outline-none">
                <img src="{{ asset('images/icons/hamburguer_menu_2.png') }}" alt="hamburger menu" width="45" height="78">
            </button>
        </div>
    </div>

    <!-- Hidden Menu (Will be shown when clicking the hamburger) -->
    <div id="mobileMenu" class="hidden space-y-4 text-center bg-button-color-1 w-full py-4">
        <a href="{{ route('home.show', ['locale' => app()->getLocale()]) }}" class="{{ request()->routeIs('home.show') ? 'font-bold text-button-color-1-hover' : 'text-white' }} block text-lg hover:underline pb-2">{{ trans('components/header.menu-option-1') }}</a>
        <a href="{{ route(app()->getLocale() === 'es' ? 'shop.show.es' : 'shop.show.en' , ['locale' => app()->getLocale()]) }}" class="{{ request()->routeIs('shop.show.es') || request()->routeIs('shop.show.en') || request()->routeIs('product.show.es') || request()->routeIs('product.show.en') ? 'font-bold text-button-color-1-hover' : 'text-white' }} block text-lg hover:underline pb-2">{{ trans('components/header.menu-option-2') }}</a>
        <a href="{{ route(app()->getLocale() === 'es' ? 'cart.show.es' : 'cart.show.en', ['locale' => app()->getLocale()]) }}" class="{{ request()->routeIs('cart.show.es') || request()->routeIs('cart.show.en') ? 'font-bold text-button-color-1-hover' : 'text-white' }} block text-lg hover:underline pb-2">{{ trans('components/header.menu-option-3') }}</a>
        <a href="{{ route(app()->getLocale() === 'es' ? 'contact.send.es' : 'contact.send.en', ['locale' => app()->getLocale()]) }}" class="{{ request()->routeIs('contact.send.es') || request()->routeIs('contact.send.en') ? 'font-bold text-button-color-1-hover' : 'text-white' }} block text-lg hover:underline pb-2">{{ trans('components/header.menu-option-4') }}</a>
    </div>
</div>
<script>
    // JavaScript to toggle the menu
    document.getElementById('hamburgerMenu').addEventListener('click', function() {
        var menu = document.getElementById('mobileMenu');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    });
</script>