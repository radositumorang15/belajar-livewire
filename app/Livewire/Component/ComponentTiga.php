<?php

namespace App\Livewire\Component;

use Livewire\Component;

class ComponentTiga extends Component



{
    //Setting properties variabel ini otomatis bisa diakses di file Blade (HTML)
    public $title = 'Judul Awal';
    public $author = 'John Doe';

    //Binding inputs to properties

    public $keyword = '';


    //Adding wire:key to @foreach loops
    public $ban = [
        [
            'id' => 1,
            'name' => 'Ban A',
            'price' => 100000,
            'stock' => 10,  
        ],
        [
            'id' => 2,
            'name' => 'Ban B',
            'price' => 200000,
            'stock' => 20,
        ],
        
        [
            'id' => 3,
            'name' => 'Ban C',
            'price' => 300000,
            'stock' => 30,
        ],
    ];


       //Calling actions memanggil action di komponen
    public $nama = '';


    public $daftarTamu = [];

    public function simpan()
    {
        $this->daftarTamu[] = $this->nama;
        $this->nama = '';
    }
   
    //Passing data into components memasukkan data ke komponen
    public $namaAdmin = 'John Doe';
    public function mount()
    {
        $this->namaAdmin = 'John Doe';
    }




    

    #[Title('komponen tiga')]
    public function render()
    {
        //Sharing additional data with the view memasukkan data ke view
        return view('livewire.component.component-tiga')->with([
            'author' => $this->author,

        ]);
    }

 





}
