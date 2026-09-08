<?php
require '../controlador/conexion.php';
require '../funciones/fn-103.php';
$opc_mod = $_POST['dato_0'];
$fn103 = new Fn_103();


if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo aviso</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <p>¿Desea crear un nuevo aviso destacado?</p>  
                        <small>Una vez diga sí se creará un nuevo registro y podrá editarlo</small>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="i_resnew"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">NO</button>
        <button type="button" onclick="cn103_f1(1)" class="btn btn-warning" >SÍ </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn103->fn103_ravisos_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Aviso</h5>
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
                                <label class="col-sm-12 col-form-label">Fecha de inicio</label>
                                <div class="col-sm-12">
                                    <input type="text" name="fecini_avisos" class="form-control" value="<?php echo ($tupla[0]['fecini_avisos']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Fecha final</label>
                                <div class="col-sm-12">
                                    <input type="text" name="fecfin_avisos" class="form-control" value="<?php echo ($tupla[0]['fecfin_avisos']) ?>">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="col-md-12" id="i_resedit">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button onclick="cn103_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn103->fn103_ravisos_x($id);
    ?>
    
    <?php
}

if ($opc_mod == 4) {
    $id = $_POST['dato_1'];
    $tupla = $fn103->fn103_ravisos_x($id);
    ?>
   
        <div class="modal-header">
            <h5 class="modal-title">Editar imagen</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h5>Recomendado 750x500</h5>
            <form action="" method="POST" id="frm_imagen">
                <input type="hidden" name="dato_0" value="3">
                <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                <div id="i_resimagen">
                    <img src="../images/<?php echo $tupla[0]['img_avisos'] ?>" width="100%" alt="alt"/>
                </div>
                <input type="file" name="dato_5">
                
            </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button onclick="cn103_003_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar imagen</button>
    </div>
    <?php
}