@props([
    'name',
    'type' => 'text',
    'required' => ''
    ])

<div class="space-y-2">
    <label for="label" class="ml-4">
        <span class="text-base label-text">{{ str_replace("_", " ", ucfirst($name)) }} {{ $required }}</span>
    </label>
    <input id="label"
           type="{{ $type }}"
           name="{{ $name }}"
           value="{{ old($name) }}"
           class="input input-bordered w-full input-primary"/>

    <x-forms.error name="name"/>
</div>
