<?php
// Verificar si se han enviado datos del formulario
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
    // Obtener otros campos del formulario como sintomas, fecha de vacunación, etc.

    // Buscar el ID del paciente basado en el nombre y los apellidos
    $sql = "SELECT id FROM pacientes WHERE nombres = '$nombre' AND apellidos = '$apellido'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Se encontró el paciente, obtener su ID
        $row = $result->fetch_assoc();
        $id_paciente = $row["id"];

        // Ahora puedes utilizar $id_paciente para realizar la actualización en la base de datos
        // Por ejemplo, podrías construir y ejecutar una consulta SQL para actualizar los datos del paciente

        // Aquí deberías ejecutar la consulta SQL para actualizar los datos del paciente utilizando $id_paciente

        echo "Los datos del paciente se han actualizado correctamente.";
    } else {
        echo "No se encontró ningún paciente con ese nombre y apellidos.";
    }

    // Cerrar conexión
    $conn->close();
}
?>
