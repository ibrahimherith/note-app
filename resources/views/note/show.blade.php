<x-app-layout>
    <!-- phone & tablets -->
    <div class="container mx-auto px-4 py-5 md:px-8 lg:hidden">
        <div class="mb-4 pb-3 text-sm border-b-[1px] border-gray-200 flex items-start justify-between">
          <a href="{{ route('note.index') }}" class="flex gap-1">
            <img src="{{ asset('assets/images/icon-arrow-left.svg') }}" alt="icon-arrow-left"/>
            <span>Go back</span>
          </a>
          <div class="flex gap-4">
            <a href="#">
              <img src="{{ asset('assets/images/icon-delete.svg') }}" alt="icon-delete" />
            </a>
            <a href="#">
              <img
                src="{{ asset('assets/images/icon-archive.svg') }}"
                alt="icon-archive"
              />
            </a>
            <a href="{{ route('note.edit', $note) }}">Edit Note</a>
          </div>
        </div>
        <div class="space-y-4">
          <h1 class="text-2xl text-gray-950 font-bold">
            {{ $note->title }}
          </h1>
          <div class="mb-1 flex gap-1">
            <div class="w-[115px] flex gap-[6px]">
              <img src="{{ asset('assets/images/icon-tag.svg') }}" alt="icon-tag" />
              <p>Tags</p>
            </div>
            <div>
              <p>{{ $note->tags }}</p>
            </div>
          </div>
          <div class="flex gap-1">
            <div class="w-[115px] flex gap-[6px]">
              <img src="{{ asset('assets/images/icon-clock.svg') }}" alt="icon-clock" />
              <p>Last edited</p>
            </div>
            <div>{{ $note->created_at }}</div>
          </div>
          <hr class="bg-gray-100">
          <p>{{ $note->note }}</p>
        </div>
      </div>
      <!-- desktop -->
      <div class="hidden md:hidden lg:w-full lg:px-8 lg:flex lg:text-sm">
        <div class="w-1/4 pr-3 py-5 border-r-[1px]">
          <!-- create btn -->
          <div class="mb-4">
            <a
              href="{{ route('note.create') }}"
              class="flex gap-2 items-center justify-center px-4 py-3 bg-blue-500 text-white rounded-md"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  fill="#fff"
                  d="M12 5a.75.75 0 0 1 .75.75V11H18a.75.75 0 0 1 0 1.5h-5.25v5.25a.75.75 0 0 1-1.5 0V12.5H6A.75.75 0 0 1 6 11h5.25V5.75A.75.75 0 0 1 12 5Z"
                />
              </svg>
              <p>Create New Note</p>
            </a>
          </div>
          <!-- notes -->
          <div class="space-y-2">
            @foreach ($notes as $note)
              <a href="{{ route('note.show', $note) }}">
                <div class="p-2 rounded-lg space-y-1">
                    <h2 class="text-lg font-semibold">
                      {{ $note->title }}
                    </h2>
                    <div class="flex items-center gap-1">
                      <span class="px-[6px] py-[2px] bg-gray-200 rounded-lg">{{ $note->tags }}</span>
                    </div>
                    <p>{{ $note->created_at }}</p>
                  </div>
              </a>
              <hr class="bg-gray-100" />
            @endforeach
          </div>
        </div>
        {{-- Selected single note --}}
        <div class="w-2/4 px-6 py-5 border-r-[1px]">
          <div class="text-gray-950">
            <h2 class="mb-4 text-lg font-semibold">{{ $note->id }}</h2>
            <div class="mb-4 pb-3 text-sm">
              <div class="mb-1 flex gap-1">
                <div class="w-[115px] flex gap-[6px]">
                  <img src="{{ asset('assets/images/icon-tag.svg') }}" alt="icon-tag" />
                  <p>Tags</p>
                </div>
                <div>{{ $note->tags }}</div>
              </div>
              <div class="flex gap-1">
                <div class="w-[115px] flex gap-[6px]">
                  <img src="{{ asset('assets/images/icon-clock.svg') }}" alt="icon-clock"/>
                  <p>Last edited</p>
                </div>
                <div>{{ $note->updated_at }}</div>
              </div>
            </div>
            <hr class="py-4" />
            <div>{{ $note->note }}</div>
          </div>
          <hr class="bg-gray-100 my-4" />
          <div class="flex space-x-4">
            <a
              href=""
              class="inline-block px-4 py-3 bg-blue-500 text-white rounded-md"
            >
              Save Note
            </a>
            <a
              href=""
              class="inline-block px-4 py-3 bg-gray-300 text-black rounded-md"
            >
              Cancel
            </a>
          </div>
        </div>
        {{-- call to action --}}
        <div class="w-1/4 pl-3 py-5">
          <div class="flex flex-col gap-3">
            <a
              href="#"
              class="flex gap-2 items-center justify-start px-4 py-3 border-[1px] border-gray-300 rounded-md"
            >
              <img
                src="{{ asset('assets/images/icon-archive.svg') }}"
                alt="icon-archive"
              />
              <p>Archive Note</p>
            </a>
            <a
              href=""
              class="flex gap-2 items-center justify-start px-4 py-3 border-[1px] border-gray-300 rounded-md"
            >
              <img src="{{ asset('assets/images/icon-delete.svg') }}" alt="icon-delete" />
              <p>Delete Note</p>
            </a>
          </div>
        </div>
      </div>
</x-app-layout>
