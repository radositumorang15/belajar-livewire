<?php

namespace App\Livewire\Alpine;

use Livewire\Component;
use App\Models\Article;

class Alpine1 extends Component
{
    
    public $articles;

    public function mount()
    {
        $this->articles = Article::all();
    }


    

    public function render()
    {
        return view('livewire.alpine.alpine1');
    }
}
