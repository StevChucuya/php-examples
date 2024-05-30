<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Edición de Paciente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        input[type="checkbox"] {
            margin-right: 10px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button.cancel {
            background-color: #ccc;
        }
    </style>
    <script>
  function confirmarCancelacion() {
            const confirmacion = confirm("¿Desea cancelar la Edición?");
            if (confirmacion) {
                alert("Edicion cancelada correctamente.");
            } else {
                alert("Operación cancelada.");
            }
        }
        function confirmarGuardacion() {
            const confirmacion = confirm("¿Desea guardar la Edición?");
            if (confirmacion) {
                alert("Edicion guardada correctamente.");
            } else {
                alert("Operación cancelada.");
            }
        }
</script>
</head>
<body>
    <div class="container">
        <h1>EDICIÓN DE PACIENTE</h1>
        <form action="process_patient.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre">
 
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ingrese el apellido">
 
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" min="0" placeholder="Ingrese la edad">
 
            <label for="talla">Talla (m):</label>
            <input type="text" id="talla" name="talla" placeholder="Ingrese la talla">
 
            <label for="peso">Peso (kg):</label>
            <input type="text" id="peso" name="peso" placeholder="Ingrese el peso">
 
            <label>Síntomas:</label>
            <input type="checkbox" name="fiebre" id="fiebre">
        <label for="fiebre">Fiebre</label>
        <input type="checkbox" name="disnea" id="disnea">
        <label for="disnea">Disnea</label>
        <input type="checkbox" name="dolor_muscular" id="dolor_muscular">
        <label for="dolor_muscular">Dolor Muscular</label>
        <input type="checkbox" name="gripe" id="gripe">
        <label for="gripe">Gripe</label>
        <input type="checkbox" name="presion_alta" id="presion_alta">
        <label for="presion_alta">Presion Alta</label>
        <input type="checkbox" name="fatiga" id="fatiga">
        <label for="fatiga">Fatiga</label>
        <input type="checkbox" name="garraspera" id="garraspera">
        <label for="garraspera">Garraspera</label>
            <!-- Agrega más síntomas aquí -->
 
            <label for="fecha">Fecha de vacunación:</label>
            <input type="date" id="fecha" name="fecha" placeholder="dd/mm/aaaa">
 


          <button type="button" class="button" onclick="confirmarGuardacion()">Guardar</button>
            <button type="button" class="button" onclick="confirmarCancelacion()">Cancelar</button>
        </form>
    </div>
</body>
</html>