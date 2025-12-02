<div>
    Untuk nambah nama motor

    <form wire:submit="save">
        <div>
            <flux:input type="text" label="Merk Motor" wire:model="merk_input" />
        </div>
        <div class="mt-4">
            <flux:input type="text" label="Model Motor" wire:model="model_input" />
        </div>
        <div class="mt-4">
            <flux:input type="text" label="CC Motor" wire:model="cc_input" />
        </div>
        <div class="flex justify-end mt-8">
            <flux:button type="submit" variant="primary">Simpan</flux:button>
        </div>
    </form>

</div>

