<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prveedor extends Model
{
    use HasFactory;
    protected $guarded =['id','created_at','updated_at'];

     //Relacion de uno a muchos
     public function notaDeIngresoDelProducto()
     {
         return $this->hasMany(NotaDeIngresoDelProducto::class);
     }
}
