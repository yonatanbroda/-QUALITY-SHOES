<?php

namespace Database\Seeders;

use App\Models\Prveedor;
use Illuminate\Database\Seeder;

class PrveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Prveedor::factory(5)->create();

    }
}
