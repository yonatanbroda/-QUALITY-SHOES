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
    <link type="text/css" rel="stylesheet" href="{{ asset('style/carrito.css') }}" />

    <!-- home.css añadir imagenes de boton para inicio -->
    <link type="text/css" rel="stylesheet" href="{{ asset('style/home.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="{{ asset('js/push.js') }}"></script>
    <script src="{{ asset('js/serverWorker.js') }}"></script>
    <script src="{{ asset('js/carrito2.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.jpg') }}" />


    <!--paypal api-->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD"
        data-sdk-integration-source="button-factory"></script>
    <!--paypal api-->


    <!-- Custom CSS -->
    <!--  <link type="text/css" rel="stylesheet" href="{{ asset('style/compra.css') }}" />-->
    <!--<link type="text/css" rel="stylesheet" href="{{ asset('style/compra.css') }}" />-->
    <!--<script src="{{ asset('js/compra.js') }}"></script>-->
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
                                {{-- QualityStore&#174; --}}
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
                    <li><a href="{{ route('promocion.index') }}">Descuentos</a></li>
                    <li><a href="{{ route('compras.index') }}">Mis compras</a></li>
                    <li><a href="{{ route('contactos.index') }}">Contactos</a></li>
                </ul>
            </div>
        </div>
    </nav>




    <!-- product -->
    <div class="card-body table-responsive">
        <table class="table">
            @php
                $userActual = Auth::user();
                $userSincompra = 0;
            @endphp
            <thead class="thead-dark" style="background-color:#15161d;color:#ffff">
                <th>Producto</th>
                <th>Codigo</th>
                <th>Color</th>
                <th>Descripcion</th>
                <th>Marca</th>
                <th>Talla</th>
                <th>Descuento</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                </tr>
            </thead>

            @foreach ($carrito as $carritos)
                @if ($carritos->id_user == $userActual->id)

                    @foreach ($producto as $productos)
                        @if ($carritos->id_producto == $productos->id)

                            <tbody>
                                <div class="row border">
                                    <tr>
                                        <td>
                                            <a><img width="70" height="50" alt="poster_1_up" class="shop_thumbnail"
                                                    src="{{ $productos->foto }}"></a>
                                        </td>
                                        <th scope="row">
                                            <a href="#">{{ $productos->codigo }}</a>

                                        </th>
                                        <td>
                                            <a href="#">{{ $productos->color }}</a>
                                        </td>
                                        <td>
                                            <a href="#">{{ $productos->descripcion }}</a>
                                        </td>
                                        <td>
                                            @foreach ($marca as $marcas)
                                                @if ($marcas->id == $productos->id_marca)
                                                    <a href="#">{{ $marcas->nombre }}</a>
                                                @endif
                                            @endforeach
                                        </td>

                                        <td>
                                            @foreach ($talla as $tallas)
                                                @if ($tallas->id == $productos->id_talla)
                                                    <a href="#">{{ $tallas->numero }}</a>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($descuento as $descuentos)
                                                @if ($descuentos->id == $productos->id_descuento)
                                                    <a href="#">{{ $descuentos->monto }}%</a>
                                                @endif
                                            @endforeach
                                        </td>

                                        <td>
                                            <!--<div>
                                                <input type="button" class="minus" value="-">
                                                <input type="number" size="4" value="1" min="0" step="1">
                                                <input type="button" class="plus" value="+">
                                                </div>
                                                <select class="form-select" required>
                                                <option selected disabled value="">...</option>
                                                <option>...</option>
                                                </select>-->
                                            @foreach ($inventario as $inventarios)
                                                @if ($productos->id_inventario == $inventarios->id)
                                                    <div id="contador" class="input-counter">
                                                        <input
                                                            class="input-counter__text input-counter--text-primary-style"
                                                            type="number" id="cantidad" name="cantidad"
                                                            value="{{ $inventarios->id }}>{{ $inventarios->cant_disponible }}"
                                                            min="1" max="{{ $inventarios->cant_disponible }}"
                                                            required>
                                                        <span class="validity"></span>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </td>
                                        <td>
                                            <a href="#">{{ $productos->precio }} .Bs</a>
                                        </td>
                                        <td>
                                            <a title="Remove this item" class="remove" href="#">×</a>
                                        </td>
                                        <td class="product-remove">
                                            <a title="Remove this item" class="remove" href="#">×</a>
                                        </td>
                                        @php
                                            $userSincompra = 1;
                                        @endphp
                                    <tr>
                                </div>

                            </tbody>
                        @endif



                    @endforeach
                @endif
            @endforeach
            @if ($userSincompra == 0)
                <tr>
                    <td>
                        <div class="alert alert-dark">Esta coordialmente invitado a realizar una compra.</div>
                    </td>
                </tr>

            @endif
            {{-- <tfoot>
                <tr>
                    <td colspan="7" class="empty"></td>
                    <td colspan="1" class="total">
                        <h4><strong>Total Compra</strong></h4>
                    </td>
                    <td class="total-value">
                        <h4><strong>{{ $productos->precio }} Bs
                            </strong></h4>
                        <h4>
                            @php
                                $dolar = $productos->precio * 0.15;
                            @endphp
                            <strong>{{ $dolar }}$</strong>
                        </h4>
                    </td>
                </tr>
                </tr>
            </tfoot> --}}


        </table>

    </div>
    <!-- /product -->


    <style type="text/css">
        .form1 {
            width: 350px;
            height: 550px;
            margin: 20px auto;
            border: 1px solid #A8A8A8;
            border-radius: 10px;
        }

        .r {
            text-align: right;
        }

        .c {
            text-align: center;
        }

        .from2 {
            width: 132px;
            height: 65px;
            border: 1px solid #A8A8A8;
            margin-left: 162px;
        }

    </style>
    <!--
    <form action="" method="post" class="form1">
        <h2>
            Forma de pago </h2>
        Campos obligatorios *
        <h3>información de contacto </h3>
        <div class=" from2">
            <strong> Título <br /> </strong>
            <input type="radio" name="sex"> Sr. <br />
            <input type="radio" name="sex"> Sra. <br />
        </div>
        <div class="r">
            Apellido Primer nombre: * <input type="text"> <br />
            E.mail<input type="text">
            <br />
            Contraseña Code: * <input type="contraseña"> <br />
        </div>
        <h3> Mensaje de pago </h3>
        <div class="c">
            tipo de tarjeta:
            <select>
                <option selected="selected">Visa</option>
                <option> UnionPay </option>
                <option> Alipay </option>
                <option> WeChat </option>
            </select><br />
        </div>
        <div class="r">
            Tarjeta & nbsp & nbsp Número: * <input type="text"> & nbsp & nbsp <br />
            Fecha de vencimiento de la tarjeta: * <input type="text"> & nbsp & nbsp <br />
        </div>
        <em> & nbsp & nbsp & nbsp & nbspIntroduzca el formato mes / año </em> <br />
        <div class="c">

        -->
    <!---Boton de pago por paypal-->
    <div id="smart-button-container">
        <div style="text-align: center;">
            <div id="paypal-button-container"></div>
        </div>
    </div>
    <!--Boton de pago por paypal-->
    </div>
    </form>
    </form>


    <!---Boton de pago por paypal-->
    <div id="smart-button-container">
        <div style="text-align: center;">
            <div id="paypal-button-container"></div>
        </div>
    </div>
    <!--Boton de pago por paypal-->

    <!-- /Section -->

    <center>

        <button class="btn " style="background-color:#111010;color:#ffff" href="#"
            onclick="agregarCarrito({});">
            <i class="fa fa-shopping-cart"></i> Comprar</button>

        <button style="background-color:#f3753a;color:#ffff" class="btn btn-outline-dark" type="button"
            onclick="history.back()"></i> Volver</button>
    </center>

    <!-- CONTENIDO -->

    {{-- ----------pago------------- --}}


    {{-- ------------comprar------------ --}}
    <div class="row">
        <div class="col-md-6 col-12 border">
            <div class="row">
                <div class="col">
                    usuario
                </div>
                <div class="col">
                    <p class="text-center font-weight-bold">Mi perfil</p>
                </div>
                <div class="col">
                    Mi perfil
                </div>

            </div>
            <div id="user_content" class="border-bottom"></div>
            <div class="row">
                <div class="col">
                    Tipo de pedido
                </div>
                <div class="col">
                    <p class="text-center font-weight-bold">Tipo de pedido</p>
                </div>
                <div class="col">
                    Tipo de pedido
                </div>
            </div>
            <div id="type_content" class="border-bottom"></div>

            <div class="row">
                <div class="col">
                    Hora de entrega
                </div>
                <div class="col">
                    <p class="text-center font-weight-bold">Hora de entrega</p>
                </div>
                <div class="col">

                </div>
            </div>
            <div class="border-bottom">Lo antes posible.</div>
            <div class="row">
                <div class="col">
                    Lo antes posible.
                </div>
                <div class="col">
                    <p class="text-center font-weight-bold">Metodo de pago</p>
                </div>
                <div class="col">
                    Metodo de pago
                </div>
            </div>
            <div id="paymethod_content"></div>
        </div>

        <div class="col-md-6 col-12 border" id="cart_content">
            <div class="row border" style="background-color: #cdcdcd;">
                <div class="col">
                    <p class="text-left font-weight-bold">Cant. articulo</p>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <p class="text-left font-weight-bold">Precio</p>
                </div>
            </div>

            <!-- inicio -->
            <div class="row">
                <div class="col">
                    <p class="font-weight-light text-left">
                    </p>
                </div>
                <div class="col">

                </div>
                <div class="col">

                </div>
            </div>



            <div class="row">
                <div class="col">
                    <p class="text-left">
                        x
                    </p>
                </div>
                <div class="col">

                </div>
                <div class="col">
                    <p class="text-left">Bs.</p>

                </div>
            </div>


            <p class="text-center font-weight-bold">Su pedido esta vacio</p>

            <div class="row border">
                <div class="col">
                    <p class="text-left font-weight-bold">Total</p>
                </div>
                <div class="col">

                </div>
                <div class="col">

                    <p class="text-left font-weight-bold">0 Bs.</p>

                    <p class="text-left font-weight-bold">' Bs.' </p>

                </div>
            </div>
        </div>
    </div>
    {{-- ------------comprar------------ --}}

    {{-- ------------pago---------- --}}

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
                                        href="https://www.facebook.com/Quality-Store-1999078610372910">Quality
                                        Store</a>
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
                                        href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Esta obra de
                                        Licencia
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

{{-- -
<script>
    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'pill',
                color: 'gold',
                layout: 'vertical',
                label: 'buynow',
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        "description": "#{{ $productos->codigo }}-{{ $productos->descripcion }}",
                        "amount": {
                            "currency_code": "USD",
                            "value": {{ $dolar }}
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                    // Full available details
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    // Show a success message within this page, e.g.
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '';
                    element.innerHTML =
                        '<h3>Quality-Store</h3><div class="card text-center" style = "width: 100%;"> Su pago se ha completado correctamente :) <p>Numero de Orden: </p><p>ID:</p><p>Nro Factura:</p></p>Total: {{ $dolar }}$US</p><p>Codigo:#{{ $productos->codigo }}</p><p>Descripcion: {{ $productos->descripcion }}</p><p>Tipo de pago: Paypal</p></h3></div>'
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            },
            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container');
    }
    initPayPalButton();
</script> --}}
