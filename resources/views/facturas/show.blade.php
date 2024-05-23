<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width" />
    <!-- ETIQUETAS REFERENCIALES -->
    <meta name="description" content="Tienda Online">
    <meta name="keywords" content="tienda, compras, precio, ventas, ecomerce, comercio, online, store">
    <!--<meta http-equiv="author" content="Quality-Store">-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style/font-awesome.min.css') }}">
    <title>Quality-Store</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/bootstrap.min.css') }}" />

    
    <!-- Font Awesome Icon -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{ asset('style/font-awesome.min.css') }}">

    <!-- Hoja de estilo personalizada -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/custom.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('style/factura.css') }}" />

    <!-- home.css añadir imagenes de boton para inicio -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/home.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{ asset('js/push.js') }}"></script>
    <script src="{{ asset('js/serverWorker.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.jpg') }}" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>

<body>
    <!-- HEADER -->
    <!-- HEADER -->
    <header>

        <div id="encabezado-superior">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a target="_blank"
                            href="https://api.whatsapp.com/send/?phone=%2B59178416172&text=Mas%20informaci%C3%B3n&app_absent=0"><i
                                class="fa fa-phone"></i> +59178416172</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> QualityStore@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> direccion</a></li>
                </ul>
                <ul class="header-links pull-right">
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}"><i class="fa fa-user-o"></i>Iniciar</a></li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-user-o"></i>Registrar</a></li>
                    @else
                        @can('Panel')
                            <li><a href="{{ route('users.index') }}"><i class="fa fa-user-o"></i>Panel</a></li>
                        @endcan
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                                {{ __('Cerrar Sesión') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{ route('home') }}" class="logo">
                                <img src="{{ asset('img/icono.png') }}" alt="QualityStore" width="300px">
                                {{--QualityStore&#174;--}}
                            </a>
                        </div>
                    </div>
                    <!-- BARRA DE BÚSQUEDA
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="0">Categorías</option>
                                    <option value="1">Promoción</option>
                                    <option value="1">Adidas</option>
                                    <option value="1">Nike</option>
                                    <option value="1">Fila</option>
                                </select>
                                <input class="input" placeholder="Buscar">
                                <button class="search-btn">Buscar</button>
                            </form>
                        </div>
                    </div>
                   BARRA DE BÚSQUEDA -->
                
                    <!-- USUARIO -->
                    <div class="header-ctn">
                        <!-- Notificacion -->
                        <div class="dropdown">
                            <a href="#" id="sendPushNotification">
                                <i class="far fa-bell"></i>
                                <span>Notificacion</span>
                            </a>
                        </div>
                        <!-- /Notificacion -->

                        <!-- Carrito -->
                        <div class="dropdown">
                            <a href="{{ route('carritos.index') }}">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Carrito</span>
                            </a>
                        </div>
                        <!-- /Carrito -->

                        <!-- Perfil -->
                        <div class="dropdown">
                            <a href="{{ route('perfil.index') }}">
                                <i class="far fa-user"></i>
                                <span>Perfil</span>
                            </a>
                        </div>
                        <!-- /Perfil -->
                    </div>

                    <!-- Modal Carrito -->
                    <div class="col align-self-center text-end pe-5">
                        <div class="modal fade" id="dialogo1" tabindex="-1" aria-labelledby="dialogo1ModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title col-11 text-center" id="dialogo1ModalLabel">
                                            Carrito de Compras
                                            <button type="button" class="close col-1" data-dismiss="modal"
                                                style="color:#ee2214;" aria-label="Close">X</button>
                                        </h4>
                                    </div>
                                    <div class="modal-body container ">
                                        <div id="listadoCarrito" class="text-center">
                                            <h4 class="modal-title col-11 text-center">Tu carrito está vacio.</h4>
                                        </div>
                                        <div id="listaCompras" class="row align-items-center justify-content-center">
                                            <div id="columnaImg" class="col-2 columnaImg text-start "></div>
                                            <div id="columnaProductos" class=" col-6 columnaProductos text-center ">
                                            </div>
                                            <div id="columnaCantidad" class=" col-2 columnaCantidad text-center "></div>
                                            <div id="columnaPrecio" class=" col-2 columnaPrecio text-end "></div>
                                        </div>
                                        <div id="sumaTotal"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Cerrar</button>
                                        <!--<button class="button">Vaciar
                                            carrito</button>-->
                                        <a href="{{ route('carritos.index') }}" type="button" class="btn btn-warning"
                                            style="color:#fffff">Ir al
                                            Carrito</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- /Carrito -->
            <div class="col-md-3 clearfix">
                <div class="header-ctn">
                    <!-- Menu Toogle -->
                    <div class="menu-toggle">
                        <a href="#">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </a>
                    </div>
                    <!-- /Menu Toogle -->
                </div>
            </div>
            <!-- /USUARIO-->
        </div>
        {{-- @endcan --}}
        </div>
        </div>
    </header>
    <!-- /HEADER -->
    <!-- /HEADER -->


    <nav id="navigation">
        <div class="container">
            <div id="responsive-nav">
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('catalogos.index') }}">Catalogo</a></li>
                    <li><a href="{{ route('promocion.index') }}">Descuentos</a></li>
                    <li><a href="{{ route('compras.index') }}">Mis compras</a></li>
                    <li><a href="{{ route('contactos.index') }}">Contactos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        function imprim1(imp1) {
            var printContents = document.getElementById('imp1').innerHTML;
            /* w = window.open(('', 'PRINT', 'height=400,width=600'));
             w.document.write(printContents);
             //w.document.write(document.getElementById(printContents).innerHTML);
             w.document.close(); // necessary for IE >= 10
             w.focus(); // necessary for IE >= 10
             w.print();
             w.close();
             return true;*/
            //////////////
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
    <!-- CONTENIDO -->


    <div class="card">
        <div id="imp1">
            <div class="section">
                <!-- container -->
                <div class="container">
                    <h1>Factura</h1>
                    <h3><u>Quality-Store</u></h3>

                    <div class="container">
                        <div class="img-factura row ">
                            <div class="col">
                                <figure>
                                    <img src={{ asset('img/logo.jpg') }} class="figure-img img-fluid rounded"
                                        alt="A generic square placeholder image with rounded corners in a figure."
                                        width="130" height="120" />
                                </figure>
                            </div>
                            <div class="col">
                                <figcaption class="figure-caption ">
                                    <h5><i class="fa fa-building-o pr-1" aria-hidden="true"></i> Tienda virtual</h5>
                                    <h5><i class="fa fa-phone pr-1" aria-hidden="true"></i> (+591) 78416172</h5>
                                    <h5><i class="fa fa-envelope-o pr-1" aria-hidden="true"></i> Quality-Store@gmail.com
                                    </h5>
                                </figcaption>
                            </div>
                        </div>
                    </div>

                    <div class="row fact-info mt-3">
                        <div>
                            <h5>#factura</h5>
                        </div>
                        <div class="col-3">
                            <h5>Facturar a</h5>
                            @php
                                $userActual = Auth::user();
                            @endphp
                            <p>{{ $userActual->name }}</p>
                        </div>

                        <div class="col-3">
                            <h5>Enviar a</h5>
                            <p>{{ $userActual->direccion }}
                                <!-- EL USER TIENE QUE INGRESAR UNA DIRECCION PUEDE
                            HABER EL CASO DE QUE QUIERA ENVIARLO A OTRA DIRECCION
                        COMO REGALO POR EJEMPLO -->
                            </p>
                        </div>
                        <div class="col-3">
                            <h5>N° de factura</h5>
                            <p>103</p>
                            <h5>Nombre completo:</h5>
                            <p>Isabel Choque Viza</p>
                            <h5>Numero de rut:</h5>
                            <p>52360194</p>
                            <h5>Fecha de la compra</h5>
                            <p>{{ $notaventa->created_at }}</p>
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead
                                style="background-color:#15161d;color:#ffff;width: 25%;text-align: left;border: 1px solid #15161d;border-collapse: collapse;padding: 0.3em;caption-side: bottom;">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Color</th>
                                    <th>Talla</th>
                                    <th>descripcion</th>
                                    <th>Marca</th>
                                    <th>Descuento</th>
                                    <th>Precio unitario</th>
                                    <th>Cant.</th>
                                    <th>Precio total</th>

                                </tr>
                            </thead>

                            <tbody>
                                <div class="row border">
                                    @foreach ($detalleventa as $detalleventas)
                                        <tr
                                            style="width: 25%;text-align: left;vertical-align: top;border: 1px solid #15161d;border-collapse: collapse;padding: 0.3em;caption-side: bottom;">
                                            @if ($detalleventas->id_notaventa == $notaventa->id)
                                                @foreach ($producto as $productos)
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        <td>{{ $productos->codigo }}</td>
                                                    @endif
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        <td>{{ $productos->color }}</td>
                                                        @if ($detalleventas->id_producto == $productos->id)
                                                            @foreach ($talla as $tallas)
                                                                @if ($productos->id_talla == $tallas->id)
                                                                    <td>EUR. {{ $tallas->numero }} </td>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endif
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        <td>{{ $productos->descripcion }}</td>
                                                    @endif
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        @foreach ($marca as $marcas)
                                                            @if ($productos->id_marca == $marcas->id)
                                                                <td>{{ $marcas->nombre }}</td>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        @foreach ($descuento as $descuentos)
                                                            @if ($productos->id_descuento == $descuentos->id)
                                                                <td>{{ $descuentos->monto }} %</td>
                                                                @php
                                                                    $discount = $descuentos->monto / 100;
                                                                @endphp

                                                            @endif
                                                        @endforeach
                                                    @endif

                                                    @if ($detalleventas->id_producto == $productos->id)
                                                        <td>{{ $productos->precio }} bs</td>
                                                        @php
                                                            $cantTotal = $productos->precio;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                @if ($detalleventas->cantidad == 1)
                                                    <td>{{ $detalleventas->cantidad }} par</td>
                                                    @php
                                                        $cantTotal = $cantTotal * $detalleventas->cantidad;
                                                    @endphp
                                                @else
                                                    <td>{{ $detalleventas->cantidad }} pares</td>
                                                    @php
                                                        $cantTotal = $cantTotal * $detalleventas->cantidad;
                                                    @endphp
                                                @endif
                                                @php
                                                    $discount = $cantTotal * $discount;
                                                @endphp
                                                <td>{{ $cantTotal - $discount }} bs </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </div>
                            </tbody>

                            <tfoot>
                                <tr
                                    style="  width: 25%;text-align: left;vertical-align: top;border: 1px solid #15161d;border-collapse: collapse;padding: 0.3em;caption-side: bottom;">

                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <td>
                                        <h5><strong>Total Compra</strong></h5>
                                    </td>
                                    <td>
                                        <h5>
                                            @php
                                                $SUB = $notaventa->monto_total;
                                            @endphp
                                            <strong>{{ $SUB }}bs
                                            </strong>
                                        </h5>
                                    </td>
                                </tr>

                                <tr
                                    style="  width: 25%;text-align: left;vertical-align: top;border: 1px solid #15161d;border-collapse: collapse;padding: 0.3em;caption-side: bottom;">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <td>
                                        <h5><strong>IT 3%</strong></h5>
                                    </td>
                                    <td>
                                        <h5>
                                            @php
                                                $IT = $notaventa->monto_total * 0.03;
                                            @endphp
                                            <strong>{{ $IT }}bs
                                            </strong>
                                        </h5>
                                    </td>
                                </tr>
                                <tr
                                    style="  width: 25%;text-align: left;vertical-align: top;border: 1px solid #15161d;border-collapse: collapse;padding: 0.3em;caption-side: bottom;">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <td>
                                        <h5><strong>IVA 13%</strong></h5>
                                    </td>
                                    <td>
                                        <h5>
                                            @php
                                                $IVA = $notaventa->monto_total * 0.13;
                                            @endphp
                                            <strong>{{ $IVA }}bs
                                        </h5>
                                    </td>
                                </tr>
                                <tr
                                    style="  width: 25%;text-align: left;vertical-align: top;border: 1px solid #15161d;border-collapse: collapse;padding: 0.3em;caption-side: bottom;">

                                    <td colspan="7" class="empty"></td>
                                    <td colspan="1" class="total">
                                        <h5><strong>TOTAL</strong></h5>
                                    </td>
                                    <td class="total-value">
                                        <h5><strong>{{ $SUB + $IT + $IVA }}bs
                                            </strong></h5>
                                    </td>
                                </tr>

                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="cond row">
                        <div class="col-12 mt-3">
                            <h4>Formas de pago</h4>
                            <p>- Efectivo</p>
                            <p>- Transferencia bancaria</p>
                            <p>
                                Banco Ganadero
                                <br />
                                Quality: CA 1310340256
                                <br />
                            </p>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- /product -->
    <center>
        <button style="background-color:#f3753a;color:#ffff" class="btn btn-outline-dark" type="button"
            onclick="history.back()"><i class='fas fa-angle-left'></i> Volver</button>

        <button style="background-color:#15161d;color:#ffff" class="btn btn-outline-dark" type="button"
            onclick="javascript:imprim1(imp1);"><i class='fas fa-print'></i> Imprimir</button>


    </center>
    <!-- /Section -->
    <!-- CONTENIDO -->

    <center>
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a class="active" href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </center>


    </div>




    <!-- FOOTER -->
    <footer id="footer">
        <div id="paginacion">
            <span class="izquierda" type="button" onclick="history.back()" name="boton-personalizado-2"><a>&laquo;
                    Anterior </a></span>
            <span class="derecha"><a>Siguiente &raquo;</a></span>
        </div>
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Sobre Nosotros</h3>
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous"
                                                        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v12.0&appId=167466933725219&autoLogAppEvents=1"
                                                        nonce="DBvUnpJ9"></script>
                            <div class="fb-page"
                                data-href="https://www.facebook.com/Quality-Store-1999078610372910" data-tabs="timeline"
                                data-width="250" data-height="40" data-small-header="true"
                                data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/Quality-Store-1999078610372910"
                                    class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/Quality-Store-1999078610372910">Quality Store</a>
                                </blockquote>
                            </div>
                            <br>
                            <p>Nos dedicamos a ofrecerte los mejores servicios</p>



                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>Ubicacion</a></li>
                                <li><a target="_blank"
                                        href="https://api.whatsapp.com/send/?phone=%2B59178416172&text=Mas%20informaci%C3%B3n&app_absent=0"><i
                                            class="fa fa-phone"></i>+59178416172</a></li>
                                <li><a href="mailto:QualityStore@gmail.com "><i class="fa fa-envelope-o"></i>
                                        QualityStore@gmail.com </a></li>



                                <div class="footer-social">
                                    <a target="_blank" href="https://www.facebook.com/Quality-Store-1999078610372910"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <!--<a href="#" ><i class="fa fa-pinterest"></i></a>-->
                                </div>
                            </ul>



                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categorías</h3>
                            <ul class="footer-links">
                                <li><a href="#">Fila</a></li>
                                <li><a href="">Promoción</a></li>
                                <li><a href="#">Novedades</a></li>
                                <li><a href="#">Nike</a></li>
                                <li><a href="#">Adidas</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Información</h3>
                            <ul class="footer-links">
                                <li><a href="#">Sobre Nosotros</a></li>
                                <li><a href="#">Contáctanos</a></li>
                                <li><a href="#">Políticas de Privacidad</a></li>
                                <li><a href="#">Términos y Condiciones</a></li>
                                <li>
                                    <a target="_blank" rel="license"
                                        href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Esta obra de Licencia
                                        <img alt="Licencia Creative Commons" style="border-width:0"
                                            src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" />
                                    </a>
                                </li>
                                <br>

                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                    <input type="hidden" name="cmd" value="_s-xclick" />
                                    <input type="hidden" name="hosted_button_id" value="Q94VEUTNSR2QW" />
                                    <input type="image"
                                        src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0"
                                        name="submit" title="PayPal - The safer, easier way to pay online!"
                                        alt="Donate with PayPal button" />
                                    <img alt="" border="0" src="https://www.paypal.com/en_BO/i/scr/pixel.gif" width="1"
                                        height="1" />
                                </form>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Clientes</h3>
                            <ul class="footer-links">
                                <li><a href="#">Mi Cuenta</a></li>
                                <li><a href="#">Ver servicio</a></li>
                                <li><a href="#">Ayuda</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <div id="bottom-footer" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span class="copyright">
                            Copyright &copy; 2021 Todos los derechos reservados. | QualityStore
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>



</body>

</html>
<script src="{{ asset('js/carrito2.js') }}"></script>
<script type="text/javascript">
    // Push.create('Hello World!');
    $(document).ready(function() {
        $('#sendPushNotification').on('click', function() {
            Push.create("Quality Store", {
                body: "“Las tendencias desaparecen, el estilo es eterno”",
                icon: '{{ asset('img/logo.jpg') }}',
                timeout: 40000,
                onClick: function() {
                    window.focus();
                    this.close();
                }
            });
        });
    });
</script>
