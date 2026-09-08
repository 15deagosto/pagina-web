function md103_d1(dato0) {
    $.post("modal/mod-103.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn103_f1(dato0) {
    $.post("consulta/cn-103.php", {dato_0: dato0}, function (data) {
        $("#i_resnew").html(data); 
            cn103_100_d1(100);
        
    });
}
function cn103_100_d1(dato0) {
    $.post("consulta/cn-103.php", {dato_0: dato0}, function (data) {
        $("#table103").html(data);
    });
}
function md103_004_d2(dato0, dato1) {
    $.post("modal/mod-103.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}
function md103_003_d2(dato0, dato1){
    $.post("modal/mod-103.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}
function cn103_f2() {
    $.post("consulta/cn-103.php", $("#frm_editar").serialize(), function (data) {
        
        $("#i_resedit").html(data); 
            cn103_100_d1(100);
        //$("#div_editar").html(data);
    });
}

function md103_d3(dato0, dato1) {
    $.post("modal/mod-103.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn103_003_f2() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-103.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#i_resimagen").html(res);
    });
}

function md103_d4(dato0, dato1) {
    $.post("modal/mod-103.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn103_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-103.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function cn103_table(){
    $.post("consulta/cn-103.php", {dato_0: -1}, function (data) {
        $("#table103").html(data);
    });
}

function md103_d5(dato0, dato1) {
    $.post("modal/mod-103.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn103_f5(){
    $.post("consulta/cn-103.php", $("#frm_editartxt").serialize(), function (data) {
        $("#table103").html(data);
    });
}

function cn103_f6(dato0, dato1, dato2){
    $.post("consulta/cn-103.php", {dato_0: dato0, dato_1: dato1, dato_2:dato2}, function (data) {
        $("#table103").html(data);
    });
}

function cn103_f7(dato0, dato1, dato2) {
    $.post("consulta/cn-103.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table103").html(data);
    });
}

