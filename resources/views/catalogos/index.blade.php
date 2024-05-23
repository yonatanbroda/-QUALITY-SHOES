<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width" />
    <!-- ETIQUETAS REFERENCIALES -->
    <meta name="description" content="Tienda Online">
    <meta name="keywords" content="tienda, compras, precio, ventas, ecomerce, comercio, online, store, TEM, tecnología">



    <!--<meta http-equiv="author" content="Abdias Alvarado">-->

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


    <!-- home.css añadir imagenes de boton para inicio -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/home.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{ asset('js/push.js') }}"></script>
    <script src="{{ asset('js/serverWorker.js') }}"></script>
    <script src="{{ asset('js/carrito2.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.jpg') }}" />

</head>

<body>
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
                            <li><a href="{{ route('inicio') }}"><i class="fa fa-user-o"></i>Panel</a></li>
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
                                {{-- QualityStore&#174; --}}
                            </a>
                        </div>
                    </div>
                    <!-- BARRA DE BÚSQUEDA -->
                    {{-- <div class="col-md-6">
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
                    </div> --}}
                    <!-- /BARRA DE BÚSQUEDA -->
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


    <nav id="navigation">
        <div class="container">
            <div id="responsive-nav">
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('catalogos.index') }}">Catalogo</a></li>
                    <!--<li><a href="#" id="sendPushNotification">Notificación</a></li>-->
                    <li><a href="{{ route('promocion.index') }}">Descuentos</a></li>
                    @if (Auth::check() && Auth::user()->getRoleNames()[0] == 'Cliente')
                        <li><a href="{{ route('compras.index') }}">Mis compras</a></li>
                    @endif
                    <li><a href="{{ route('contactos.index') }}">Contactos</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- CONTENIDO -->



    <!----------------------------------->
    <div class="section">
        <!-- container -->
        <div class="container">


            <div>
                @php
                    $array = [];
                    $val = 'no';
                @endphp
                @foreach ($producto as $producto)
                    @if ($val != 'no')
                        @php
                            $val = $producto->codigo;
                        @endphp
                    @endif

                    @if (!in_array($val, $array))
                        @php
                            $array[] = $producto->codigo;
                            $val = $producto->codigo;
                        @endphp
                        <!-- product -->

                        <div class="col-md-4 col-xs-6  ">
                            <div class="product_data ">
                                <form action="{{ route('carritos.store') }}" method="post">


                                    <!-- Modal Carrito -->
                                    <div class="col align-self-center text-end pe-5">
                                        <div class="modal fade" id="dialogo1" tabindex="-1"
                                            aria-labelledby="dialogo1ModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title col-11 text-center"
                                                            id="dialogo1ModalLabel">
                                                            Carrito de Compras
                                                            <button type="button" class="close col-1"
                                                                data-dismiss="modal" style="color:#ee2214;"
                                                                aria-label="Close">X</button>
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body container ">
                                                        <div id="listadoCarrito" class="text-center">
                                                            <h4 class="modal-title col-11 text-center">Tu carrito está
                                                                vacio.</h4>
                                                        </div>
                                                        <div id="listaCompras"
                                                            class="row align-items-center justify-content-center">
                                                            <div id="columnaImg" class="col-2 columnaImg text-start ">
                                                            </div>
                                                            <div id="columnaProductos"
                                                                class=" col-6 columnaProductos text-center ">
                                                            </div>
                                                            <div id="columnaCantidad"
                                                                class=" col-2 columnaCantidad text-center "></div>
                                                            <div id="columnaPrecio"
                                                                class=" col-2 columnaPrecio text-end "></div>
                                                        </div>
                                                        <div id="sumaTotal"></div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Cerrar</button>
                                                        <!--<button class="button">Vaciar
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                carrito</button>-->
                                                        <a href="{{ route('carritos.index') }}" type="button"
                                                            class="btn btn-warning" style="color:#fffff">Ir al
                                                            Carrito</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Carrito -->




                                    <div class="product  ">
                                        @csrf

                                        <div class="product-img">
                                            <img style="width:240px;height:160px" src="{{ $producto->foto }}" alt="">
                                        </div>

                                        <div class="product-body">
                                            @foreach ($marca as $marcas)
                                                @if ($producto->id_marca == $marcas->id)
                                                    <h4>{{ $marcas->nombre }}</h4>
                                                @endif

                                            @endforeach
                                            <h3 class="product-name"><a href="#"> {{ $producto->descripcion }}</a>
                                            </h3>

                                            @foreach ($descuento as $descuentos)
                                                @if ($descuentos->id == $producto->id_descuento)
                                                    @php
                                                        $aux = $descuentos->monto;
                                                        $auxdescuento = $descuentos->monto;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @php
                                                $aux = $aux / 100;
                                                $final = $producto->precio * $aux;
                                            @endphp

                                            @if ($auxdescuento != 0)
                                                <h4 class="lbl-normal-price">{{ $producto->precio }} Bs</h4>
                                                <h4 class="product-price">{{ $producto->precio - $final }} bs </h4>
                                            @else
                                                <h4>Precio</h4>
                                                <h4 class="product-price">{{ $producto->precio }} Bs</h4>
                                            @endif

                                            <h5>
                                                Código: #{{ $producto->codigo }}
                                                @if (Auth::check() && Auth::user()->getRoleNames()[0] == 'Cliente')
                                                    <input type="hidden" id="id_user" name="id_user"
                                                        value="{{ Auth::user()->id }}" style="opacity: 0.5;">
                                                @endif

                                                <input type="hidden" id="id_producto" name="id_producto"
                                                    value="{{ $producto->id }}" style="opacity: 0.55;">
                                            </h5>

                                            {{-- <h5>Talla: <select name="id_talla">
                                                    @foreach ($talla as $tallas)
                                                        @if ($producto->id_talla == $tallas->id)
                                                            <option value={{ $tallas->id }}>{{ $tallas->numero }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </h5> 

                                            @foreach ($inventario as $inventarios)
                                                @if ($producto->id_inventario == $inventarios->id)
                                                    @if ($inventarios->cant_disponible == 0)
                                                        <h5 class="label label-danger">Stock:
                                                            {{ $inventarios->cant_disponible }}
                                                        </h5>
                                                    @else
                                                        <h5 class="label label-success">Stock:
                                                            {{ $inventarios->cant_disponible }}
                                                        </h5>
                                                    @endif
                                                @endif
                                            @endforeach
                                            <br> --}}
                                            @if (Auth::check() && Auth::user()->getRoleNames()[0] == 'Cliente')
                                                <!--<button class="add-to-cart" href="{{ route('carritos.index') }}"><i class="fa fa-shopping-cart"></i></button>-->

                                                <div class="product-btns">
                                                    @foreach ($inventario as $inventarios)
                                                        @if ($producto->id_inventario == $inventarios->id)


                                                            <div id="contador" class="input-counter">
                                                                <input
                                                                    class="input-counter__text input-counter--text-primary-style form-control"
                                                                    type="hidden" id="cantidad" name="cantidad" value=""
                                                                    min="1"
                                                                    maxlength="{{ $inventarios->cant_disponible }}"
                                                                    size="0"
                                                                    pattern="{{ $inventarios->cant_disponible }}"
                                                                    max="{{ $inventarios->cant_disponible }}"
                                                                    onfocus="this.value=''" required>
                                                                <span class="validity"></span>
                                                            </div>
                                                            <input type="hidden" class="form-control" id="id_producto"
                                                                name="id_producto" value="{{ $producto->id }}">
                                                            <input type="hidden" class="form-control" id="id_user"
                                                                name="id_user" value="{{ Auth::user()->id }}">
                                                            <br>
                                                            <button class="add-to-wishlist">
                                                                <a href="https://wa.link/rz0y8f"><i
                                                                        class="fa fa-whatsapp fa-2x"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                            </button>

                                                            <button class="add-to-wishlist">
                                                                <a
                                                                    href="{{ route('detalleproductos.show', $producto) }}">
                                                                    <i class="fa fa-cart-arrow-down"
                                                                        style="font-size:24px"></i>
                                                                </a>
                                                            </button>



                                                            {{-- <button class="agregar" type="submit" href="#"
                                                                onclick="agregarCarrito({precio:'{{ $producto->precio - $final }}', marca:'{{ Auth::user()->id }} {{ $producto->descripcion }}', color:'{{ $producto->color }} {{ $producto->id }}', codigo:'#{{ $producto->codigo }}', nombre:'{{ $marcas->nombre }}', img:'{{ $producto->foto }}'});">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </button> --}}

                                                        @endif
                                                    @endforeach

                                                </div>
                                                {{-- <i class="fa fa-shopping-cart"></i>
                                                </button> --}}
                                            @else
                                                {{-- SI NO ES CLIENTE LE PEDIRA LOGEARSE PARA USAR SU CARRITO O DESEO --}}

                                                <div class="product-btns">
                                                    <button class="add-to-wishlist">
                                                        <a href="https://wa.link/rz0y8f">
                                                            <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
                                                        </a>
                                                    </button>

                                                    <button class="add-to-wishlist">
                                                        <a href="{{ route('detalleproductos.show', $producto) }}">
                                                            <i class="fa fa-cart-arrow-down" style="font-size:24px"></i>

                                                        </a>
                                                    </button>


                                                    {{-- -<button class="btn btn-primary" type="submit">
                                                        <a href="{{ route('login') }}"><i
                                                                class="fa fa-shopping-cart"></i> </a>
                                                    </button> --}}
                                                </div>
                                            @endif
                                            {{-- intento de add cart --}}

                                </form>

                            </div>
                        </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    </div>
    </div>
    <!-- /product -->




    <center>
        <input class="input-color" type="radio" name="color" id="morado" />
        <input class="input-color" type="radio" name="color" id="azulcyan" />
        <input class="input-color" type="radio" name="color" id="verde" />
        <input class="input-color" type="radio" name="color" id="azul" />
        <input class="input-color" type="radio" name="color" id="fresa" />
        <input class="input-color" type="radio" name="color" id="cafe" />
        <input class="input-color" type="radio" name="color" id="gris" />

        <img class="imag-color" src="{{ $producto->foto }}" alt="zapato" />

        <label class="label-color" for="morado"></label>
        <label class="label-color" for="azulcyan"></label>
        <label class="label-color" for="verde"></label>
        <label class="label-color" for="azul"></label>
        <label class="label-color" for="fresa"></label>
        <label class="label-color" for="cafe"></label>
        <label class="label-color" for="gris"></label>

    </center>
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

<script type="text/javascript">
    //Push.create('Hello World!');
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
