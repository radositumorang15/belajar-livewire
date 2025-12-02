

<div>

    List mobil ada disini


    @if ($mobils->count() > 0)
        @foreach ($mobils as $mobil)

            <div>
                <h1>{{ $mobil->merk }}</h1>
                <p>{{ $mobil->model }}</p>
                <flux:button wire:click="showModalEdit({{ $mobil }})" variant="primary">Edit</flux:button>
                <flux:button wire:click="delete({{ $mobil }})" variant="danger">Delete</flux:button>
            </div>

        @endforeach


    @endif

    <flux:modal name="showModalEdit">
        {{-- null safe coalescense --}}
        <livewire:mobil.mobil-add :mobilDrilling="$this->mobilYangAkanDiEdit ?? new \App\Models\mobil()" id= />
    </flux:modal>
</div>
