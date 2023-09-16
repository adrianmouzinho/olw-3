@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full bg-zinc-800 rounded-md border-zinc-500 focus:border-pink-500 focus:ring-pink-500']) !!}>
