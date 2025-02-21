<footer>
    <!-- Mobile and Tablets Button Navigation -->
    <div
      class="fixed bottom-0 left-0 w-full px-4 py-3 bg-white border-t-[1px] border-gray-300 md:px-8 md:py-3 lg:hidden"
    >
      <div class="w-full flex items-center justify-between">
        <button
          class="inline-flex flex-col items-center justify-center gap-1 bg-blue-50 p-4 hover:bg-blue-50 md:px-8 md:py-4"
        >
          <img src="{{ asset('assets/images/icon-home.svg') }}" alt="icon-home" />
          <span class="hidden text-sm text-gray-950 md:flex">Home</span>
        </button>
        <div class="w-[1px] h-10 bg-gray-300"></div>
        <button
          class="inline-flex flex-col items-center justify-center gap-1 hover:bg-blue-50 p-4 md:px-8 md:py-4"
        >
          <img src="{{ asset('assets/images/icon-search.svg') }}" alt="icon-search" />
          <span class="hidden text-sm text-gray-950 md:flex">Search</span>
        </button>
        <div class="w-[1px] h-10 bg-gray-300"></div>
        <button
          class="inline-flex flex-col items-center justify-center gap-1 hover:bg-blue-50 p-4 md:px-8 md:py-4"
        >
          <img src="{{ asset('assets/images/icon-archive.svg') }}" alt="icon-archive" />
          <span class="hidden text-sm text-gray-950 md:flex"
            >Archived</span
          >
        </button>
        <div class="w-[1px] h-10 bg-gray-300"></div>
        <button
          class="inline-flex flex-col items-center justify-center gap-1 hover:bg-blue-50 p-4 md:px-8 md:py-4"
        >
          <img src="{{ asset('assets/images/icon-tag.svg') }}" alt="icon-tag" />
          <span class="hidden text-sm text-gray-950 md:flex">Tags</span>
        </button>
        <div class="w-[1px] h-10 bg-gray-300"></div>
        <button
          class="inline-flex flex-col items-center justify-center gap-1 hover:bg-blue-50 p-4 md:px-8 md:py-4"
        >
          <img
            src="{{ asset('assets/images/icon-settings.svg') }}"
            alt="icon-settings"
          />
          <span class="hidden text-sm text-gray-950 md:flex"
            >Settings</span
          >
        </button>
      </div>
    </div>
  </footer>