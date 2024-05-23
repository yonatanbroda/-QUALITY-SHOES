<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Prveedor;
use App\Models\Inventario;
use App\Models\Producto;

class NotaDeIngresoDelProducto extends Model
{
    use HasFactory;
    protected $guarded =['id','created_at','updated_at'];

    //Relacion de uno a muchos inversa
    public function Inventario()
    {
        return $this->belongsTo(Almacen::class);
    }
    //Relacion de uno a muchos inversa
    public function Prveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }
    //Relacion de uno a muchos inversa
    public function Producto()
    {
        return $this->belongsTo(Parabrisa::class);
    }
}
