function md65_d1(dato0) {
    $.post("modal/mod-65.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn65_f1() {
    $.post("consulta/cn-65.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table65").html(data);
    });
}

function md65_d2(dato0, dato1) {
    $.post("modal/mod-65.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn65_f2() {
    $.post("consulta/cn-65.php", $("#frm_editar").serialize(), function (data) {
        $("#table65").html(data);
        //$("#div_editar").html(data);
    });
}

function md65_d3(dato0, dato1) {
    $.post("modal/mod-65.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-65.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn65_table();
    });
}

function md65_d4(dato0, dato1) {
    $.post("modal/mod-65.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn65_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-65.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function cn65_table(){
    $.post("consulta/cn-65.php", {dato_0: -1}, function (data) {
        $("#table65").html(data);
    });
}

function md65_d5(dato0, dato1) {
    $.post("modal/mod-65.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn65_f5(){
    $.post("consulta/cn-65.php", $("#frm_editartxt").serialize(), function (data) {
        $("#table65").html(data);
    });
}

function md65_f7(dato0, dato1, dato2){
    $.post("modal/mod-65.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#content_md").html(data);
    });
}

function md65_f8(dato0, dato1, dato2){
    $.post("modal/mod-65.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#content_md").html(data);
    });
}

function cn65_f6(dato1, dato2){
    fnloading();
    var formData = new FormData(document.getElementById("frm_nuevo"));
    formData.append("dato_1",dato1 );
    formData.append("dato_2",dato2 );
    $.ajax({
        url: "consulta/cn-65.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        fnloading();
        $("#i_resmoddoc").html(data);
        cn65_f100(100);
    });
}

function cn65_f8(dato0, dato1, dato2,dato3){
    $.post("consulta/cn-65.php", {dato_0: dato0, dato_1: dato1, dato_2:dato2, dato_3:dato3}, function (data) {
        $("#select"+dato2).html(data);
    });
}
function cn65_f9(dato0, dato1, dato2,dato3){
    $.post("consulta/cn-65.php", {dato_0: dato0, dato_1: dato1, dato_2:dato2, dato_3:dato3}, function (data) {
        $("#example3").html(data);
        
    });
}

function cn65_f10(dato0, dato1, dato2) {
    $.post("consulta/cn-65.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table65").html(data);
    });
}
function cn65_f100(dato0) {
    $.post("consulta/cn-65.php", {dato_0: dato0}, function (data) {
        $("#table65").html(data);
    });
}

function fnloading(){
   var divload=document.getElementById('i_loadingglobal');
   if(divload.style.display !='none'){
       divload.style.display ='none';
   }else{
       divload.style.display ='block';
   }
}