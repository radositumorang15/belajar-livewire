<?php

namespace App\Livewire\Component;

use Livewire\Component;

class ComponentLima extends Component
{


 //bulk assignment mengambil data secara langsung tanpa mendefenisikan semuanya brand, model dll

    public $brand;
    public $model;
    public $price;
    public $stock; 

    public function mount()
    {
    
        $dataDariDatabase = [
            'brand' => 'Bridgestone',
            'model' => 'Turanza T005',
            'price' => 1500000,
            'stock' => 24,
            'keterangan_rahasia' => 'Data ini gak akan masuk' 
        ];

    
        // $this->fill($dataDariDatabase);
        $this->fill(
            collect($dataDariDatabase)->only(['brand', 'price',])
        );
    }

    public function render()
    {
        return view('livewire.component.component-lima');
    }
}
