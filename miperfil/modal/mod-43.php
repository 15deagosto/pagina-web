<?php
require '../controlador/conexion.php';
require '../funciones/fn-43.php';
$opc_mod = $_POST['dato_0'];
$fn43 = new Fn_43();



if ($opc_mod == 1) {
    $id = $_POST['dato_1'];
    $tupla = $fn43->fn54_rquejas_x($id);
    $quejaname=$fn43->fn43_tipo_quejas($tupla[0]['tipo_queja']);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Detalle Queja</h5>
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
                                <label class="col-sm-3 col-form-label">Fecha</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['fecha_queja']) ?></label>
                                <label class="col-sm-3 col-form-label">Hora</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['hora_queja']) ?></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Agencia</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $tupla[0]['nombre_nosotros'] ?></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nombre</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $tupla[0]['nombre_queja'] ?></label>
                                <label class="col-sm-3 col-form-label">Identificación</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['cedula_queja']) ?></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Teléfono</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['telefono1_queja']) ?></label>
                                <label class="col-sm-3 col-form-label">Móvil</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['telefono2_queja']) ?></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $tupla[0]['email_queja'] ?></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Provincia</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['padrelugar_zona']) ?></label>
                                <label class="col-sm-3 col-form-label">Cantón</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($tupla[0]['lugar_zona']) ?></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Dirección</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $tupla[0]['direccion_queja'] ?></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Referencia</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $tupla[0]['referencia_queja'] ?></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mensaje</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $tupla[0]['mensaje_queja'] ?></label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Petición</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $tupla[0]['peticion_queja'] ?></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
<!--        <button onclick="cn54_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>-->
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
                                <label class="col-sm-12 col-form-label">Agencias</label>
                                <div class="col-sm-12">
                                    <select  name="agencia" class="form-control">
                                        <option value="">SELECCIONE AGENCIA</option>
                                        <?php
                                        $tabla = $fn43->fn43_rnosotros_all();
                                        if ($tabla->num_rows > 0) {
                                            while ($data = $tabla->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo ($data['id_nosotros']) ?>"><?php echo ($data['nombre_nosotros']) ?></option>
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
        <button type="button"  onclick="cn43_r002_f1()" data-dismiss="modal" class="btn btn-warning" >Aplicar </button>
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
                <button type="button" onclick="cn54_f4(4, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}
