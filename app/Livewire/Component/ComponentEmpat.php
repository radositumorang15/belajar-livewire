<?php

namespace App\Livewire\Component;

use Livewire\Component;

class ComponentEmpat extends Component
{

//Accessing route parameters mengambil data dari URL
 public $banId;       
 public $namaBan;     


 public function mount($id) 
 {
     
     $this->banId = $id;
     if ($id == 1) {
         $this->namaBan = "Bridgestone Turanza";
     } elseif ($id == 2) {
         $this->namaBan = "Michelin Primacy";
     } else {
         $this->namaBan = "Ban Tidak Dikenal";
     }
 }

    public function render()
    {
        return view('livewire.component.component-empat');
    }
}
