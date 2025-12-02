

<div>

    List motor ada disini
    {{-- add ada disini --}}

    
    <flux:modal name="modalshowFormAddMotor">
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
    </flux:modal> 



    <flux:button wire:click="showFormAddMotor" variant="primary">Tambah Motor</flux:button>

    @if ($motors->count() > 0)
        @foreach ($motors as $motor)
            <div class="mt-8">
                <h1>{{ $motor->merk }}</h1>
                <p>{{ $motor->model }}</p>
                <p>{{ $motor->cc }}</p>
                <flux:button wire:click="isikanFormEdit({{ $motor }})" variant="primary">Edit</flux:button>
                <flux:button wire:click="delete({{ $motor }})" variant="danger">Delete</flux:button>
            </div>
        @endforeach
    @endif

    <flux:button variant="primary" x-on:click="$flux.toast('Your changes have been saved.')">
        Save changes
    </flux:button>
</div>

