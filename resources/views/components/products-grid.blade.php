@props(['products'])

@if($products->count() > 1)
    <div class="lg:grid lg:grid-cols-12">
        @foreach($products as $product)
            <x-products-card
                :product="$product"
                class="{!! $loop->iteration < 3 ? 'col-span-6' : 'col-span-4'!!}"
            />
        @endforeach
    </div>
@endif
