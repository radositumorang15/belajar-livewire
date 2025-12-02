<?php

namespace App\Livewire\Mobil;

use Livewire\Component;
use App\Models\mobil;
use Flux\Flux;
use Livewire\Attributes\On;

class MobilList extends Component
{

    public $mobilYangAkanDiEdit;

    public function showModalEdit(mobil $mobil)
    {
        $this->mobilYangAkanDiEdit = $mobil;

        Flux::modal('showModalEdit')->show();
    }
    
    
    public function delete(mobil $mobil)
    {
        $mobil->delete(); 
    }
    
    
    public function render()
    {
        return view('livewire.mobil.mobil-list', [
            'mobils' => mobil::all(),
        ]);
    }
}
