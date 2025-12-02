<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Livewire\Attributes\Reactive;

class ComponentDua extends Component
{



 //Initializing properties di sinilah mount() bekerja. Dia mengisi variabel $tires dengan data dummy (array) atau data database tepat saat komponen pertama kali lahir.

    public $tires = [];

    public function mount()
    {
        $this->tires = [
            [
                'id' => 1, 
                'brand' => 'Bridgestone', 
                'model' => 'Turanza',
                'price' => 1500000
            ],
            [
                'id' => 2, 
                'brand' => 'Michelin', 
                'model' => 'Primacy 4',
                'price' => 1800000
            ],
            [
                'id' => 3, 
                'brand' => 'Dunlop', 
                'model' => 'Enasave',
                'price' => 950000
            ],


        ];
    }


    


  
    public function render()
    {
        // return view('livewire.component.component-dua');

        // inline components
        return <<<'HTML'
        <div>
           <h1>Tes Inline Components Berhasil!</h1>
           
           <p>Ini dirender langsung dari file PHP tanpa file Blade.</p>
        </div>
        HTML;

        
    }

    
}
