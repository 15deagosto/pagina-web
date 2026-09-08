function md47_d1(dato0, dato1) {
    $.post("modal/mod-47.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}

function md47_002_d1(dato0) {
    $.post("modal/mod-47.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn47_r002_f1() {
    $.post("consulta/cn-47.php", $("#frm_filtromod").serialize(), function (data) {
        $("#table47").html(data);
    });
}

function reporte1(){
    $('#frm_filtro').attr('action', 'reporte/reporte-47.php');
    $('#frm_filtro').submit(); 
}