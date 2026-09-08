<?php
require '../controlador/conexion.php';
require '../funciones/fn-42.php';
$opc_mod = $_POST['dato_0'];
$a = new Fn42();


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
                                <label class="col-sm-12 col-form-label">Nombre de Página</label>
                                <div class="col-sm-12">
                                    <select  name="pagina" class="form-control">
                                        <option value="">SELECCIONE PÁGINA</option>
                                        <?php
                                        $tabla = $a->get_pagvisitas();
                                        if ($tabla->num_rows > 0) {
                                            while ($data = $tabla->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo ($data['nombre_pagina']) ?>"><?php echo ($data['nombre_pagina']) ?></option>
                                        <?php
                                        }}
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Navegador</label>
                                <div class="col-sm-12">
                                    <select name="navegador" class="form-control">
                                        <option value="">SELECCIONE NAVEGADOR</option>
                                        <?php
                                        $tabla2 = $a->get_navegavisitas();
                                        if ($tabla2->num_rows > 0) {
                                            while ($data = $tabla2->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo ($data['browser_pagina']) ?>"><?php echo ($data['browser_pagina']) ?></option>
                                        <?php
                                        }}
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Sistema Operativo</label>
                                <div class="col-sm-12">
                                    <select name="sist_opera" class="form-control">
                                        <option value="">SELECCIONE SO</option>
                                        <?php
                                        $tabla3 = $a->get_sovisitas();
                                        if ($tabla3->num_rows > 0) {
                                            while ($data = $tabla3->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo ($data['sistema_pagina']) ?>"><?php echo ($data['sistema_pagina']) ?></option>
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
        <button type="button"  onclick="cn42_r001_f1()" data-dismiss="modal" class="btn btn-warning" >Aplicar </button>
    </div>
    <?php
}

