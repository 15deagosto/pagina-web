function md42_001_d1(dato0) {
    $.post("modal/mod-42.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}
function cn42_r001_f1() {
    $.post("consulta/cn-42.php", $("#frm_filtromod").serialize(), function (data) {
        $("#table42").html(data);
    });
}
