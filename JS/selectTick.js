function buscarconid(id){
    var datos=id;
    $.ajax({
        type:"POST",
        url:"../DAO/selectTick.php",
        data:{txtmetodo:'buscarid', id:datos},
        dataType:"JSON",
        success:function(r){
            $('#lblDesc').html(r.txtDes);
            $('#txtDesc').val(r.txtId);
           
        }
    })
}