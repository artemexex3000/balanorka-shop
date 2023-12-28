<x-layouts.app>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($products->count())
            <x-products-grid :products="$products"/>

{{--            {{ $products->links() }}--}}
        @else
            <p>No product yet.</p>
    @endif
</x-layouts.app>
