var cronometro;
var max = 90;
function detenerse()
{
    clearInterval(cronometro);
}
function carga() {
    contador_s = 0;
    var elem = document.getElementById("myBar");
    s = document.getElementById("cargando");

    cronometro = setInterval(
            function () {
                var porciento = (contador_s * 100) / 100;
                s.innerHTML = porciento;
                contador_s++;
                elem.style.width = contador_s + '%';

                if (contador_s == max) {
                    detenerse();
                }
            }, 1000);

}

function estadoBalance(dato1, dato2,dato3){
    //alert("asdasd");
    $("#i_opcstate").val(dato2);
    $("#i_datastate").val(dato1);
    $("#i_idstate").val(dato3);
    $.post("crud/gest-estado.php", $("#i_estadoform").serialize(), function (data) {
        $("#id_estado"+dato3).html(data);
    });
}
function cambiaImagen(dato1){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_img"+dato1));
    formData.append("dato", "valor");
    $.ajax({
        url: "crud/gest-opc-52.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#i_imgres"+dato1).html("Respuesta: " + res);
    });
}

function eventoImportar() {
    carga();
    var div1 = document.getElementById('i_loader');
    var div2 = document.getElementById('i_tabla');
    div1.style.display = 'block';
    div2.style.display = 'none';
    var f = $(this);
    var formData = new FormData(document.getElementById("i_importdomicilioform"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "crud/crud-importdomicilio.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
            .done(function (res) {
                $("#div_filtrodomicilio").html("Respuesta: " + res);
            });

}
$(function () {
    $("#formuploadajax").on("submit", function (e) {
        e.preventDefault();
        var f = $(this);
        var formData = new FormData(document.getElementById("i_importdomicilioform"));
        formData.append("dato", "valor");
        //formData.append(f.attr("name"), $(this)[0].files[0]);
        $.ajax({
            url: "crud/crud-importdomicilio.php",
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        })
                .done(function (res) {
                    $("#div_filtrodomicilio").html("Respuesta: " + res);
                });
    });
});
$(document).ready(function () {
    $("#demo-form1").submit(function () {
        var x = $("#i_codigo").val();

        if (x != "enviar" && x != "") {
            $.post("consulta/consulta-domicilio.php", $("#demo-form1").serialize(), function (data) {
                $("#div_filtrodomicilio").html(data);
            });
            return false;
        } else if (x == "") {
            alert('CAMPO VACIO');
            return false;
        }
    });
});
$(document).ready(function () {
    $("#demo-form2").submit(function () {
        var x = $("#i_amacasa").val();

        if (x != "enviar" && x != "") {
            $.post("consulta/consulta-domicilio.php", $("#demo-form2").serialize(), function (data) {
                $("#div_filtrodomicilio").html(data);
            });
            return false;
        } else if (x == "") {
            alert('CAMPO VACIO');
            return false;
        }
    });
});