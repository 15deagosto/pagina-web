function md22_d1(dato0) {
    $.post("modal/mod-22.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn22_f1() {
    $.post("consulta/cn-22.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table22").html(data);
    });
}

function md22_d2(dato0, dato1) {
    $.post("modal/mod-22.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn22_f2() {
    $.post("consulta/cn-22.php", $("#frm_editar").serialize(), function (data) {
        $("#table22").html(data);
        //$("#div_editar").html(data);
    });
}

function md22_d3(dato0, dato1) {
    $.post("modal/mod-22.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-22.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
            .done(function (res) {
                $("#div_editarimagen").html(res);
                cn22_table();
            });
}

function md22_d4(dato0, dato1) {
    $.post("modal/mod-22.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn22_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-22.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table22").html(data);
    });
}

function cn22_table() {
    $.post("consulta/cn-22.php", {dato_0: -1}, function (data) {
        $("#table22").html(data);
    });
}

function md22_d5(dato0, dato1) {
    $.post("modal/mod-22.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn22_f5() {
    $.post("consulta/cn-22.php", $("#frm_editartxt").serialize(), function (data) {
        $("#table22").html(data);
    });
}
function md22_d6(dato0, dato1, dato2, dato3) {
    $.post("modal/mod-22.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3}, function (data) {
        $("#content_md").html(data);
    });
}
function cn22_f6( dato1, dato2, dato3) {
    var formData = new FormData(document.getElementById("frm_nuevo"));
    formData.append("dato_1",dato1 );
    formData.append("dato_2",dato2 );
    formData.append("dato_3",dato3 );
    $.ajax({
        url: "consulta/cn-22.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        $("#table22").html(data);
    });
}
function cn22_f7(dato0, dato1, dato2) {
    
    $.post("consulta/cn-22.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#selec"+ dato1).html(data);
    });
}

function cn22_f8(dato0, dato1, dato2) {
    
    $.post("consulta/cn-22.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#div_result2" + dato1).html(data);
    });
}

