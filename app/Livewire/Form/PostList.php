<?php

namespace App\Livewire\Form;


use Livewire\Component;
use App\Models\Article;
use Flux\Flux;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use App\Livewire\Form\Status;
use App\Models\Databan;


class PostList extends Component
{

    public $postTitle = 'Belajar Livewire';
   
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

    $this->reset();
    $this->articles = Article::all(); 

}


public function rendering($view, $data)
{

    View::share('title', 'List Artikel');
}


    public function render()
    {
        return view('livewire.form.post-list',[
            'databan' => Databan::all(),
        ]);
    }


    public function rendered($view, $html)
    {
        $ukuran = strlen($html);

     
        logger("Komponen PostList dirender. Ukuran: {$ukuran} karakter.");
        

    }

}
