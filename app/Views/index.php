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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="https://sailfish-master-goose.ngrok-free.app/"><img src="\logoEmpresa.png" alt=""
                height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://sailfish-master-goose.ngrok-free.app/"><strong>Probar API</strong></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link"
                        href="https://sailfish-master-goose.ngrok-free.app/elementos/documentacion">Documentación</strong></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link"
                        href="https://github.com/MiguelAngelCruzRoman/ApiHotel">Repositorio</strong></a>
                </li>
            </ul>
        </div>
    </nav>
</head>

<body>
    <div id="app" class="container mt-5">
        <div class="banner bg-light p-3 mb-3">
            <center>
                <h1 class="text-dark">¡Prueba la API!</h1>
            </center>
        </div>
        <form @submit.prevent="fetchElementos">
            <div class="mb-3 d-flex align-items-center">
                <div class="url-box p-3 border rounded me-1">
                    <span hidden>Resource URL:</span>https://sailfish-master-goose.ngrok-free.app/
                </div>
                <input type="text" class="url-box p-3 border rounded me-1 flex-grow-1" v-model="ruta"
                    placeholder="Introduce la ruta">
                <button type="submit" class="btn btn-success">Hacer consulta</button>
            </div>
        </form>
        <div>
            Puedes probar las siguientes opciones:
            <a href="#" @click="updateRoute('clientes/getByNombre/Rebeca')">clientes/getByNombre/Rebeca</a>,
            <a href="#" @click="updateRoute('comentarios/getByCalificacion/2')">comentarios/getByCalificacion/2</a>,
            <a href="#" @click="updateRoute('facturas/getByMetodoPago/Efectivo')">facturas/getByMetodoPago/Efectivo</a>,
            <a href="#" @click="updateRoute('habitaciones/getByPrecio/4322')">habitaciones/getByPrecio/4322</a>,
            <a href="#" @click="updateRoute('hoteles/getByCiudad/Bangkok')">hoteles/getByCiudad/Bangkok</a>,
            <a href="#" @click="updateRoute('reservaciones/getByEstatus/Cancelada')">reservaciones/getByEstatus/Cancelada</a>,
        </div>

        <br>
        <div class="reservations mb-4">
            <div class="elementotions">
                <h2 v-if="ruta !== ''">Resultado para "{{ruta}}":</h2>
                <h2 v-else>Prueba buscando "clientes":</h2>
                <pre v-if="elementos.length"
                    style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ formattedElementos }}</code></pre>
                <center>
                    <a v-if="elementos.length" :href="ruta" target="_blank" class="btn btn-primary">Ver JSON</a>
                </center>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                elementos: [],
                ruta: 'clientes'
            },
            methods: {
                fetchElementos() {
                    axios.get('https://sailfish-master-goose.ngrok-free.app/' + this.ruta)
                        .then(response => {
                            this.elementos = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los elementos:', error);
                        });
                },
                updateRoute(newRoute) {
                    this.ruta = newRoute;
                    this.fetchElementos(); // Actualiza los datos al cambiar la ruta
                }
            },
            computed: {
                formattedElementos() {
                    return JSON.stringify(this.elementos, null, 1);
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('form').dispatchEvent(new Event('submit'));
        });
    </script>
</body>

</html>
