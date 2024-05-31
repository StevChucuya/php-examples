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
                alert("Edición cancelada correctamente.");
            } else {
                alert("Operación cancelada.");
            }
        }
    </script>
</head>
<body>
<div class="container">
    <h1>EDICIÓN DE PACIENTE</h1>
    <?php
    // Verificar si el ID está definido en la URL
    if (isset($_GET['id'])) {
        // Obtener el ID del paciente desde la URL
        $id = $_GET['id'];

        // Verificar si se han enviado los datos del formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Configuración de la conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "covid";

            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Obtener los datos del formulario
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $talla = $_POST['talla'];
            $peso = $_POST['peso'];
            $fiebre = $_POST['fiebre'];
            $disnea = $_POST['disnea'];
            $tos = $_POST['tos'];
            
            // Obtener otros campos del formulario como síntomas, fecha de vacunación, etc.

            // SQL para actualizar los datos del paciente
            $sql = "UPDATE pacientes SET 
                    nombres = '$nombre',
                    apellidos = '$apellido',
                    edad = '$edad',
                    talla_m = '$talla',
                    peso_kg = '$peso',
                    sintoma_fiebre = '$fiebre', 
                    sintoma_disnea = '$disnea',
                    sintoma_tos = '$tos'    
                    WHERE id = $id"; // Aquí debes reemplazar $id con el ID del paciente que deseas actualizar

            // Ejecutar la consulta SQL
            if ($conn->query($sql) === TRUE) {
                echo "Los datos del paciente se han actualizado correctamente.";
            } else {
                echo "Error al actualizar los datos del paciente: " . $conn->error;
            }

            // Cerrar conexión
            $conn->close();
        } else {
            echo "No se han recibido datos del formulario.";
        }
    } else {
        echo "ID no definido en la URL.";
    }
    ?>
    <form method="post">
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
        <input type="checkbox" name="tos" id="tos">
        <label for="tos">Tos</label>
    

        <label for="fecha">Fecha de vacunación:</label>
        <input type="date" id="fecha" name="fecha" placeholder="dd/mm/aaaa">

        <button type="submit">Guardar</button><br>
        <button type="button" class="button" onclick="confirmarCancelacion()">Cancelar</button>
    </form>
</div>
</body>
</html>
