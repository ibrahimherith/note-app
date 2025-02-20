<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}

    <div class="mb-4 text-center">
        <h2 class="text-2xl font-bold mb-2">Karibu Note</h2>
        <p class="text-sm">Tafadhali ingia ili kuendelea</p>
    </div>
    <form action="{{ route('login') }}" method="POST" class="w-full mb-4">
        @csrf
        @method('POST')

        <div class="mb-4">
          <label for="email" class="block mb-2 text-sm font-semibold"
            >Barua pepe</label
          >
          <input
            type="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="email@example.com"
            class="block w-full p-2 shadow-sm bg-gray-50 border border-gray-300 text-sm text-gray-900 rounded-lg"
          />
          @error('email')
              <span class="text-xs text-red-400">{{ $message }}</span>
          @enderror
        </div>
        <div class="mb-4">
          <div class="flex justify-between">
            <label for="password" class="block mb-2 text-sm font-semibold">
              Nenosiri
            </label>
            <a href="forget-password.html" class="text-sm">Umesahau?</a>
          </div>

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
              type="password"
              name="password"
              id="password"
              class="block w-full p-2 shadow-sm bg-gray-50 border border-gray-300 text-sm text-gray-900 rounded-lg"
            />
            @error('password')
                <span class="text-xs text-red-400">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <button
          class="block w-full p-2 bg-blue-600 text-sm text-white font-semibold rounded-lg"
        >
          Ingia
        </button>
    </form>
    
    {{-- <hr class="mb-4 bg-gray-200 h-1"> --}}
    <div class="mb-4 w-full bg-gray-200 h-[1px]"></div>
    
    <div class="mb-4 w-full">
        <p class="mb-2 text-center text-sm">Au ingia kwa:</p>
        <button
          class="flex w-full items-center justify-center p-2 bg-white border border-gray-300 text-sm text-gray-900 rounded-lg"
        >
          <img src="assets/images/icon-google.svg" alt="Google" />
          <span class="ml-2 font-semibold">Google</span>
        </button>
    </div>
    <div class="text-center text-sm">
        Bado huna akaunti? <a href="{{ route('register') }}" class="font-semibold">Jisajili</a>
    </div>
</x-guest-layout>
