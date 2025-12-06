<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
   use HasFactory;
    
   protected $guarded = [];

   public function tires(){
    return $this -> hasMany(Tire::class);
   }

   public function mount()
   {
    $this->categories = Category::all();
   }


}
