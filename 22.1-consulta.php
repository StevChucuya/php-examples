<?php
// Verificar si se ha enviado el formulario de búsqueda
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los criterios de búsqueda del formulario
    $nombre = $_POST["nombre"];
    $sintomas = isset($_POST["sintomas"]) ? $_POST["sintomas"] : [];

    // Conectar a la base de datos (reemplaza los valores con los de tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "covid";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Construir la consulta SQL basada en los criterios de búsqueda
    $sql = "SELECT * FROM pacientes WHERE (nombre LIKE '%$nombre%' OR apellido LIKE '%$nombre%')";

    // Si se han seleccionado síntomas, agregarlos a la consulta
    if (!empty($sintomas)) {
        foreach ($sintomas as $sintoma) {
            $sql .= " AND $sintoma = 1";
        }
    }

    // Ejecutar la consulta
    $result = $conn->query($sql);

    // Mostrar los resultados en la tabla
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nombre"] . " " . $row["apellido"] . "</td>";
            echo "<td>" . $row["edad"] . "</td>";
            echo "<td>" . $row["talla"] . "</td>";
            echo "<td>" . $row["peso"] . "</td>";
            echo "<td>" . ($row["tos"] ? "Sí" : "No") . "</td>";
            echo "<td>" . ($row["fiebre"] ? "Sí" : "No") . "</td>";
            echo "<td>" . ($row["disnea"] ? "Sí" : "No") . "</td>";
            echo '<td>
                    <form action="editar_paciente.php" method="GET">
                        <input type="hidden" name="id_paciente" value="' . $row["id"] . '">
                        <button type="submit" style="background-color: #4CAF50; color: white; border: none; border-radius: 4px; padding: 10px 20px;">Editar</button>
                    </form>
                    <button type="button" class="button" onclick="confirmarEliminacion()">Eliminar</button>
                </td>';
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No se encontraron pacientes.</td></tr>";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>