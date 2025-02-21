<header class="bg-blue-50 lg:bg-white">
    <!-- phones & tablets -->
    <div class="container mx-auto px-4 py-6 lg:hidden">
      <div class="flex justify-between items-center">
        <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" />
        <div class="flex gap-4">
          <a href="#">
            <img src="{{ asset('assets/images/icon-search.svg') }}" alt="icon-search" />
          </a>
          <a href="#">
            <img
              src="{{ asset('assets/images/icon-settings.svg') }}"
              alt="icon-settings"
            />
          </a>
        </div>
      </div>
    </div>
    <!-- desktop -->
    <div
      class="hidden md:hidden lg:flex lg:justify-between lg:items-center lg:w-full lg:px-8 lg:py-4 lg:border-b-[1px] lg:border-gray-300"
    >
      <h1 class="text-2xl text-gray-950 font-bold lg:block">All Notes</h1>
      <div class="flex items-center gap-4">
        <form action="">
          <div class="form-control">
            <input
              type="text"
              placeholder="Search by title, content or tags..."
              class="w-[300px] p-1.5 rounded-md border border-gray-300"
            />
          </div>
        </form>
        <a href="#">
          <img
            src="{{ asset('assets/images/icon-settings.svg') }}"
            alt="icon-settings"
          />
        </a>
      </div>
    </div>
  </header>