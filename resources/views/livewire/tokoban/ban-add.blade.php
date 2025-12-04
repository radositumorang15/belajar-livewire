<div class="py-10 px-4 sm:px-6 lg:px-8">
    
    <div class="flex justify-between items-center mb-6">
        <div>
            <flux:heading size="xl" level="1">Data Ban</flux:heading>
            <flux:subheading>Kelola data ban dan informasi produk di sini.</flux:subheading>
        </div>

        {{-- Tombol Tambah dengan Icon --}}
        <flux:button variant="primary" icon="plus" wire:click="showModalAddBan">
            Tambah Ban
        </flux:button>
    </div>

    <flux:card class="p-0 overflow-hidden">
    <flux:table>
    <flux:table.columns>
        
        <flux:table.column>No</flux:table.column>
        <flux:table.column sortable>Nama Ban</flux:table.column>
        <flux:table.column>Merk</flux:table.column>
        <flux:table.column>Harga</flux:table.column>
        <flux:table.column>Aksi</flux:table.column>
    </flux:table.columns>

    <flux:table.rows>
        @if($databan && $databan->count() > 0)
            @foreach($databan as $databans)
                <flux:table.row :key="$databans->id">
                    
                    <flux:table.cell>{{ $loop->iteration }}</flux:table.cell>

                    <flux:table.cell class="whitespace-nowrap font-medium">
                        {{ $databans->nama_ban }}
                    </flux:table.cell>

                    <flux:table.cell>
                        <flux:badge size="sm" color="zinc" inset="top bottom">
                            {{ $databans->merk }}
                        </flux:badge>
                    </flux:table.cell>

                    <flux:table.cell>{{ $databans->harga }}</flux:table.cell>

                    <flux:table.cell>
                        <flux:dropdown>
                            <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom" />
                            <flux:menu>
                                <flux:menu.item icon="pencil-square">Edit</flux:menu.item>
                                <flux:menu.separator />
                                <flux:menu.item icon="trash" variant="danger">Hapus</flux:menu.item>
                            </flux:menu>
                        </flux:dropdown>
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        @else
            <flux:table.row>
                <flux:table.cell colspan="5" class="text-center py-6 text-zinc-500">
                    Belum ada data ban. Silakan tambah baru.
                </flux:table.cell>
            </flux:table.row>
        @endif
    </flux:table.rows>
</flux:table>
    </flux:card>




    <flux:modal name="modalAddBan">
        <form wire:submit="addban">
            <div>
                <flux:input type="text" label="Nama Ban" wire:model="nama_ban" />
            </div>
            <div class="mt-4">
                <flux:input type="text" label="Harga" wire:model="harga" />
            </div>
            <div class="mt-4">
                <flux:input type="text" label="Merk" wire:model="merk" />
            </div>
            <div class="flex justify-end mt-8">
                <flux:button type="submit" variant="primary">Simpan</flux:button>
            </div>
        </form>
    </flux:modal>
</div>