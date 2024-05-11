<!DOCTYPE html>
<html>

<head>
    <title>Documentación de Comentarios</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <h1>Documentación de Comentarios</h1>
        <button @click="fetchComentarios">Obtener Comentarios</button>
        <div v-if="comentarios.length">
            <h2>Comentarios:</h2>
            <ul>
                <li v-for="comentario in comentarios" :key="comentario._id">
                    {{comentario}}
                </li>
            </ul>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                comentarios: []
            },
            methods: {
                fetchComentarios() {
                    axios.get('https://e4ac-2806-10a6-f-92a3-42d-8d90-2cef-28b8.ngrok-free.app/comentarios')
                        .then(response => {
                            this.comentarios = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los comentarios:', error);
                        });
                }
            }
        });
    </script>
</body>

</html>