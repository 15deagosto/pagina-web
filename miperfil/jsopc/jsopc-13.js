function cn13_001_d2(dato0, dato1) {
    // alert(dato1);
    $.post("consulta/cn-13.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#i_menu").html(data);
    });
}
function cn13_002_d2(dato0, dato1, dato2) {
    // alert(dato1);
    $.post("consulta/cn-13.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#i_submenu").html(data);
    });
}
function cn13_003_d2(dato0, dato1, dato2, dato3) {
    // alert(dato1);
    $.post("consulta/cn-13.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2, dato_3: dato3}, function (data) {
        $("#i_submenu").html(data);
        $.post("consulta/cn-13.php", {dato_0: 1, dato_1: dato1}, function (data) {
            $("#i_menu").html(data);
        });
    });
}
function mod13_001_d2(dato0, dato1) {
    $.post("modal/mod-13.php", {dato_0: dato0, dato_1: dato1}, function (data) {
        $("#i_content1").html(data);
    });
}
function cn13_004_f5(){
    $.post("consulta/cn-13.php", $("#i_modform").serialize(), function (data) {
        $("#i_menu").html(data);
    });
}

function mod13_002_d2(dato0, dato1, dato2){
    $.post("modal/mod-13.php", {dato_0: dato0, dato_1: dato1, dato_2: dato2}, function (data) {
        $("#i_content1").html(data);
    }); 
}
function cn13_005_f5(){
    $.post("consulta/cn-13.php", $("#i_modform").serialize(), function (data) {
        $("#i_submenu").html(data);
    });
}