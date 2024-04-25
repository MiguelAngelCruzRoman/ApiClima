<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentacion API</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>

<body>
    <div id="app">
        <h1>Ubicaciones</h1>
        <form @submit.prevent="agregarUbicacion">
            <label for="altitud">Altitud:</label>
            <input type="number" id="altitud" v-model="nuevaAltitud">

            <label for="temperatura">Temperatura:</label>
            <input type="number" id="temperatura" v-model="nuevaTemperatura">
            <button type="submit">Agregar</button>
        </form>
        <ul>
            <li v-for="(clima, index) in climas" :key="index">A una altitud de {{clima.altitud}} m se registró
                {{clima.temperatura}} °C</li>
        </ul>
    </div>
    <script>
        new Vue({
            el: '#app',
            data: {
                climas: [],
                nuevaAltitud: '', 
                nuevaTemperatura: '' 
            },
            mounted() {
                this.fetchData();
            },
            methods: {
                async fetchData() {
                    try {
                        const response = await fetch('http://localhost:8080/documentacion/getClimaByTipoClimaUbicacionTemperatura?tipoClima=Soleado&ubicacion=San%20V%C3%ADctor%20de%20la%20Monta%C3%B1a&temperaturaMinima=0');
                        const data = await response.json();
                        this.climas = data.datos;
                    } catch (error) {
                        console.error('Error al recuperar los datos', error);
                    }
                },
                async agregarUbicacion() {
                    this.climas.push({
                        altitud: this.nuevaAltitud,
                        temperatura: this.nuevaTemperatura
                    });
                    this.nuevaAltitud = '';
                    this.nuevaTemperatura = '';
                }
            }
        });
    </script>
</body>

</html>
