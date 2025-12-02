<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tire extends Model
{
    use HasFactory;
    
   protected $guarded = [];

   public function tires(){
    return $this -> belongTo(Category::class);
   }
}
