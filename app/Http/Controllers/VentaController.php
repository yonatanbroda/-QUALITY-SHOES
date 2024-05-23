<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Descuento;
use App\Models\Deseo;
use App\Models\Detalleventa;
use App\Models\Factura;
use App\Models\Inventario;
use App\Models\Marca;
use App\Models\Notaventa;
use App\Models\Producto;
use App\Models\talla;
use App\Models\User;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('onlyCliente');
    }

    public function index()
    {
        $factura =Factura::all();
        $notaventa = Notaventa::all();
        $deseo = Deseo::all();
        $producto = Producto::all();
        $inventario = Inventario::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        $carrito = Carrito::all();
        $user = User::all();
        return view('ventas.index', compact('factura','notaventa','deseo', 'producto', 'inventario', 'marca', 'descuento', 'talla', 'carrito', 'user'));
    }

    public function create()
    {

        $deseo = Deseo::all();
        $producto = Producto::all();
        $inventario = Inventario::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        $carrito = Carrito::all();
        $user = User::all();
        return view('ventas.create', compact('deseo', 'producto', 'inventario', 'marca', 'descuento', 'talla', 'carrito', 'user'));
    }

    public function show($id)
    {
        $notaventa = Notaventa::findOrFail($id);
        $detalleventa = Detalleventa::all();
        $producto = Producto::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        $user = User::all();
        return view('ventas.show', compact('notaventa','detalleventa','producto', 'marca', 'descuento', 'talla', 'user'));
    }

}
