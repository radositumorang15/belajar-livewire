<div>
    //inline components
    <livewire:component.component-dua />


    
    <br>
    <br>
    //Setting properties ariabel ini otomatis bisa diakses di file Blade (HTML)
    <h1>Title: {{ $title }}</h1>

    <br>
    <br>
    //Sharing additional data with the view
    <h1>Author: {{ $author }}</h1>

    <br>
    <br>
    ////Adding wire:key
    <div>
        @foreach ($ban as $b)
            <div wire:key="{{ $b['id'] }}">
                <h1>Name: {{ $b['name'] }}</h1>
            </div>
        @endforeach
    </div>


    <br>
    <br>

    
    //Binding inputs to properties
    <form>
        <label for="title">Title:</label>
     
        <input type="text" id="title" wire:model.live="title"> 
    </form>


    <br>
    <br>

    //Calling actions memanggil action di komponen
    <div style="padding: 20px; font-family: sans-serif;">
    
        <h3>Buku Tamu Sederhana</h3>
    
        <form wire:submit="simpan" style="margin-bottom: 20px;">
            
            <input type="text" wire:model="nama" placeholder="Ketik nama kamu..." required 
                   style="padding: 5px; border: 1px solid #ccc;">
            
            <button type="submit" style="padding: 5px 15px; background: blue; color: white; border: none;">
                Kirim
            </button>

        </form>
    
        <hr>
    
        <h4>Daftar Nama yang Masuk:</h4>
        
        <ul>
            @foreach($daftarTamu as $tamu)
                <li wire:key="{{ $tamu }}">
                    {{ $tamu }}
                </li>
            @endforeach
        </ul>
    
        @if(empty($daftarTamu))
            <p style="color: gray;">Belum ada tamu.</p>
        @endif
    
    </div>



<br>
<br>
    //RENDERING COMPONENTS
    <livewire:component.component-empat :id="1" />

    <br>
    <br>
    //Passing data into components  
    <h1>Nama Admin: {{ $namaAdmin }}</h1>
</div>
