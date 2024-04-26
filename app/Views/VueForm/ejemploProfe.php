<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue.js en CodeIgniter</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>
<body>

<div id="app">
    <select v-model="selected">
        <option v-for="option in options" :value="option.value">{{ option.text }}</option>
    </select>
    <select v-model="selected">
        <option v-for="option in arreglo" :value="option">{{ option }}</option>
    </select>
    <div>Selected: {{ selected }}</div>

    <ul>
        <li v-for="alumno in arregloObjetos">{{ alumno.nombre }}</li>
    </ul>
</div>

<script>
    new Vue({
        el: '#app',
        data: {
            selected: 'A',
            options: [
                { text: 'A', value: 'A' },
                { text: 'B', value: 'B' },
                { text: 'C', value: 'C' }
            ],
            arreglo: ["uno", "dos", "tres"],
            arregloObjetos: [
                {nombre: "Moi", noControl: "21TE0149"},
                {nombre: "Pablo", noControl: "21TE0139"},
                {nombre: "Lalo", noControl: "27TE0149"}
            ]
        }
    });
</script>

</body>
</html>
