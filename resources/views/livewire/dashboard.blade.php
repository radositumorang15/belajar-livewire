<div class="py-10 px-4 sm:px-6 lg:px-8">
    
    <div class="mb-8">
        <flux:heading size="xl" level="1">Dashboard Toko Ban</flux:heading>
        <flux:subheading>Selamat datang kembali! Ini ringkasan toko hari ini.</flux:subheading>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <flux:card class="flex flex-col gap-2">
            <div class="flex items-center gap-2 text-zinc-500">
                <flux:icon.truck class="w-5 h-5" />
                <span class="text-sm font-medium">Total Stok</span>
            </div>
            <div class="text-3xl font-bold text-zinc-900 dark:text-white">
                124 <span class="text-sm font-normal text-zinc-500">Unit</span>
            </div>
        </flux:card>

        <flux:card class="flex flex-col gap-2">
            <div class="flex items-center gap-2 text-zinc-500">
                <flux:icon.tag class="w-5 h-5" />
                <span class="text-sm font-medium">Kategori</span>
            </div>
            <div class="text-3xl font-bold text-zinc-900 dark:text-white">
                8 <span class="text-sm font-normal text-zinc-500">Jenis</span>
            </div>
        </flux:card>

        <flux:card class="bg-red-50 border-red-200 dark:bg-red-900/20">
            <div class="flex items-center gap-2 text-red-600">
                <flux:icon.exclamation-triangle class="w-5 h-5" />
                <span class="text-sm font-medium">Stok Menipis</span>
            </div>
            <div class="text-3xl font-bold text-red-700 dark:text-red-400">
                3 <span class="text-sm font-normal">Item</span>
            </div>
        </flux:card>

    </div>
</div>