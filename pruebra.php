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
    <form method="post" action="buscar_pacientes.php">
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
        // Aquí se debe incluir el código PHP para consultar la base de datos y mostrar los resultados de la búsqueda.
        ?>
      </tbody>
    </table>
  </div>    
</body>
</html>