<div>
<div x-data="{ totalDiKeranjang: 0 }">
    

    <flux:header container class="flex items-center justify-center bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">


    
    <flux:spacer />
    <flux:navbar.item icon="shopping-cart" href="/keranjang">
    Cart 

    <span 
        x-show="totalDiKeranjang > 0" 
        x-text="totalDiKeranjang"
        class="ml-1 rounded-full bg-red-500 px-1.5 py-0.5 text-xs text-white"
    ></span>
</flux:navbar.item>
</flux:header>

    
    <div x-data="{ stok: 20 }" class="mt-5"">

        <flux:card class="flex flex-col w-full max-w-sm h-full p-4 space-y-4">
    
        <div class="flex items-start justify-between w-full mb-4">
        
            <flux:heading size="lg" class="font-bold leading-tight pr-4">
                Bridgestone Potenza S007A
            </flux:heading>
    
     
            <flux:text class="text-sm text-center text-zinc-500 line-clamp-3">
                Sisa Stok: <span x-text="stok"></span>
            </flux:text>

                <span :class="stok > 0 ? 'text-green-500' : 'text-red-500'">
                    <span x-text="stok > 0 ? 'Tersedia' : 'Habis'"></span>
                </span>
            
            
        </div>
    

        <div x-data="{ open: false }">
    
            <div class="w-full aspect-video bg-zinc-100 dark:bg-zinc-800 rounded-lg overflow-hidden flex items-center justify-center cursor-pointer">
                <img 
                    x-on:click="open = true"
                    src="https://www.bridgestone.co.id/content/dam/bridgestone/consumer/bst/tires/apac/sg/apac-potenza/potenza-s007a/Potenza_S007A_Tilted-2000x2000px.jpg/_jcr_content/renditions/cq5dam.web.1280.1280.jpeg" 
                    alt="Bridgestone Potenza S007A" 
                    class="h-full object-contain hover:scale-110 transition-transform duration-300"
                >
            </div>
        
            <div 
                x-show="open"
                style="display: none;" 
                x-transition.opacity
                class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm p-4"
            >
                <div 
                    @click.outside="open = false" 
                    x-show="open"
                    x-transition.scale.90
                    class="relative max-w-4xl w-full max-h-screen"
                >
                    <button @click="open = false" class="absolute -top-10 right-0 text-white hover:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
        
                    <img 
                        src="https://www.bridgestone.co.id/content/dam/bridgestone/consumer/bst/tires/apac/sg/apac-potenza/potenza-s007a/Potenza_S007A_Tilted-2000x2000px.jpg/_jcr_content/renditions/cq5dam.web.1280.1280.jpeg" 
                        alt="Bridgestone Potenza S007A Full" 
                        class="w-full h-full object-contain rounded-lg shadow-2xl"
                    >
                </div>
            </div>
        
        </div>

        <div class="grow">
            <flux:text class="text-sm text-center text-zinc-500 line-clamp-3">
                Setiap bagian terkecil dari POTENZA S007A sudah dirancang untuk memberikan pengendalian dan respons berkendara yang maksimal.
            </flux:text>

        </div>
    
        <div class="mt-auto pt-4">
            <flux:button 
                x-show="stok > 0" 
                icon="shopping-cart"
                variant="primary"
                class="w-full"
                @click="stok--; totalDiKeranjang++">
                Tambahkan ke Keranjang
            </flux:button>
            <div x-cloak x-show="stok <= 0" class="text-center text-red-500 text-sm font-bold">
                Stok Habis
            </div>
        </div>
    
    </flux:card>
    </div>

  


</div>
</div>