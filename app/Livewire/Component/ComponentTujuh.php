<?php

namespace App\Livewire\Component;

use Livewire\Component;

class ComponentTujuh extends Component

{

public $title = '';
 
    public $content = '';
 
    public function save()
    {
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);
 
        return redirect()->to('/posts');
    }
 

    public function render()
    {
        return view('livewire.component.component-tujuh');
    }
}
