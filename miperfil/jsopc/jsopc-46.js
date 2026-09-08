function md46_001_d1(dato0) {
    $.post("modal/mod-46.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}
function cn46_r001_f1() {
    $.post("consulta/cn-46.php", $("#frm_filtromod").serialize(), function (data) {
        $("#table46").html(data);
    });
}

