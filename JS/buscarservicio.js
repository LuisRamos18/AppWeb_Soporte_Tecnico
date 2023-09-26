function enviar(id){
    var datos=id;
    $.ajax({
        type:"POST",
        url:"../DAO/selectservicio.php",
        data:{txtmetodo:'enviar', id:datos},
        dataType:"JSON",
        success:function(r){
            console.log(r);
            $('#txtcomunidades').html(r.txtCo);
            $('#txtdireccion').html(r.txtDi);
            $('#txttelefono').html(r.txtTe);
            $('#txthorario').html(r.txtHo);
            $('#txtdescripcion').html(r.txtDe);
            $('#txtrequisitos').html(r.txtRe);
        }
    })
}
