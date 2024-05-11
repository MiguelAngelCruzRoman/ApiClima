<!DOCTYPE html>
<html>
<head>
    <title>Documentación de Clientes</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <h1>Documentación de Clientes</h1>
        <button @click="fetchClientes">Obtener Clientes</button>
        <div v-if="clientes.length">
            <h2>Clientes:</h2>
            <ul>
                <li v-for="cliente in clientes" :key="cliente._id">
                    {{cliente}}
                </li>
            </ul>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                clientes: []
            },
            methods: {
                fetchClientes() {
                    axios.get('https://e4ac-2806-10a6-f-92a3-42d-8d90-2cef-28b8.ngrok-free.app/clientes')
                        .then(response => {
                            this.clientes = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los clientes:', error);
                        });
                }
            }
        });
    </script>
</body>
</html>
