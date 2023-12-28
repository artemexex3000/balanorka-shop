<!-- alpineJS -->
@if(session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-base-300 border-solid border-1 border-base-content text-base-content py-2 px-4 rounded-xl bottom-3 right-3 text-sm"
    >
        {{ session('success') }}
    </div>
@endif

@if(session()->has('fail'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-base-300 border-solid border-1 border-base-content text-base-content py-2 px-4 rounded-xl bottom-3 right-3 text-sm"
    >
        {{ session('fail') }}
    </div>
@endif
