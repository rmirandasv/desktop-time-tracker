<div class="h-screen bg-gray-100 dark:bg-gray-900 flex flex-col items-center justify-center">
    <div class="p-4 bg-white flex flex-col border border-gray-200 shadow rounded w-1/3 mx-auto">
        <h1 class="text-2xl text-center mb-4">{{ __('Register') }}</h1>
        <form wire:submit.prevent="register">
            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Name') }}</label>
                <input wire:model="name" type="text" name="name" id="name" class="block w-full p-2 border border-gray-300 rounded focus:border-blue-500 focus:outline-none" required autofocus>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Email') }}</label>
                <input wire:model="email" type="email" name="email" id="email" class="block w-full p-2 border border-gray-300 rounded focus:border-blue-500 focus:outline-none" required>
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Password') }}</label>
                <input wire:model="password" type="password" name="password" id="password" class="block w-full p-2 border border-gray-300 rounded focus:border-blue-500 focus:outline-none" required>
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Confirm Password') }}</label>
                <input wire:model="password_confirmation" type="password" name="password_confirmation" id="password_confirmation" class="block w-full p-2 border border-gray-300 rounded focus:border-blue-500 focus:outline-none" required>
                @error('password_confirmation')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full px-4 py-2 text-sm text-white bg-blue-500 rounded hover:bg-blue-400 focus:bg-blue-400 focus:outline-none">{{ __('Register') }}</button>
            </div>
            <div class="flex justify-center">
                <a wire:navigate href="{{ route('login') }}" class="mb-4 text-sm text-center text-blue-500 hover:text-blue-400">{{ __('Login') }}</a>
            </div>
        </form>
    </div>
</div>
