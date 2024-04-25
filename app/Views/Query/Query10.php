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
        <ul>
        <li v-for="(clima, index) in climas" :key="index">A una altitud de {{clima.altitud}} m se registró {{clima.temperatura}} °C</li>
        </ul>
    </div>
    <script>
        new Vue({
            el: '#app',
            data: {
                climas: []
            },
            mounted() {
                this.fetchData();
            },
            methods: {
                async fetchData() {
                    try {
                        const response = await fetch('http://localhost:8080/documentacion/getClimaByHumedadSensacionTermica?humedadMinima=10&humedadMaxima=20&sensacionTermicaMinima=10&sensacionTermicaMaxima=20');
                        const data = await response.json();
                        this.climas = data.datos;
                    } catch (error) {
                        console.error('Error al recuperar los datos', error);
                    }
                }
            }
        }
    );  
    </script>
</body>

</html>