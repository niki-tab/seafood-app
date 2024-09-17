<div class="hidden md:grid bg-sky-700 text-white p-4 mt-4">
    <div class="container mx-auto text-center">
        <div class="grid grid-cols-10 gap-4 mt-8 mb-8"> 
            <!-- Column 1 -->
            <div class="col-span-4 text-center">
                <img src="{{ asset("images/logo/logo_centollo_02.png") }}" alt="logo" width="170" height="78" class="mx-auto block"></img>
            </div>

            <!-- Column 2 -->
            <div class="col-span-2 text-left">
                <h4 class="font-bold text-lg mb-2">Sobre Nosotros</h4>
                <a href="/quienes-somos" class="block hover:underline text-sm">¿Quienes somos?</a>
            </div>

            <!-- Column 3 -->
            <div class="col-span-2 text-left">
                <h4 class="font-bold text-lg mb-2">Más información</h4>
                <a href="/contacto" class="block hover:underline text-sm">Escríbenos</a>
            </div>

            <!-- Column 4 -->
            <div class="col-span-2 text-left">
                <h4 class="font-bold text-lg mb-2">Contacto</h4>
                <a href="tel:+34606986218" class="block hover:underline text-sm">+34 606986218</a>
                <a href="mailto:nicolas.tabares.wiede@gmail.com" class="block hover:underline text-sm">nicolas.tabares.wiede@gmail.com</a>
            </div>
        </div>

        <p class="text-xs">&copy; {{ date('Y') }} Rutas Del Mar. All rights reserved.</p>
    </div>
</div>