<aside class="hidden md:hidden lg:flex lg:flex-col lg:gap-4 lg:w-[272px] lg:min-h-screen lg:px-4 lg:py-3 lg:border-r-[1px] lg:border-gray-300">
    <div class="sidebar-header py-3">
        <a href="notes-index.html">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" />
        </a>
    </div>
    <ul>
        <li class="mb-1 px-3 py-[10px] rounded-lg bg-gray-100">
            <a href="notes-index.html" class="flex items-center justify-between w-full">
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('assets/images/icon-home.svg') }}" alt="icon-home" />
                    <span>All Notes</span>
                </div>
                <img src="{{ asset('assets/images/icon-chevron-right.svg') }}" alt="icon-chevron-right"/>
            </a>
        </li>
        <li class="px-3 py-[10px] rounded-lg">
            <a href="archived-index.html" class="flex items-center justify-between w-full">
                <div class="flex gap-2 items-center">
                    <img src="{{ asset('assets/images/icon-archive.svg') }}" alt="icon-archive" />
                    <span>Archived Notes</span>
                </div>
                <img src="{{ asset('assets/images/icon-chevron-right.svg') }}" alt="icon-chevron-right"/>
            </a>
        </li>
    </ul>
    <!-- divider -->
    <hr class="bg-gray-200 my-2" />
    <!-- Tags -->
    <ul class="flex flex-col gap-1">
        <a href="tags-index.html" class="block px-3 py-[10px]">Tags</a>
        @foreach ($notes as $note)
          <x-tag-link>
            {{ $note->tags }}
          </x-tag-link>
        @endforeach
    </ul>
</aside>