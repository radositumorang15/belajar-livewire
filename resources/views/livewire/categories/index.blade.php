<div class="py-10 px-4 sm:px-6 lg:px-8">
    
    <div class="flex justify-between items-center mb-6">
        <div>
            <flux:heading size="xl" level="1">Kategori Ban</flux:heading>
            <flux:subheading>Atur jenis kendaraan dan klasifikasi ban di sini.</flux:subheading>
        </div>

        {{-- Tombol Tambah dengan Icon --}}
        <flux:button variant="primary" icon="plus">
            Tambah Kategori
        </flux:button>
    </div>

    <flux:card class="p-0 overflow-hidden">
    <flux:table>
    <flux:table.columns>
        
        <flux:table.column>No</flux:table.column>
        <flux:table.column sortable>Nama Kategori</flux:table.column>
        <flux:table.column>Slug (URL)</flux:table.column>
        <flux:table.column>Jumlah Ban</flux:table.column>
        <flux:table.column>Aksi</flux:table.column>
    </flux:table.columns>

    <flux:table.rows>
        @forelse($categories as $index => $category)
            
            <flux:table.row :key="$category->id">
                
                <flux:table.cell>{{ $index + 1 }}</flux:table.cell>

                <flux:table.cell class="whitespace-nowrap font-medium">
                    {{ $category->name }}
                </flux:table.cell>

                <flux:table.cell>
                    <flux:badge size="sm" color="zinc" inset="top bottom">
                        /{{ $category->slug }}
                    </flux:badge>
                </flux:table.cell>

                <flux:table.cell>0 Unit</flux:table.cell>

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
        @empty
            <flux:table.row>
                <flux:table.cell colspan="5" class="text-center py-6 text-zinc-500">
                    Belum ada data kategori. Silakan tambah baru.
                </flux:table.cell>
            </flux:table.row>
        @endforelse
    </flux:table.rows>
</flux:table>
    </flux:card>
</div>