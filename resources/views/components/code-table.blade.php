@props(['letters'])

<footer class="flex flex-wrap gap-2">
    @foreach ($letters as $letter => $symbol)
        <div class="flex flex-col items-center gap-2 border border-white/10 p-2">
            <span>{{ ucwords($letter) }}</span>

            <span class="material-symbols-outlined">
                {{ $symbol }}
            </span>
        </div>
    @endforeach
</footer>
