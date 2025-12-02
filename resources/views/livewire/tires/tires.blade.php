<div>
<div class="py-10 px-4 sm:px-6 lg:px-8">
    
    <div class="flex justify-between items-center mb-6">
        <div>
            <flux:heading size="xl" level="1">Data Ban</flux:heading>
            <flux:subheading>Kelola inventaris ban toko Anda.</flux:subheading>
        </div>

        <flux:modal.trigger name="create-tire">
            <flux:button variant="primary" icon="plus">Tambah Ban</flux:button>
        </flux:modal.trigger>
    </div>

    <flux:card class="p-0 overflow-hidden">
        <flux:table>
            <flux:table.columns>
                <flux:table.column>Merk & Model</flux:table.column>
                <flux:table.column>Ukuran</flux:table.column>
                <flux:table.column>Kategori</flux:table.column>
                <flux:table.column>Harga</flux:table.column>
                <flux:table.column>Stok</flux:table.column>
                <flux:table.column>Aksi</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach($tires as $tire)
                    <flux:table.row :key="$tire->id">
                        <flux:table.cell>
                            <div class="font-medium">{{ $tire->brand }}</div>
                            <div class="text-xs text-zinc-500">{{ $tire->model }}</div>
                        </flux:table.cell>

                        <flux:table.cell>
                            <flux:badge size="sm">{{ $tire->size }}</flux:badge>
                        </flux:table.cell>

                        <flux:table.cell>{{ $tire->category->name ?? '-' }}</flux:table.cell>

                        <flux:table.cell>Rp {{ number_format($tire->price) }}</flux:table.cell>

                        <flux:table.cell>{{ $tire->stock }} Unit</flux:table.cell>

                        <flux:table.cell>
                            <flux:button wire:click="delete({{ $tire->id }})" 
                                         wire:confirm="Yakin hapus ban ini?" 
                                         icon="trash" size="sm" variant="danger" />
                        </flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>
    </flux:card>

    <flux:modal name="create-tire" class="md:w-96">
        <form wire:submit="save" class="space-y-4">
            <flux:heading size="lg">Tambah Ban Baru</flux:heading>

            <flux:input wire:model="brand" label="Merk" placeholder="Contoh: Bridgestone" />
            <flux:input wire:model="model" label="Model" placeholder="Contoh: Turanza" />
            <flux:input wire:model="size" label="Ukuran" placeholder="Contoh: 195/50 R16" />
            
            <div class="grid grid-cols-2 gap-4">
                <flux:input wire:model="price" type="number" label="Harga" />
                <flux:input wire:model="stock" type="number" label="Stok Awal" />
            </div>

            <flux:select wire:model="category_id" label="Kategori" placeholder="Pilih Kategori...">
                @foreach($categories as $cat)
                    <flux:option value="{{ $cat->id }}">{{ $cat->name }}</flux:option>
                @endforeach
            </flux:select>

            <div class="flex justify-end gap-2 mt-4">
                <flux:modal.close>
                    <flux:button variant="ghost">Batal</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="primary">Simpan</flux:button>
            </div>
        </form>
    </flux:modal>
</div>
</div>
