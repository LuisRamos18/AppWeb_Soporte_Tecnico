function iniciar(){
    var dato=$('#frmIniciar').serialize();
    $.ajax({
        type:"POST",
        url:"../DAO/agregarIniciar.php",
        data:dato,
        success:function(response){
            if(response==1)
            {
                Swal.fire({
                    title: 'éxito!',
                    text: 'Se aceptó el Ticket',
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