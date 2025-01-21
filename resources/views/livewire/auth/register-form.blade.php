<div class="max-w-md mx-auto mt-10">
    <form wire:submit.prevent="register" class="bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-6">Register</h2>

        <!-- Name Field -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="string" id="name" wire:model.defer="name" 
                   class="w-full mt-1 px-3 py-2 border rounded shadow-sm focus:ring focus:ring-blue-300">
            @error('name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <!-- Email Field -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" wire:model.defer="email" 
                   class="w-full mt-1 px-3 py-2 border rounded shadow-sm focus:ring focus:ring-blue-300">
            @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <!-- Password Field -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" id="password" wire:model.defer="password" 
                   class="w-full mt-1 px-3 py-2 border rounded shadow-sm focus:ring focus:ring-blue-300">
            @error('password') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <!-- Repeat Password Field -->
        <div class="mb-4">
            <label for="passwordConfirmation" class="block text-gray-700">Confirm Password</label>
            <input type="password" id="passwordConfirmation" wire:model.defer="passwordConfirmation" 
                   class="w-full mt-1 px-3 py-2 border rounded shadow-sm focus:ring focus:ring-blue-300">
            @error('passwordConfirmation') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 rounded shadow hover:bg-blue-700">
            Register
        </button>
        @if ($errors->has('email'))
            <div class="mt-4 text-sm text-red-600">
                {{ $errors->first('email') }}
            </div>
        @endif
    </form>
</div>
