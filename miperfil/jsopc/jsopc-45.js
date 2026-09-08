function cn45_f1(dato0,dato1,dato2) {
    $.post("consulta/cn-45.php",{dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function md45_d1(dato0,dato1) {
    $.post("modal/mod-45.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}
function md45_002_d1(dato0) {
    $.post("modal/mod-45.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn45_d2() {
    
    $.post("consulta/cn-45.php", $("#frm_filtromod").serialize(), function (data) {
        $("#table45").html(data);
    });
}


function reporte1(){

    $('#frm_filtro').attr('action', 'reporte/reporte-45.php');
    $('#frm_filtro').submit(); 
}