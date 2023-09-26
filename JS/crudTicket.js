function agregarticket(){
    var dato=$('#frmTicket').serialize();
    console.log(dato);
    $.ajax({
        type:"POST",
        url:"../DAO/agregarticket.php",
        data:dato,
        dataType:"JSON",
        success:function(response){
            if(response==0)
            {

                Swal.fire({
                    title: 'Error!',
                    text: 'Falla en el momento de agregar, Verifique los campos',
                    icon: 'Warning',
                    confirmButtonText: 'Aceptar'
                  });
                
                
            }else{
                console.log(response);
                Swal.fire({
                    title: 'Éxito!',
                    text: 'Se agregó los datos con éxito tu folio es:\n ' +response.txtid,
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                  }).then(()=>{
                      location.reload();
                  });
            }
        
        }
    })
}