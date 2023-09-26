function buscarsol(id){
    var datos=id;
    $.ajax({
        type:"POST",
        url:"../DAO/selectTickSol.php",
        data:{txtmetodo:'buscarsol', id:datos},
        dataType:"JSON",
        success:function(r){
            $('#lblDesc').html(r.txtDes);
            $('#txtDesc').val(r.txtId);
           
        }
    })
}