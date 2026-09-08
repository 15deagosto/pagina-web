function md91_d1(dato0) {
    $.post("modal/mod-91.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn91_f1() {
    var formData = new FormData(document.getElementById("frm_nuevo"));
        $.ajax({
            url: "consulta/cn-91.php",
            type: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(data) {
            $("#table91").html(data);
        });
}

function md91_d2(dato0, dato1) {
    $.post("modal/mod-91.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn91_f2() {
    $.post("consulta/cn-91.php", $("#frm_editar").serialize(), function (data) {
        $("#table91").html(data);
        //$("#div_editar").html(data);
    });
}

function md91_d3(dato0, dato1) {
    $.post("modal/mod-91.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-91.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn91_table();
    });
}

function md91_d4(dato0, dato1) {
    $.post("modal/mod-91.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn91_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-91.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function cn91_table(){
    $.post("consulta/cn-91.php", {dato_0: -1}, function (data) {
        $("#table91").html(data);
    });
}

function md91_d5(dato0, dato1) {
    $.post("modal/mod-91.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn91_f5(){
    $.post("consulta/cn-91.php", $("#frm_editartxt").serialize(), function (data) {
        $("#table91").html(data);
    });
}

function cn91_f6(dato0, dato1, dato2){
    $.post("consulta/cn-91.php", {dato_0: dato0, dato_1: dato1, dato_2:dato2}, function (data) {
        $("#table91").html(data);
    });
}

function copia_f(id_elemento){
    //alert('url_copia'+id_elemento);
    var aux = document.createElement("input");
    aux.setAttribute("value", document.getElementById('url_copia'+id_elemento).innerHTML);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
}

function cn91_f7(dato0, dato1, dato2) {
    $.post("consulta/cn-91.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table91").html(data);
    });
}

