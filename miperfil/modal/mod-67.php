<?php
require '../controlador/conexion.php';
require '../funciones/fn-67.php';
$opc_mod = $_POST['dato_0'];
$fn67 = new Fn_67();


if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nueva Red Social</h5>
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
                                <label class="col-sm-12 col-form-label">Tipo</label>
                                <div class="col-sm-12">
                                    <select  name="tipo_redes" class="form-control">
                                        <option value="1">FACEBOOK</option>
                                        <option value="2">X (Twiter)</option>
                                        <option value="3">INSTAGRAM</option>
                                        <option value="4">YOUTUBE</option>
                                        <option value="5">TIKTOK</option>
                                        <option value="6">LINKEDIN</option>
                                        <option value="7">WHATSAPP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="text" name="url_redes" class="form-control" placeholder="">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Icono</label>
                                <div class="col-sm-12">
                                    <select  name="icono" class="form-control">
                                        <option value="twi-facebook-f">FACEBOOK</option>
                                        <option value="twi-twitter">X (Twiter)</option>
                                        <option value="twi-instagram">INSTAGRAM</option>
                                        <option value="twi-youtube">YOUTUBE</option>
                                        <option value="">TIKTOK</option>
                                        <option value="twi-linkedin">LINKEDIN</option>
                                        <option value="twi-whatsapp">WHATSAPP</option>
                                    </select>
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
        <button type="button"  onclick="cn67_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn67->fn67_rredes_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Red Social</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="col-md-12" id="div_editar"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_editar" method="post">
                            <input type="hidden" value="2" name="dato_0">
                            <input type="hidden" value="<?php echo $id ?>" name="dato_1">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tipo</label>
                                <div class="col-sm-12">
                                    <select  name="tipo_redes" class="form-control">
                                        <option value="1" <?php if( ($tupla[0]['tipo_redes']) == 1){echo("selected");}?>>FACEBOOK</option>
                                        <option value="2" <?php if( ($tupla[0]['tipo_redes']) == 2){echo("selected");}?>>X (Twiter)</option>
                                        <option value="3" <?php if( ($tupla[0]['tipo_redes']) == 3){echo("selected");}?>>INSTAGRAM</option>
                                        <option value="4" <?php if( ($tupla[0]['tipo_redes']) == 4){echo("selected");}?>>YOUTUBE</option>
                                        <option value="5" <?php if( ($tupla[0]['tipo_redes']) == 5){echo("selected");}?>>TIKTOK</option>
                                        <option value="6" <?php if( ($tupla[0]['tipo_redes']) == 6){echo("selected");}?>>LINKEDIN</option>
                                        <option value="7" <?php if( ($tupla[0]['tipo_redes']) == 7){echo("selected");}?>>WHATSAPP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="text" name="url_redes" class="form-control" value="<?php echo ($tupla[0]['url_redes']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Icono</label>
                                <div class="col-sm-12">
                                    <select  name="icono" class="form-control">
                                        <option value="twi-facebook-f" <?php if( $tupla[0]['icono'] == "twi-facebook-f"){echo("selected");}?>>FACEBOOK</option>
                                        <option value="twi-twitter" <?php if( $tupla[0]['icono'] == "twi-twitter"){echo("selected");}?>>X (Twiter)</option>
                                        <option value="twi-instagram" <?php if( $tupla[0]['icono'] == "twi-instagram"){echo("selected");}?>>INSTAGRAM</option>
                                        <option value="twi-youtube" <?php if( $tupla[0]['icono'] == "twi-youtube"){echo("selected");}?>>YOUTUBE</option>
                                        <option value="" <?php if( $tupla[0]['icono'] == "fab fa-tiktok"){echo("selected");}?>>TIKTOK</option>
                                        <option value="twi-linkedin" <?php if( $tupla[0]['icono'] == "twi-linkedin"){echo("selected");}?>>LINKEDIN</option>
                                        <option value="twi-whatsapp" <?php if( $tupla[0]['icono'] == "twi-whatsapp"){echo("selected");}?>>WHATSAPP</option>
                                    </select>
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
        <button onclick="cn67_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn67->fn67_ravisos_x($id);
    ?>
    
    <?php
}

if ($opc_mod == 4) {
    $id = $_POST['dato_1'];
    ?>
    <div class="modal-content" id="content_sm">
        <div class="modal-header">
            <h5 class="modal-title">Eliminar registro</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="POST" id="frm_delete">
                <input type="hidden" name="dato_0" value="4">
                <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                <label> Está seguro que desea eliminar este registro ?</label>
                <button type="button" class="btn btn-danger light" data-dismiss="modal">NO</button>
                <button type="button" onclick="cn67_f7(7, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}