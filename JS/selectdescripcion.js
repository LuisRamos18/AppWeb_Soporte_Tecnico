function buscarticket(id){
    var datos=id;
    $.ajax({
        type:"POST",
        url:"../DAO/selectdescripcion.php",
        data:{txtmetodo:'buscarticket', id:datos},
        dataType:"JSON",
        success:function(r){
            $('#lblDesc').html(r.txtDes);
            $('#txtDesc').val(r.txtId);
           
        }
    })
}