<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Index extends Component

{
    public $inidata = null;

    public function getdata()
    {
        
        $this->inidata = Category::latest()->get();
        return $this->inidata;
    }

    public function render()
    {
        // Ambil data kategori, urutkan dari yang terbaru
        return view('livewire.categories.index', [
            'categories' => Category::latest()->get()
        ]);
    }
}