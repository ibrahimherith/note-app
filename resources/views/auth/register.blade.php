<x-guest-layout>
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}

    <div class="text-center">
        <h2 class="text-2xl font-bold mb-2">Fungua Akaunti</h2>
        <p class="text-sm">
          Jisajili kupanga madokezo yako na kuboresha kazi zako.
        </p>
      </div>
      <form action="{{ route('register') }}" method="POST" class="w-full space-y-4">
        @csrf
        @method('POST')

        <div class="space-y-1">
          <label for="email" class="font-semibold">Barua pepe</label>
          <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="email@example.com"
            class="block w-full p-1 shadow-sm bg-gray-50 border border-gray-300 rounded-lg"
          />
          @error('email')
              <span class="text-red-400">{{ $message }}</span>
          @enderror
        </div>
        <div class="space-y-1">
          <label for="password" class="font-semibold">Nenosiri</label>
          <div class="relative">
            <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 cursor-pointer">
              <img src="assets/images/icon-show-password.svg" alt="icon-show-password"/>
            </div>
            <input
              id="password"
              type="password"
              name="password"
              value="{{ old('password') }}"
              class="block w-full p-1 shadow-sm bg-gray-50 border border-gray-300 rounded-lg"
            />
            @error('password')
                <span class="text-xs text-red-400">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="mb-4">
          <label for="password_confirmation" class="font-semibold">Thibitisha nenosiri</label>
          <div class="relative">
            <div
              class="absolute inset-y-0 end-0 flex items-center pe-3.5 cursor-pointer"
            >
              <img
                src="assets/images/icon-show-password.svg"
                alt="icon-show-password"
              />
            </div>
            <input
              id="password_confirmation"
              type="password"
              name="password_confirmation"
              value="{{ old('password_confirmation') }}"
              class="block w-full p-1 shadow-sm bg-gray-50 border border-gray-300 rounded-lg"
            />
            @error('password_confirmation')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <button class="block w-full p-1 bg-blue-600 text-white font-semibold rounded-lg">Jisajili</button>
      </form>
      <div class="w-full bg-gray-200 h-[1px]"></div>
      <div class="w-full space-y-2 text-center">
        <p class="">Au ingia kwa:</p>
        <button
          class="flex w-full items-center justify-center p-1 bg-white border border-gray-300 text-sm text-gray-900 rounded-lg"
        >
          <img src="assets/images/icon-google.svg" alt="Google" />
          <span class="ml-2 font-semibold">Google</span>
        </button>
        <p>
          Tayari unayo akaunti?
          <a href="{{ route('login') }}" class="font-semibold">Ingia</a>
        </p>
      </div> 
</x-guest-layout>
