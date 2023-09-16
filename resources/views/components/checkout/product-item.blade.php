<li class="flex items-center justify-between">
    <div class="flex items-center gap-2">
        <img src="{{ $image }}" alt="Imagem do produto {{ $name }}" class="w-16 rounded-lg">
        <div class="flex flex-col w-full max-w-xs">
            <strong class="font-bold text-sm">{{ $name }}</strong>
            @foreach ($features as $feature)
                <span class="text-sm text-zinc-400">{{ $feature }}</span>
            @endforeach
        </div>
    </div>

    <span>R$ {{ $price }}</span>
</li>
