<x-app-layout>
     <!-- phone & tablets -->
     <div class="container mx-auto px-4 py-5 md:px-8 lg:hidden">
        <div class="mb-4">
          <h1 class="text-2xl text-gray-950 font-bold lg:hidden">
            All Notes
          </h1>
        </div>
        <div id="notes" class="space-y-2">
          @if ($notes->isEmpty())
            <div class="p-2 bg-gray-100 rounded-lg">
              You don’t have any notes yet. Start a new note to capture your
              thoughts and ideas.
            </div>
          @else
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
          @endif
        </div> 
        <!-- Floating button -->
        <button
          class="fixed bottom-[100px] right-4 w-12 h-12 rounded-full bg-blue-500 text-white flex items-center justify-center md:bottom-[150px] md:right-8 md:w-16 md:h-16 lg:hidden"
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
        </button>
      </div>
      <!-- desktop -->
      <div
        class="hidden md:hidden lg:w-full lg:h-screen lg:px-8 lg:flex lg:text-sm"
      >
        <div class="w-1/4 h-full pr-3 py-5 border-r-[1px]">
          <!-- create btn -->
          <div class="mb-4">
            <a
              href=""
              class="flex gap-1 items-center justify-center px-4 py-3 bg-blue-500 text-white rounded-md"
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
           @if ($notes->isEmpty())
            <div class="bg-gray-100 p-2 rounded-md">
              You don’t have any notes yet. Start a new note to capture your
              thoughts and ideas.
            </div>
           @else
            @foreach ($notes as $note)
              <a href="{{ route('note.show', $note) }}" >
                <div class="p-2 rounded-lg">
                  <h2 class="mb-1 text-lg font-semibold">
                    {{ $note->title }}
                  </h2>
                  <div class="mb-1 flex items-center gap-1">
                    <span class="px-[6px] py-[2px] bg-gray-200 rounded-lg">{{ $note->tags }}</span>
                  </div>
                  <p>{{ $note->created_at }}</p>
                </div>
              </a>
              <hr class="bg-gray-100">
            @endforeach
           @endif
          </div>
        </div>
      </div>
</x-app-layout>
