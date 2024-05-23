<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use App\Models\Detalleventa;
use App\Models\Notaventa;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class DetalleventaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
     
    }
    
    public function index()
    {
        $detalleventa = Detalleventa::all();
        $producto = Producto::all();
        $notaventa = Notaventa::all();
        $descuento = Descuento::all();
        //$user= User::all();
        return view('detalleventas.index', compact('detalleventa', 'producto', 'notaventa','descuento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = Producto::all();
        $notaventa = Notaventa::all();
        return view('detalleventas.create', compact('producto', 'notaventa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalleventa = new detalleventa();
        $detalleventa->id_producto = $request->input('id_producto');
        $detalleventa->cantidad = $request->input('cantidad');
        $detalleventa->id_notaventa = $request->input('id_notaventa');
        $detalleventa->save();
        //bitacora
        activity()->useLog('gestionar detalle venta')->log('Registro')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $detalleventa->id;
        $lastActivity->save();
        return redirect()->route('detalleventas.index', $detalleventa);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleventa = detalleventa::findOrFail($id);
        $producto = Producto::all();
        $notaventa = Notaventa::all();
        //bitacora
        activity()->useLog('gestionar detalle venta')->log('Edito')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $detalleventa->id;
        $lastActivity->save();
        return view('detalleventas.edit', compact('detalleventa', 'producto', 'notaventa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalleventa $detalleventa)
    {
        //$request->validate([
        //    'descripcion' => 'required|unique:detalleventas,descripcion,$detalleventa->id' ]);/*investigar esta linea */

        //$detalleventa=detalleventa::findOrFail($id);
        //$detalleventa->monto_total=$request->input('monto_total');
        //$detalleventa->save();

        $detalleventa->update($request->all());
        return redirect()->route('detalleventas.index', $detalleventa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleventa = detalleventa::findOrFail($id);
        $detalleventa->delete();
        //bitacora
        activity()->useLog('gestionar detalle venta')->log('Elimino')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $detalleventa->id;
        $lastActivity->save();
        return redirect()->route('detalleventas.index');
    }
}
