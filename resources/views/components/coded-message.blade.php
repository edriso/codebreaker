@props(['message', 'letters'])

<section class="flex flex-wrap gap-4">
    @foreach (array_filter(explode(' ', trim($message))) as $word)
        <div class="flex flex-wrap gap-3">
            @foreach (str_split($word) as $character)
                <div class="flex flex-col items-center gap-1">
                    <span class="material-symbols-outlined !text-4xl">
                        {{ $letters[strtolower($character)] ?? $character }}
                    </span>

                    <div class="bg-gray-200 w-12 h-12"></div>
                </div>
            @endforeach
        </div>
    @endforeach
</section>
