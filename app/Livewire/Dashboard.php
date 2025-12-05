<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Databan;

class Dashboard extends Component
{

   
    public $totalStok;
    public $totalKategori;
    public $totalStokMenipis;


    public function mount()
    {
    
        $this->totalStok = Databan::count();
        $this->totalKategori = Databan::distinct()->count('merk');
        // $this->totalStokMenipis = $this->databan->count();
    }




    public function render()
    {
        return view('livewire.dashboard');
    }
}
