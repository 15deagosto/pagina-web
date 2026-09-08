function md56_d1(dato0) {
    $.post("modal/mod-56.php", {dato_0: dato0}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn56_f1() {
    $.post("consulta/cn-56.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table56").html(data);
    });
}

function md56_d2(dato0, dato1) {
    $.post("modal/mod-56.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn56_f2() {
    $.post("consulta/cn-56.php", $("#frm_editar").serialize(), function (data) {
        $("#table56").html(data);
        //$("#div_editar").html(data);
    });
}

function md56_d3(dato0, dato1) {
    $.post("modal/mod-56.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-56.php",
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

function md56_d4(dato0, dato1) {
    $.post("modal/mod-56.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn56_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-56.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function cn56_f5(dato0, dato1, dato2) {
    $.post("consulta/cn-56.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table56").html(data);
    });
}

function md56_d6(dato0, dato1, dato2, dato3){
    $.post("modal/mod-56.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3}, function (data) {
        $("#content_md").html(data);
    });
}
function cn56_f6(dato1, dato2,dato3){
    document.getElementById('cargando_img').style.display = 'block';
    var formData = new FormData(document.getElementById("frm_nuevo"));
    formData.append("dato_1",dato1 );
    formData.append("dato_2",dato2 );
    formData.append("dato_3",dato3 );
    $.ajax({
        url: "consulta/cn-56.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        $("#result_img").html(data);
    });
}

function cn56_f8(dato1, dato2,dato3){
    $('#idato_0').val(8);
    document.getElementById('cargando_img').style.display = 'block';
    var formData = new FormData(document.getElementById("frm_nuevoimgdetalle"));
    formData.append("dato_1",dato1 );
    formData.append("dato_2",dato2 );
    formData.append("dato_3",dato3 );
    $.ajax({
        url: "consulta/cn-56.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        $("#result_img").html(data);
    });
}

function cn56_f9(dato1, dato2,dato3){
    $('#idato_0').val(9);
    document.getElementById('cargando_img').style.display = 'block';
    var formData = new FormData(document.getElementById("frm_nuevoimgdetalle"));
    formData.append("dato_1",dato1 );
    formData.append("dato_2",dato2 );
    formData.append("dato_3",dato3 );
    $.ajax({
        url: "consulta/cn-56.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        $("#result_img").html(data);
    });
}

function cn56_f7(dato0, dato1, dato2) {
    $.post("consulta/cn-56.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table56").html(data);
    });
}