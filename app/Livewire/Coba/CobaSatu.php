<?php

namespace App\Livewire\Coba;

use Livewire\Component;

class CobaSatu extends Component
{
    public $sortBy = 'date';
    public $sortDirection = 'desc';




    public function render()
    {
        $orders = collect([
            (object) [ 
                'id' => 1,
                'customer' => 'John Doe',
                'date' => '2025-01-01',
                'status' => 'Pending',
                'status_color' => 'zinc', 
                'amount' => 100,
            ],
        ]);
    
        return view('livewire.coba.coba-satu', [
            'orders' => $orders,
        ]);
    }
}
