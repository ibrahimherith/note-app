<li class="px-1 py-[10px] rounded-lg bg-gray-100">
    <a href="tag-cookong.html">
        <div class="flex items-center justify-between">
            <div class="flex gap-2 items-center">
                <img src="{{ asset('assets/images/icon-tag.svg') }}" alt="icon-tag" />
                <span>{{ $slot }}</span>
            </div>
            <img src="{{ asset('assets/images/icon-chevron-right.svg') }}" alt="icon-chevron-right"/>
      </div>
    </a>
</li>