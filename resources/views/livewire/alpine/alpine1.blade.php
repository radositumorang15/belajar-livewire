<div>


    <flux:heading size="lg">Artikel</flux:heading>
    @if ($articles->count() > 0)
    @foreach ($articles as $article)



        <div class="max-w-3xl mx-auto mt-5 bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <div class="p-6 md:p-8">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                    {{ $article->title }}
                </h1>
        
                <div x-data="{ expanded: false }">
                    
                    <div class="flex items-center gap-2 mb-6">
                        <flux:button 
                            type="button" 
                            variant="subtle" 
                            x-on:click="expanded = ! expanded"
                            class="group"
                        >
                            <span class="transition-transform duration-300" :class="expanded ? 'rotate-180' : ''">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-gray-500">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                            
                            <span x-show="! expanded">Show post content...</span>
                            <span x-show="expanded" x-cloak>Hide post content...</span>
                        </flux:button>
                    </div>
        
                    <div 
                        x-show="expanded" 
                        x-cloak
                        x-transition:enter="transition transform duration-900"
                        x-transition:enter-start="opacity-0 -translate-y-2 scale-95 duration-300"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                        x-transition:leave-end="opacity-0 -translate-y-2 scale-95"
                    >
                        <div class="prose prose-slate max-w-none border-t border-gray-100 pt-6">
                            {!! $article->content !!} 
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
    @endforeach
@endif




</div>
</div>
