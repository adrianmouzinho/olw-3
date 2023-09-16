@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-zinc-100 text-sm font-medium']) }}>
    {{ $value ?? $slot }}
</label>
