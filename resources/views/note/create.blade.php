<x-app-layout>
   <!-- phone & tablets -->
   <div class="container mx-auto px-4 py-5 md:px-8 lg:hidden">
    <form action="" class="space-y-4 m-">
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-1">
                <img src="assets/images/icon-arrow-left.svg" alt="icon-arrow-left">
                <p>Go Back</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="">Cancel</a>
                <a href="" class="text-blue-500">Save Note</a>
            </div>
        </div>

        <input type="text" name="" id="" 
            placeholder="Enter a title..." 
            class="w-full p-2 text-lg">
        
        <div class="space-y-2">
            <div class="flex items-center space-x-8">
                <label class="flex items-center gap-2">
                    <img src="assets/images/icon-tag.svg" alt="icon-tag">
                    <span>Tags</span>
                </label>
                <input type="text" name="" id="" 
                    placeholder="Add tags separated by commas(e.g work, planning)"
                    class="w-full p-2">
            </div>
            <div class="flex items-center space-x-8">
                <div class="flex items-center gap-2">
                    <img src="assets/images/icon-tag.svg" alt="icon-tag">
                    <p>Last Edited</p>
                </div>
                <p>Not yet saved</p>
            </div>
        </div>
        <hr class="bg-gray-300">
        <div>
            <textarea name="" id="" rows="10" 
                placeholder="Start typing your note here..." 
                class="w-full p-2"></textarea>
        </div>
    </form> 
  </div>
  <!-- desktop -->
  <div class="hidden md:hidden lg:w-full lg:px-8 lg:flex lg:text-sm">
    <div class="w-1/4 pr-3 py-5 border-r-[1px]">
      <!-- create btn -->
      <div class="mb-4">
        <a href="" class="flex gap-2 items-center justify-center px-4 py-3 bg-blue-500 text-white rounded-md">
          <svg 
          xmlns="http://www.w3.org/2000/svg" 
          width="24" 
          height="24" 
          fill="none" 
          viewBox="0 0 24 24">
          <path fill="#fff" d="M12 5a.75.75 0 0 1 .75.75V11H18a.75.75 0 0 1 0 1.5h-5.25v5.25a.75.75 0 0 1-1.5 0V12.5H6A.75.75 0 0 1 6 11h5.25V5.75A.75.75 0 0 1 12 5Z"/></svg>
          <p>Create New Note</p>
        </a>
      </div>
      <!-- notes -->
      <div class="space-y-2">
        <div class="p-2 rounded-md">
          <h2 class="mb-1 text-lg font-semibold">
            React Performance Optimization
          </h2>
          <div class="mb-1 flex items-center gap-1">
            <span class="px-[6px] py-[2px] bg-gray-200 rounded-lg"
              >Dev</span
            >
            <span class="px-[6px] py-[2px] bg-gray-200 rounded-lg"
              >React</span
            >
          </div>
          <p>29 Oct 2025</p>
        </div>
        <hr class="bg-gray-100" />
        <div class="p-2">
          <h2 class="mb-1 text-lg font-semibold">
            Japan Travel Planning
          </h2>
          <div class="mb-1 flex items-center gap-1">
            <span class="px-[6px] py-[2px] bg-gray-200 rounded-lg"
              >Travel</span
            >
            <span class="px-[6px] py-[2px] bg-gray-200 rounded-lg"
              >Personal</span
            >
          </div>
          <p>29 Oct 2025</p>
        </div>
        <hr class="bg-gray-100" />
        <div class="p-2">
          <h2 class="mb-1 text-lg font-semibold">
            Favorite Pasta Recipes
          </h2>
          <div class="mb-1 flex items-center gap-1">
            <span class="px-[6px] py-[2px] bg-gray-200 rounded-lg"
              >Cooking</span
            >
            <span class="px-[6px] py-[2px] bg-gray-200 rounded-lg"
              >Recipes</span
            >
          </div>
          <p>29 Oct 2025</p>
        </div>
      </div>
    </div>
    <div class="w-2/4 px-6 py-5 border-r-[1px]">
      <form action="" class="space-y-4 m-">
        <input type="text" name="" id="" 
          placeholder="Enter a title..." 
          class="w-full p-2 text-lg">
              
        <div class="space-y-2">
          <div class="flex items-center space-x-8">
            <label class="flex items-center gap-2">
              <img src="assets/images/icon-tag.svg" alt="icon-tag">
              <span>Tags</span>
            </label>
            <input type="text" name="" id="" 
              placeholder="Add tags separated by commas(e.g work, planning)"
              class="w-full p-2">
          </div>
          <div class="flex items-center space-x-8">
            <div class="flex items-center gap-2">
              <img src="assets/images/icon-tag.svg" alt="icon-tag">
              <p>Last Edited</p>
            </div>
            <p>Not yet saved</p>
          </div>
        </div>
        <hr class="bg-gray-300">
        <div>
          <textarea name="" id="" rows="15" 
            placeholder="Start typing your note here..." 
            class="w-full p-2">
          </textarea>
        </div>
        <hr class="bg-gray-100 my-4">
        <div class="flex space-x-4">
          <a href="" class="inline-block px-4 py-3 bg-blue-500 text-white rounded-md">
            Save Note
          </a>
          <a href="" class="inline-block px-4 py-3 bg-gray-300 text-black rounded-md">
            Cancel
          </a>
        </div>
      </form> 
    </div>
  </div>
</x-app-layout>
