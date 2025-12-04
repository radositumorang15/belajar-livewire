<div>
    <div>

        <h2 class="text-2xl font-bold"></h2>
        <form wire:submit="save">
            <flux:input type="text" label="Title" wire:model="postForm.title_input" />
            <div>
                @error('postForm.title_input') <span class="error">{{ $message }}</span> @enderror
            </div>

            <small>
                character count: <span class="color-red-500" x-text="$wire.postForm.title_input.length"></span>
            </small>


            <form wire:submit="save">
                <input wire:model="title" type="text">
     
                <button type="button" x-on:click="$wire.title = ''">Clear</button>
     
                <button type="submit">Save</button>
            </form>
            </div>
        </form>
    </div>

</div>

