function agregarequipo(){
    var dato=$('#frmEquipo').serialize();
    console.log(dato);
    $.ajax({
        type:"POST",
        url:"../DAO/agregarequipo.php",
        data:dato,
        success:function(response){
            console.log(response);
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

function abrirequi(id2)
{
    var datos=id2;
    $('#txtEqui').val(id2);
}
function eliminarequipo(){
    var dato=$('#frmEliminarEquipo').serialize();
    console.log(dato);
    $.ajax({
        type:"POST",
        url:"../DAO/eliminarequipo.php",
        data:dato,
        success:function(response){
            if(response==1){
                Swal.fire({
                    title: '¡éxito!',
                    text: 'Se borro el equipo',
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
function buscarequipo(id){
    var datos=id;
    $.ajax({
        type:"POST",
        url:"../DAO/selectequipo.php",
        data:{txtmetodo:'buscarequipo', id:datos},
        dataType:"JSON",
        success:function(r){
            $('#lblDesc').val(r.txtIde);
            $('#txtequipo').val(r.txtEq);
            $('#txtmodelo').val(r.txtMo);
            $('#txtserie').val(r.txtSe);
            $('#cmbmarca').val(r.txtMa);
            $('#cmbgarantia').val(r.txtGa);
            $('#datelimite').val(r.txtFe);
            $('#cmbso').val(r.txtSi);
            $('#txtip').val(r.txtIp);
            $('#txtnombre').val(r.txtTi);
            $('#txtcaracteristicas').val(r.txtCa);
        
        }
    })
}
function actualizarequipo(){
    var dato=$('#frmModificarEquipo').serialize();
    console.log(dato);
    $.ajax({
        type:"POST",
        url:"../DAO/actualizarequipo.php",
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

