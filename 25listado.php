<!DOCTYPE html>
<html>
<head>
  <title>Búsqueda de Pacientes</title>
  <style>
    body {
      font-family: sans-serif;
    }
    .container {
      width: 500px;
      margin: 0 auto;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
    .button {
      padding: 8px 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Búsqueda de Pacientes</h1>
    <form method="GET">
      <label for="name">Nombres o Apellidos:</label>
      <input type="text" id="name" name="name"><br><br>
      <input type="checkbox" id="tos" name="tos">
      <label for="tos">Tos</label>
      <input type="checkbox" id="fiebre" name="fiebre">
      <label for="fiebre">Fiebre</label>
      <input type="checkbox" id="disnea" name="disnea">
      <label for="disnea">Disnea</label>
      <input type="checkbox" id="dolor" name="dolor">
      <label for="dolor">Dolor Muscular</label><br><br>
      <button type="submit" class="button">Buscar</button>
    </form>
    <br>
    <table>
      <thead>
        <tr>
          <th>Paciente</th>
          <th>Edad</th>
          <th>Talla</th>
          <th>Peso</th>
          <th>Tos</th>
          <th>Fiebre</th>
          <th>Disnea</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      <?php
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

        // Inicializar la consulta SQL
        $sql = "SELECT id, nombres, apellidos, edad, talla_m, peso_kg, sintoma_tos, sintoma_fiebre, sintoma_disnea FROM pacientes";

        // Verificar si se proporcionó un nombre para buscar
        if(isset($_GET['name']) && !empty($_GET['name'])) {
            $name = $conn->real_escape_string($_GET['name']);
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
                echo "<td>" . htmlspecialchars($row["nombres"]) . " " . htmlspecialchars($row["apellidos"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["edad"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["talla_m"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["peso_kg"]) . "</td>";
                echo "<td>" . ($row["sintoma_tos"] ? "Sí" : "No") . "</td>";
                echo "<td>" . ($row["sintoma_fiebre"] ? "Sí" : "No") . "</td>";
                echo "<td>" . ($row["sintoma_disnea"] ? "Sí" : "No") . "</td>";
                echo "<td>";
                echo "<a href='25edicion.php?id={$row['id']}' class='button'>Editar</a>";
                echo "<a href='25eliminacion.php?id={$row['id']}' class='button' style='background-color: #FF5733;'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No se encontraron resultados</td></tr>";
        }

        // Cerrar conexión
        $conn->close();
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
