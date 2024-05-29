<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre']; //mayor a 20
    $apellido = $_POST['apellido']; //mayor a 30
    $edad = $_POST['edad'];
    $talla = $_POST['talla']; 
    $peso = $_POST['peso'];

    if (strlen($nombre) > 20) {
        echo "tu nombre es demasiado largo";
        exit;
    }
    if (strlen($apellido) > 30) {
        echo "tu apellido es demasiado largo";
        exit;
    }

    $tos = array_key_exists("tos",$_POST) ? $_POST['tos'] : "0";
    $tos = $tos == "" ? "0" : $tos;
    $fiebre = array_key_exists("fiebre",$_POST) ? $_POST['fiebre'] : "0";
    $fiebre = $fiebre == "" ? "0" : $fiebre;
    $disnea = array_key_exists("disnea",$_POST) ? $_POST['disnea'] : "0";
    $disnea = $disnea == "" ? "0" : $disnea;
    $dolor_muscular = array_key_exists("dolor_muscular",$_POST) ? $_POST['dolor_muscular'] : "0";
    $dolor_muscular = $dolor_muscular == "" ? "0" : $dolor_muscular;
    $gripe = array_key_exists("gripe",$_POST) ? $_POST['gripe'] : "0";
    $gripe = $gripe == "" ? "0" : $gripe;
    $Presion_alta = array_key_exists("Presion_alta",$_POST) ? $_POST['Presion_alta'] : "0";
    $Presion_alta = $Presion_alta == "" ? "0" : $Presion_alta;
    $Fatiga = array_key_exists("Fatiga",$_POST) ? $_POST['Fatiga'] : "0";
    $Fatiga = $Fatiga == "" ? "0" : $Fatiga;
    $Garraspera = array_key_exists("Garraspera",$_POST) ? $_POST['Garraspera'] : "0";
    $Garraspera = $Garraspera == "" ? "0" : $Garraspera;
    $fecha = $_POST['fecha'];


    if (empty($nombre) || empty($apellido) || empty($edad) || empty($talla) || empty($peso)) {
        echo "Todos los campos son obligatorios." ;
        exit;
    }
    
    if ($tos==1 || $fiebre==1 || $disnea==1 || $dolor_muscular==1 || $gripe==1 || $Presion_alta==1 || $Fatiga==1 || $Garraspera==1) {
        $resultado = "1";
    }
    else{
        $resultado ="0";
    }
     
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "covid";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

        $conn->beginTransaction();
        $sql="INSERT INTO `pacientes` (`nombres`, `apellidos`,
        `edad`, `talla_m`, `peso_kg`, `sintoma_tos`, `sintoma_fiebre`, `sintoma_disnea`, `sintoma_dolormuscular`, `sintoma_gripe`, `sintoma_presionalta`, `sintoma_fatiga`, `sintoma_garraspera`, `ultima_fecha_vacunacion`, `resultado`)
        VALUES('$nombre', '$apellido', '$edad', '$talla', '$peso', '$tos', '$fiebre', '$disnea', '$dolor_muscular', '$gripe', '$Presion_alta', '$Fatiga', '$Garraspera', '$fecha', '$resultado');";
        


        $conn->exec($sql);
        $conn->commit();
        echo "Fue registrado correctamente.";
    }
    catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }
    try {
        // Realizar la consulta para obtener un paciente con 78 años o más
        $sql = "SELECT * FROM pacientes ORDER BY id DESC LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $paciente = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Mostrar el paciente encontrado
        if ($paciente) {
            echo "<h2>Paciente Registrado:</h2>";
            echo "<p>{$paciente['nombres']} {$paciente['apellidos']} (Edad: {$paciente['edad']})</p>";
        } else {
            echo "<p>No se encontraron pacientes con 78 años o más.</p>";
        }
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }


}
?>