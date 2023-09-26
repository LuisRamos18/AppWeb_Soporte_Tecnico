function buscar(id,institucion){
    var datos=id;
    var datos2=institucion;
    $.ajax({
        type:"POST",
        url:"../DAO/selectinstitucion.php",
        data:{txtmetodo:'buscar', id:datos,institucion:datos2},
        dataType:"JSON",
        success:function(r){
        
            console.log(r);
            $('#txtIm').html(r.txtIm);
            $('#txtDe').html(r.txtDe);
            $('#txtins').html(r.txtIn);
            $('#txtNo').html(r.txtNo);
        }
    })
}

