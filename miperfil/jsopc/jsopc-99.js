function md99_d1(dato0) {
    $.post("modal/mod-99.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn99_f1() {
    $.post("consulta/cn-99.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table99").html(data);
    });
}

function md99_d2(dato0, dato1) {
    $.post("modal/mod-99.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn99_f2() {
    $.post("consulta/cn-99.php", $("#frm_editar").serialize(), function (data) {
        $("#table99").html(data);
        //$("#div_editar").html(data);
    });
}

function md99_d3(dato0, dato1) {
    $.post("modal/mod-99.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-99.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn99_table();
    });
}

function md99_d4(dato0, dato1) {
    $.post("modal/mod-99.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn99_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-99.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function cn99_table(){
    $.post("consulta/cn-99.php", {dato_0: -1}, function (data) {
        $("#table99").html(data);
    });
}

function md99_d5(dato0, dato1) {
    $.post("modal/mod-99.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn99_f5(){
    $.post("consulta/cn-99.php", $("#frm_editartxt").serialize(), function (data) {
        $("#table99").html(data);
    });
}

function md99_d6(dato0, dato1) {
    $.post("modal/mod-99.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn99_f6(dato0, dato1) {
    $.post("consulta/cn-99.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#table99mod").html(data);
    });
}
function cn99_f7(dato0, dato1, dato2) {
    $.post("consulta/cn-99.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill2_"+dato1).html(data);
    });
}
function cn99_f8(dato0, dato1) {
    dato2=document.getElementById("anio_indicadormes"+dato1).value;
    dato3=document.getElementById("mes_indicadormes"+dato1).value;
    dato4=document.getElementById("valor_indicadormes"+dato1).value;
    $.post("consulta/cn-99.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3, dato_4: dato4}, function (data) {
        $("#div_response"+dato1).html(data);
    });
}
function cn99_f11(dato0, dato1,dato2) {
    $.post("consulta/cn-99.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table99mod").html(data);
    });
}


function cn99_f9(dato0, dato1, dato2) {
    $.post("consulta/cn-99.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#selec"+ dato1).html(data);
    });
}
function cn99_f10(dato0, dato1, dato2) {
    $.post("consulta/cn-99.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table99").html(data);
    });
}

