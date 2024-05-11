<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no">
    <title>Documentación de la API de Clientes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
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
                    <a class="nav-link" href="https://sailfish-master-goose.ngrok-free.app/">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://sailfish-master-goose.ngrok-free.app/clientes/documentacion"><strong>Clientes</strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://sailfish-master-goose.ngrok-free.app/comentarios/documentacion">Comentarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://sailfish-master-goose.ngrok-free.app/facturas/documentacion">Facturas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://sailfish-master-goose.ngrok-free.app/habitaciones/documentacion">Habitaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://sailfish-master-goose.ngrok-free.app/hoteles/documentacion">Hoteles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://sailfish-master-goose.ngrok-free.app/reservaciones/documentacion">Reservaciones</a>
                </li>
            </ul>
        </div>
    </nav>
</head>

<body>
    <div id="app" class="container mt-5">
        <div class="banner bg-light p-3 mb-3">
            <h1 class="text-dark">Documentación de la API</h1>
        </div>
        <form @submit.prevent="fetchClientes">
            <div class="mb-3 d-flex align-items-center">
                <div class="url-box p-3 border rounded me-1">
                    <span hidden>Resource URL:</span>https://sailfish-master-goose.ngrok-free.app/clientes/
                </div>
                <input type="text" class="url-box p-3 border rounded me-1 flex-grow-1" v-model="ruta"
                    placeholder="Introduce la ruta">
                <button type="submit" class="btn btn-success">Hacer consulta</button>
            </div>
        </form>
        <div class="reservations mb-4">
            <div class="elementotions">
                <h2 v-if="ruta !== ''">Resultado para "{{ruta}}":</h2>
                <h2 v-else>Registros actuales de la base de datos:</h2>
                <pre v-if="clientes.length"
                    style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ formattedClientes }}</code></pre>
                <center>
                    <a v-if="clientes.length" :href="ruta" target="_blank" class="btn btn-primary">Ver JSON</a>
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
                clientes: [],
                ruta: ''
            },
            methods: {
                fetchClientes() {
                    axios.get('https://sailfish-master-goose.ngrok-free.app/clientes/' + this.ruta)
                        .then(response => {
                            this.clientes = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los clientes:', error);
                        });
                }
            },
            computed: {
                formattedClientes() {
                    return JSON.stringify(this.clientes, null, 1);
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('form').dispatchEvent(new Event('submit'));
        });
    </script>
</body>

</html>