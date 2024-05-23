<?php

namespace Database\Seeders;

use App\Models\Inventario;
use Illuminate\Database\Seeder;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inventario=New Inventario();
        $inventario->id=1;
        $inventario->cant_inicial=3;
        $inventario->cant_disponible=2;
        $inventario->save();

        $inventario=New Inventario();
        $inventario->id=2;
        $inventario->cant_inicial=2;
        $inventario->cant_disponible=1;
        $inventario->save();

        $inventario=New Inventario();
        $inventario->id=3;
        $inventario->cant_inicial=1;
        $inventario->cant_disponible=1;
        $inventario->save();

        
        $inventario=New Inventario();
        $inventario->id=4;
        $inventario->cant_inicial=4;
        $inventario->cant_disponible=3;
        $inventario->save();

        
        $inventario=New Inventario();
        $inventario->id=5;
        $inventario->cant_inicial=0;
        $inventario->cant_disponible=0;
        $inventario->save();

        
        $inventario=New Inventario();
        $inventario->id=6;
        $inventario->cant_inicial=1;
        $inventario->cant_disponible=1;
        $inventario->save();

        
        $inventario=New Inventario();
        $inventario->id=7;
        $inventario->cant_inicial=3;
        $inventario->cant_disponible=1;
        $inventario->save();

        
        $inventario=New Inventario();
        $inventario->id=8;
        $inventario->cant_inicial=2;
        $inventario->cant_disponible=2;
        $inventario->save();

        
        $inventario=New Inventario();
        $inventario->id=9;
        $inventario->cant_inicial=1;
        $inventario->cant_disponible=0;
        $inventario->save();

        
        $inventario=New Inventario();
        $inventario->id=10;
        $inventario->cant_inicial=4;
        $inventario->cant_disponible=4;
        $inventario->save();


        
        $inventario=New Inventario();
        $inventario->id=11;
        $inventario->cant_inicial=0;
        $inventario->cant_disponible=0;
        $inventario->save();

        
        $inventario=New Inventario();
        $inventario->id=12;
        $inventario->cant_inicial=6;
        $inventario->cant_disponible=2;
        $inventario->save();

        
        $inventario=New Inventario();
        $inventario->id=13;
        $inventario->cant_inicial=10;
        $inventario->cant_disponible=10;
        $inventario->save();

        
        $inventario=New Inventario();
        $inventario->id=14;
        $inventario->cant_inicial=9;
        $inventario->cant_disponible=4;
        $inventario->save();

        
        $inventario=New Inventario();
        $inventario->id=15;
        $inventario->cant_inicial=8;
        $inventario->cant_disponible=7;
        $inventario->save();
    }
}
