<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumir API en CodeIgniter con Vue.js</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>

<body>
    <div id="app">
        <h1>Clientes</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Matrícula</th>
                    <th>Capacidad Pasajeros</th>
                    <th>Capacidad Carga</th>
                    <th>Horas de Vuelo</th>
                    <th>Estado</th>
                    <th>Fecha de Creación</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="cliente in clientes.datos">
                    <td>{{ cliente.id }}</td>
                    <td>{{ cliente.matricula }}</td>
                    <td>{{ cliente.capacidadPasajeros }}</td>
                    <td>{{ cliente.capacidadCarga }}</td>
                    <td>{{ cliente.horasDeVuelo }}</td>
                    <td>{{ cliente.estado }}</td>
                    <td>{{ cliente.created_at }}</td>
                </tr>
            </tbody>
        </table>
        <button @click="insertarDatos">Insertar en la Base de Datos</button>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                clientes: <?php echo json_encode($clientes); ?>
            },
            methods: {
                insertarDatos() {
                    fetch('/insertarDatos', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(this.clientes.aviones)
                    })
                    .then(response => {
                        if (response.ok) {
                            console.log('Datos insertados correctamente en la base de datos.');
                        } else {
                            console.error('Error al insertar datos en la base de datos.');
                        }
                    })
                    .catch(error => {
                        console.error('Error al insertar datos en la base de datos:', error);
                    });
                }
            }
        });

    </script>
</body>

</html>
