<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no">
    <title>Documentación de la API de Elementos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Xrpiuf/gVl2ASOiWfKO0sKmOQvOdII4MwObuS6xTkf4VHbFkFnXZQ+W0GJHl3gsH"
        crossorigin="anonymous"></script>
    <script>
        let prevScrollpos = window.pageYOffset;

        window.onscroll = function () {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").classList.remove("hidden");
            } else {
                document.getElementById("navbar").classList.add("hidden");
            }
            prevScrollpos = currentScrollPos;
        }
    </script>

    <style>
        body {
            position: relative;
            padding-top: 70px;
        }

        .sidebar {
            position: fixed;
            left: 0;
            width: 300px;
            height: 700px;
            overflow-y: auto;
            z-index: 1;
        }

        .content {
            margin-left: 320px;
            padding: 20px;
        }

        .nav-link.active {
            font-weight: bold;
        }

        #navbar.hidden {
            top: -100px;
        }

        #navbar {
            background-color: #333;
            color: #fff;
            padding: 20px;
            position: fixed;
            top: 0;
            width: 100%;
            transition: top 0.3s;
        }

        .sub-item {
            padding-left: 20px;
        }

        p {
            text-align: justify;
            font-size: 20px;
        }

        .separator {
            border-bottom: 1px solid #000000;
            margin-bottom: 50px;
            margin-top: 50px;
        }

        .separator_empty {
            margin-bottom: 50px;
            margin-top: 50px;
        }

        .separator_sidebar {
            border-bottom: 1px solid #ccc;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .get_span {
            background-color: #3b83bd;
            border-radius: 5px;
            color: white;
            border: 1px solid #000000;
            padding: 5px;
        }
    </style>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="\logoEmpresa.png" alt="" height="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://sailfish-master-goose.ngrok-free.app/">Probar API</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong>Documentación</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/MiguelAngelCruzRoman/ApiHotel">Repositorio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body data-bs-spy="scroll" data-bs-target="#sidebar" data-bs-offset="50">

    <div class="container-fluid">

        <div id="app">
            <div class="row">
                <div class="col-3">
                    <div id="sidebar" class="sidebar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#informacion" style="color:#000000">Información</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#politicas" style="color:#000000">Políticas de uso</a>
                            </li>
                            <div class="separator_sidebar"></div>

                            <li class="nav-item">
                                <a class="nav-link" href="#clientes" style="color:#000000">Clientes<span
                                        style="color:#9b9b9b">(grupo)</span></a>
                                <ul class="nav flex-column sub-item">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#clientes-endpoint"
                                            style="color:#000000">clientes<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#clientes-getByNombre"
                                            style="color:#000000">getByNombre<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#clientes-getByNacionalidad"
                                            style="color:#000000">getByNacionalidad<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#clientes-getByDocumentoIdentidadValido"
                                            style="color:#000000">getByDocumentoIdentidadValido<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#clientes-getByTipoTarjetaBanco"
                                            style="color:#000000">getByTipoTarjetaBanco<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#comentarios" style="color:#000000">Comentarios<span
                                        style="color:#9b9b9b">(grupo)</span></a>
                                <ul class="nav flex-column sub-item">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#comentarios-endpoint"
                                            style="color:#000000">comentarios<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#comentarios-getByCalificacion"
                                            style="color:#000000">getByCalificacion<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#comentarios-getByRangoFechas"
                                            style="color:#000000">getByRangoFechas<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#comentarios-getByCliente"
                                            style="color:#000000">getByCliente<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#comentarios-getByHotelCalificacion"
                                            style="color:#000000">getByHotelCalificacion<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#facturas" style="color:#000000">Facturas<span
                                        style="color:#9b9b9b">(grupo)</span></a>
                                <ul class="nav flex-column sub-item">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#facturas-endpoint"
                                            style="color:#000000">facturas<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#facturas-getByMetodoPago"
                                            style="color:#000000">getByMetodoPago<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#facturas-getByRangoFechasEmision"
                                            style="color:#000000">getByRangoFechasEmision<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#facturas-getByEstatusProximoVencimiento"
                                            style="color:#000000">getByEstatusProximoVencimiento<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#facturas-getByFechaReservacion"
                                            style="color:#000000">getByFechaReservacion<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#habitaciones" style="color:#000000">Habitaciones<span
                                        style="color:#9b9b9b">(grupo)</span></a>
                                <ul class="nav flex-column sub-item">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#habitaciones-endpoint"
                                            style="color:#000000">habitaciones<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#habitaciones-getByPrecio"
                                            style="color:#000000">getByPrecio<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#habitaciones-getByServiciosExactos"
                                            style="color:#000000">getByServiciosExactos<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#habitaciones-getByServiciosSimilares"
                                            style="color:#000000">getByServiciosSimilares<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#habitaciones-getByDisponibilidadHotel"
                                            style="color:#000000">getByDisponibilidadHotel<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#hoteles" style="color:#000000">Hoteles<span
                                        style="color:#9b9b9b">(grupo)</span></a>
                                <ul class="nav flex-column sub-item">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#hoteles-endpoint" style="color:#000000">hoteles<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#hoteles-getByCiudad"
                                            style="color:#000000">getByCiudad<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#hoteles-getByTipoCategoria"
                                            style="color:#000000">getByTipoCategoria<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#hoteles-getByAmenidades"
                                            style="color:#000000">getByAmenidades<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#hoteles-getByRangoHoraCheck"
                                            style="color:#000000">getByRangoHoraCheck<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#reservaciones" style="color:#000000">Reservaciones<span
                                        style="color:#9b9b9b">(grupo)</span></a>
                                <ul class="nav flex-column sub-item">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#reservaciones-endpoint"
                                            style="color:#000000">reservaciones<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#reservaciones-getByEstatus"
                                            style="color:#000000">getByEstatus<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#reservaciones-getByRangoFechasEstadia"
                                            style="color:#000000">getByRangoFechasEstadia<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#reservaciones-getByCliente"
                                            style="color:#000000">getByCliente<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#reservaciones-getByTipoHabitacion"
                                            style="color:#000000">getByTipoHabitacion<span
                                                style="color:#9b9b9b">(endpoint)</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-9 content">
                    <div id="informacion">
                        <h2>Información</h2>
                        <p>Esta API de hoteles es de uso exclusivamente de consumo: solo el método HTTP GET está
                            disponible
                            en los recursos.</p>
                        <p>No se requiere autenticación para acceder a esta API, y todos los recursos están
                            completamente
                            abiertos y disponibles. Desde el cambio a alojamiento estático en mayo de 2024, se ha
                            eliminado por completo el límite de velocidad, pero aún recomendamos limitar la frecuencia
                            de
                            las solicitudes para reducir nuestros costos de alojamiento.
                        </p>
                        <p>Nota: se utiliza una base de datos no relacional (Mongo) por medio de Compass para
                            actualizaciones locales y Atlas para actualizaciones distribuidas</p>
                    </div>
                    <div class="separator"></div>

                    <div id="politicas">
                        <h2>Políticas de uso</h2>
                        <p>La API de hoteles es gratuita y de uso abierto. También es muy popular. Por esta razón,
                            pedimos a
                            cada desarrollador que cumpla con nuestra política de uso justo. Las personas que no cumplan
                            con
                            la política de uso justo tendrán su dirección IP permanentemente prohibida.
                        </p>
                        <p>La API de hoteles es principalmente una herramienta educativa, y no toleraremos ataques de
                            denegación de servicio que impidan a las personas aprender.
                        </p>
                        <p>Reglas:</p>
                        <ul>
                            <li>
                                <p>Almacene en caché localmente los recursos cada vez que los solicite.</p>
                            </li>
                            <li>
                                <p>Sea amable y amigable con sus compañeros desarrolladores de la API de hoteles.</p>
                            </li>
                            <li>
                                <p>Si encuentra vulnerabilidades de seguridad, actúe y repórtelas de manera responsable.
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="separator"></div>

                    <div id="clientes">
                        <h2>Clientes <span style="color:#9b9b9b">(grupo)</span></h2>
                        <p>La colección "clientes" documenta la API de hoteles y abarca todos los datos relacionados con
                            los
                            clientes que utilizan el sistema. Esta colección incluye endpoints para la gestión de
                            perfiles
                            de clientes, información de contacto y más. Cada cliente
                            está representado por un conjunto de atributos, como se muestra a continuación.
                        </p>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Atributo</th>
                                    <th scope="col">Tipo de dato</th>
                                    <th scope="col">Ejemplo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" colspan="2">_id</th>
                                    <td>ObjectId</td>
                                    <td>663ffc9ad92c8ba2a27ce4d4</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">primerNombre</th>
                                    <td>String</td>
                                    <td>Zoé</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">segundoNombre</th>
                                    <td>String o null</td>
                                    <td>Fidel / null</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">apellidoPaterno</th>
                                    <td>String</td>
                                    <td>Galarza</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">apellidoMaterno</th>
                                    <td>String</td>
                                    <td>Nazario</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">Correo</th>
                                    <td>String</td>
                                    <td>mayte68@example.org</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">Telefono</th>
                                    <td>NumberLong</td>
                                    <td>7493821328</td>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="3" style="vertical-align:middle;">documentoIdentidad</th>
                                    <th scope="row">tipoDocumento</th>
                                    <td>String</td>
                                    <td>Pasaporte</td>
                                </tr>
                                <tr>
                                    <th scope="row">imagen</th>
                                    <td>String</td>
                                    <td>https://dummyimage.com/922x315</td>
                                </tr>
                                <tr>
                                    <th scope="row">fechaValidez</th>
                                    <td>String (simulando un date)</td>
                                    <td>2030-03-18</td>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="3" style="vertical-align:middle;">tarjetaCredito</th>
                                    <th scope="row">tipo</th>
                                    <td>String</td>
                                    <td>MasterCard</td>
                                </tr>
                                <tr>
                                    <th scope="row">banco</th>
                                    <td>String</td>
                                    <td>Santander</td>
                                </tr>
                                <tr>
                                    <th scope="row">numero</th>
                                    <td>String</td>
                                    <td>4077472496020357755</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">cvv</th>
                                    <td>Number</td>
                                    <td>150</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">fechaCaducidad</th>
                                    <td>String</td>
                                    <td>2015-05-05</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="separator_empty"></div>

                        <div id="clientes-endpoint">
                            <h3>clientes <span style="color:#9b9b9b">(endpoint)</span></h3>
                            <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/clientes</p></code>

                            <p>Esta petición devuelve todos los documentos que se tienen en la colección de clientes</p>
                            <p><strong>Condiciones necesarias:</strong></p>
                            <ul>
                                <li>
                                    <p>Ninguna: no es necesario modificar o agregar la url de alguna forma</p>
                                </li>
                            </ul>
                            <p><strong>Resultado de ejemplo de consulta:</strong></p>
                            <pre 
                                style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ clientes }}</code></pre>
                        </div>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="clientes-getByNombre">
                        <h3>getByNombre<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/clientes/getByNombre/{nombre}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de clientes que
                            coincidan (exactamente) con alguno de los valores de los atributos de "primerNombre",
                            "segundoNombre", "apellidoPaterno" o "apellidoMaterno"</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{nombre}" por el nombre que se quiera buscar</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/clientes/getByNombre/Aldo</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ clientesGetByNombre }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="clientes-getByNacionalidad">
                        <h3>getByNacionalidad<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/clientes/getByNacionalidad/{pais}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de clientes que
                            coincidan (exactamente) con la nacionalidad que s eingrese</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{pais}" por el nombre del país que tienen los clientes que se
                                    buscan</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/clientes/getByNacionalidad/México</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ clientesGetByNacionalidad }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="clientes-getByDocumentoIdentidadValido">
                        <h3>getByDocumentoIdentidadValido<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/clientes/getByDocumentoIdentidadValido/{tipoDocumento}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de clientes que
                            tengan un documento de identidad válido (con fecha menor a la actual)</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{tipoDocumento}" por la clase de documento que se requiera
                                    (DNI, Pasaporte, Visa, etc)</p>
                            </li>
                            <li>
                                <p>La fecha se compara respecto a la del sistema operativo, por lo que no es necesario
                                    ingresarla</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/clientes/getByDocumentoIdentidadValido/Pasaporte</code>
                        </p>
                        <pre  style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ clientesGetByDocumentoIdentidadValido }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="clientes-getByTipoTarjetaBanco">
                        <h3>getByTipoTarjetaBanco<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/clientes/getByTipoTarjetaBanco/{tipoTarjeta}/{banco}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de clientes que
                            tengan una tarjeta de crédito de un banco y un tipo de tarjeta en particular</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{tipoTarjeta}" por la clase de tarjeta que se requiera (Visa,
                                    MasterCard, American Express, etc.)</p>
                            </li>
                            <li>
                                <p>Se tiene que sustituir "{banco}" por el nombre del banco que se requiera (BBVA, HSBC,
                                    Banco Santander,etc.)</p>
                            </li>
                            <li>
                                <p>La fecha se compara respecto a la del sistema operativo, por lo que no es necesario
                                    ingresarla</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/clientes/getByTipoTarjetaBanco/MasterCard/BBVA</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ clientesGetByTipoTarjetaBanco }}</code></pre>
                    </div>






                    <div class="separator"></div>

                    <div id="comentarios">
                        <h2>Comentarios <span style="color:#9b9b9b">(grupo)</span></h2>
                        <p>La colección "comentarios" documenta la API de hoteles y abarca todos los datos relacionados
                            con
                            los comentarios que realizan los clientes en el sistema. Esta colección incluye endpoints
                            para la gestión de las calificaciones a hoteles y las opiniones de los clientes.
                            Cada comentario está representado por un conjunto de atributos, como se muestra a
                            continuación.
                        </p>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Atributo</th>
                                    <th scope="col">Tipo de dato</th>
                                    <th scope="col">Ejemplo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" colspan="2">_id</th>
                                    <td>ObjectId</td>
                                    <td>663ffc9ad92c8ba2a27ce4d4</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">id_Hotel</th>
                                    <td>ObjectId</td>
                                    <td>663ffa93520c7d9a362eb1ce</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">id_Cliente</th>
                                    <td>ObjectId</td>
                                    <td>663ff9dfeaaff7f2af6a4f0f</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">calificacion</th>
                                    <td>Number</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">comentario</th>
                                    <td>String</td>
                                    <td>Corporis praesentium sint labore ipsam ad. Libero dolore aliquid numquam rem
                                        velit ex distinctio.
                                        Fugit ab ullam sint tempora.
                                        Incidunt distinctio sapiente cum nisi. Placeat rerum cum magni ut in a.</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">fecha</th>
                                    <td>String (simulando un date)</td>
                                    <td>2030-01-17</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="separator_empty"></div>

                        <div id="comentarios-endpoint">
                            <h3>comentarios <span style="color:#9b9b9b">(endpoint)</span></h3>
                            <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/comentarios</p></code>

                            <p>Esta petición devuelve todos los documentos que se tienen en la colección de comentarios
                            </p>
                            <p><strong>Condiciones necesarias:</strong></p>
                            <ul>
                                <li>
                                    <p>Ninguna: no es necesario modificar o agregar la url de alguna forma</p>
                                </li>
                            </ul>
                            <p><strong>Resultado de ejemplo de consulta:</strong></p>
                            <pre  style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ comentarios }}</code></pre>
                        </div>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="comentarios-getByCalificacion">
                        <h3>getByCalificacion <span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/comentarios/getByCalificacion/{calificacion}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de comentarios que
                            tengan en como valor de su atributo de "calificacion" la misma cantidad (en número de
                            estrellas) que se ingrese en la URL</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{calificacion}" por el número de estrellas que con las que se
                                    evaluó la estancia en el hotel</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/comentarios/getByCalificacion/2</code>
                        </p>
                        <pre  style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ comentariosGetByCalificacion }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="comentarios-getByRangoFechas">
                        <h3>getByRangoFechas<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/comentarios/getByRangoFechas/{fechaInicio}/{fechaFin}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de comentarios que
                            se hayan realizado dentro de una fecha establecida</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{fechaInicio}" por la fecha menor del rango, siguiendo el
                                    formato de "año-mes-día"</p>
                            </li>
                            <li>
                                <p>Se tiene que sustituir "{fechaFin}" por la fecha mayor del rango, siguiendo el
                                    formato de "año-mes-día"</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/comentarios/getByRangoFechas/2024-01-1/2024-12-12</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ comentariosGetByRangoFechas }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="comentarios-getByCliente">
                        <h3>getByCliente<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/comentarios/getByCliente/{nombreCliente}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de comentarios que
                            se hayan realizado por los clientes cuyo primer nombre, segundo nombre, apellido paterno o
                            apellido materno sea exactamente igual al dato que se busque</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{nombreCliente}" por el primer nombre, segundo nombre,
                                    apellido paterno o apellido materno que se requiera buscar</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/comentarios/getByCliente/Aldo</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ comentariosGetByCliente }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="comentarios-getByHotelCalificacion">
                        <h3>getByHotelCalificacion<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/comentarios/getByHotelCalificacion/{nombreHotel}/{calificacion}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de comentarios que
                            tengan una calificación determinada para el nombre de un hotel en específico</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{nombreHotel}" por el nombre del hotel que se esté buscando
                                    (Armendáriz y Rivera e Hijos, Herrera-Negrete A.C., etc)</p>
                            </li>
                            <li>
                                <p>Se tiene que sustituir "{calificacion}" por la cantidad de estrellas (1-5) que se
                                    asignó al hotel en el comentario </p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/comentarios/getByHotelCalificacion/Melgar-Gálvez S.A. de C.V./2</code>
                        </p>
                        <pre  style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ comentariosGetByHotelCalificacion }}</code></pre>
                    </div>







                    <div class="separator"></div>

                    <div id="facturas">
                        <h2>Facturas <span style="color:#9b9b9b">(grupo)</span></h2>
                        <p>La colección "facturas" documenta la API de hoteles y abarca todos los datos relacionados con
                            las facturas que se utilizan el sistema. Esta colección incluye endpoints para la gestión de
                            los pagos que se realizan, cancelan o se estan procesando para validar una reservación. Cada
                            factura
                            está representada por un conjunto de atributos, como se muestra a continuación.
                        </p>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Atributo</th>
                                    <th scope="col">Tipo de dato</th>
                                    <th scope="col">Ejemplo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" colspan="2">_id</th>
                                    <td>ObjectId</td>
                                    <td>663ffc742f44573df142143f</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">id_Reservacion</th>
                                    <td>ObjectId</td>
                                    <td>663ffc0b35a784c1891c9074</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">fechaEmision</th>
                                    <td>String (simulando un date)</td>
                                    <td>2022-05-19</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">fechaVencimiento</th>
                                    <td>String (simulando un date)</td>
                                    <td>2028-01-13</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">pago</th>
                                    <td>Number</td>
                                    <td>268</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">impuestosAdicionales</th>
                                    <td>Number</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">metodoPago</th>
                                    <td>String</td>
                                    <td>Transferencia bancaria</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">estatus</th>
                                    <td>String</td>
                                    <td>Vencida</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="separator_empty"></div>

                        <div id="facturas-endpoint">
                            <h3>facturas <span style="color:#9b9b9b">(endpoint)</span></h3>
                            <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/facturas</p></code>

                            <p>Esta petición devuelve todos los documentos que se tienen en la colección de facturas</p>
                            <p><strong>Condiciones necesarias:</strong></p>
                            <ul>
                                <li>
                                    <p>Ninguna: no es necesario modificar o agregar la url de alguna forma</p>
                                </li>
                            </ul>
                            <p><strong>Resultado de ejemplo de consulta:</strong></p>
                            <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ facturas }}</code></pre>
                        </div>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="facturas-getByMetodoPago">
                        <h3>getByMetodoPago<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/facturas/getByMetodoPago/{metodoPago}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de facturas que
                            coincidan (exactamente) con el valor del atributo de "metodoPago" y el valor que se
                            sustituya en la URL</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{metodoPago}" por el tipo de pago que se tiene registrado
                                    (efectivo, tarjetas, etc)</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/facturas/getByMetodoPago/Tarjeta de crédito</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ facturasGetByMetodoPago }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="facturas-getByRangoFechasEmision">
                        <h3>getByRangoFechasEmision<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/facturas/getByRangoFechasEmision/{fechaInicio}/{fechaFin}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de facturas que se
                            hayan emitido en un rango de fechas determinado</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{fechaInicio}" la fecha menor con la que se quiera comparar
                                    (con formato de "año-mes-día")</p>
                            </li>
                            <li>
                                <p>Se tiene que sustituir "{fechaFin}" la fecha mayor con la que se quiera comparar (con
                                    formato de "año-mes-día")</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/facturas/getByRangoFechasEmision/2023-01-01/2024-12-12</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ facturasGetByRangoFechasEmision }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="facturas-getByEstatusProximoVencimiento">
                        <h3>getByEstatusProximoVencimiento<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/facturas/getByEstatusProximoVencimiento/{estatus}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de facturas que
                            tengan el estatus especificado y que su fecha de vencimiento esté próxima a cumplirse</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{estatus}" por el estado en el que se encuentre la factura
                                    (Pagada, Cancelada, etc)</p>
                            </li>
                            <li>
                                <p>No es necesario ingresar fechas, puesto que se compara respecto a la hora que tenga
                                    el sistema operativo </p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/facturas/getByEstatusProximoVencimiento/Pagada</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ facturasGetByEstatusProximoVencimiento }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="facturas-getByFechaReservacion">
                        <h3>getByFechaReservacion<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/facturas/getByFechaReservacion/{fecha}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de facturas que
                            pertenezcan a una reservación que se haya realizado en una fecha específica</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{fecha}" por la que corresponda a la fecha en la que se
                                    realizó una reservación (con el formato de "año-mes-día")</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/facturas/getByFechaReservacion/2021-07-25</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ facturasGetByFechaReservacion }}</code></pre>
                    </div>





                    <div class="separator"></div>

                    <div id="habitaciones">
                        <h2>Habitaciones <span style="color:#9b9b9b">(grupo)</span></h2>
                        <p>La colección "habitaciones" documenta la API de hoteles y abarca todos los datos relacionados
                            con
                            las habitaciones que utilizan el sistema. Esta colección incluye endpoints para la gestión
                            de los precios de las habitaciones, su disponibilidad o los elementos que incluye. Cada
                            habitación
                            está representada por un conjunto de atributos, como se muestra a continuación.
                        </p>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Atributo</th>
                                    <th scope="col">Tipo de dato</th>
                                    <th scope="col">Ejemplo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" colspan="2">_id</th>
                                    <td>ObjectId</td>
                                    <td>663ffaf875fbe82a8480dab9</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">id_Hotel</th>
                                    <td>ObjectId</td>
                                    <td>663ffa93520c7d9a362eb1a3</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">numero</th>
                                    <td>Number</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">tipo</th>
                                    <td>String</td>
                                    <td>Doble</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">precioNoche</th>
                                    <td>Number</td>
                                    <td>3962</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">disponibilidad</th>
                                    <td>Boolean</td>
                                    <td>true</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">capacidad</th>
                                    <td>Number</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">vista</th>
                                    <td>String</td>
                                    <td>Directo al mar</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">serviciosIncluidos</th>
                                    <td>[String]</td>
                                    <td>[aperiam,sunt,molestias,dolor]</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">imagenes</th>
                                    <td>[String]</td>
                                    <td>[https://placekitten.com/811/281]</td>
                                </tr>

                            </tbody>
                        </table>

                        <div class="separator_empty"></div>

                        <div id="habitaciones-endpoint">
                            <h3>habitaciones <span style="color:#9b9b9b">(endpoint)</span></h3>
                            <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/habitaciones</p></code>

                            <p>Esta petición devuelve todos los documentos que se tienen en la colección de habitaciones
                            </p>
                            <p><strong>Condiciones necesarias:</strong></p>
                            <ul>
                                <li>
                                    <p>Ninguna: no es necesario modificar o agregar la url de alguna forma</p>
                                </li>
                            </ul>
                            <p><strong>Resultado de ejemplo de consulta:</strong></p>
                            <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ habitaciones }}</code></pre>
                        </div>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="habitaciones-getByPrecio">
                        <h3>getByPrecio<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/habitaciones/getByPrecio/{precio}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de habitaciones que
                            coincidan (exactamente) con el precio que se está buscando</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{precio}" por la cantidad (numérica) que se requiera</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/habitaciones/getByPrecio/2544</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ habitacionesGetByPrecio }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="habitaciones-getByServiciosExactos">
                        <h3>getByServiciosExactos<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/habitaciones/getByServiciosExactos/{servicios}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de habitaciones que
                            coincidan textualmente con todos los servicios que se incluyeron en la consulta</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{servicios}" por una lista de los servicios que se requiera,
                                    separándolos po comas (,). Ejmplo "Tele,bufet,cocina"</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/habitaciones/getByServiciosExactos/dolor,neque</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ habitacionesGetByServiciosExactos }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="habitaciones-getByServiciosSimilares">
                        <h3>getByServiciosSimilares<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/habitaciones/getByServiciosSimilares/{servicios}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de habitaciones que
                            coincidan con almenos uno de todos los servicios que se incluyeron en la consulta</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{servicios}" por una lista de los servicios que se requiera,
                                    separándolos po comas (,). Ejmplo "Tele,bufet,cocina"</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/habitaciones/getByServiciosSimilares/dolor,neque</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ habitacionesGetByServiciosSimilares }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="habitaciones-getByDisponibilidadHotel">
                        <h3>getByDisponibilidadHotel<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/habitaciones/getByDisponibilidadHotel/{disponibilidad}/{nombreHotel}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de habitaciones que
                            coincidan (exactamente) con el nombre del hotel y el estatus (ocupado o desocupado) de las
                            habitaciones de dicho hotel</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{disponibilidad}" por el número "0" en caso de que se busquen
                                    las habitaciones ocupadas o colocar cualquier otro valor en caso de que se busquen
                                    las habitaciones disponibles</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/habitaciones/getByDisponibilidadHotel/1/Melgar-G%C3%A1lvez%20S.A.%20de%20C.V.</code>
                        </p>
                        <pre  style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ habitacionesGetByDisponibilidadHotel }}</code></pre>
                    </div>





                    <div class="separator"></div>

                    <div id="hoteles">
                        <h2>Habitaciones <span style="color:#9b9b9b">(grupo)</span></h2>
                        <p>La colección "habitaciones" documenta la API de hoteles y abarca todos los datos relacionados
                            con
                            las habitaciones que se utilizan en el sistema. Esta colección incluye endpoints para la
                            gestión de las ubicaciones, información de contacto y aspectos propios de un hotel. Cada
                            hotel
                            está representado por un conjunto de atributos, como se muestra a continuación.
                        </p>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Atributo</th>
                                    <th scope="col">Tipo de dato</th>
                                    <th scope="col">Ejemplo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" colspan="2">_id</th>
                                    <td>ObjectId</td>
                                    <td>663ffa93520c7d9a362eb1a3</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">nombre</th>
                                    <td>String</td>
                                    <td>Melgar-Gálvez S.A. de C.V.</td>
                                </tr>
                                <tr>
                                    <th scope="row" rowspan="8" style="vertical-align:middle;">ubicacion</th>
                                    <th scope="row">pais</th>
                                    <td>String</td>
                                    <td>Malasia</td>
                                </tr>
                                <tr>
                                    <th scope="row">ciudad</th>
                                    <td>String</td>
                                    <td>Kuala Lumpur</td>
                                </tr>
                                <tr>
                                    <th scope="row">calle</th>
                                    <td>String</td>
                                    <td>Viaducto Togo</td>
                                </tr>
                                <tr>
                                    <th scope="row">numero</th>
                                    <td>Number</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <th scope="row">CP</th>
                                    <td>Number</td>
                                    <td>30460</td>
                                </tr>
                                <tr>
                                    <th scope="row">referencia</th>
                                    <td>String</td>
                                    <td>Quia impedit velit dignissimos. Fuga sit quis exercitationem dolorem dicta.
                                        Repellendus velit earum voluptate magnam maxime alias. Eum iure neque totam
                                        voluptatibus alias fugiat.</td>
                                </tr>
                                <tr>
                                    <th scope="row">lalitud</th>
                                    <td>Number</td>
                                    <td>-19.72705562401636</td>
                                </tr>
                                <tr>
                                    <th scope="row">longitud</th>
                                    <td>Number</td>
                                    <td>-154.09112417359933</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">categoria</th>
                                    <td>Number</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">tipo</th>
                                    <td>String</td>
                                    <td>Motel</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">checkIn</th>
                                    <td>String (simulando la hora)</td>
                                    <td>21:49:49</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">checkout</th>
                                    <td>String (simulando la hora)</td>
                                    <td>14:31:24</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">amenidades</th>
                                    <td>[String]</td>
                                    <td>[quae,repellendus,nihil,soluta,dicta,non,tempore]</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">imagenes</th>
                                    <td>[String]</td>
                                    <td>[quae,repellendus,nihil,soluta,dicta,non,tempore]</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">telefono</th>
                                    <td>Number</td>
                                    <td>7679159213</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">correo</th>
                                    <td>String</td>
                                    <td>gonzalo96@example.com</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="separator_empty"></div>

                        <div id="hoteles-endpoint">
                            <h3>hoteles <span style="color:#9b9b9b">(endpoint)</span></h3>
                            <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/hoteles</p></code>

                            <p>Esta petición devuelve todos los documentos que se tienen en la colección de hoteles</p>
                            <p><strong>Condiciones necesarias:</strong></p>
                            <ul>
                                <li>
                                    <p>Ninguna: no es necesario modificar o agregar la url de alguna forma</p>
                                </li>
                            </ul>
                            <p><strong>Resultado de ejemplo de consulta:</strong></p>
                            <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ hoteles }}</code></pre>
                        </div>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="hoteles-getByCiudad">
                        <h3>getByCiudad<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/hoteles/getByCiudad/{ciudad}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de hoteles que
                            coincidan (exactamente) en el nombre de la ciudad que se esté buscando y el atributo de
                            "ubicacion.ciudad"</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{ciudad}" por el nombre de la ciudad que se requiera buscar
                                </p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/hoteles/getByCiudad/Estambul</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ hotelesGetByCiudad }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="hoteles-getByTipoCategoria">
                        <h3>getByTipoCategoria<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/hoteles/getByTipoCategoria/{tipoHotel}/{categoriaHotel}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de hoteles que
                            esten ponderados con una determinada calificación (categoría) en el tipo de hotel al que
                            pertenezcan</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{tipoHotel}" por la clase que se requiera (Hotel, Motel,
                                    Hostal, etc)
                                </p>
                            </li>
                            <li>
                                <p>Se tiene que sustituir "{categoriaHotel}" por el número de estrellas con las que está
                                    calificado el hotel (1,2,3,4,5)
                                </p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/hoteles/getByTipoCategoria/Resort/5</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ hotelesGetByTipoCategoria }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="hoteles-getByAmenidades">
                        <h3>getByAmenidades<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/hoteles/getByAmenidades/{amenidades}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de hoteles que
                            incluyan almenos una de la lsita de amenidades que se está buscando</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{amenidades}" por una lista de valores separados por comas.
                                    Ejemplo: "bar, salón, tour"
                                </p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/hoteles/getByAmenidades/delectus</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ hotelesGetByAmenidades }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="hoteles-getByRangoHoraCheck">
                        <h3>getByRangoHoraCheck<span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/hoteles/getByRangoHoraCheck/{tipoCheck}/{horaInicio}/{horaFin}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de hoteles que se
                            encuentren dentro del rango de horas para hacer el Check-in/Check-out</p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{tipoCheck}" por "0" en caso que se requiera buscar por
                                    "Check-out" o colocar cualquier otro valor para buscar por "Check-in"
                                </p>
                            </li>
                            <li>
                                <p>Se tiene que sustituir "{horaInicio}" por la hora menor para el rango de horas.
                                    Utiliza el formato de "HH:mm:ss", pero se puede dejar como "HH:mm"
                                </p>
                            </li>
                            <li>
                                <p>Se tiene que sustituir "{horaFin}" por la hora mayor para el rango de horas. Utiliza
                                    el formato de "HH:mm:ss", pero se puede dejar como "HH:mm"
                                </p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/hoteles/getByRangoHoraCheck/1/09:00:00/11:00:00</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ hotelesGetByRangoHoraCheck }}</code></pre>
                    </div>





                    <div class="separator"></div>

                    <div id="reservaciones">
                        <h2>Reservaciones <span style="color:#9b9b9b">(grupo)</span></h2>
                        <p>La colección "reservaciones" documenta la API de hoteles y abarca todos los datos
                            relacionados
                            con las reservaciones que realizan los clientes en el sistema. Esta colección incluye
                            endpoints
                            para la gestión de las fechas en las que se hizo la reservación, la persona que la realizó y
                            el costo de su estancia.
                            Cada reservación está representada por un conjunto de atributos, como se muestra a
                            continuación.
                        </p>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Atributo</th>
                                    <th scope="col">Tipo de dato</th>
                                    <th scope="col">Ejemplo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" colspan="2">_id</th>
                                    <td>ObjectId</td>
                                    <td>663ffc0b35a784c1891c9072</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">id_Habitacion</th>
                                    <td>ObjectId</td>
                                    <td>663ffaf875fbe82a8480de57</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">id_Cliente</th>
                                    <td>ObjectId</td>
                                    <td>663ff9dfeaaff7f2af6a4f0a</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">fechaEntrada</th>
                                    <td>String (simulando un date)</td>
                                    <td>2016-06-18</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">fechaSalida</th>
                                    <td>String (simulando un date)</td>
                                    <td>2021-11-23</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">fechaReservacion</th>
                                    <td>String (simulando un date)</td>
                                    <td>2023-06-09</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">estatus</th>
                                    <td>String</td>
                                    <td>Confirmada</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">numeroPersonas</th>
                                    <td>Number</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2">costo</th>
                                    <td>Number</td>
                                    <td>18448</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="separator_empty"></div>

                        <div id="reservaciones-endpoint">
                            <h3>reservaciones <span style="color:#9b9b9b">(endpoint)</span></h3>
                            <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/reservaciones</p></code>

                            <p>Esta petición devuelve todos los documentos que se tienen en la colección de
                                reservaciones
                            </p>
                            <p><strong>Condiciones necesarias:</strong></p>
                            <ul>
                                <li>
                                    <p>Ninguna: no es necesario modificar o agregar la url de alguna forma</p>
                                </li>
                            </ul>
                            <p><strong>Resultado de ejemplo de consulta:</strong></p>
                            <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ reservaciones }}</code></pre>
                        </div>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="reservaciones-getByEstatus">
                        <h3>getByEstatus <span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/reservaciones/getByEstatus/{estatus}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de reservaciones
                            que
                            tengan en como valor de su atributo de "estatus" el mismo estado que se ingrese en la URL
                        </p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{estatus}" por el estado que se requiera buscar</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/reservaciones/getByEstatus/Cancelada</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ reservacionesGetByEstatus }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="reservaciones-getByRangoFechasEstadia">
                        <h3>getByRangoFechasEstadia <span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/reservaciones/getByRangoFechasEstadia/{fechaInicio}/{fechaFin}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de reservaciones
                            que contemplen una estadía dentro de la fecha establecida, en base a la fecha en de ingreso
                            (cuando hizo check-in en el hotel)
                        </p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{fechaInicio}" por la fecha menor para el rango de fechas.
                                    Usar el formato "año-mes-día"</p>
                            </li>
                            <li>
                                <p>Se tiene que sustituir "{fechaFin}" por la fecha mayor para el rango de fechas. Usar
                                    el formato "año-mes-día"</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/reservaciones/getByRangoFechasEstadia/2003-01-01/2010-12-12</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ reservacionesGetByRangoFechasEstadia }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="reservaciones-getByCliente">
                        <h3>getByCliente <span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/reservaciones/getByCliente/{nombreCliente}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de reservaciones
                            que se hayan realizado al nombre de un cliente en particular
                        </p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{nombre}" por el primer nombre, segundo nombre, apellido
                                    paterno o el apellido materno</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/reservaciones/getByCliente/Zoé</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ reservacionesGetByCliente }}</code></pre>
                    </div>

                    <div class="separator_empty"></div>

                    <div id="reservaciones-getByTipoHabitacion">
                        <h3>getByTipoHabitacion <span style="color:#9b9b9b">(endpoint)</span></h3>
                        <code><p><span class="get_span">GET</span> https://sailfish-master-goose.ngrok-free.app/reservaciones/getByTipoHabitacion/{tipoHabitacion}</p></code>
                        <p>Esta petición devuelve todos los documentos que se tienen en la colección de reservaciones
                            que se realizaron con un tipo de habitación en particular
                        </p>
                        <p><strong>Condiciones necesarias:</strong></p>
                        <ul>
                            <li>
                                <p>Se tiene que sustituir "{tipoHabitacion}" por la clase de habitación reservada
                                    (Doble, Individual, Suite, etc.)</p>
                            </li>
                        </ul>
                        <p><strong>Resultado de ejemplo de consulta:</strong></p>
                        <p>
                            <code>https://sailfish-master-goose.ngrok-free.app/reservaciones/getByTipoHabitacion/Individual</code>
                        </p>
                        <pre style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ reservacionesGetByTipoHabitacion }}</code></pre>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    $('body').scrollspy({ target: '#sidebar' });

                    $('#sidebar a').on('click', function (e) {
                        if (this.hash !== '') {
                            e.preventDefault();

                            const hash = this.hash;

                            $('html, body').animate({
                                scrollTop: $(hash).offset().top
                            }, 800, function () {
                                window.location.hash = hash;
                            });
                        }
                    });

                    $(window).on('scroll', function () {
                        $('.content div').each(function () {
                            if ($(window).scrollTop() >= $(this).offset().top) {
                                var id = $(this).attr('id');
                                $('#sidebar').find('.nav-link').removeClass('active');
                                $('#sidebar').find('a[href="#' + id + '"]').addClass('active');
                            }
                        });
                    });
                });
            </script>



            <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
            <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    new Vue({
                        el: '#app',
                        data: {
                            clientes: [],
                            clientesGetByNombre: [],
                            clientesGetByNacionalidad: [],
                            clientesGetByDocumentoIdentidadValido: [],
                            clientesGetByTipoTarjetaBanco: [],
                            comentarios: [],
                            comentariosGetByCalificacion: [],
                            comentariosGetByRangoFechas: [],
                            comentariosGetByCliente: [],
                            comentariosGetByHotelCalificacion: [],
                            facturas: [],
                            facturasGetByMetodoPago: [],
                            facturasGetByRangoFechasEmision: [],
                            facturasGetByEstatusProximoVencimiento: [],
                            facturasGetByFechaReservacion: [],
                            habitaciones: [],
                            habitacionesGetByPrecio: [],
                            habitacionesGetByServiciosExactos: [],
                            habitacionesGetByServiciosSimilares: [],
                            habitacionesGetByDisponibilidadHotel: [],
                            hoteles: [],
                            hotelesGetByCiudad: [],
                            hotelesGetByTipoCategoria: [],
                            hotelesGetByAmenidades: [],
                            hotelesGetByRangoHoraCheck: [],
                            reservaciones: [],
                            reservacionesGetByEstatus: [],
                            reservacionesGetByRangoFechasEstadia: [],
                            reservacionesGetByCliente: [],
                            reservacionesGetByTipoHabitacion: [],
                        },
                        methods: {
                            fetchClientes() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/clientes')
                                    .then(response => {
                                        this.clientes = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los clientes:', error);
                                    });
                            }, fetchClientesGetByNombre() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/clientes/getByNombre/Aldo')
                                    .then(response => {
                                        this.clientesGetByNombre = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los clientes:', error);
                                    });
                            }, fetchClientesGetByNacionalidad() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/clientes/getByNacionalidad/México')
                                    .then(response => {
                                        this.clientesGetByNacionalidad = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los clientes:', error);
                                    });
                            }, fetchClientesGetByDocumentoIdentidadValido() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/clientes/getByDocumentoIdentidadValido/Pasaporte')
                                    .then(response => {
                                        this.clientesGetByDocumentoIdentidadValido = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los clientes:', error);
                                    });
                            }, fetchClientesGetByTipoTarjetaBanco() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/clientes/getByTipoTarjetaBanco/MasterCard/BBVA')
                                    .then(response => {
                                        this.clientesGetByTipoTarjetaBanco = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los clientes:', error);
                                    });
                            }, fetchComentarios() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/comentarios')
                                    .then(response => {
                                        this.comentarios = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los comentarios:', error);
                                    });
                            }, fetchComentariosGetByCalificacion() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/comentarios/getByCalificacion/2')
                                    .then(response => {
                                        this.comentariosGetByCalificacion = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los comentarios:', error);
                                    });
                            }, fetchComentariosGetByRangoFechas() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/comentarios/getByRangoFechas/2024-01-1/2024-12-12')
                                    .then(response => {
                                        this.comentariosGetByRangoFechas = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los comentarios:', error);
                                    });
                            }, fetchComentariosGetByCliente() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/comentarios/getByCliente/Aldo')
                                    .then(response => {
                                        this.comentariosGetByCliente = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los comentarios:', error);
                                    });
                            }, fetchComentariosGetByHotelCalificacion() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/comentarios/getByHotelCalificacion/Melgar-G%C3%A1lvez%20S.A.%20de%20C.V./2')
                                    .then(response => {
                                        this.comentariosGetByHotelCalificacion = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los comentarios:', error);
                                    });
                            }, fetchFacturas() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/facturas')
                                    .then(response => {
                                        this.facturas = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las facturas:', error);
                                    });
                            }, fetchFacturasGetByMetodoPago() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/facturas/getByMetodoPago/Tarjeta de crédito')
                                    .then(response => {
                                        this.facturasGetByMetodoPago = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las facturas:', error);
                                    });
                            }, fetchFacturasGetByRangoFechasEmision() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/facturas/getByRangoFechasEmision/2023-01-01/2024-12-12')
                                    .then(response => {
                                        this.facturasGetByRangoFechasEmision = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las facturas:', error);
                                    });
                            }, fetchFacturasGetByEstatusProximoVencimiento() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/facturas/getByEstatusProximoVencimiento/Pagada')
                                    .then(response => {
                                        this.facturasGetByEstatusProximoVencimiento = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las facturas:', error);
                                    });
                            }, fetchFacturasGetByFechaReservacion() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/facturas/getByFechaReservacion/2021-07-25')
                                    .then(response => {
                                        this.facturasGetByFechaReservacion = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las facturas:', error);
                                    });
                            }, fetchHabitaciones() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/habitaciones')
                                    .then(response => {
                                        this.habitaciones = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las habitaciones:', error);
                                    });
                            }, fetchHabitacionesGetByPrecio() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/habitaciones/getByPrecio/2544')
                                    .then(response => {
                                        this.habitacionesGetByPrecio = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las habitaciones:', error);
                                    });
                            }, fetchHabitacionesGetByServiciosExactos() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/habitaciones/getByServiciosExactos/dolor,neque')
                                    .then(response => {
                                        this.habitacionesGetByServiciosExactos = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las habitaciones:', error);
                                    });
                            }, fetchHabitacionesGetByServiciosSimilares() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/habitaciones/getByServiciosSimilares/dolor,neque')
                                    .then(response => {
                                        this.habitacionesGetByServiciosSimilares = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las habitaciones:', error);
                                    });
                            }, fetchHabitacionesGetByDisponibilidadHotel() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/habitaciones/getByDisponibilidadHotel/1/Melgar-G%C3%A1lvez%20S.A.%20de%20C.V.')
                                    .then(response => {
                                        this.habitacionesGetByDisponibilidadHotel = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las habitaciones:', error);
                                    });
                            }, fetchHoteles() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/hoteles')
                                    .then(response => {
                                        this.hoteles = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los hoteles:', error);
                                    });
                            }, fetchHotelesGetByCiudad() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/hoteles/getByCiudad/Estambul')
                                    .then(response => {
                                        this.hotelesGetByCiudad = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los hoteles:', error);
                                    });
                            }, fetchHotelesGetByTipoCategoria() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/hoteles/getByTipoCategoria/Resort/5')
                                    .then(response => {
                                        this.hotelesGetByTipoCategoria = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los hoteles:', error);
                                    });
                            }, fetchHotelesGetByAmenidades() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/hoteles/getByAmenidades/delectus')
                                    .then(response => {
                                        this.hotelesGetByAmenidades = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los hoteles:', error);
                                    });
                            }, fetchHotelesGetByRangoHoraCheck() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/hoteles/getByRangoHoraCheck/1/09:00:00/11:00:00')
                                    .then(response => {
                                        this.hotelesGetByRangoHoraCheck = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener los hoteles:', error);
                                    });
                            }, fetchReservaciones() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/reservaciones')
                                    .then(response => {
                                        this.reservaciones = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las reservaciones:', error);
                                    });
                            }, fetchReservacionesGetByEstatus() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/reservaciones/getByEstatus/Cancelada')
                                    .then(response => {
                                        this.reservacionesGetByEstatus = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las reservaciones:', error);
                                    });
                            }, fetchReservacionesGetByRangoFechasEstancia() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/reservaciones/getByRangoFechasEstadia/2003-01-01/2010-12-12')
                                    .then(response => {
                                        this.reservacionesGetByRangoFechasEstadia = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las reservaciones:', error);
                                    });
                            }, fetchReservacionesGetByCliente() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/reservaciones/getByCliente/Zoé')
                                    .then(response => {
                                        this.reservacionesGetByCliente = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las reservaciones:', error);
                                    });
                            }, fetchReservacionesGetByTipoHabitacion() {
                                axios.get('https://sailfish-master-goose.ngrok-free.app/reservaciones/getByTipoHabitacion/Individual')
                                    .then(response => {
                                        this.reservacionesGetByTipoHabitacion = response.data;
                                    })
                                    .catch(error => {
                                        console.error('Error al obtener las reservaciones:', error);
                                    });
                            }
                        },
                        computed: {
                            formattedClientes() {
                                return JSON.stringify(this.clientes, null, 1);
                            }, formattedClientesGetByNombre() {
                                return JSON.stringify(this.clientesGetByNombre, null, 1);
                            }, formattedClientesGetByNacionalidad() {
                                return JSON.stringify(this.clientesGetByNacionalidad, null, 1);
                            }, formattedClientesGetByDocumentoIdentidadValido() {
                                return JSON.stringify(this.clientesGetByDocumentoIdentidadValido, null, 1);
                            }, formattedClientesGetByTipoTarjetaBanco() {
                                return JSON.stringify(this.clientesGetByTipoTarjetaBanco, null, 1);
                            }, formattedComentarios() {
                                return JSON.stringify(this.comentarios, null, 1);
                            }, formattedComentariosGetByCalificacion() {
                                return JSON.stringify(this.comentariosGetByCalificacion, null, 1);
                            }, formattedComentariosGetByRangoFechas() {
                                return JSON.stringify(this.comentariosGetByRangoFechas, null, 1);
                            }, formattedComentariosGetByCliente() {
                                return JSON.stringify(this.comentariosGetByCliente, null, 1);
                            }, formattedComentariosGetByHotelCalificacion() {
                                return JSON.stringify(this.comentariosGetByHotelCalificacion, null, 1);
                            }, formattedFacturas() {
                                return JSON.stringify(this.facturas, null, 1);
                            }, formattedFacturasGetByMetodoPago() {
                                return JSON.stringify(this.facturasGetByMetodoPago, null, 1);
                            }, formattedFacturasGetByRangoFechasEmision() {
                                return JSON.stringify(this.facturasGetByRangoFechasEmision, null, 1);
                            }, formattedFacturasGetByEstatusProximoVencimiento() {
                                return JSON.stringify(this.facturasGetByEstatusProximoVencimiento, null, 1);
                            }, formattedFacturasGetByFechaReservacion() {
                                return JSON.stringify(this.facturasGetByFechaReservacion, null, 1);
                            }, formattedHabitaciones() {
                                return JSON.stringify(this.habitaciones, null, 1);
                            }, formattedHabitacionesGetByPrecio() {
                                return JSON.stringify(this.habitacionesGetByPrecio, null, 1);
                            }, formattedHabitacionesGetByServiciosExactos() {
                                return JSON.stringify(this.habitacionesGetByServiciosExactos, null, 1);
                            }, formattedHabitacionesGetByServiciosSimilares() {
                                return JSON.stringify(this.habitacionesGetByServiciosSimilares, null, 1);
                            }, formattedHabitacionesGetByDisponibilidadHotel() {
                                return JSON.stringify(this.habitacionesGetByDisponibilidadHotel, null, 1);
                            }, formattedHoteles() {
                                return JSON.stringify(this.hoteles, null, 1);
                            }, formattedHotelesGetByCiudad() {
                                return JSON.stringify(this.hotelesGetByCiudad, null, 1);
                            }, formattedHotelesGetByTipoCategoria() {
                                return JSON.stringify(this.hotelesGetByTipoCategoria, null, 1);
                            }, formattedHotelesGetByAmenidades() {
                                return JSON.stringify(this.hotelesGetByAmenidades, null, 1);
                            }, formattedHotelesGetByRangoHoraCheck() {
                                return JSON.stringify(this.hotelesGetByRangoHoraCheck, null, 1);
                            }, formattedReservaciones() {
                                return JSON.stringify(this.reservaciones, null, 1);
                            }, formattedReservacionesGetByEstatus() {
                                return JSON.stringify(this.reservacionesGetByEstatus, null, 1);
                            }, formattedReservacionesGetByRangoFechasEstancia() {
                                return JSON.stringify(this.reservacionesGetByRangoFechasEstadia, null, 1);
                            }, formattedReservacionesGetByCliente() {
                                return JSON.stringify(this.reservacionesGetByCliente, null, 1);
                            }, formattedReservacionesGetByTipoHabitacion() {
                                return JSON.stringify(this.reservacionesGetByTipoHabitacion, null, 1);
                            }
                        },
                        mounted() {
                            this.fetchClientes();
                            this.fetchClientesGetByNombre();
                            this.fetchClientesGetByNacionalidad();
                            this.fetchClientesGetByDocumentoIdentidadValido();
                            this.fetchClientesGetByTipoTarjetaBanco();
                            this.fetchComentarios();
                            this.fetchComentariosGetByCalificacion();
                            this.fetchComentariosGetByRangoFechas();
                            this.fetchComentariosGetByCliente();
                            this.fetchComentariosGetByHotelCalificacion();
                            this.fetchFacturas();
                            this.fetchFacturasGetByMetodoPago();
                            this.fetchFacturasGetByRangoFechasEmision();
                            this.fetchFacturasGetByEstatusProximoVencimiento();
                            this.fetchFacturasGetByFechaReservacion();
                            this.fetchHabitaciones();
                            this.fetchHabitacionesGetByPrecio();
                            this.fetchHabitacionesGetByServiciosExactos();
                            this.fetchHabitacionesGetByServiciosSimilares();
                            this.fetchHabitacionesGetByDisponibilidadHotel();
                            this.fetchHoteles();
                            this.fetchHotelesGetByCiudad();
                            this.fetchHotelesGetByTipoCategoria();
                            this.fetchHotelesGetByAmenidades();
                            this.fetchHotelesGetByRangoHoraCheck();
                            this.fetchReservaciones();
                            this.fetchReservacionesGetByEstatus();
                            this.fetchReservacionesGetByRangoFechasEstancia();
                            this.fetchReservacionesGetByCliente();
                            this.fetchReservacionesGetByTipoHabitacion();
                        }
                    });
                });
            </script>
        </div>
    </div>

</body>

</html>