<x-filament-panels::page>
    <form
        wire:submit="save"
        class="max-w-2xl"
    >
        {{ $this->form }}

        <div class="mt-4 flex justify-end">
            <button
                type="submit"
                class="fi-btn fi-btn-color-primary"
            >
                Save changes
            </button>
        </div>
    </form>
</x-filament-panels::page>
