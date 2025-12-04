<?php

namespace App\Livewire\Form;

use Livewire\Component;

class Status extends Component


{

    public $text ='info';
    public $color ='blue';
    public $isPenting = false;
    

    public function render()
    {
        return view('livewire.form.status');
    }
}
