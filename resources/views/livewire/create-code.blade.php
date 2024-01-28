<div class="flex flex-col justify-between flex-1 mt-8">
    <section>
        <form class="mb-8">
            <textarea
                wire:model.live="message"
                class="bg-white/10 px-3 py-2 rounded-xl w-full"
                cols="30"
                rows="10"></textarea>
        </form>

        <x-coded-message :message="$message" />
    </section>

    <x-code-table />
</div>
