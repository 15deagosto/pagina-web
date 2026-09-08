function md49_d1(dato0, dato1) {
    $.post("modal/mod-49.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}

function md49_002_d1(dato0) {
    $.post("modal/mod-49.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn49_r002_f1() {
    $.post("consulta/cn-49.php", $("#frm_filtromod").serialize(), function (data) {
        $("#table49").html(data);
    });
}

function reporte1(){
    $('#frm_filtro').attr('action', 'reporte/reporte-49.php');
    $('#frm_filtro').submit(); 
}