<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use App\Models\Detalleventa;
use App\Models\Factura;
use App\Models\Marca;
use App\Models\Notaventa;
use App\Models\Producto;
use App\Models\talla;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class FacturaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function index()
    {
        $factura = Factura::all();
        $notaventa = Notaventa::all();
        $producto = Producto::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        $user = User::all();

        return view('facturas.index', compact('factura', 'notaventa'));
    }


    public function create()
    {
        return view('facturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factura = new Factura();
        $factura->Nro_aut = $request->input('Nro_aut');
        $factura->Fecha_f = $request->input('Fecha_f');
        $factura->nit = $request->input('nit');
        $factura->monTotal = $request->input('monTotal');
        $factura->Id_venta = $request->input('Id_venta');
        $factura->save();
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Factura')->log('Registró')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $factura->id;
        $lastActivity->save();
        return redirect()->route('facturas.index', $factura);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notaventa = Notaventa::findOrFail($id);
        $detalleventa = Detalleventa::all();
        $producto = Producto::all();
        $marca = Marca::all();
        $descuento = Descuento::all();
        $talla = talla::all();
        $user = User::all();
        return view('facturas.show', compact('notaventa', 'detalleventa', 'producto', 'marca', 'descuento', 'talla', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factura = factura::findOrFail($id);
        return view('facturas.edit', compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, factura $factura)
    {
        $factura->update($request->all());
        date_default_timezone_set("America/La_Paz");
        activity()->useLog('Factura')->log('Editó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $factura->id;
        $lastActivity->save();
        return redirect()->route('facturas.index', $factura);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factura = Factura::findOrFail($id);
        date_default_timezone_set("America/La_Paz");

        activity()->useLog('Factura')->log('Eliminó')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $factura->id;
        $lastActivity->save();
        $factura->delete();
        return redirect()->route('facturas.index');
    }
}
