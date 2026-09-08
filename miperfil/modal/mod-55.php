<?php
require '../controlador/conexion.php';
require '../funciones/fn-55.php';
require '../funciones/fn-91.php';
$opc_mod = $_POST['dato_0'];
$fn55 = new Fn_55();
$fn91 = new Fn_91();


if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo testimonio</h5>
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
                                <label class="col-sm-12 col-form-label">Nombre</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Apellido</label>
                                <div class="col-sm-12">
                                    <input type="text" name="apellido_testimonio" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Lugar</label>
                                <div class="col-sm-12">
                                    <input type="text" name="lugar_testimonio" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Resumen</label>
                                <div class="col-sm-12">
                                    <textarea name="resumen_testimonio" class="form-control"></textarea>
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
        <button type="button"  onclick="cn55_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn55->fn55_rtestimonios_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar "<?php echo ($tupla[0]['titulo_noticia']) ?>"</h5>
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
                        <form class="form-valide" id="frm_editar" >
                            <input type="hidden" name="dato_0" value="2">
                            <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                            
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Nombre</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre" class="form-control" value="<?php echo ($tupla[0]['nom_testimonio']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Apellido</label>
                                <div class="col-sm-12">
                                    <input type="text" name="apellido_testimonio" class="form-control" value="<?php echo ($tupla[0]['apellido_testimonio']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Lugar</label>
                                <div class="col-sm-12">
                                    <input type="text" name="lugar_testimonio" class="form-control" value="<?php echo ($tupla[0]['lugar_testimonio']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Resumen</label>
                                <div class="col-sm-12">
                                    <textarea name="resumen_testimonio" class="form-control"><?php echo ($tupla[0]['resumen_testimonio']) ?></textarea>
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
        <button onclick="cn55_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
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
                <button type="button" onclick="cn55_f5(5, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}

if ($opc_mod == 6) {
    $qImg= $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $id_testimonio  = $_POST['dato_3'];
    
    $tupla = $fn55->fn55_rtestimonios_x($id_testimonio);
    
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nueva Imagen</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="6" name="dato_0">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tamaño máxino de imagenes  2mb</label>
                                <label class="col-sm-12 col-form-label">Dimesiones de la imagen 300 px de alto x 300 px de ancho</label>
                            </div>
                            <div class="form-group row offset-3">
                                 <?php if($qImg==1 ) {?>
                                <img src="../assets/img/<?php echo $tupla[0]['img_testimonio'] ?>" width="200px" />
                                 <?php }?> 
                            </div>
                            <input type="text" name="tipo_rep" id="tipo_rep" value="1" hidden="">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">URL</label>
                                <div class="col-sm-12">
                                    <input type="file" name="url_rep" id="url_rep" class="form-control" placeholder="">
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
        <button type="button"  onclick="cn55_f6(<?php echo $qImg ?>,<?php echo $id_testimonio ?>,<?php echo $id ?>)" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}