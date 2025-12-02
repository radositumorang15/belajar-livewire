<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Categories\Index;
use App\Livewire\Dashboard;
use App\Livewire\Coba\CobaSatu;
use App\Livewire\Tires\Tires;
use App\Livewire\Component\ComponentSatu;
use App\Livewire\Component\ComponentTiga;
use App\Livewire\Component\ComponentEmpat;
use App\Livewire\Component\ComponentDua;
use App\Livewire\Component\ComponentLima;
use App\Livewire\Component\ComponentEnam;
use App\Livewire\Component\ComponentTujuh;
use App\Livewire\Mobil\MobilAdd;
use App\Livewire\Mobil\MobilList;
use App\Livewire\Motor\MotorAdd;
use App\Livewire\Motor\MotorList;   
use App\Livewire\Form\Form1;



Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/categories', Index::class)->name('categories.index');
Route::get('/coba-satu', CobaSatu::class)->name('coba-satu');
Route::get('/tires', Tires::class)->name('tires');
Route::get('/component-tiga', ComponentTiga::class)->name('component-tiga');
Route::get('/component-empat/{id}', ComponentEmpat::class)->name('component-empat');
Route::get('/component-dua', ComponentDua::class)->name('component-dua');
Route::get('/component-lima', ComponentLima::class)->name('component-lima');
Route::get('/component-enam', ComponentEnam::class)->name('component-enam');
Route::get('/component-tujuh', ComponentTujuh::class)->name('component-tujuh');
Route::get('/mobil-add', MobilAdd::class)->name('mobil-add');
Route::get('/mobil-list', MobilList::class)->name('mobil-list');
Route::get('/motor-add', MotorAdd::class)->name('motor-add');
Route::get('/motor-list', MotorList::class)->name('motor-list');
Route::get('/form-1', Form1::class)->name('form-1');