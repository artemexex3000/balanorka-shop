@props([
    'href',
    'text',
])

<div class="mt-4">
    <a href={{ $href }}>
        <button class="btn">
            {{ $text }}
        </button>
    </a>
</div>
