<div class="md:hidden bg-sky-700 text-white h-28">
    <div class="flex justify-between items-center"> 
        <!-- Logo (on the left) -->
        <div class="text-left mt-2 p-4">
            <a href="/" class="">
                <img src="{{ asset('images/logo/logo_centollo_01.png') }}" alt="logo" width="200" height="78">
            </a>
        </div>

        <!-- Hamburger Menu (on the right) -->
        <div class="text-right mr-4 p-4">
            <!-- Toggle Menu on Click -->
            <button id="hamburgerMenu" class="focus:outline-none">
                <img src="{{ asset('images/icons/hamburguer_menu.png') }}" alt="hamburger menu" width="45" height="78">
            </button>
        </div>
    </div>

    <!-- Hidden Menu (Will be shown when clicking the hamburger) -->
    <div id="mobileMenu" class="hidden space-y-4 text-center bg-sky-700 w-full py-4">
        <a href="/" class="block text-white text-lg hover:underline">{{ trans('components/header.menu-option-1') }}</a>
        <a href="/shop" class="block text-white text-lg hover:underline">{{ trans('components/header.menu-option-2') }}</a>
        <a href="/cart" class="block text-white text-lg hover:underline">{{ trans('components/header.menu-option-3') }}</a>
        <a href="/contact" class="block text-white text-lg hover:underline">{{ trans('components/header.menu-option-4') }}</a>
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