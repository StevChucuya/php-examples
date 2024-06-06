//function buscarPacientes(){
    //const nombre = $("#nombre").val();
    //alert("Buscando..."+nombre);
    //-------------------------------

     //const $nombre = $("#nombre").val();

//let datos ={
 //   nombre : $nombre
//};
    //$.ajax({
       // url : "27.1-ajax.php",
       // type : "post",
       // data : datos,
       // success : function(result){
       //          console.log(result);
       // }
   // })
   // return;
//}



function buscarPacientes(){
 
     const $nombre = $("#nombre").val();

let datos ={
    nombre : $nombre
};
    $.ajax({
        url : "27.1-ajax.php",
        type : "post",
        data : datos,
        success : function(result){
            debugger;
            console.log(result);
            const pacientes =$.parseJSON(result);
            pacientes.forEach(item => {
                agregarFilas("#tabla",item);
                
            });
                 
        }
    })


    return;
}


function agregarFilas(id,paciente){
    const html =
    "<tr>"+
    "<td>"+paciente.nombres+"</td>"+
    "<td>"+paciente.edad+"</td>"+
    "<td>"+paciente.talla_m+"</td>"+
    "<td>"+paciente.peso_kg+"</td>"+
    "<td>"+paciente.sintoma_tos+"</td>"+
    "<td>"+paciente.sintoma_fiebre+"</td>"+
    "<td>"+paciente.sintoma_disnea+"</td>"+
    "<td><button type='button' onclick =editar('"+paciente.nombres+"','"+paciente.edad+"','"+paciente.talla_m+"','"+paciente.peso_kg+"','"+paciente.sintoma_tos+"','"+paciente.sintoma_fiebre+"','"+paciente.sintoma_disnea+"');>Editar</button></td>"+

    "</tr>";
    $(id +" tr:last").after(html);
}

function editar(nombres,edad,talla_m,peso_kg,sintoma_tos,sintoma_fiebre,sintoma_disnea){

    $('#exampleModalnuevo').modal('show');
    $("#nombre2").val(nombres);

    $('#exampleModal').modal('show');
    $("#nombre3").val(edad);

    $('#exampleModal').modal('show');
    $("#nombre4").val(talla_m);

    $('#exampleModal').modal('show');
    $("#nombre5").val(peso_kg);

    if (sintoma_tos == 1) {
        $('#nombre6').prop('checked', true);
    } 
    else if(sintoma_tos == 2){
        $('#nombre6').prop('checked', true);
    }else {
        $('#nombre6').prop('checked', false);
    }
    
    // Para nombre7
    if (sintoma_fiebre == 1) {
        $('#nombre7').prop('checked', true);
    } else if (sintoma_fiebre == 2){
        $('#nombre7').prop('checked', true);
    }else{
        $('#nombre7').prop('checked', false);
    }
    
    // Para nombre8
    if (sintoma_disnea == 1) {
        $('#nombre8').prop('checked', true);
    } else if (sintoma_disnea == 2){
        $('#nombre8').prop('checked', true);
    }else{
        $('#nombre8').prop('checked', false);
    }

}

function limpiarCamposNuevoPaciente() {
    $('#nombre2').val(''); // Limpiar campo de nombres
    $('#nombre3').val(''); // Limpiar campo de edad
    $('#nombre4').val(''); // Limpiar campo de talla
    $('#nombre5').val(''); // Limpiar campo de peso
    $('#nombre6').prop('checked', false); // Desmarcar checkbox de sintoma_tos
    $('#nombre7').prop('checked', false); // Desmarcar checkbox de sintoma_fiebre
    $('#nombre8').prop('checked', false); // Desmarcar checkbox de sintoma_disnea
}

// Función para manejar el evento de apertura del modal para ingresar nuevo paciente
$('#exampleModal').on('show.bs.modal', function (event) {
    limpiarCamposNuevoPaciente(); // Limpiar campos del formulario
});


function actualizar() {
    const $id = $("#id_paciente").val();
    const $nombre = $("#nombre2").val();
    const $edad = $("#nombre3").val();
    const $talla = $("#nombre4").val();
    const $peso = $("#nombre5").val();
    const $tos = $("#nombre6").val();
    const $fiebre = $("#nombre7").val();
    const $disnea = $("#nombre8").val();
   
    let datos ={
        id: $id,
        nombre: $nombre,
        edad: $edad,
        talla: $talla,
        peso: $peso,
        tos: $tos,
        fiebre: $fiebre,
        disnea: $disnea
    };
    
    $.ajax({
        url: "27.3-ajaz-actualizar.php",
        type: "post",
        data: datos,
        success: function(result) {              
            alert("Se guardaron los datos correctamente de " + result);            
        }
    });
}

 
function cancelar() {
    $('#exampleModal').modal('hide');    
}












/*
function nuevoPaciente(){
    const html =
    "<tr>"+
    "<td>"+paciente.nombres+"</td>"+
    "<td>"+paciente.edad+"</td>"+
    "<td>"+paciente.talla_m+"</td>"+
    "<td>"+paciente.peso_kg+"</td>"+
    "<td>"+paciente.sintoma_tos+"</td>"+
    "<td>"+paciente.sintoma_fiebre+"</td>"+
    "<td>"+paciente.sintoma_disnea+"</td>"+
    "<td><button type='button' onclick =guardar('"+paciente.nombres+"''"+paciente.edad+"','"+paciente.talla_m+"','"+paciente.peso_kg+"','"+paciente.sintoma_tos+"','"+paciente.sintoma_fiebre+"','"+paciente.sintoma_disnea+"');>Guardar</button></td>"+

    "</tr>";
    $(id +" tr:last").after(html);
}



function guardar(nombres,edad,talla_m,peso_kg,sintoma_tos,sintoma_fiebre,sintoma_disnea){

    $('#exampleModalnuevo').modal('show');
    $("#nombre2").val(nombres);

    $('#exampleModal').modal('show');
    $("#nombre3").val(edad);

    $('#exampleModal').modal('show');
    $("#nombre4").val(talla_m);

    $('#exampleModal').modal('show');
    $("#nombre5").val(peso_kg);

    if (sintoma_tos == 1) {
        $('#nombre6').prop('checked', true);
    } 
    else if(sintoma_tos == 2){
        $('#nombre6').prop('checked', true);
    }else {
        $('#nombre6').prop('checked', false);
    }
    
    // Para nombre7
    if (sintoma_fiebre == 1) {
        $('#nombre7').prop('checked', true);
    } else if (sintoma_fiebre == 2){
        $('#nombre7').prop('checked', true);
    }else{
        $('#nombre7').prop('checked', false);
    }
    
    // Para nombre8
    if (sintoma_disnea == 1) {
        $('#nombre8').prop('checked', true);
    } else if (sintoma_disnea == 2){
        $('#nombre8').prop('checked', true);
    }else{
        $('#nombre8').prop('checked', false);
    }

}
*/