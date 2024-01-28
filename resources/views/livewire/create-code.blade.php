<div class="flex flex-col justify-between flex-1 gap-8 mt-8">
    <section>
        <form class="mb-8 print:hidden">
            <textarea
                wire:model.live="message"
                class="bg-white/10 px-3 py-2 rounded-xl w-full resize-none"
                cols="30"
                rows="5"></textarea>

            <div class="mt-2 flex justify-end">
                <button type="button" @disabled(!$message) @click="window.print()" class="bg-blue-500 px-4 py-1 text-sm font-semibold rounded-md disabled:bg-gray-400">Print</button>
            </div>
        </form>

        <x-coded-message :message="$message" :letters="$this->letters" />
    </section>

    @if($message)
        <x-code-table :letters="$this->letters" />
    @endif
</div>
