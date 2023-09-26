function agregarusuario(){
    var dato=$('#frmUsuario').serialize();
    $.ajax({
        type:"POST",
        url:"../DAO/agregarusuario.php",
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
                
            }
            else if(response==0){
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

function abriruse(id2)
{
    var datos=id2;
    $('#txtUse').val(id2);
}
function eliminarusuario(){
    var dato=$('#frmEliminarUsuario').serialize();
    console.log(dato);
    $.ajax({
        type:"POST",
        url:"../DAO/eliminarusuario.php",
        data:dato,
        success:function(response){
            if(response==1){
                Swal.fire({
                    title: '¡éxito!',
                    text: 'Se borro el usuario',
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
            }else if(response==3){
                Swal.fire({
                    title: '¡Error!',
                    text: 'No se encontro el id del usuario intente de nuevo',
                    icon: 'warning',
                    confirmButtonText: 'Aceptar'
                  })
                  $('#MELimnar').modal('hide');
            }
        }
    })
}
function buscaruser(id){
    var datos=id;
    $.ajax({
        
        type:"POST",
        url:"../DAO/selectusuario.php",
        data:{txtmetodo:'buscaruser', id:datos},
        dataType:"JSON",
        
        success:function(r){
           
            $('#txtid').val(r.txtId);
            $('#txtnombre').val(r.txtNo);
            $('#txtapellido').val(r.txtAp);
            $('#txtusuario').val(r.txtUs);
            $('#cmbdepartamento').val(r.txtDe);
           
            
            
        }
    })
}
function actualizaruser(){
    var dato=$('#frmModificarUse').serialize();
    console.log(dato);
    $.ajax({
        type:"POST",
        url:"../DAO/actualizarusuario.php",
        data:dato,
        success:function(response){
            if(response==1)
            {
                Swal.fire({
                    title: 'éxito!',
                    text: 'Se actualizaron los datos con éxito',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                  }).then(()=>{
                      location.reload();
                  });
                
            }
            else if(response==0){
                Swal.fire({
                    title: 'Error!',
                    text: 'Falla en el momento de actualizar, Verifique los campos',
                    icon: 'Warning',
                    confirmButtonText: 'Aceptar'
                  });
                
            }
        }
    })
}