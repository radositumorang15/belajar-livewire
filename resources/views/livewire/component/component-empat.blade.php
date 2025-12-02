<div>
   <x-slot name="title"> tes</x-slot>
    <h2>Halaman Admin dari komponen empat</h2>


    //Accessing route parameters mengambil data dari URL
    <div class="p-5 border m-5">
        <h1>Halaman Detail Produk</h1>
        
        <p>URL ID yang kamu buka: <strong>{{ $banId }}</strong></p>
        <p>Nama Produk: <strong>{{ $namaBan }}</strong></p>
    
        <a href="/ban/1" class="text-blue-500 underline">Cek Ban 1</a> | 
        <a href="/ban/2" class="text-blue-500 underline">Cek Ban 2</a>
    </div>
</div>
