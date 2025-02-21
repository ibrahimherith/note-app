<x-guest-layout>
    {{-- <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
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
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form> --}}

    <div class="text-center">
        <h2 class="text-2xl font-bold mb-2">Weka Upya Namba ya Siri</h2>
        <p>Chagua namba ya siri ili kulinda akaunti yako</p>
    </div>
    <form method="POST" action="{{ route('password.store') }}" class="w-full space-y-4">
        <div class="space-y-1">
            <label for="password" class="font-semibold">Namba ya Siri</label>
            <div class="relative">
                <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 cursor-pointer">
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
            </div>
            <div>
                <!-- <img src="assets/images/" alt="" /> -->
                <span class="text-sm">Angalau herufi 8</span>
            </div>
        </div>
        <div class="space-y-1">
          <label for="password" class="font-semibold">Thibitisha Namba ya Siri</label>
          <div class="relative">
            <div class="absolute inset-y-0 end-0 flex items-center pe-3.5 cursor-pointer">
              <img src="assets/images/icon-show-password.svg" alt="icon-show-password"/>
            </div>
            <input
              type="password"
              name="password"
              id="password"
              class="block w-full p-2 shadow-sm bg-gray-50 border border-gray-300 text-sm text-gray-900 rounded-lg"
            />
          </div>
        </div>
        <button class="block w-full p-2 bg-blue-600 text-white font-semibold rounded-lg">
          Badili Namba ya Siri
        </button>
    </form>
</x-guest-layout>
