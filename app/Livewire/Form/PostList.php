<?php

namespace App\Livewire\Form;


use Livewire\Component;
use App\Models\Article;
use Flux\Flux;

class PostList extends Component
{
    public $articles;
    public $articleYangAkanDitampilkan;

    public function mount()
    {
        $this->articles = Article::all();

        // $this->articles = Article::orderBy('title', 'desc')->get();
        
    }
    
    public function showModalDetail(Article $article)
    {
        $this->articleYangAkanDitampilkan = $article;
        Flux::modal('ModalDetailArticle')->show();
    }



public function delete(Article $article)
{
    $article->delete();
    $this->articles = Article::all(); // Refresh the articles list
}

    public function render()
    {
        return view('livewire.form.post-list');
    }
}
