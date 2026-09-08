function md59_d1(dato0) {
    $.post("modal/mod-59.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn59_f1() {
    $.post("consulta/cn-59.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table59").html(data);
    });
}

function md59_d2(dato0, dato1) {
    $.post("modal/mod-59.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn59_f2() {
    $.post("consulta/cn-59.php", $("#frm_editar").serialize(), function (data) {
        $("#table59").html(data);
        //$("#div_editar").html(data);
    });
}

function md59_d3(dato0, dato1) {
    $.post("modal/mod-59.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-59.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
            .done(function (res) {
                $("#div_editarimagen").html(res);
            });
}

function md59_d4(dato0, dato1) {
    $.post("modal/mod-59.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn59_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-59.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function cn59_f5(dato0, dato1, dato2) {
    $.post("consulta/cn-59.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table59").html(data);
    });
}