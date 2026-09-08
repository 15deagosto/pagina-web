function md63_d1(dato0) {
    $.post("modal/mod-63.php", {dato_0: dato0}, function (data) {
        $("#content_md").html(data);
    });
}

function cn63_f1() {
    $.post("consulta/cn-63.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table63").html(data);
    });
}

function md63_d2(dato0, dato1) {
    $.post("modal/mod-63.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn63_f2() {
    $.post("consulta/cn-63.php", $("#frm_editar").serialize(), function (data) {
        $("#table63").html(data);
        //$("#div_editar").html(data);
    });
}

function md63_d3(dato0, dato1) {
    $.post("modal/mod-63.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-63.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
            .done(function (res) {
                $("#div_editarimagen").html(res);
                cn63_table();
            });
}

function md63_d4(dato0, dato1) {
    $.post("modal/mod-63.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn63_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-63.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_" + dato1).html(data);
    });
}

function cn63_table() {
    $.post("consulta/cn-63.php", {dato_0: -1}, function (data) {
        $("#table63").html(data);
    });
}

function md63_d5(dato0, dato1) {
    $.post("modal/mod-63.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn63_f5() {
    $.post("consulta/cn-63.php", $("#frm_editartxt").serialize(), function (data) {
        $("#table63").html(data);
    });
}
function md63_d6(dato0, dato1, dato2, dato3) {
    $.post("modal/mod-63.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3}, function (data) {
        $("#content_md").html(data);
    });
}
function cn63_f6(dato1, dato2, dato3) {
//    document.getElementById('cargando').style.display = 'block';
fnloading();
    var formData = new FormData(document.getElementById("frm_nuevo"));
    formData.append("dato_1", dato1);
    formData.append("dato_2", dato2);
    formData.append("dato_3", dato3);
    $.ajax({
        url: "consulta/cn-63.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
            .done(function (data) {
                fnloading();
                $("#i_imagenres1").html(data);
            });
}
function cn63_f14(dato1, dato2, dato3) {
//    document.getElementById('cargando').style.display = 'block';
fnloading();
    var formData = new FormData(document.getElementById("frm_nuevo"));
    formData.append("dato_1", dato1);
    formData.append("dato_2", dato2);
    formData.append("dato_3", dato3);
    $.ajax({
        url: "consulta/cn-63.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
            .done(function (data) {
                fnloading();
                $("#i_imagenres2").html(data);
            });
}
function cn63_f7(dato0, dato1, dato2) {

    $.post("consulta/cn-63.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#selec" + dato1).html(data);
    });
}

function cn63_f8(dato0, dato1, dato2) {

    $.post("consulta/cn-63.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#div_result2" + dato1).html(data);
    });
}

function cn63_f9(dato0, dato1, dato2) {
    $.post("consulta/cn-63.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table63").html(data);
    });
}
function md63_d7(dato0, dato1) {
    $.post("modal/mod-63.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}
function cn63_f10(dato0, dato1) {
    $.post("consulta/cn-63.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#table63mod").html(data);
    });
}
function cn63_f11(dato0, dato1, dato2, dato3) {
    $.post("consulta/cn-63.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3}, function (data) {
        $("#table63mod").html(data);
    });
}
function cn63_f12(dato0, dato1, dato7) {
    var dato2 = document.getElementById("tasanominal_tasa" + dato1).value;
    var dato3 = document.getElementById("valmin_tasa" + dato1).value;
    var dato4 = document.getElementById("valmax_tasa" + dato1).value;
    var dato5 = document.getElementById("min_tasa" + dato1).value;
    var dato6 = document.getElementById("max_tasa" + dato1).value;
    $.post("consulta/cn-63.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3, dato_4: dato4, dato_5: dato5, dato_6: dato6, dato_7: dato7}, function (data) {
        $("#table63mod").html(data);
    });
}

function cn63_f13(dato0, dato1, dato2, event) {
    if (event.keyCode === 13) {
        $.post("consulta/cn-63.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
            $("#i_orden" + dato2).html(data);
        });
    }


}

function cn63_f15(dato0) {
    $.post("consulta/cn-63.php", {dato_0: dato0}, function (data) {
        $("#div_result_cn63_f15").html(data);
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