function md55_d1(dato0) {
    $.post("modal/mod-55.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn55_f1() {
    $.post("consulta/cn-55.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table55").html(data);
    });
}

function md55_d2(dato0, dato1) {
    $.post("modal/mod-55.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn55_f2() {
    $.post("consulta/cn-55.php", $("#frm_editar").serialize(), function (data) {
        $("#table55").html(data);
        //$("#div_editar").html(data);
    });
}

function md55_d3(dato0, dato1) {
    $.post("modal/mod-55.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-55.php",
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

function md55_d4(dato0, dato1) {
    $.post("modal/mod-55.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn55_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-55.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function cn55_f5(dato0, dato1, dato2) {
    $.post("consulta/cn-55.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table55").html(data);
    });
}

function md55_d6(dato0, dato1, dato2, dato3){
    $.post("modal/mod-55.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3}, function (data) {
        $("#content_md").html(data);
    });
}
function cn55_f6(dato1, dato2,dato3){
    document.getElementById('cargando').style.display = 'block';
    var formData = new FormData(document.getElementById("frm_nuevo"));
    formData.append("dato_1",dato1 );
    formData.append("dato_2",dato2 );
    formData.append("dato_3",dato3 );
    $.ajax({
        url: "consulta/cn-55.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (data) {
        $("#table55").html(data);
        
    });
}