function md66_d1(dato0) {
    $.post("modal/mod-66.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn66_f1() {
    $.post("consulta/cn-66.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table66").html(data);
    });
}

function md66_d2(dato0, dato1) {
    $.post("modal/mod-66.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn66_f2() {
    $.post("consulta/cn-66.php", $("#frm_editar").serialize(), function (data) {
        $("#table66").html(data);
        //$("#div_editar").html(data);
    });
}

function md66_d3(dato0, dato1) {
    $.post("modal/mod-66.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-66.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn66_table();
    });
}

function md66_d4(dato0, dato1) {
    $.post("modal/mod-66.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn66_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-66.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function cn66_table(){
    $.post("consulta/cn-66.php", {dato_0: -1}, function (data) {
        $("#table66").html(data);
    });
}

function md66_u005_d4(dato0, dato1, dato2, dato3){
    $.post("modal/mod-66.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3}, function (data) {
        $("#content_md").html(data);
    });
}

function cn66_u005_fX( dato1, dato2,dato3){
    document.getElementById('cargando').style.display = 'block';
    var formData = new FormData(document.getElementById("frm_nuevo"));
    formData.append("dato_1",dato1 );
    formData.append("dato_2",dato2 );
    formData.append("dato_3",dato3 );
    $.ajax({
        url: "consulta/cn-66.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        $("#table66").html(data);
    });
}

function md66_d6(dato0, dato1, dato2, dato3){
    $.post("modal/mod-66.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3}, function (data) {
        $("#content_md").html(data);
    });
}
function md66_007_d6(dato0, dato1, dato2, dato3){
    $.post("modal/mod-66.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3}, function (data) {
        $("#content_md").html(data);
    });
}
function cn66_f6( dato1, dato2,dato3){
    loading_start();
    var formData = new FormData(document.getElementById("frm_nuevo"));
    formData.append("dato_1",dato1 );
    formData.append("dato_2",dato2 );
    formData.append("dato_3",dato3 );
    $.ajax({
        url: "consulta/cn-66.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        loading_start();
        $("#i_imagen1").html(data);
    });
}
function cn66_008_f6(dato1){
    loading_start();
    var formData = new FormData(document.getElementById("frm_nuevo"+dato1));
    $.ajax({
        url: "consulta/cn-66.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        loading_start();
        $("#i_imagen"+dato1).html(data);
    });
}
function cn66_009_f6(dato0,dato1,dato2){
    $.post("consulta/cn-66.php", {dato_0: dato0,dato_1: dato1,dato_2: dato2}, function (data) {
        $("#i_imagen"+dato1).html(data);
    });
}
function cn66_f7(dato0, dato1, dato2) {
    $.post("consulta/cn-66.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table66").html(data);
    });
}

