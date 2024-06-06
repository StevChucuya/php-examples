<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>    
    <center><h1>Busqueda de Pacientes</h1></center>
    <!-- <form action="22.1-consulta-pdo.php" method="POST"> -->
    <input type="text" placeholder="Escribe aqui" name="nombre" id="nombre" /><br>
    <label id="tos" name="tos">Tos</label><input type="checkbox" for="tos">
    <button type="button" onclick="buscarPacientes();">Buscar</button>
    <table style="border: 1px solid black;" id="tabla">


    <button type="button" onclick="limpiarCamposNuevoPaciente();" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo Paciente</button>


        <tr>
            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>Acciones</td>
        </tr>          
    </table>
    <!-- </form> -->
    <script type="text/javascript"
    src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="27.2.js"></script>
 
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre2" name="nombre2"/>
                </div>
                <div class="modal-body">
                    <label for="name" class="form-label">Edad:</label>
                    <input type="text" class="form-control" id="nombre3" name="nombre3"/>
                </div>
                <div class="modal-body">
                    <label for="name" class="form-label">Talla:</label>
                    <input type="text" class="form-control" id="nombre4" name="nombre4"/>
                </div>
                <div class="modal-body">
                    <label for="name" class="form-label">Peso:</label>
                    <input type="text" class="form-control" id="nombre5" name="nombre5"/>
                </div>
                <div class="modal-body">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="nombre6" id="nombre6" value="option1">
                <label class="form-check-label" for="exampleRadios1">Tos</label>
                </div>
                </div>
                <div class="modal-body">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="nombre7" id="nombre7" value="option1">
                <label class="form-check-label" for="exampleRadios1">Fiebre</label>
                </div>
                </div>
                <div class="modal-body">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="nombre8" id="nombre8" value="option1">
                <label class="form-check-label" for="exampleRadios1">Disnea</label>
                </div>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id_paciente" value="ID_DEL_PACIENTE_A_ACTUALIZAR">
                    <button type='button' class="btn-accept" onclick="actualizar();">Guardar</button>&nbsp;
                </div>
                <div class="modal-body">
                    <button type='button' class="btn-warning" onclick ="cancelar();">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
 