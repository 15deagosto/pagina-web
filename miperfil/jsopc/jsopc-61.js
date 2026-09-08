function md61_d1(dato0) {
    $.post("modal/mod-61.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn61_f1() {
    $.post("consulta/cn-61.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table61").html(data);
    });
}

function md61_d2(dato0, dato1) {
    $.post("modal/mod-61.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn61_f2() {
    $.post("consulta/cn-61.php", $("#frm_editar").serialize(), function (data) {
        $("#table61").html(data);
        //$("#div_editar").html(data);
    });
}

function md61_d3(dato0, dato1) {
    $.post("modal/mod-61.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn61_f3(dato0, dato1, dato2) {
    $.post("consulta/cn-61.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table61").html(data);
    });
}

function md61_d4(dato0, dato1) {
    $.post("modal/mod-61.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn61_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-61.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table61").html(data);
    });
}