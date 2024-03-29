<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Ном')"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                          autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>
        <!-- Surname -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Насаб')"/>
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required
                          autofocus autocomplete="surname"/>
            <x-input-error :messages="$errors->get('surname')" class="mt-2"/>
        </div>
        <div class="mt-4">
            <x-input-label for="name" :value="__('Номи падар')"/>
            <x-text-input id="patronymic" class="block mt-1 w-full" type="text" name="patronymic" :value="old('patronymic')" required
                          autofocus autocomplete="patronymic"/>
            <x-input-error :messages="$errors->get('patronymic')" class="mt-2"/>
        </div>

        <div class="mt-4">
            <x-input-label for="name" :value="__('Раками телефон')"/>
            <x-text-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required
                          autofocus autocomplete="phone"/>
            <x-input-error :messages="$errors->get('phone')" class="mt-2"/>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                          autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Рамз')"/>

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Такрори рамз')"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
               href="{{ route('login') }}">
                {{ __('Аз кайд гузаштаед?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Бакайдгир шудан') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
