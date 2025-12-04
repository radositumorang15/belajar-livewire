<div>
    <div>

        <h2 class="text-2xl font-bold">{{ $articleYangAkanDiEdit ? 'Edit Artikel' : 'Tambah Artikel' }}</h2>
        <form wire:submit="save">
            <flux:input type="text" label="Title" wire:model.blur="postForm.title_input" />
            <div>
                @error('postForm.title_input') <span class="error">{{ $message }}</span> @enderror
            </div>

            <flux:input type="text" label="Content" wire:model.blur="postForm.content_input" />
            <div>
                @error('postForm.content_input') <span class="error">{{ $message }}</span> @enderror
            </div>
            <flux:input type="text" label="Master Key" wire:model.blur="inputKey" />
            <flux:input type="text" label="Nama Penulis" wire:model.blur="postForm.nama_penulis_input" />
            <div class="flex justify-end mt-4">
                <flux:button type="submit" variant="primary">
                   simpan
                </flux:button>
                
            </div>
        </form>
    </div>

</div>

