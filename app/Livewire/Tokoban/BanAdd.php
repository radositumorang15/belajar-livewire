<?php

namespace App\Livewire\Tokoban;

use Livewire\Component;
use App\Models\Databan;
use Flux\Flux;

class BanAdd extends Component
{

    // public $databan;
    public $nama_ban;
    public $harga;
    public $merk;
    public $isMember = false;

    public $databanYangAkanDiEdit = false;

    // public function mount(){
    //     $this->databan = Databan::all();
    // }


    public function showModalAddBan(){
        Flux::modal('modalAddBan')->show();
    }


    public function showModalEditBan(Databan $databan){
        $this->databanYangAkanDiEdit = $databan;
        Flux::modal('modalAddBan')->show();
    }


    public function isikanFormEdit(Databan $databan){
        $this->databanYangAkanDiEdit = $databan;
        $this->nama_ban = $databan->nama_ban;
        $this->harga = $databan->harga;
        $this->merk = $databan->merk;
        Flux::modal('modalAddBan')->show();
    }

    public function addban(){
        
        $this->validate([
            'nama_ban' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
        ]);


        if ($this->databanYangAkanDiEdit) {
            $databan = Databan::findOrFail($this->databanYangAkanDiEdit->id);
            $databan->nama_ban = $this->nama_ban;
            $databan->harga = $this->harga;
            $databan->merk = $this->merk;
            $databan->save();
        } else {
            $databan = new Databan();
            $databan->nama_ban = $this->nama_ban;
            $databan->harga = $this->harga;
            $databan->merk = $this->merk;
            $databan->save();
        }

        $this->databan = Databan::all();

        $this->reset(['nama_ban', 'harga', 'merk']);

      
        Flux::modal('modalAddBan')->close();

        Flux::toast(
            heading: 'Changes saved.',
            text: 'Data ban berhasil ditambahkan.',
        );
    }

    
    public function delete(Databan $databan){
        $databan->delete();

        Flux::toast(
            heading: 'Changes saved.',
            text: 'Data ban berhasil dihapus.',
        );

        $this->reset(['nama_ban', 'harga', 'merk']);
        
        
    }

    public function render()
    {
        return view('livewire.tokoban.ban-add', [
            'databan' => Databan::all(),
        ]);
    }
}
