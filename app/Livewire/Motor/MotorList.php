<?php

namespace App\Livewire\Motor;

use Livewire\Component;
use App\Models\motor;
use Flux\Flux;
use Livewire\Attributes\On;

class MotorList extends Component
{

    public $motorYangAkanDiEdit;
    public $merk_input;
    public $model_input;
    public $cc_input;
    

    public function showModalEdit(motor $motor)
    {
        $this->motorYangAkanDiEdit = $motor;

        Flux::modal('modalshowFormAddMotor')->show();
    }

    public function isikanFormEdit(motor $motor)
    {
        // dd('ini function isikanFormEdit');
        Flux::modal('modalshowFormAddMotor')->show();

        $this->motorYangAkanDiEdit = $motor;
        $this->merk_input = $motor->merk;
        $this->model_input = $motor->model;
        $this->cc_input = $motor->cc;
    }

    public function showFormAddMotor()
    {
        Flux::modal('modalshowFormAddMotor')->show();
        logger('ini function showFormAddMotor');
    }

    public function save()
    {
        $this->validate([
            'merk_input' => 'required|string|max:255|min:3',
            'model_input' => 'required|string|max:255|min:3',
            'cc_input' => 'required|string|max:255|min:3',
        ], [
            'merk_input.required' => 'Merk motor harus diisi',
            'model_input.required' => 'Model motor harus diisi',
            'cc_input.required' => 'CC motor harus diisi',
        ]);

        if ($this->motorYangAkanDiEdit) {
            $this->motorYangAkanDiEdit->merk = $this->merk_input;
            $this->motorYangAkanDiEdit->model = $this->model_input;
            $this->motorYangAkanDiEdit->cc = $this->cc_input;
            $this->motorYangAkanDiEdit->save();
        } else {
            $motor = new motor();
            $motor->merk = $this->merk_input;
            $motor->model = $this->model_input;
            $motor->cc = $this->cc_input; 
            $motor->save();
        }


        Flux::toast(
            heading: 'Changes saved.',
            text: 'Data motor berhasil ditambahkan.',
        );

        Flux::modal('modalshowFormAddMotor')->close();

        $this->reset(['merk_input', 'model_input', 'cc_input']);

        return;
    }

    
    public function delete(motor $motor)
    {
        $motor->delete(); 
    }
    
    #[On('motor-updated')]
    public function render()
    {
        return view('livewire.motor.motor-list', [
            'motors' => motor::all(),
        ]);
    }



}

