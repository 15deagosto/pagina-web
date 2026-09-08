<?php
require '../controlador/conexion.php';
require '../funciones/fn-48.php';
$opc_mod = $_POST['dato_0'];
$a = new Fn48();


if ($opc_mod == 1) {
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
                            <input type="hidden" value="1" name="dato_0">
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
                                <label class="col-sm-12 col-form-label">Cuidad</label>
                                <div class="col-sm-12">
                                    <select  name="lugar" class="form-control">
                                        <option value="">SELECCIONE CUIDAD</option>
                                        <?php
                                        $tabla = $a->get_lugarvisitas();
                                        if ($tabla->num_rows > 0) {
                                            while ($data = $tabla->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo ($data['lugar_pagina']) ?>"><?php echo ($data['lugar_pagina']) ?></option>
                                        <?php
                                        }}
                                        ?>
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
        <button type="button"  onclick="cn48_r001_f1()" data-dismiss="modal" class="btn btn-warning" >Aplicar </button>
    </div>
    <?php
}

