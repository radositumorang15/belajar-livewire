<?php

namespace App\Livewire\Demo;

use Livewire\Component;

class DemoSlot extends Component
{
    public $jumlahProduk = 5;
    public $totalHarga = 1500000;
    public $statusPesanan = 'pending';

    public function render()
    {
        return view('livewire.demo.demo-slot');
    }
}

