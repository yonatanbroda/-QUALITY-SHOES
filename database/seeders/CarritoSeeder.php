<?php

namespace Database\Seeders;

use App\Models\Carrito;
use Illuminate\Database\Seeder;

class CarritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=3;
        $carrito->id_producto=3;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=31;
        $carrito->id_producto=7;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=30;
        $carrito->id_producto=10;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=19;
        $carrito->id_producto=8;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=18;
        $carrito->id_producto=20;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=22;
        $carrito->id_producto=25;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=20;
        $carrito->id_producto=27;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=25;
        $carrito->id_producto=37;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=8;
        $carrito->id_producto=33;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=24;
        $carrito->id_producto=35;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=28;
        $carrito->id_producto=30;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=23;
        $carrito->id_producto=15;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=26;
        $carrito->id_producto=39;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=27;
        $carrito->id_producto=17;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=32;
        $carrito->id_producto=18;
        $carrito->save();

        $carrito=New Carrito();
        $carrito->cantidad=1;
        $carrito->id_user=29;
        $carrito->id_producto=21;
        $carrito->save();
    }
}
