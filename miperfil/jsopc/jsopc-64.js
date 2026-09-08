function md64_d1(dato0) {
    $.post("modal/mod-64.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn64_f1() {
    $.post("consulta/cn-64.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table64").html(data);
    });
}

function md64_d2(dato0, dato1) {
    $.post("modal/mod-64.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn64_f2() {
    $.post("consulta/cn-64.php", $("#frm_editar").serialize(), function (data) {
        $("#table64").html(data);
        //$("#div_editar").html(data);
    });
}

function md64_d3(dato0, dato1) {
    $.post("modal/mod-64.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-64.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn64_table();
    });
}

function md64_d4(dato0, dato1) {
    $.post("modal/mod-64.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn64_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-64.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#st_"+dato1).html(data);
    });
}

function cn64_table(){
    $.post("consulta/cn-64.php", {dato_0: -1}, function (data) {
        $("#table64").html(data);
    });
}

function md64_d5(dato0, dato1) {
    $.post("modal/mod-64.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn64_f5(){
    $.post("consulta/cn-64.php", $("#frm_editartxt").serialize(), function (data) {
        $("#table64").html(data);
    });
}

function cn64_f6(dato0, dato1, dato2){
    $.post("consulta/cn-64.php", {dato_0: dato0, dato_1: dato1, dato_2:dato2}, function (data) {
        $("#select"+dato1).html(data);
    });
}
function cn64_f9(dato0, dato1, dato2) {
    $.post("consulta/cn-64.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table64").html(data);
    });
}

