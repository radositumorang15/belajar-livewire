<div>

    <h2 class="text-xl font-bold mb-2 mt-4">1. State & Reactivity (x-data, x-text)</h2>
    <div x-data="{ stok: 2, nama: 'Topi' }" class="p-4 border rounded mb-4">
        <h3 x-text="nama" class="font-bold"></h3>
        <p>Sisa Stok: <span x-text="stok"></span></p>

        <button 
            class="bg-blue-500 text-white px-2 py-1 rounded mt-2"
            x-show="stok > 0" 
            @click="stok--; totalDiKeranjang++">
            Beli Topi
        </button>
         <span x-show="stok === 0" style="color: red">Habis!</span>
    </div>


    <h2 class="text-xl font-bold mb-2 mt-4">2. Visibility Toggling (x-show)</h2>
    <div x-data="{ open: true }" class="p-4 border rounded mb-4">
        <button class="bg-gray-200 px-2 py-1 rounded" @click="open = false" x-show="open">Hide Me (Klik untuk hilangkan)</button>
        <button class="bg-gray-200 px-2 py-1 rounded" @click="open = true" x-show="!open">Show Me (Reset)</button>
    </div>


    <h2 class="text-xl font-bold mb-2 mt-4">3. Dynamic Attributes (x-bind)</h2>
    <div x-data="{ placeholder: 'Ketik sesuatu di sini...' }" class="p-4 border rounded mb-4">
        <input type="text" class="border p-1" x-bind:placeholder="placeholder">
    </div>


    <h2 class="text-xl font-bold mb-2 mt-4">4. HTML Injection (x-html)</h2>
    <div x-data="{ username: '<span style=\'color:blue\'>calebporzio</span>' }" class="p-4 border rounded mb-4">
        Username: <span x-html="username"></span>
    </div>


    <h2 class="text-xl font-bold mb-2 mt-4">5. Custom Input Binding (x-modelable)</h2>
    <div x-data="{ number: 5 }" class="p-4 border rounded mb-4">
        <div style="margin-bottom: 10px">
            <div x-data="{ count: 0 }" x-modelable="count" x-model="number">
                <button class="bg-green-500 text-white px-2 py-1 rounded" @click="count++">Increment (Anak)</button>
            </div>
        </div>

        <button class="bg-red-500 text-white px-2 py-1 rounded" @click="number = 0">Reset (Induk)</button>
        <p class="mt-2">Angka Induk: <span x-text="number" class="font-bold"></span></p>
    </div>


    <h2 class="text-xl font-bold mb-2 mt-4">6. Looping Lists (x-for)</h2>
    <ul x-data="{ colors: ['Merah', 'Jingga', 'Kuning'] }" class="list-disc pl-5 border p-4 rounded mb-4">
        <template x-for="color in colors">
            <li x-text="color"></li>
        </template>


         {{-- menggunakan x-for --}}
    <div x-data="{ listBan: @js($databan) }">
    
        <h3>Daftar Ban (Alpine Loop)</h3>
    
        <template x-for="ban in listBan" :key="ban.id">
            <div class="p-2 border-b">
                
                <div x-text="ban.nama_ban" class="font-bold"></div>
                
                <div x-text="ban.merk" class="text-sm text-gray-500"></div>
    
                <div>Rp <span x-text="ban.harga"></span></div>
                
            </div>
        </template>
    
    </div>
    </ul>


    <h2 class="text-xl font-bold mb-2 mt-4">7. Direct DOM Access (x-ref)</h2>
    <div x-data class="p-4 border rounded mb-4">
        <video x-ref="videoSaya" width="300" class="rounded-lg mb-2">
            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
        </video>
    
        <div class="mt-2 space-x-2">
            <flux:button @click="$refs.videoSaya.play()"> ▶️ Putar </flux:button>
            <flux:button @click="$refs.videoSaya.pause()"> ⏸️ Stop </flux:button>
        </div>
    </div>

</div>