<x-layout>
    <main class="container flex flex-col h-full max-w-4xl mx-auto">
        <header class="mx-auto print:mx-0">
            <img
                src="/logo.svg"
                alt="Codebreaker"
                aria-label="Codebreaker"
                class="w-60 print:w-36 print:invert" />
        </header>

        <livewire:create-code />
    </main>
</x-layout>
