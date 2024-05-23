<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca=New Marca();
        $marca->id=1;
        $marca->nombre="Adidas";
        $marca->save();

        $marca=New Marca();
        $marca->id=2;
        $marca->nombre="Puma";
        $marca->save();

        $marca=New Marca();
        $marca->id=3;
        $marca->nombre="Nike";
        $marca->save();
        
        $marca=New Marca();
        $marca->id=4;
        $marca->nombre="Alexander McQueen";
        $marca->save();
        
        $marca=New Marca();
        $marca->id=5;
        $marca->nombre="Skechers";
        $marca->save();
        
        $marca=New Marca();
        $marca->id=6;
        $marca->nombre="Under Armour";
        $marca->save();
        
        $marca=New Marca();
        $marca->id=7;
        $marca->nombre="New Balance";
        $marca->save();

        $marca=New Marca();
        $marca->id=8;
        $marca->nombre="Reebok";
        $marca->save();
    }
}
