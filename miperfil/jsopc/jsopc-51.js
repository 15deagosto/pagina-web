function md51_d1(dato0) {
    $.post("modal/mod-51.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn51_f1() {
    $.post("consulta/cn-51.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table51").html(data);
    });
}

function md51_d2(dato0, dato1) {
    $.post("modal/mod-51.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn51_f2() {
    $.post("consulta/cn-51.php", $("#frm_editar").serialize(), function (data) {
        $("#table51").html(data);
        //$("#div_editar").html(data);
    });
}

function md51_d3(dato0, dato1) {
    $.post("modal/mod-51.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-51.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn51_table();
    });
}
function cn62_f14(){
    
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-51.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editimagen").html(res);
        
    });
}
function md51_d7(dato0,dato1){
    $.post("modal/mod-51.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}
function md51_d4(dato0, dato1) {
    $.post("modal/mod-51.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn51_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-51.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function cn51_table(){
    $.post("consulta/cn-51.php", {dato_0: -1}, function (data) {
        $("#table51").html(data);
    });
}

function md51_d5(dato0, dato1) {
    $.post("modal/mod-51.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn51_f5(){
    $.post("consulta/cn-51.php", $("#frm_editartxt").serialize(), function (data) {
        $("#table51").html(data);
    });
}

function md51_d6(dato0, dato1) {
    $.post("modal/mod-51.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn51_f6(dato0, dato1) {
    $.post("consulta/cn-51.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#table51mod").html(data);
    });
}
function cn51_f7(dato0, dato1, dato2) {
    $.post("consulta/cn-51.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table63mod").html(data);
    });
}
function cn51_f8(dato0, dato1) {
    dato2=document.getElementById("nombre_coordinador"+dato1).value;
    dato3=document.getElementById("apellido_coordinador"+dato1).value;
    dato4=document.getElementById("mail_coordinador"+dato1).value;
    $.post("consulta/cn-51.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3, dato_4: dato4}, function (data) {
        $("#div_response"+dato1).html(data);
    });
}

function cn51_f9(dato0, dato1, dato2) {
    $.post("consulta/cn-51.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#selec"+ dato1).html(data);
    });
}
function cn51_f10(dato0, dato1, dato2) {
    $.post("consulta/cn-51.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table51").html(data);
    });
}

function cn51_r011_d3(dato0, dato1) {
    $.post("consulta/cn-51.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#div_provincia_usu").html(data);
    });
}
function cn51_r012_d3(dato0, dato1) {
    $.post("consulta/cn-51.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#div_canton_usu").html(data);
    });
}
function cn51_r013_d3(dato0, dato1) {
    $.post("consulta/cn-51.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#div_parroquia_usu").html(data);
    });
}

