                        <script type="text/javascript">
                            function iniciar() {
                                var boton = document.getElementById('obtener');
                                boton.addEventListener('click', obtener, false);
                            }

                            function obtener() {
                                navigator.geolocation.getCurrentPosition(initMap, gestionarErrores);
                            }

                            function mostrar(posicion2) {
                                var ubicacion = document.getElementById('localizacion');
                                var datos = '';
                                datos += 'Latitud: ' + posicion2.coords.latitude + '<br>';
                                //console.log('Latitud', posicion2.coords.latitude);
                                //Latitud = posicion2.coords.latitude;
                                //document.getElementById('Latitud').value = posicion2.coords.latitude;
                                //console.log(document.getElementById('Latitud'));
                                datos += 'Longitud: ' + posicion.coords.longitude + '<br>';
                                datos += 'Exactitud: ' + posicion.coords.accuracy + ' metros.<br>';
                                ubicacion.innerHTML = datos;

                            }

                            function initMap(posicion) {
                                var ubicacion = document.getElementById('localizacion');
                                var lat = '';
                                var lng = '';
                                const marcador = {
                                    lat: posicion.coords.latitude,
                                    lng: posicion.coords.longitude
                                };
                                console.log('Latitud', posicion.coords.latitude);
                                console.log('Longitud', posicion.coords.latitude);
                                document.getElementById('lat').value = posicion.coords.latitude;
                                document.getElementById('lng').value = posicion.coords.latitude;

                                const map = new google.maps.Map(document.getElementById("map"), {
                                    zoom: 14,
                                    center: marcador,
                                });
                                const marker = new google.maps.Marker({
                                    position: marcador,
                                    map: map,
                                });
                            }

                            function gestionarErrores(error) {
                                alert('Error: ' + error.code + ' ' + error.message + '\n\nPor favor compruebe que está conectado ' +
                                    'a internet y habilite la opción permitir compartir ubicación física');
                            }
                            window.addEventListener('load', iniciar, false);
                        </script>


                        <div id="localizacion">
                            <div class="card-body">
                                <div class="form-group col-md-3">
                                    <!--<button id="obtener" class="btn-danger form-control">Obtener mi
                                        localización</button>-->
                                    <input type="button" id="obtener" class="btn-danger form-control"
                                        value="Obtener mi localización">

                                </div>

                                <div class="form-group col-md-3">
                                    <input value="Latitud" type="text" class="form-control" name="lat" id="lat"
                                        readonly>
                                    <!--<label for="lat">Latitud</label>-->
                                </div>

                                <div class="form-group col-md-3">
                                    <input value="Longitud" type="text" class="form-control" name="lng" id="lng"
                                        readonly>
                                    <!--<label for="lng">Longitud</label>-->
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div id="map">
                            </div>

                        </div>
