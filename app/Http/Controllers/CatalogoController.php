<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Descuento;
use App\Models\Deseo;
use App\Models\Inventario;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\talla;
use App\Models\User;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index()
    {
        $user = User::all();
        $deseo = Deseo::all();
        $producto = Producto::all();
        $inventario = Inventario::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        $carrito = Carrito::all();
        return view('catalogos.index', compact('user', 'deseo', 'producto', 'inventario', 'marca', 'descuento', 'talla', 'carrito'));
    }
}
