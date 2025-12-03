<div>


    
    
    @if ($articles->count() > 0)
        @foreach ($articles as $article)

        <div class="mt-8">
            <flux:card size="sm" class="hover:bg-zinc-50 dark:hover:bg-zinc-700 cursor-pointer" wire:click="showModalDetail({{ $article->id }})">
                <flux:heading class="flex items-center gap-2">{{ $article->title }}<flux:icon name="arrow-up-right" class="ml-auto text-zinc-400" variant="micro" /></flux:heading>
                <flux:text class="mt-2">{{ $article->content }}</flux:text>
                <flux:button wire:click="delete({{ $article }})" variant="danger">Delete</flux:button>
            </flux:card>
        
            </div>

        @endforeach
    @endif



    <flux:modal name="ModalDetailArticle">
     @if ($articleYangAkanDitampilkan)
        <div>
            <flux:heading size="lg" class="mb-4">{{ $articleYangAkanDitampilkan->title }}</flux:heading>
            <flux:text class="mt-4">{{ $articleYangAkanDitampilkan->content }}</flux:text>
        </div>
     @endif
    </flux:modal>
</div>

