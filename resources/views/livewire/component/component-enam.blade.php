<div>
    <h3 style="margin-top: 0;">Input Nama Cepat</h3>



    {{-- wireconfirm Confirming an action --}}
    <form wire:submit="simpan" wire:confirm="yakin mau tambah nama?">
        nama character length: <h2 x-text="$wire.nama.length"></h2>
        <input 
            type="text" 
            wire:model="nama" 
            wire:model.debounce.500ms="nama"
            wire:keydown.enter="simpan"
            placeholder="Masukkan nama..." 
            style="padding: 8px; border: 1px solid #ccc; width: 100%; box-sizing: border-box; margin-bottom: 10px;"
        >

        <button type="submit" 
                style="padding: 8px 15px; background: green; color: white; border: none; cursor: pointer;" >
            Tambah Nama
        </button>
        <span wire:loading>Saving...</span>
        <button style="padding: 8px 15px; background: green; color: white; border: none; cursor: pointer;" x-on:click="$wire.nama = ''">Clear</button>
        

        {{-- // Listening for dispatched custom events --}}
        <span wire:loading class="text-sm text-red-500 ml-3 font-bold">
            ⏳ Menyimpan... Tunggu sebentar!
        </span>

        {{-- // Refreshingcomponent --}}
        <button style="padding: 8px 15px; background: green; color: white; border: none; cursor: pointer;" type="button" wire:click="$refresh">refresh</button>
    </form>
    
    <hr style="margin: 15px 0;">

    <h4>Daftar Nama</h4>
    
    <ul style="list-style-type: none; padding: 0;">
        @foreach($daftarNama as $index => $n)
            <li style="padding: 5px; background: #f4f4f4; margin-bottom: 3px;">
                {{ $index + 1 }}. {{ $n }}
            </li>
            {{-- Passing parameters --}}

            <button type="button" wire:click="hapus({{ $index }})">Hapus</button>
        @endforeach
    </ul>



</div>
