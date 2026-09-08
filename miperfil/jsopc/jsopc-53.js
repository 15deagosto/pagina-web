function md53_d1(dato0) {
    $.post("modal/mod-53.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn53_f1() {
    $.post("consulta/cn-53.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table53").html(data);
    });
}

function md53_d2(dato0, dato1) {
    $.post("modal/mod-53.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn53_f2() {
    $.post("consulta/cn-53.php", $("#frm_editar").serialize(), function (data) {
        $("#table53").html(data);
        //$("#div_editar").html(data);
    });
}

function md53_d3(dato0, dato1) {
    $.post("modal/mod-53.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-53.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn53_table();
    });
}

function md53_d4(dato0, dato1) {
    $.post("modal/mod-53.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn53_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-53.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}
function cn53_f5(dato0, dato1, dato2) {
    $.post("consulta/cn-53.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table53").html(data);
    });
}

function cn53_table(){
    $.post("consulta/cn-53.php", {dato_0: -1}, function (data) {
        $("#table53").html(data);
    });
}
