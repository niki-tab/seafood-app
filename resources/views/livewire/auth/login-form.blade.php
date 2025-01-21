<div class="max-w-md mx-auto mt-10">
    <form wire:submit.prevent="login" class="bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-6">Login</h2>

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

        <!-- Remember Me Checkbox -->
        <div class="mb-4 flex items-center">
            <input type="checkbox" id="remember" wire:model="remember" class="mr-2">
            <label for="remember" class="text-gray-700">Remember Me</label>
        </div>

        <!-- Submit Button -->
        <button type="submit" 
                class="w-full bg-blue-600 text-white py-2 rounded shadow hover:bg-blue-700">
            Login
        </button>

        <div class="my-4 text-center">
            <p>
                Don't have an account? <a href="/en/register" class="text-blue-600 hover:underline">Register</a>
            </p>
        </div>


        @if ($errors->has('email'))
            <div class="mt-4 text-sm text-red-600">
                {{ $errors->first('email') }}
            </div>
        @endif
    </form>
</div>
