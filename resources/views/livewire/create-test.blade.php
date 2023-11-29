<x-layouts.app>
    <div>
        And i love u - {{ $this->getMyName(\App\Models\User::find(1)) }}
    </div>
</x-layouts.app>
