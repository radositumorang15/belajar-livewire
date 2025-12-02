<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Computed;

class ComponentEnam extends Component 
{


    public $nama = '';
    public $daftarNama = [];

    public function simpan()
    {
        if(empty($this->nama)) {
            return;
        }

        // resetting properties otomatis mengosongkan inputan jika sudah submit
        $this->daftarNama[] = $this->nama;
        $this->reset(['nama']);


          //pull properties mengambil data dari inputan dan menambahkan ke daftarNama
        $namaYangMasuk = $this->pull('nama'); 


        // Listening for dispatched custom events
        sleep(3);



        $this->daftarNama[] = $namaYangMasuk;
        logger($namaYangMasuk);

        if ($namaYangMasuk === 'nama') {
            
            // Tulis entri ke log dengan waktu spesifik
            Log::info("--- [DEBOUNCE ACTIVE] Properti '{$namaYangMasuk}' diperbarui.");
            Log::info("Nilai: '{$this->nama}' | Waktu Sinkronisasi: " . now()->toTimeString());
            
        }
    }

    // {{-- Passing parameters --}}
    public function hapus($index)
    {
        unset($this->daftarNama[$index]);
    }

  

    public function render()
    {

       // Refreshingcomponent
        logger($this->daftarNama);
        
        logger($this->daftarNama).now()->toTimeString();
        return view('livewire.component.component-enam'); 
    }
}