function md48_001_d1(dato0) {
    $.post("modal/mod-48.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}
function cn48_r001_f1() {
    $.post("consulta/cn-48.php", $("#frm_filtromod").serialize(), function (data) {
        $("#table48").html(data);
    });
}
