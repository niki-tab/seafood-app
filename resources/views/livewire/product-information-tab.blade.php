<div class="flex justify-center mt-4">
    <div class="bg-gray-100 rounded-lg shadow-md w-3/4 text-center">
        <ul class="flex items-center">
            <li class="w-1/3 pt-4">
                <a href="#" wire:click.prevent="setTab('precio')"
                   class="inline-block px-4 py-2 font-semibold rounded-lg 
                   {{ $activeTab === 'precio' ? 'bg-white text-blue-500' : 'text-gray-500 hover:text-white hover:bg-blue-500' }}">
                    Precio
                </a>
            </li>
            <li class="w-1/3 pt-4">
                <a href="#" wire:click.prevent="setTab('recetas')"
                   class="inline-block px-4 py-2 font-semibold rounded-lg 
                   {{ $activeTab === 'recetas' ? 'bg-white text-blue-500' : 'text-gray-500 hover:text-white hover:bg-blue-500' }}">
                    Recetas
                </a>
            </li>
            <li class="w-1/3 pt-4">
                <a href="#" wire:click.prevent="setTab('propiedades')"
                   class="inline-block px-4 py-2 font-semibold rounded-lg 
                   {{ $activeTab === 'propiedades' ? 'bg-white text-blue-500' : 'text-gray-500 hover:text-white hover:bg-blue-500' }}">
                    Propiedades
                </a>
            </li>
        </ul>
        <div class="h-32 mt-6">
        @if($activeTab === 'precio')
            <p>Esta es la información sobre el precio del producto1.</p>
        @elseif($activeTab === 'recetas')
            <p>Aquí se encuentran algunas recetas para el producto.2</p>
        @elseif($activeTab === 'propiedades')
            <p>Propiedades nutricionales y beneficios del producto3.</p>
        @endif
        </div>
    </div>
    
</div>
