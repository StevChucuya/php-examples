function buscarPacientes(){
    //const nombre = $("#nombre").val();
    //alert("Buscando..."+nombre);
    //-------------------------------

     const $nombre = $("#nombre").val();

let datos ={
    nombre : $nombre
};
    $.ajax({
        url : "27.1-ajax.php",
        type : "post",
        data : datos,
        success : function(result){
                 console.log(result);
        }
    })
    return;
}