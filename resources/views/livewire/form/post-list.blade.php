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

    <template x-if="open">
        <div>Contents...</div>
    </template>

    <div class="p-4 border rounded mb-4" x-data="{ isAdmin: false, hargaJual: 1500000, hargaModal: 1000000 }">
        <h2 class="text-xl font-bold mb-2 mt-4">8. Conditional Rendering (x-if)</h2>
        <label>
            <input type="checkbox" x-model="isAdmin"> Mode Admin
        </label>
        <hr class="my-4">
    
        <h3>Ban Bridgestone</h3>
        <p>Harga Jual: <span x-text="hargaJual"></span></p>
    
        <template x-if="isAdmin">
            <div class="bg-yellow-100 p-2 border border-yellow-500 mt-2">
                <strong>Info Rahasia:</strong>
                <p>Harga Modal: <span x-text="hargaModal"></span></p>
                <button>Edit Modal</button>
            </div>
        </template>
    
    </div>



    <div x-data="{ daftarBan: ['Bridgestone', 'Michelin', 'Dunlop'] }">
        <h2 class="text-xl font-bold mb-2 mt-4">9. Dynamic IDs (x-id)</h2>
        <template x-for="ban in daftarBan">
            
            <div x-id="['stok-input']" class="border p-4 mb-2">
                
                <h4 x-text="ban"></h4>
    
                <div class="flex items-center gap-2">
                    <label :for="$id('stok-input')" class="text-sm">Update Stok:</label>
                    
                    <input type="number" :id="$id('stok-input')" class="border p-1">
                </div>
    
            </div>
    
        </template>
    </div>



    <form class="p-4 border rounded mb-4" wire:submit="save">
        <h2 class="text-xl font-bold mb-2 mt-4">10. $el</h2>
        <input type="text" wire:model="name">
    
        <button 
            type="submit"
            @click="$el.innerText = 'Menyimpan...'; $el.disabled = true;"
        >
            Simpan Perubahan
        </button>
    </form>

    <div class="p-4 border rounded mb-4">
        <h2 class="text-xl font-bold mb-2 mt-4">11. $store</h2>
    <div x-data style="margin-bottom: 20px; border: 1px solid blue; padding: 10px;">
        <h3>Saya Pengendali</h3>
        <button @click="$store.dataKu.angka++">
            Tambah Angka (+)
        </button>
    </div>
    
    <div x-data style="border: 1px solid red; padding: 10px;">
        <h3>Saya Penonton</h3>
        Angka sekarang adalah: 
        <b x-text="$store.dataKu.angka" style="font-size: 20px;"></b>
    </div>
    </div>



    <div class="p-4 border rounded mb-4">
        <h2 class="text-xl font-bold mb-2 mt-4">12. $watch</h2>
        <div x-data="{ pesan: '' }" 
     x-init="$watch('pesan', value => {
         if (value.length > 10) {
             alert('Stop! Maksimal 10 karakter saja.');
         }
     })">
    
    <label>Ketik sesuatu (Maks 10 huruf):</label>
    <br>
    <input type="text" x-model="pesan" class="border p-2">
    
    <p>Panjang saat ini: <span x-text="pesan.length"></span></p>
</div>
    </div>



    <div class="p-4 border rounded mb-4">
        <h2 class="text-xl font-bold mb-2 mt-4">13. $dispatch</h2>

    <div x-data>
        <button @click="$dispatch('buka-modal')">
            Buka Modal Login
        </button>
    </div>
    
    <hr>
    
    <div 
        x-data="{ open: false }" 
        @buka-modal.window="open = true" 
        x-show="open"
        style="background: #eee; padding: 20px; border: 1px solid black;"
    >
        <h2>Form Login</h2>
        <p>Masukkan username...</p>
        <button @click="open = false">Tutup</button>
    </div>
    </div>




    <div x-data="{ teks: 'LAMA' }">
        <span x-ref="tulisan" x-text="teks"></span>
    
        <button @click="
            teks = 'BARU'; 
            alert($refs.tulisan.innerText); 
        ">
            Ubah & Baca
        </button>
    </div>
</div>

