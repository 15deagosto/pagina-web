<?php
require '../controlador/conexion.php';
require '../funciones/fn-58.php';
$opc_mod = $_POST['dato_0'];
$fn58 = new Fn_58();

if ($opc_mod == 1) {
    $id = $_POST['dato_1'];
    $tupla = $fn58->fn58_rtrabajonosotros_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Mensaje "<?php echo ($tupla[0]['nombre_vacanusu'].' '.$tupla[0]['apellido_vacanusu']) ?>"</h5>
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
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['fecha_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Aplica:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['nombre_vacante']) ?></label>
                                <label class="col-sm-3 col-form-label">Identificación:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['identificacion_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Usuario:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['nombre_vacanusu'].' '.$tupla[0]['apellido_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Nacionalidad:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['nacionalidad_vacanusu']) ?></label>
                                <label class="col-sm-4 col-form-label">Fecha de Nacimiento:</label>
                                <label class="col-sm-2 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['fechnacimiento_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Teléfono:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['telefono_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Email:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['email_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Discapacidad:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php if($tupla[0]['discapacidad_vacanusu']==1){ echo 'SI'; }else{ echo 'NO'; }  ?></label>
                                <label class="col-sm-4 col-form-label">Porcentaje de discapacidad:</label>
                                <label class="col-sm-2 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['porcentdiscap_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Nivel Educativo:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['niveledu_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Título Académido:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['tituloaca_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Institución Educativa:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['intitucion_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Área de experiencia laboral:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['areaexplab_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Años de experiencia:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['aniosxp_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Conocimientos:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['conocimientos_vacanusu']) ?></label>
                                <label class="col-sm-3 col-form-label">Políticas de uso de datos:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php if($tupla[0]['politicas_vacanusu']==1){ echo 'ACEPTADO'; }else{ echo 'RECHAZADO'; }  ?></label>
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
                                <label class="col-sm-12 col-form-label">Vacante</label>
                                <div class="col-sm-12">
                                    <select  name="vacante" class="form-control">
                                        <option value="">SELECCIONE AGENCIA</option>
                                        <?php
                                        $tabla = $fn58->fn58_rvacante_all();
                                        if ($tabla->num_rows > 0) {
                                            while ($data = $tabla->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo ($data['id_vacante']) ?>"><?php echo ($data['nombre_vacante']) ?></option>
                                        <?php
                                        }}
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Estados</label>
                                <div class="col-sm-12">
                                    <select name="estado" class="form-control">
                                        <option value="">SELECCIONE ESTADO</option>
                                        <option value="0">PENDIENTE</option>
                                        <option value="1">ANTENDIDO</option>
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
        <button type="button"  onclick="cn58_r002_f1()" data-dismiss="modal" class="btn btn-warning" >Aplicar </button>
    </div>
    <?php

}