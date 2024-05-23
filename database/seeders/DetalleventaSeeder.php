<?php

namespace Database\Seeders;

use App\Models\Detalleventa;
use Illuminate\Database\Seeder;

class DetalleventaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 3;
        $detalleventa->id_notaventa = 1;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 7;
        $detalleventa->id_notaventa = 2;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 10;
        $detalleventa->id_notaventa = 3;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 8;
        $detalleventa->id_notaventa = 4;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 20;
        $detalleventa->id_notaventa = 5;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 25;
        $detalleventa->id_notaventa = 6;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 27;
        $detalleventa->id_notaventa = 7;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 37;
        $detalleventa->id_notaventa = 8;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 33;
        $detalleventa->id_notaventa = 9;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 35;
        $detalleventa->id_notaventa = 10;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 30;
        $detalleventa->id_notaventa = 11;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 15;
        $detalleventa->id_notaventa = 12;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 39;
        $detalleventa->id_notaventa = 13;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 17;
        $detalleventa->id_notaventa = 14;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 18;
        $detalleventa->id_notaventa = 15;
        $detalleventa->save();

        $detalleventa=New Detalleventa();
        $detalleventa->cantidad = 1;
        $detalleventa->id_producto = 21;
        $detalleventa->id_notaventa = 16;
        $detalleventa->save();
    }
}
