<?php

namespace App\Livewire\Alpine;
use App\Models\Article;


use Livewire\Component;

class AlpineForm extends Component
{   

    public $title;


    public $articles;

    public function mount()
    {
        $this->articles = Article::all();
    }


    public function render()
    {
        return view('livewire.alpine.alpine-form');
    }
}
