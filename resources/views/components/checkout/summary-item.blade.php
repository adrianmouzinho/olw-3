<div
    @class([
        "flex items-center justify-between",
        "pt-6 border-t border-zinc-700" => $isLast ?? false,
    ])
    class="flex items-center justify-between"
>
    <span class="font-semibold">{{ $title }}</span>
    <span>R$ {{ $value }}</span>
</div>
