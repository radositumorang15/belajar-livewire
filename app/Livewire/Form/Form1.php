<?php

namespace App\Livewire\Form;

use Livewire\Component;
use App\Models\User;
use Flux\Flux;
class Form1 extends Component
{

    public $nama_input;
    public $email_input;
    public $password_input;
    public $userYangAkanDiEdit;

    public function save()
    {
        $this->validate([
            'nama_input' => 'required|string|max:255|min:3',
            'email_input' => 'required|email|max:255|min:3',
        ],
        [
            'nama_input.required' => 'Nama harus diisi',
            'email_input.required' => 'Email harus diisi',
        ]
        );

        $user = new User();
        user::create([
            'name' => $this->nama_input,
            'email' => $this->email_input,
            'password' => $this->password_input,
        ]);

        $this->reset();
    }
    

    public function delete(User $user)
    {
        $user->delete();
    }

  
    public function edit()
    {
        $this->validate([
            'nama_input' => 'required|string|max:255|min:3',
            'email_input' => 'required|email|max:255|min:3',
        ]);

        if (! $this->userYangAkanDiEdit) {
            return;
        }

        $user = User::find($this->userYangAkanDiEdit);

        if (! $user) {
            return;
        }

        $user->name = $this->nama_input;
        $user->email = $this->email_input;

        if ($this->password_input) {
            $user->password = $this->password_input;
        }

        $user->save();

        Flux::modal('modalEditUser')->close();

        $this->reset(['nama_input', 'email_input', 'password_input', 'userYangAkanDiEdit']);
    }



    public function showModalEdit(User $user)
    {
        $this->userYangAkanDiEdit = $user->id;
        $this->nama_input = $user->name;
        $this->email_input = $user->email;
        $this->password_input = '';

        Flux::modal('modalEditUser')->show();
    }



    public function render()
    {
        return view('livewire.form.form1',[
            'users' => User::all(),
        ]);
    }
}
