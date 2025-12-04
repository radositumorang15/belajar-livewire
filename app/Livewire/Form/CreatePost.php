<?php

namespace App\Livewire\Form;

use Livewire\Component;
use App\Livewire\Forms\PostForm;
use App\Models\Article;
use Flux\Flux;
use App\Livewire\Form\Status;


class CreatePost extends Component
{
    public PostForm $postForm;
    public $inputKey;

    #[Locked]
    public $masterKey;
    
    public ?Article $articleYangAkanDiEdit = null;



    public function boot(){
        $this->masterKey = 'kamiadalahpenulis';
    }

    public function mount(){
        if($this->articleYangAkanDiEdit){
            $this->postForm->title_input = $this->articleYangAkanDiEdit->title;
            $this->postForm->content_input = $this->articleYangAkanDiEdit->content;
        }
    }




    public function save()
    {
        if($this->inputKey !== $this->masterKey){
            return;
        }

        $this->postForm->validate();

        $articles = new Article();
        Article::create([
            'title' => $this->postForm->title_input,
            'content' => $this->postForm->content_input,
            'nama_penulis' => $this->postForm->nama_penulis_input,
        ]);
        
        $this->reset();

        Flux::toast(
            heading: 'Changes saved.',
            text: 'Data artikel berhasil ditambahkan.',
        );

        // return redirect()->to('/post-list');
    }

    
    
    public function render()
    {
        return view('livewire.form.create-post');
    }


}
