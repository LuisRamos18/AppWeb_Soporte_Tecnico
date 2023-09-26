function buscarpro(id){
    var datos=id;
    $.ajax({
        type:"POST",
        url:"../DAO/ticketproceso.php",
        data:{txtmetodo:'buscarpro', id:datos},
        dataType:"JSON",
        success:function(r){
            $('#lblDes').html(r.txtDes);
            $('#txtPro').val(r.txtPro);
           
        }
    })
}