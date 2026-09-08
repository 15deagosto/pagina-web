<?php
require '../controlador/conexion.php';
require '../funciones/fn-47.php';
$opc_mod = $_POST['dato_0'];
$fn47 = new Fn_47();

if ($opc_mod == 1) {
    $id = $_POST['dato_1'];
    $tupla = $fn47->fn47_rcontactanos_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Mensaje "<?php echo ($tupla[0]['nombre_contactanos']) ?>"</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_editar" >
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Fecha:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['fecha_contactanos']) ?></label>
                                <label class="col-sm-3 col-form-label">Nombre:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['nombre_contactanos']) ?></label>
                                <label class="col-sm-3 col-form-label">Email:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['email_contactanos']) ?></label>
                                <label class="col-sm-3 col-form-label">Tipo:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($fn47->fn47_rrequerimiento($tupla[0]['requerimiento_contactanos'])) ?></label>
                                <label class="col-sm-3 col-form-label">Mensaje:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['msg_contactanos']) ?></label>
                                <label class="col-sm-3 col-form-label">Suscripció para envio de correos:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php if($tupla[0]['suscribe_contactanos']==1){ echo 'ACEPTADO'; }else{ echo 'RECHAZADO'; }  ?></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $fechaactual = date('Y-m-d');
    $fechantes = date("Y-m-d",strtotime($fechaactual."- 1 month"));
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Filtros</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        
                        <form class="form-valide" id="frm_filtromod" method="post">
                            <input type="hidden" value="2" name="dato_0">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Fecha Desde</label>
                                <label class="col-sm-6 col-form-label">Fecha Hasta</label>
                                <div class="col-sm-6">
                                    <input type="date" name="fechadesde" class="form-control" value="<?php echo $fechantes ?>">
                                </div>
                                
                                <div class="col-sm-6">
                                    <input type="date" name="fechasta" class="form-control" value="<?php echo $fechaactual ?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Tipo</label>
                                <div class="col-sm-12">
                                    <select  name="tipo" class="form-control">
                                        <option value="">SELECCIONE AGENCIA</option>
                                        <option value="1">Requerimiento</option>
                                        <option value="2">Consultas</option>
                                        <option value="3">Transferencias</option>
                                        <option value="4">Pagos</option>
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
        <button type="button"  onclick="cn47_r002_f1()" data-dismiss="modal" class="btn btn-warning" >Aplicar </button>
    </div>
    <?php

}