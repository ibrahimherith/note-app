<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form> --}}

    <div class="text-center">
        <h2 class="text-2xl font-bold">Umesahau Nenosiri?</h2>
        <p>Ingiza barua pepe yako, na tutakutumia link ili kuiweka upya.</p>
    </div>
      <form method="POST" action="{{ route('password.email') }}" class="w-full space-y-4">
        @csrf
        @method('POST')

        <div class="space-y-1">
          <label for="email" class="font-semibold"
            >Barua pepe</label
          >
          <input
            type="email"
            name="email"
            id="email"
            placeholder="email@example.com"
            class="block w-full p-2 shadow-sm bg-gray-50 border border-gray-300 rounded-lg"
          />
        </div>

        <button
          class="block w-full p-2 bg-blue-600 text-white font-semibold rounded-lg"
        >
          Tuma Link
        </button>
      </form>
</x-guest-layout>
