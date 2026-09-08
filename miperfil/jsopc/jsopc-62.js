function md62_d1(dato0) {
    $.post("modal/mod-62.php", {dato_0: dato0}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn62_f1() {
    $.post("consulta/cn-62.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table62").html(data);
    });
}

function md62_d2(dato0, dato1) {
    $.post("modal/mod-62.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn62_f2() {
    $.post("consulta/cn-62.php", $("#frm_editar").serialize(), function (data) {
        $("#table62").html(data);
        //$("#div_editar").html(data);
    });
}

function md62_d3(dato0, dato1) {
    $.post("modal/mod-62.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-62.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn62_table();
    });
}

function md62_d4(dato0, dato1) {
    $.post("modal/mod-62.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn62_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-62.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function cn62_table(){
    $.post("consulta/cn-62.php", {dato_0: -1}, function (data) {
        $("#table62").html(data);
    });
}

function md62_d5(dato0, dato1, dato2) {
    $.post("modal/mod-62.php", {dato_0: dato0, dato_1: dato1, dato_2:dato2}, function (data) {
        $("#content_md").html(data);
    });
}

function md62_d6(dato0, dato1, dato2) {
    $.post("modal/mod-62.php", {dato_0: dato0, dato_1: dato1, dato_2:dato2}, function (data) {
        $("#content_md").html(data);
    });
}
function cn62_f5(){
    $.post("consulta/cn-62.php", $("#frm_password").serialize(), function (data) {
        $("#i_result").html(data);
    });
}

function cn62_f6(dato0, dato1, dato2){
    $.post("consulta/cn-62.php", {dato_0: dato0, dato_1: dato1, dato_2:dato2}, function (data) {
        $("#selec"+dato1).html(data);
    });
}

function cn62_f7(dato0, dato1, dato2) {
    $.post("consulta/cn-62.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table62").html(data);
    });
}

function cn62_f7() {
    $('#idato_0').val(7);
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-62.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn62_table();
    });
}

function cn62_f8() {
    $('#idato_0').val(8);
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-62.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn62_table();
    });
}
function cn62_f9() {
    
    var formData = new FormData(document.getElementById("frm_archivo"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-62.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn62_table();
    });
}