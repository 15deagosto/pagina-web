function md102_d5(dato0, dato1) {
    $.post("modal/mod-102.php", {dato_0: dato0}, function (data) {
        $("#content_lg").html(data);
    });
}
function md102_d6(dato0, dato1) {
    $.post("modal/mod-102.php", {dato_0: dato0}, function (data) {
        $("#content_lg").html(data);
    });
}

function cn102_f7() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_imagen"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-102.php",
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
function cn102_f8() {
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_video"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "consulta/cn-102.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function (res) {
        $("#div_editarvideo").html(res);
    });
}