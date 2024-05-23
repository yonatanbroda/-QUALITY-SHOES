<?php

namespace Database\Seeders;

use App\Models\Notaventa;
use Illuminate\Database\Seeder;

class NotaventaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notaventa=New Notaventa();
        $notaventa->monto_total = 220;
        $notaventa->id_vendedor = 2;
        $notaventa->id_cliente = 3;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 220;
        $notaventa->id_vendedor = 6;
        $notaventa->id_cliente = 31;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 250;
        $notaventa->id_vendedor = 4;
        $notaventa->id_cliente = 30;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 220;
        $notaventa->id_vendedor = 12;
        $notaventa->id_cliente = 19;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 220;
        $notaventa->id_vendedor = 17;
        $notaventa->id_cliente = 18;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 520;
        $notaventa->id_vendedor = 2;
        $notaventa->id_cliente = 22;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 820;
        $notaventa->id_vendedor = 21;
        $notaventa->id_cliente = 20;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 720;
        $notaventa->id_vendedor = 17;
        $notaventa->id_cliente = 25;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 250;
        $notaventa->id_vendedor = 4;
        $notaventa->id_cliente = 8;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 420;
        $notaventa->id_vendedor = 2;
        $notaventa->id_cliente = 24;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 220;
        $notaventa->id_vendedor = 12;
        $notaventa->id_cliente = 28;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 350;
        $notaventa->id_vendedor = 21;
        $notaventa->id_cliente = 23;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 250;
        $notaventa->id_vendedor = 9;
        $notaventa->id_cliente = 26;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 260;
        $notaventa->id_vendedor = 6;
        $notaventa->id_cliente = 27;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 520;
        $notaventa->id_vendedor = 4;
        $notaventa->id_cliente = 32;
        $notaventa->save();

        $notaventa=New Notaventa();
        $notaventa->monto_total = 440;
        $notaventa->id_vendedor = 17;
        $notaventa->id_cliente = 29;
        $notaventa->save();
    }
}
