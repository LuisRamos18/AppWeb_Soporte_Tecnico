function agregarasignacion(){
    var dato=$('#frmAsignar').serialize();
    $.ajax({
        type:"POST",
        url:"../DAO/agregarasignacion.php",
        data:dato,
        success:function(response){
            if(response==1)
            {
                Swal.fire({
                    title: 'éxito!',
                    text: 'Se agregó los datos con éxito',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                  }).then(()=>{
                      location.reload();
                  });
                
            }else if(response==0){
                Swal.fire({
                    title: 'Error!',
                    text: 'Falla en el momento de agregar, Verifique los campos',
                    icon: 'Warning',
                    confirmButtonText: 'Aceptar'
                  });
                
            }
        }
    })
}
function abrirasi(id2)
{
    var datos=id2;
    $('#txtAsi').val(id2);
}
function eliminarasi(){
    var dato=$('#frmEliminarAsi').serialize();
    console.log(dato);
    $.ajax({
        type:"POST",
        url:"../DAO/eliminarasignacion.php",
        data:dato,
        success:function(response){
            if(response==1){
                Swal.fire({
                    title: '¡éxito!',
                    text: 'Se deshizo la asignación',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                  }).then(()=>{
                      location.reload();
                  });

            }else if(response==2){
                Swal.fire({
                    title: '¡Error!',
                    text: 'Los datos de esta ciudad está siendo utilizados, no se pueden borrar',
                    icon: 'warning',
                    confirmButtonText: 'Aceptar'
                  })
                  $('#MELimnar').modal('hide');
            }else if(response==0){
                Swal.fire({
                    title: '¡Error!',
                    text: 'No se encontro el id del equipo intente de nuevo',
                    icon: 'warning',
                    confirmButtonText: 'Aceptar'
                  })
                  $('#MELimnar').modal('hide');
            }
        }
    })
}
