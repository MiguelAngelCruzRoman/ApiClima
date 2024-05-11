<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no">
    <title>Documentación de la API de Reservaciones</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div id="app" class="container mt-5">
        <div class="banner bg-light p-3 mb-3">
            <h1 class="text-dark">Documentación de la API</h1>
        </div>

        <form @submit.prevent="fetchReservaciones">
            <div class="mb-3 d-flex align-items-center">
                <div class="url-box p-3 border rounded me-1">
                    <span hidden>Resource URL:</span>https://sailfish-master-goose.ngrok-free.app/reservaciones/
                </div>
                <input type="text" class="url-box p-3 border rounded me-1 flex-grow-1" v-model="ruta"
                    placeholder="Introduce la ruta">
                <button type="submit" class="btn btn-success">Hacer consulta</button>
            </div>
        </form>
        <div class="reservations mb-4">
            <div class="elementotions" v-if="reservaciones.length">
                <h2 v-if="ruta !== ''">Resultados para "{{ruta}}":</h2>
                <h2 v-else>Todos los registros de las reservaciones:</h2>

                <pre
                    style="max-width: 80%; overflow-x: auto; height: 300px; margin: 0 auto; border: 1px solid black; background-color: #ccc;"><code>{{ formattedReservaciones }}</code></pre>
                    <a href="" onclick="window.location.href='{{ruta}}'">Ver JSON</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                reservaciones: [],
                ruta: ''
            },
            methods: {
                fetchReservaciones() {
                    axios.get('https://sailfish-master-goose.ngrok-free.app/reservaciones/' + this.ruta)
                        .then(response => {
                            this.reservaciones = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los reservaciones:', error);
                        });
                }
            },
            computed: {
                formattedReservaciones() {
                    return JSON.stringify(this.reservaciones, null, 1);
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('form').dispatchEvent(new Event('submit'));
        });
    </script>
</body>

</html>