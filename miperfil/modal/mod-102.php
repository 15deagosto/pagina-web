<?php
require '../controlador/conexion.php';
require '../funciones/fn-102.php';
$opc_mod = $_POST['dato_0'];
$fn102 = new Fn_102();


if ($opc_mod == 1) {
    ?>
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo Carusel</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="1" name="dato_0">
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <textarea style="width: 100%"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="cn102_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <script>
            $(document).ready(function () {
                $("#texto_texto").summernote({
                    height: 190,
                    minHeight: null,
                    maxHeight: null,
                    focus: !1
                }), $(".inline - editor").summernote({
                    airMode: !0
                });
            });
        </script>
    <?php
}

if ($opc_mod == 5) {
    
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Subir Imagen</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body" >
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form">
                    <form class="form-valide" id="frm_imagen" >
                        <center><h4>CARGAR IMÁGEN </h4></center>
                        <input type="hidden" name="dato_0" value="7" id="idato_0">
                        <div id="div_editarimagen">
                            
                        </div>
                        <input  name="dato_5"  type="file" data-theme="fas"><hr>
                         <!--<button type="button"  onclick="cn102_f8()"  class="btn btn-danger" > <i class="fa fa-times"></i> Eliminar imágen </button>-->
                    </form>
                </div>
            </div>
        </div>
<!--        <script src="js/fileup-v2/js/locales/es.js" type="text/javascript"></script>
        <script src="js/fileup-v2/js/fileinput.js" type="text/javascript"></script>-->
       
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="cn102_f7()" class="btn btn-warning">Guardar imagen</button>
    </div>
    <?php
}

if ($opc_mod == 6) {
    
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Subir video</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body" >
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form">
                    <form class="form-valide" id="frm_video" >
                        <center><h4>CARGAR VIDEO (MAX 12 mb)</h4></center>
                        <input type="hidden" name="dato_0" value="8" id="idato_0">
                        <div id="div_editarvideo">
                            
                        </div>
                        <input  name="dato_5"  type="file" data-theme="fas"><hr>
                         <!--<button type="button"  onclick="cn102_f8()"  class="btn btn-danger" > <i class="fa fa-times"></i> Eliminar imágen </button>-->
                    </form>
                </div>
            </div>
        </div>
<!--        <script src="js/fileup-v2/js/locales/es.js" type="text/javascript"></script>
        <script src="js/fileup-v2/js/fileinput.js" type="text/javascript"></script>-->
       
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="cn102_f8()" class="btn btn-warning">Guardar video</button>
    </div>
    <?php
}