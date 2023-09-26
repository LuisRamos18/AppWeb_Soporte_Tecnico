function buscarasig(id){
    var datos=id;
    $.ajax({
        type:"POST",
        url:"../DAO/selectasignar.php",
        data:{txtmetodo:'buscarasig', id:datos},
        dataType:"JSON",
        success:function(r){
            $('#lblDesc').html(r.txtDes);
            $('#txtDesc').val(r.txtId);
           
        }
    })
}