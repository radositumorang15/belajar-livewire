<?php

namespace App\Livewire\Mobil;

use Livewire\Component;
use App\Models\mobil;
use Flux\Flux;
use Livewire\Attributes\Reactive;

class MobilAdd extends Component
{
    public $merk_input;
    public $model_input;

    #[Reactive] // ada props drilling dari halaman lain 
    public ?mobil $mobilDrilling = null;


    public function mount()
    {
        
    }

    public function boot() {
        // $this->mobil = $this->mobil;
        if ($this->mobilDrilling) {
            $this->merk_input = $this->mobilDrilling->merk;
            $this->model_input = $this->mobilDrilling->model;
        }
    }




    public function save()
    {
        

        $this->validate([
                'merk_input' => 'required|string|max:255|min:3',
                'model_input' => 'required|string|max:255|min:3',
            ],
            [
                'merk_input.required' => 'Merk mobil harus diisi',
                'model_input.required' => 'Model mobil harus diisi',
            ]
        );

        // edit data
        if ($this->mobilDrilling && $this->mobilDrilling->id) {
            // Fetch a fresh instance from the database to avoid mutating reactive prop
            
            $mobil = mobil::findOrFail($this->mobilDrilling->id);
            $mobil->merk = $this->merk_input;
            $mobil->model = $this->model_input;
            $mobil->save();
        } else {
            // new data
            $mobil = new mobil();
            $mobil->merk = $this->merk_input;
            $mobil->model = $this->model_input;
            $mobil->save();
        }
        


        Flux::modal('showModalEdit')->close();


        Flux::toast(
            heading: 'Changes saved.',
            text: 'Data mobil berhasil ditambahkan.',
        );

        $this->reset(['merk_input', 'model_input']);


        // dispatch event
        $this->dispatch('mobil-updated');

        return; 

        
    }

    

    public function render()
    {
        return view('livewire.mobil.mobil-add');
    }
}
