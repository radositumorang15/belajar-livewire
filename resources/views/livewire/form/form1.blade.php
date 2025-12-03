<div>
    form 1

    <form wire:submit="save">
        <div>
            <div>
                @error('nama_input') <span class="error">{{ $message }}</span> @enderror 
            </div>
            <flux:input type="text" label="Nama" wire:model="nama_input" />
        </div>
        <div>
            <flux:input type="text" label="Email" wire:model="email_input" />
        </div>
        <div>
            <flux:input type="password" label="Password" wire:model="password_input" />
        </div>
        <flux:button class="mt-6" type="submit" variant="primary">Simpan</flux:button>
    </form>


<div class="mt-8">
    <flux:table>
        @if ($users->count() > 0)
        @foreach ($users as $user)
         
        <flux:table.columns>
            <flux:table.column>{{ $user->name }}</flux:table.column>
            <flux:table.column>{{ $user->email }}</flux:table.column>
            <flux:table.column class="flex gap-2">
                <flux:button wire:click="delete({{ $user->id }})" variant="danger">Delete</flux:button>
                <flux:button wire:click="showModalEdit({{ $user->id }})" variant="primary">Edit</flux:button>
            </flux:table.column>
        </flux:table.columns>
        @endforeach
        @endif
    </flux:table>
    </div> 



    <flux:modal name="modalEditUser">
<form wire:submit.prevent="edit">
    <div>
        <flux:input type="text" label="Nama" wire:model="nama_input" />
    </div>
    <div>
        <flux:input type="text" label="Email" wire:model="email_input" />
    </div>
    <flux:button type="submit" variant="primary">Simpan</flux:button>
</form>
</flux:modal>
</div> 





   {{-- <flux:table.row>
                <flux:table.cell>{{ $user->name }}</flux:table.cell>
                <flux:table.cell>{{ $user->email }}</flux:table.cell>
                <flux:table.cell>{{ $user->password }}</flux:table.cell>
            </flux:table.row> --}}
