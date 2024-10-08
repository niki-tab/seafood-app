<div class="max-w-lg mx-auto p-4">
    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">{{ session('message') }}</strong>
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="mb-4">
            <label for="name" class="block text-gray-700">{{ trans('components/contact-form.label-name') }}</label>
            <input type="text" id="name" wire:model="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">{{ trans('components/contact-form.label-email') }}</label>
            <input type="email" id="email" wire:model="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-700">{{ trans('components/contact-form.label-message') }}</label>
            <textarea id="message" wire:model="message" class="w-full px-4 py-2 border rounded-lg focus:outline-none" rows="5"></textarea>
            @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-button-color-1 text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-sky-800 hover:text-button-color-1-hover">
                {{ trans('Submit') }}
            </button>
        </div>
    </form>
</div>