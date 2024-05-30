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
    <form method="post" action="22.1-consulta.php">
      <label for="name">Nombres o Apellidos:</label>
      <input type="text" id="name" name="name"><br><br>
      <input type="checkbox" id="tos" name="sintomas[]" value="tos">
      <label for="tos">Tos</label>
      <input type="checkbox" id="fiebre" name="sintomas[]" value="fiebre">
      <label for="fiebre">Fiebre</label>
      <input type="checkbox" id="disnea" name="sintomas[]" value="disnea">
      <label for="disnea">Disnea</label>
      <input type="checkbox" id="dolor" name="sintomas[]" value="dolor">
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
        
        // Paso 1: Configurar la conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "covid";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Verificar la conexión
        if ($conn->connect_error) {
            die("La conexión a la base de datos falló: " . $conn->connect_error);
        }
        
        // Recibir y procesar los datos del formulario de búsqueda
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $sintomas = isset($_POST["sintomas"]) ? $_POST["sintomas"] : [];
            
            // Construir la consulta SQL
            $sql = "SELECT * FROM pacientes WHERE (nombre LIKE '%$nombre%' OR apellido LIKE '%$nombre%')";
            
            if (!empty($sintomas)) {
                foreach ($sintomas as $sintoma) {
                    $sql .= " AND $sintoma = 1";
                }
            }
        
            // Ejecutar la consulta SQL
            $result = $conn->query($sql);
        
            // Mostrar los resultados
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
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No se encontraron pacientes.</td></tr>";
            }
        }
        
        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>
        
      </tbody>
    </table>
  </div>    
</body>
</html>