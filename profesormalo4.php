<?php
// Configuración de la conexión a la base de datos
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Inicializar la consulta SQL
$sql = "SELECT nombres, apellidos, edad, talla_m, peso_kg, sintoma_tos, sintoma_fiebre, sintoma_disnea FROM tu_tabla_pacientes";

// Verificar si se proporcionó un nombre para buscar
if(isset($_GET['name']) && !empty($_GET['name'])) {
    $name = $_GET['name'];
    // Añadir condición para buscar por nombre o apellido
    $sql .= " WHERE nombres LIKE '%$name%' OR apellidos LIKE '%$name%'";
}

// Ejecutar la consulta SQL
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Mostrar los resultados en la tabla HTML
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombres"] . " " . $row["apellidos"] . "</td>";
        echo "<td>" . $row["edad"] . "</td>";
        echo "<td>" . $row["talla_m"] . "</td>";
        echo "<td>" . $row["peso_kg"] . "</td>";
        echo "<td>" . ($row["sintoma_tos"] ? "Sí" : "No") . "</td>";
        echo "<td>" . ($row["sintoma_fiebre"] ? "Sí" : "No") . "</td>";
        echo "<td>" . ($row["sintoma_disnea"] ? "Sí" : "No") . "</td>";
        echo "<td><button>Acción</button></td>"; // Puedes añadir acciones aquí
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>No se encontraron resultados</td></tr>";
}

// Cerrar conexión
$conn->close();
?>