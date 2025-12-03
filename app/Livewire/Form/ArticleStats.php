<?php

namespace App\Livewire\Form;

use Livewire\Component;
use App\Models\Article;

class ArticleStats extends Component


{

    public $wordCount;
    public $readingTime;


    public function mount(Article $article){
        $this->wordCount = str_word_count($article->content);
        $this->readingTime = ceil($this->wordCount / 200);
        // $this->date = $article->created_at->diffForHumans();
    }


    public function render()
    {
        return view('livewire.form.article-stats');
    }
}
