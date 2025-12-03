<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Article;


class PostForm extends Form
{

    public $title_input;
    public $content_input;
    
    
    public function rules()
    {
        return [
            'title_input' => 'required|min:3',
            'content_input' => 'required|min:3',
        ];
    }


    public function messages() 
    {
        return [
            'title_input.required' => 'Title harus diisi',
            'title_input.min' => 'Title harus minimal 3 karakter',
            'content_input.required' => 'Content harus diisi',
            'content_input.min' => 'Content harus minimal 3 karakter',
        ];
    }
}