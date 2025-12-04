<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Databan;

class Dashboard extends Component
{

    public $databan;
    public $totalStok;
    public $totalKategori;
    public $totalStokMenipis;

    // public function boot()
    // {
    //     $this->totalStok = $this->databan->count();
    //     $this->totalKategori = $this->databan->count();
    //     $this->totalStokMenipis = $this->databan->count();
    // }


    public function mount()
    {
        $this->databan = Databan::all();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
