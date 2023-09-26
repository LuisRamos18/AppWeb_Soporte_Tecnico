function agregardepa(){
    var dato=$('#frmDepartamento').serialize();
    $.ajax({
        type:"POST",
        url:"../DAO/agregardepartamento.php",
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
function abrir(id2)
{
    var datos=id2;
    $('#txtDesc').val(id2);
}
function eliminardepa(){
    var dato=$('#frmEliminarDepa').serialize();
    console.log(dato);
    $.ajax({
        type:"POST",
        url:"../DAO/eliminardepartamento.php",
        data:dato,
        success:function(response){
            if(response==1){
                Swal.fire({
                    title: '¡éxito!',
                    text: 'Se borro el departamento con éxito',
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
            };
        }
    })
}
function buscarid(id){
    var datos=id;
    $.ajax({
        type:"POST",
        url:"../DAO/selectdepa.php",
        data:{txtmetodo:'buscarid', id:datos},
        dataType:"JSON",
        success:function(r){
            $('#txtde').val(r.txtId);
            $('#numseco').val(r.txtCe);
            $('#cmbubicacion').val(r.txtU);
            $('#txtdepartamento').val(r.txtDes);
        }
    })
}
function actualizardepa(){
    var dato=$('#frmModificarDepa').serialize();
    console.log(dato);
    $.ajax({
        type:"POST",
        url:"../DAO/actualizardepa.php",
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

