function md97_d1(dato0) {
    $.post("modal/mod-97.php", {dato_0: dato0}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn97_f1() {
    $.post("consulta/cn-97.php", $("#frm_nuevo").serialize(), function (data) {
        $("#table97").html(data);
    });
}

function md97_d2(dato0, dato1) {
    $.post("modal/mod-97.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn97_f2() {
    $.post("consulta/cn-97.php", $("#frm_editar").serialize(), function (data) {
        $("#table97").html(data);
        //$("#div_editar").html(data);
    });
}

function md97_d3(dato0, dato1) {
    $.post("modal/mod-97.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_md").html(data);
    });
}

function cn76_f3() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-97.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn97_table();
    });
}

function md97_d4(dato0, dato1) {
    $.post("modal/mod-97.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#content_sm").html(data);
    });
}

function cn97_f4(dato0, dato1, dato2) {
    $.post("consulta/cn-97.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#fill_"+dato1).html(data);
    });
}

function cn97_table(){
    $.post("consulta/cn-97.php", {dato_0: -1}, function (data) {
        $("#table97").html(data);
    });
}

function md97_d5(dato0, dato1, dato2) {
    $.post("modal/mod-97.php", {dato_0: dato0, dato_1: dato1, dato_2:dato2}, function (data) {
        $("#content_md").html(data);
    });
}

function cn97_f5(){
    $.post("consulta/cn-97.php", $("#frm_password").serialize(), function (data) {
        $("#i_result").html(data);
    });
}

function cn97_f6(dato0, dato1, dato2){
    $.post("consulta/cn-97.php", {dato_0: dato0, dato_1: dato1, dato_2:dato2}, function (data) {
        $("#selec"+dato1).html(data);
    });
}

function cn97_f7(dato0, dato1, dato2) {
    $.post("consulta/cn-97.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#table97").html(data);
    });
}

function cn97_f7() {
    $('#idato_0').val(7);
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-97.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn97_table();
    });
}

function cn97_f8() {
    $('#idato_0').val(8);
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-97.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarimagen").html(res);
        cn97_table();
    });
}
function cn97_c009_fx(){
    
    var f = $(this);
    var formData = new FormData(document.getElementById("i_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-97.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
            .done(function (res) {
                alert(res)
                $("#i_resimagen").html(res);
            });
}

function getlink(dato0) {
  var aux = document.createElement('input');
  aux.setAttribute('value', 'plantilla.php?dato0='+dato0);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand('copy');
  document.body.removeChild(aux);
  var css = document.createElement('style');
  var estilo = document.createTextNode('#aviso {position:fixed; z-index: 9999999; top: 50%;left:50%;margin-left: -70px;padding: 20px; background: gold;border-radius: 8px;font-family: sans-serif;}');
  css.appendChild(estilo);
  document.head.appendChild(css);
  var aviso = document.createElement('div');
  aviso.setAttribute('id', 'aviso');
  var contenido = document.createTextNode('URL copiada');
  aviso.appendChild(contenido);
  document.body.appendChild(aviso);
  window.load = setTimeout('document.body.removeChild(aviso)', 2000);
}