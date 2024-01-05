@props(['product'])

<article {!! $attributes->merge(['class' => "transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-5 hover:border-opacity-5 rounded-xl"])!!}>
    <div class="card w-96 bg-base-100 shadow-xl">
        <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes"/></figure>
        <div class="card-body">
            <h2 class="card-title">
                {{ $product->name }}
                <div class="badge badge-secondary">NEW</div>
            </h2>
            <p>{{ $product->description }}</p>
            <div class="card-actions justify-end">
                <div class="badge badge-outline">Fashion</div>
                <div class="badge badge-outline">Products</div>
            </div>
        </div>
    </div>
</article>
