<?php
require '../controlador/conexion.php';
require '../funciones/fn-21.php';
$opc_mod = $_POST['dato_0'];
$fn21 = new Fn_21();


if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo tasa</h5>
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
                                <label class="col-sm-6 col-form-label">Nombre</label>
                                <div class="col-sm-6">
                                    <input type="text" name="nombre_tasa" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Tasa nominal</label>
                                <div class="col-sm-6">
                                    <input type="text" name="tasanominal_tasa" class="form-control" placeholder="">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Efectiva Anual</label>
                                <div class="col-sm-6">
                                    <input type="text" name="efectivaanual_tasa" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Efectivo Financiamiento</label>
                                <div class="col-sm-6">
                                    <input type="text" name="efectivofin_tasa" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Acumulación</label>
                                <div class="col-sm-6">
                                    <input type="text" name="acumulacion_tasa" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Interes Anual</label>
                                <div class="col-sm-6">
                                    <input type="text" name="interesanual_tasa" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Monto minimo</label>
                                <div class="col-sm-6">
                                    <input type="text" name="valmin_tasa" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Monto maximo</label>
                                <div class="col-sm-6">
                                    <input type="text" name="valmax_tasa" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Número de cuotas minimo</label>
                                <div class="col-sm-6">
                                    <input type="text" name="min_tasa" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Número de cuotas maximo</label>
                                <div class="col-sm-6">
                                    <input type="text" name="max_tasa" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Descripcion</label>
                                <div class="col-sm-6">
                                    <input type="text" name="desc_tasa" class="form-control" placeholder="">
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
        <button type="button"  onclick="cn21_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn21->fn21_rtasa_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar tasa</h5>
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
                                <label class="col-sm-6 col-form-label">Nombre</label>
                                <div class="col-sm-6">
                                    <input type="text" name="nombre_tasa" class="form-control" placeholder="" value="<?php echo ($tupla[0]['nombre_tasa']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Tasa nominal</label>
                                <div class="col-sm-6">
                                    <input type="text" name="tasanominal_tasa" class="form-control" placeholder="" value="<?php echo ($tupla[0]['tasanominal_tasa']) ?>">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Efectiva Anual</label>
                                <div class="col-sm-6">
                                    <input type="text" name="efectivaanual_tasa" class="form-control" placeholder="" value="<?php echo ($tupla[0]['efectivaanual_tasa']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Efectivo Financiamiento</label>
                                <div class="col-sm-6">
                                    <input type="text" name="efectivofin_tasa" class="form-control" placeholder="" value="<?php echo ($tupla[0]['efectivofin_tasa']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Acumulación</label>
                                <div class="col-sm-6">
                                    <input type="text" name="acumulacion_tasa" class="form-control" placeholder="" value="<?php echo ($tupla[0]['acumulacion_tasa']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Interes Anual</label>
                                <div class="col-sm-6">
                                    <input type="text" name="interesanual_tasa" class="form-control" placeholder="" value="<?php echo ($tupla[0]['interesanual_tasa']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Monto minimo</label>
                                <div class="col-sm-6">
                                    <input type="text" name="valmin_tasa" class="form-control" placeholder="" value="<?php echo ($tupla[0]['valmin_tasa']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Monto maximo</label>
                                <div class="col-sm-6">
                                    <input type="text" name="valmax_tasa" class="form-control" placeholder="" value="<?php echo ($tupla[0]['valmax_tasa']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Número de cuotas minimo</label>
                                <div class="col-sm-6">
                                    <input type="text" name="min_tasa" class="form-control" placeholder="" value="<?php echo ($tupla[0]['min_tasa']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Número de cuotas maximo</label>
                                <div class="col-sm-6">
                                    <input type="text" name="max_tasa" class="form-control" placeholder="" value="<?php echo ($tupla[0]['max_tasa']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Descripcion</label>
                                <div class="col-sm-6">
                                    <input type="text" name="desc_tasa" class="form-control" placeholder="" value="<?php echo ($tupla[0]['desc_tasa']) ?>">
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
        <button onclick="cn21_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn21->fn21_ravisos_x($id);
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
                <button type="button" onclick="cn21_f5(5, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}