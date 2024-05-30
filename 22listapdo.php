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
    <form>
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
        <tr>
          <td>Hugo</td>
          <td>25</td>
          <td>174</td>
          <td>50</td>
          <td><input type="checkbox" checked></td>
          <td><input type="checkbox" checked></td>
          <td><input type="checkbox"></td>
          <td>
            <button type="button" class="button">Editar</button>
            <button type="button" class="button">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>Maria</td>
          <td>48</td>
          <td>160</td>
          <td>100</td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox" checked></td>
          <td>
            <button type="button" class="button">Editar</button>
            <button type="button" class="button">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>