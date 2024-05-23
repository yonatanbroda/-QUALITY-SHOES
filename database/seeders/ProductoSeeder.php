<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto();
        $producto->id = 1;
        $producto->codigo = "3344M99";
        $producto->color = 'Blanco';
        $producto->precio = '185';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 1; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 2;
        $producto->id_talla = 7;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fshoes-nike.png?alt=media&token=e94e68ee-29e4-4d55-8766-d3a4d551d9eb';
        $producto->save();

        $producto = new Producto();
        $producto->id = 2;
        $producto->codigo = "5742B4";
        $producto->color = 'Azul';
        $producto->precio = '220';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 9;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidas-yeezy.png?alt=media&token=fc2e0f90-2686-45ee-a134-da0fb82dfbf8';
        $producto->save();

        $producto = new Producto();
        $producto->id = 3;
        $producto->codigo = "5742B3";
        $producto->color = 'Azul';
        $producto->precio = '220';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 11;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidas-yeezy.png?alt=media&token=fc2e0f90-2686-45ee-a134-da0fb82dfbf8';
        $producto->save();

        $producto = new Producto();
        $producto->id = 4;
        $producto->codigo = "3344M5";
        $producto->color = 'Blanco';
        $producto->precio = '160';
        $producto->descripcion = 'Deportivo';
        $producto->id_inventario = 3; /*----*/
        $producto->id_marca = 2;
        $producto->id_descuento = 1;
        $producto->id_talla = 7;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fpuma-brothel.png?alt=media&token=226b42d0-cf70-4365-a925-a4b76945e2d6';
        $producto->save();

        $producto = new Producto();
        $producto->id = 5;
        $producto->codigo = "4644M9";
        $producto->color = 'Blanco';
        $producto->precio = '250';
        $producto->descripcion = 'Calabasas';
        $producto->id_inventario = 1; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 2;
        $producto->id_talla = 6;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidas-yeezy2.png?alt=media&token=ace50192-583f-4c60-b79f-52048c30a3e3';
        $producto->save();

        $producto = new Producto();
        $producto->id = 6;
        $producto->codigo = "2342A7";
        $producto->color = 'Amarillo';
        $producto->precio = '220';
        $producto->descripcion = 'Yeezy-boost';
        $producto->id_inventario = 3; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 1;
        $producto->id_talla = 9;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fyeezy-boost.png?alt=media&token=7175e8bf-beda-4222-8e60-564e3e34dda4';
        $producto->save();

        $producto = new Producto();
        $producto->id = 7;
        $producto->codigo = "2342A5";
        $producto->color = 'Amarillo';
        $producto->precio = '220';
        $producto->descripcion = 'Yeezy-boost';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 1;
        $producto->id_talla = 10;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fyeezy-boost.png?alt=media&token=7175e8bf-beda-4222-8e60-564e3e34dda4';
        $producto->save();

        $producto = new Producto();
        $producto->id = 8;
        $producto->codigo = "2342A3";
        $producto->color = 'Amarillo';
        $producto->precio = '220';
        $producto->descripcion = 'Yeezy-boost';
        $producto->id_inventario = 1; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 1;
        $producto->id_talla = 11;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fyeezy-boost.png?alt=media&token=7175e8bf-beda-4222-8e60-564e3e34dda4';
        $producto->save();

        $producto = new Producto();
        $producto->id = 9;
        $producto->codigo = "4644M3";
        $producto->color = 'Blanco';
        $producto->precio = '250';
        $producto->descripcion = 'Calabasas';
        $producto->id_inventario = 1; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 2;
        $producto->id_talla = 4;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidas-yeezy2.png?alt=media&token=ace50192-583f-4c60-b79f-52048c30a3e3';
        $producto->save();

        $producto = new Producto();
        $producto->id = 10;
        $producto->codigo = "4644M8";
        $producto->color = 'Blanco';
        $producto->precio = '250';
        $producto->descripcion = 'Calabasas';
        $producto->id_inventario = 1; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 2;
        $producto->id_talla = 10;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidas-yeezy2.png?alt=media&token=ace50192-583f-4c60-b79f-52048c30a3e3';
        $producto->save();

        $producto = new Producto();
        $producto->id = 11;
        $producto->codigo = "3344M95";
        $producto->color = 'Blanco';
        $producto->precio = '185';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 1; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 2;
        $producto->id_talla = 5;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fshoes-nike.png?alt=media&token=e94e68ee-29e4-4d55-8766-d3a4d551d9eb';
        $producto->save();

        $producto = new Producto();
        $producto->id = 12;
        $producto->codigo = "3344M97";
        $producto->color = 'Blanco';
        $producto->precio = '185';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 1; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 2;
        $producto->id_talla = 6;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fshoes-nike.png?alt=media&token=e94e68ee-29e4-4d55-8766-d3a4d551d9eb';
        $producto->save();

        $producto = new Producto();
        $producto->id = 13;
        $producto->codigo = "3344M3";
        $producto->color = 'Blanco';
        $producto->precio = '185';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 1; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 2;
        $producto->id_talla = 8;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fshoes-nike.png?alt=media&token=e94e68ee-29e4-4d55-8766-d3a4d551d9eb';
        $producto->save();

        $producto = new Producto();
        $producto->id = 14;
        $producto->codigo = "5112B4";
        $producto->color = 'Cafe';
        $producto->precio = '200';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 11;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fteniscafe.jpg?alt=media&token=012f929d-d933-4e34-81ab-4f5e13825b15';
        $producto->save();

        $producto = new Producto();
        $producto->id = 15;
        $producto->codigo = "9982C4";
        $producto->color = 'verde';
        $producto->precio = '350';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 3;
        $producto->id_descuento = 6;
        $producto->id_talla = 12;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fimage.jfif?alt=media&token=d02ac1ed-dd06-40d5-91fc-5af67820d585';
        $producto->save();

        $producto = new Producto();
        $producto->id = 16;
        $producto->codigo = "1282B4";
        $producto->color = 'Blanco';
        $producto->precio = '420';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 7;
        $producto->id_descuento = 7;
        $producto->id_talla = 1;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fblanceblanco.jpeg?alt=media&token=17419b05-edeb-402c-9280-ed6a561e35de';
        $producto->save();

        $producto = new Producto();
        $producto->id = 17;
        $producto->codigo = "2782A9";
        $producto->color = 'Celeste';
        $producto->precio = '260';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 3; /*----*/
        $producto->id_marca = 6;
        $producto->id_descuento = 5;
        $producto->id_talla = 3;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Funderceleste.jpg?alt=media&token=6892fead-d591-415e-8f08-9882f5282a07';
        $producto->save();

        $producto = new Producto();
        $producto->id = 18;
        $producto->codigo = "8552D4";
        $producto->color = 'Negro';
        $producto->precio = '520';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 1; /*----*/
        $producto->id_marca = 5;
        $producto->id_descuento = 8;
        $producto->id_talla = 4;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2FSkechersnegro.jfif?alt=media&token=beadcf76-ce28-4408-b0fb-40a1daa6be7b';
        $producto->save();

        $producto = new Producto();
        $producto->id = 19;
        $producto->codigo = "8882F5";
        $producto->color = 'Dorado';
        $producto->precio = '720';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 3; /*----*/
        $producto->id_marca = 4;
        $producto->id_descuento = 6;
        $producto->id_talla = 1;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2FAlexander%20McQueendorado.jpg?alt=media&token=5d0ab79e-822c-4e4b-89bc-7da46a4ae992';
        $producto->save();

        $producto = new Producto();
        $producto->id = 20;
        $producto->codigo = "9982B3";
        $producto->color = 'Rojo';
        $producto->precio = '220';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 1;
        $producto->id_talla = 12;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidarojo.jfif?alt=media&token=84b6f141-83c9-4eab-aabc-2def9985db1f';
        $producto->save();

        $producto = new Producto();
        $producto->id = 21;
        $producto->codigo = "3782E4";
        $producto->color = 'Rosado';
        $producto->precio = '440';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 3;
        $producto->id_descuento = 9;
        $producto->id_talla = 7;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fnikerosa.jpg?alt=media&token=abf84a7c-7bf9-4e8f-abaf-428e74c46508';
        $producto->save();

        $producto = new Producto();
        $producto->id = 22;
        $producto->codigo = "3382K4";
        $producto->color = 'Morado';
        $producto->precio = '220';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 3; /*----*/
        $producto->id_marca = 3;
        $producto->id_descuento = 3;
        $producto->id_talla = 3;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fnikemorado.jpg?alt=media&token=356a76f2-b9d0-462b-870e-d316876e881f';
        $producto->save();

        $producto = new Producto();
        $producto->id = 23;
        $producto->codigo = "8552B5";
        $producto->color = 'Amarrillo';
        $producto->precio = '220';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 5;
        $producto->id_descuento = 5;
        $producto->id_talla = 10;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2FD_NQ_NP_749755-MLM43466221913_092020-O.jpg?alt=media&token=1d67907b-261f-456e-9e1d-531dc77d967a';
        $producto->save();

        $producto = new Producto();
        $producto->id = 24;
        $producto->codigo = "9682C4";
        $producto->color = 'Naranja';
        $producto->precio = '800';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 5;
        $producto->id_talla = 9;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidasnaranajas.jpg?alt=media&token=85d147c6-d146-4b85-9bc9-96013748328c';
        $producto->save();


        $producto = new Producto();
        $producto->id = 25;
        $producto->codigo = "63632C4";
        $producto->color = 'Azul';
        $producto->precio = '520';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 6;
        $producto->id_descuento = 5;
        $producto->id_talla = 8;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2FUnder%20Armourazul.jfif?alt=media&token=4e8fc264-3b9a-49cd-a5fb-89089425dece';
        $producto->save();

        $producto = new Producto();
        $producto->id = 26;
        $producto->codigo = "5782J4";
        $producto->color = 'Verde agua';
        $producto->precio = '920';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 4;
        $producto->id_descuento = 3;
        $producto->id_talla = 2;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fimg_2141.jpg?alt=media&token=a562b2d2-348f-49fb-b757-afb0fc46d5fe';
        $producto->save();


        $producto = new Producto();
        $producto->id = 27;
        $producto->codigo = "8762K6";
        $producto->color = 'Blanco';
        $producto->precio = '820';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 4;
        $producto->id_descuento = 2;
        $producto->id_talla = 1;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fimage%20(1).jfif?alt=media&token=289d909d-44f5-4b1f-8702-6966741ef1cf';
        $producto->save();


        $producto = new Producto();
        $producto->id = 28;
        $producto->codigo = "5412I4";
        $producto->color = 'Blanco';
        $producto->precio = '220';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 7;
        $producto->id_descuento = 1;
        $producto->id_talla = 6;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2FNew%20Balanceblanco.jpg?alt=media&token=7d92866b-fa50-4097-8341-6b42bc29c039';
        $producto->save();

        $producto = new Producto();
        $producto->id = 29;
        $producto->codigo = "9782A4";
        $producto->color = 'Negro';
        $producto->precio = '620';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 12;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidasnegro.jpg?alt=media&token=3c4aeba8-7608-487b-b86a-1564e4a46b94';
        $producto->save();


        $producto = new Producto();
        $producto->id = 30;
        $producto->codigo = "8732J0";
        $producto->color = 'Mostaza';
        $producto->precio = '220';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 3;
        $producto->id_talla = 8;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidasmostaza.jfif?alt=media&token=43b16dbb-2f61-4d2b-8ed2-f07e10ced626';
        $producto->save();

        $producto = new Producto();
        $producto->id = 31;
        $producto->codigo = "7782C7";
        $producto->color = 'Rojo';
        $producto->precio = '420';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 12;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidasrojo.jpg?alt=media&token=880b916a-2f2d-45a0-bc06-44ac48a0e1ae';
        $producto->save();

        $producto = new Producto();
        $producto->id = 32;
        $producto->codigo = "8782C4";
        $producto->color = 'Cafe';
        $producto->precio = '920';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 3;
        $producto->id_talla = 1;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidascafess.jpg?alt=media&token=faa96356-b5b9-4e86-812f-f72225ab6e5f';
        $producto->save();

        $producto = new Producto();
        $producto->id = 33;
        $producto->codigo = "8755P0";
        $producto->color = 'Blanco';
        $producto->precio = '250';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 2;
        $producto->id_descuento = 2;
        $producto->id_talla = 1;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fpumablanco.jpg?alt=media&token=def0ddf2-c646-47f3-ae1c-1dae6acb2023';
        $producto->save();

        $producto = new Producto();
        $producto->id = 34;
        $producto->codigo = "8781F1";
        $producto->color = 'Blanco';
        $producto->precio = '330';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 3;
        $producto->id_talla = 9;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidasblancos.jpg?alt=media&token=337bd1a3-d814-40c9-86d9-5c8b9df7a51a';
        $producto->save();

        $producto = new Producto();
        $producto->id = 35;
        $producto->codigo = "3332E4";
        $producto->color = 'Plomo';
        $producto->precio = '420';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 3; /*----*/
        $producto->id_marca = 5;
        $producto->id_descuento = 4;
        $producto->id_talla = 4;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2FSkechersplomo.jpg?alt=media&token=e292c141-72ed-459c-8af1-c33283bf7e60';
        $producto->save();

        $producto = new Producto();
        $producto->id = 36;
        $producto->codigo = "3282J5";
        $producto->color = 'Negro';
        $producto->precio = '220';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 3; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 5;
        $producto->id_talla = 8;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidasnegross.jpg?alt=media&token=71f38865-84eb-4cb1-a275-4ad944ee38c0';
        $producto->save();

        $producto = new Producto();
        $producto->id = 37;
        $producto->codigo = "1232A4";
        $producto->color = 'Rosado';
        $producto->precio = '720';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 1;
        $producto->id_talla = 7;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidasrosas.jfif?alt=media&token=c9ed8965-48ad-4ad1-97de-33ae583c799c';
        $producto->save();

        $producto = new Producto();
        $producto->id = 38;
        $producto->codigo = "3282J4";
        $producto->color = 'Negro';
        $producto->precio = '220';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 3; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 5;
        $producto->id_talla = 9;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidasnegross.jpg?alt=media&token=71f38865-84eb-4cb1-a275-4ad944ee38c0';
        $producto->save();

        $producto = new Producto();
        $producto->id = 39;
        $producto->codigo = "8755P4";
        $producto->color = 'Blanco';
        $producto->precio = '250';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 2;
        $producto->id_descuento = 2;
        $producto->id_talla = 1;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fpumablanco.jpg?alt=media&token=def0ddf2-c646-47f3-ae1c-1dae6acb2023';
        $producto->save();

        $producto = new Producto();
        $producto->id = 40;
        $producto->codigo = "8732J4";
        $producto->color = 'Mostaza';
        $producto->precio = '220';
        $producto->descripcion = 'Juvenil';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 3;
        $producto->id_talla = 7;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fadidasmostaza.jfif?alt=media&token=43b16dbb-2f61-4d2b-8ed2-f07e10ced626';
        $producto->save();

        $producto = new Producto();
        $producto->id = 41;
        $producto->codigo = "A7B230";
        $producto->color = 'Rojo';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 3; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 6;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa1.jpeg?alt=media&token=cdf79536-d7a0-449c-b2cf-36ba71893975';
        $producto->save();

        $producto = new Producto();
        $producto->id = 42;
        $producto->codigo = "A7B230";
        $producto->color = 'Rojo';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 4; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 7;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa1.jpeg?alt=media&token=cdf79536-d7a0-449c-b2cf-36ba71893975';
        $producto->save();

        $producto = new Producto();
        $producto->id = 43;
        $producto->codigo = "A7B230";
        $producto->color = 'Rojo';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 1; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 8;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa1.jpeg?alt=media&token=cdf79536-d7a0-449c-b2cf-36ba71893975';
        $producto->save();

        $producto = new Producto();
        $producto->id = 44;
        $producto->codigo = "A7B230";
        $producto->color = 'Rojo';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 9;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa1.jpeg?alt=media&token=cdf79536-d7a0-449c-b2cf-36ba71893975';
        $producto->save();

        $producto = new Producto();
        $producto->id = 45;
        $producto->codigo = "A7B230";
        $producto->color = 'Amarillo';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 6;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa2.jpeg?alt=media&token=3b9f0ec4-a0bb-477f-8b27-a3a9c834dcec';
        $producto->save();

        $producto = new Producto();
        $producto->id = 46;
        $producto->codigo = "A7B230";
        $producto->color = 'Amarillo';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 5; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 7;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa2.jpeg?alt=media&token=3b9f0ec4-a0bb-477f-8b27-a3a9c834dcec';
        $producto->save();

        $producto = new Producto();
        $producto->id = 47;
        $producto->codigo = "A7B230";
        $producto->color = 'Amarillo';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 3; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 8;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa2.jpeg?alt=media&token=3b9f0ec4-a0bb-477f-8b27-a3a9c834dcec';
        $producto->save();

        $producto = new Producto();
        $producto->id = 48;
        $producto->codigo = "A7B230";
        $producto->color = 'Amarillo';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 1; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 9;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa2.jpeg?alt=media&token=3b9f0ec4-a0bb-477f-8b27-a3a9c834dcec';
        $producto->save();

        $producto = new Producto();
        $producto->id = 49;
        $producto->codigo = "A7B230";
        $producto->color = 'Verde';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 5; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 7;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa3.jpeg?alt=media&token=1a2e189f-b2ec-4ecb-9915-c94cf7117394';
        $producto->save();

        $producto = new Producto();
        $producto->id = 50;
        $producto->codigo = "A7B230";
        $producto->color = 'Verde';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 6; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 8;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa3.jpeg?alt=media&token=1a2e189f-b2ec-4ecb-9915-c94cf7117394';
        $producto->save();

        $producto = new Producto();
        $producto->id = 51;
        $producto->codigo = "A7B230";
        $producto->color = 'Verde';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 6; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 9;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa3.jpeg?alt=media&token=1a2e189f-b2ec-4ecb-9915-c94cf7117394';
        $producto->save();

        $producto = new Producto();
        $producto->id = 52;
        $producto->codigo = "A7B230";
        $producto->color = 'Verde';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 2; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 10;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa3.jpeg?alt=media&token=1a2e189f-b2ec-4ecb-9915-c94cf7117394';
        $producto->save();

        $producto = new Producto();
        $producto->id = 53;
        $producto->codigo = "A7B230";
        $producto->color = 'Verde';
        $producto->precio = '340';
        $producto->descripcion = 'Ultra boost';
        $producto->id_inventario = 8; /*----*/
        $producto->id_marca = 1;
        $producto->id_descuento = 4;
        $producto->id_talla = 11;
        $producto->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/Productos%2Fa3.jpeg?alt=media&token=1a2e189f-b2ec-4ecb-9915-c94cf7117394';
        $producto->save();
    }
}
