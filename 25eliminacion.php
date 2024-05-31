<?php
// Verificar si se ha enviado el ID del paciente a través de la URL
if (isset($_GET['id'])) {
    // Obtener el ID del paciente desde la URL
    $id = $_GET['id'];

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

    // SQL para eliminar el paciente
    $sql = "DELETE FROM pacientes WHERE id = $id";

    // Ejecutar la consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "El paciente ha sido eliminado correctamente.";
    } else {
        echo "Error al eliminar el paciente: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
} else {
    echo "ID del paciente no proporcionado en la URL.";
}
?>
