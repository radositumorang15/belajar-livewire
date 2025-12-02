<?php

namespace App\Livewire\Motor;

use Livewire\Component;
use App\Models\motor;
use Flux\Flux;
use Livewire\Attributes\Reactive;

class MotorAdd extends Component
{
    public $merk_input;
    public $model_input;
    public $cc_input;

    #[Reactive] // ada props drilling dari halaman lain 
    public ?motor $motorDrilling = null;


    public function mount()
    {
        
    }

    public function boot() {
        // $this->motor = $this->motor;
        if ($this->motorDrilling) {
            $this->merk_input = $this->motorDrilling->merk;
            $this->model_input = $this->motorDrilling->model;
            $this->cc_input = $this->motorDrilling->cc;
        }
    }




    public function save()
    {
        

        $this->validate([
                'merk_input' => 'required|string|max:255|min:3',
                'model_input' => 'required|string|max:255|min:3',
                'cc_input' => 'required|string|max:255|min:3',
            ],
            [
                'merk_input.required' => 'Merk motor harus diisi',
                'model_input.required' => 'Model motor harus diisi',
                'cc_input.required' => 'CC motor harus diisi',
            ]
        );

        // edit data
        if ($this->motorDrilling && $this->motorDrilling->id) {
            // Fetch a fresh instance from the database to avoid mutating reactive prop
            
            $motor = motor::findOrFail($this->motorDrilling->id);
            $motor->merk = $this->merk_input;
            $motor->model = $this->model_input;
            $motor->cc = $this->cc_input;

            $motor->save();
        } else {
            // new data
            $motor = new motor();
            $motor->merk = $this->merk_input;
            $motor->model = $this->model_input;
            $motor->cc = $this->cc_input;
            $motor->save();
        }
        


        Flux::modal('showModalEdit')->close();


        Flux::toast(
            heading: 'Changes saved.',
            text: 'Data motor berhasil ditambahkan.',
        );

        $this->reset(['merk_input', 'model_input', 'cc_input']);


        // dispatch event
        $this->dispatch('motor-updated');

        return; 

        
    }

    

    public function render()
    {
        return view('livewire.motor.motor-add');
    }
}

