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
    "<td><button type='button'>Editar</></td>"+
    "</tr>";
    $(id +" tr:last").after(html);
}
