function md57_d1(dato0) {
    $.post("modal/mod-57.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn57_f1() {
    $.post("consulta/cn-57.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table57").html(data);
    });
}

function md57_d2(dato0, dato1) {
    $.post("modal/mod-57.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn57_f2() {
    $.post("consulta/cn-57.php", $("#frm_editar").serialize(), function (data) {
//        $("#table57").html(data);
        $("#div_reseditar").html(data);
        cn57_f100(100);
        
    });
}
function cn57_f100(dato0) {
    $.post("consulta/cn-57.php", {dato_0: dato0}, function (data) {
        $("#table57").html(data);
        //$("#div_editar").html(data);
    });
}
function md57_d3(dato0, dato1) {
    $.post("modal/mod-57.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-57.php",
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

function md57_d4(dato0, dato1) {
    $.post("modal/mod-57.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn57_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-57.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}
function cn57_f9(dato0, dato1){
    $.post("consulta/cn-57.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#i_imagenresmod1").html(data);
    });
}
function cn57_f10(dato0, dato1){
    $.post("consulta/cn-57.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#i_imagenresmod2").html(data);
    });
}
function cn57_f5(dato0, dato1, dato2) {
    $.post("consulta/cn-57.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table57").html(data);
    });
}

function md57_d6(dato0, dato1){
    $.post("modal/mod-57.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}
function cn57_f6(){
    //fnloading();
    var formData = new FormData(document.getElementById("frm_editimg"));
    formData.append("dato", "valor");
//    formData.append("dato_1", );
    $.ajax({
        url: "consulta/cn-57.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        //fnloading();
        $("#i_imagenresmod").html(data);
    });
    
}
function cn57_f7(){
    //fnloading();
    var formData = new FormData(document.getElementById("frm_editimg1"));
    formData.append("dato", "valor");
//    formData.append("dato_1", );
    $.ajax({
        url: "consulta/cn-57.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        //fnloading();
        $("#i_imagenresmod1").html(data);
    });
    
}
function cn57_f8(){
    //fnloading();
    var formData = new FormData(document.getElementById("frm_editimg2"));
    formData.append("dato", "valor");
//    formData.append("dato_1", );
    $.ajax({
        url: "consulta/cn-57.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        //fnloading();
        $("#i_imagenresmod2").html(data);
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