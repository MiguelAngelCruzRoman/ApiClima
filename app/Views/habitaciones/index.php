<!DOCTYPE html>
<html>
<head>
    <title>Documentación de Habitaciones</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <h1>Documentación de Habitaciones</h1>
        <button @click="fetchHabitaciones">Obtener Habitaciones</button>
        <div v-if="habitaciones.length">
            <h2>Habitaciones:</h2>
            <ul>
                <li v-for="habitaciones in habitaciones" :key="habitaciones._id">
                    {{habitaciones}}
                </li>
            </ul>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                habitaciones: []
            },
            methods: {
                fetchHabitaciones() {
                    axios.get('https://e4ac-2806-10a6-f-92a3-42d-8d90-2cef-28b8.ngrok-free.app/habitaciones')
                        .then(response => {
                            this.habitaciones = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los habitaciones:', error);
                        });
                }
            }
        });
    </script>
</body>
</html>
