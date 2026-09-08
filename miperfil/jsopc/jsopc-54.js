function md54_d1(dato0) {
    $.post("modal/mod-54.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}
function md54_005_d2(dato0,dato1){
    $.post("modal/mod-54.php", {dato_0: dato0,dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}
function cn54_001_f1() {
    loading_start();
    $.post("consulta/cn-54.php", $("#frm_nuevo").serialize(), function (data) {
        loading_start();
        $("#table54").html(data);
    });
}
function md54_003_d2(dato0, dato1){
    $.post("modal/mod-54.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}
function md54_d2(dato0, dato1) {
    $.post("modal/mod-54.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}
function md54_006_d2(dato0, dato1, dato2){
    $.post("modal/mod-54.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#content_md").html(data);
    });
}
function cn54_002_f2() {
    loading_start();
    $.post("consulta/cn-54.php", $("#frm_editar").serialize(), function (data) {
        loading_start();
        $("#table54").html(data);
        //$("#div_editar").html(data);
    });
}
function cn54_006_f1(){
    var dato1=$("#i_dato1").val();
   $.post("consulta/cn-54.php", $("#frm_nuevo1").serialize(), function (data) {
        $("#i_trans"+dato1).html(data);
        //$("#div_editar").html(data);
    }); 
}
function cn54_007_f1(){
    var dato1=$("#i_padre").val();
   $.post("consulta/cn-54.php", $("#frm_edita1").serialize(), function (data) {
        $("#i_trans"+dato1).html(data);
        //$("#div_editar").html(data);
    });
}
function md54_d3(dato0, dato1) {
    $.post("modal/mod-54.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_004_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_documento"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-54.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#i_resdoc").html(res);
        //cn54_table();
    });
}

function md54_d4(dato0, dato1) {
    $.post("modal/mod-54.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn54_004_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-54.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}
function cn54_f5(dato0, dato1, dato2) {
    $.post("consulta/cn-54.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table54").html(data);
    });
}

function cn54_table(){
    $.post("consulta/cn-54.php", {dato_0: -1}, function (data) {
        $("#table54").html(data);
    });
}
function md54_x_d3(dato0){
    var div = document.getElementById("i_trans"+dato0);
    if (div.style.display != "none") {
        div.style.display = "none";
    } else {
        div.style.display = "block";
    }
}