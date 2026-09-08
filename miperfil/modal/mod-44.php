<?php
require '../controlador/conexion.php';
require '../funciones/fn-44.php';
$fn44 = new Fn_44();
$opc_mod = $_POST['dato_0'];

if ($opc_mod == 1) {
    $id = $_POST['dato_1'];
    $tupla = $fn44->fn44_rscredito_x($id);
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Detalle</h5>
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
                                <label class="col-sm-4 col-form-label">Usuario</label>
                                <div class="col-sm-8">
                                    <p><?php echo ($tupla[0]['nombre_credito'].' '.$tupla[0]['apellido_credito']) ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Teléfono</label>
                                <div class="col-sm-8">
                                    <p><?php echo ($tupla[0]['telefono_credito']) ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <p><?php echo ($tupla[0]['email_credito']) ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Entidad</label>
                                <div class="col-sm-8">
                                    <p><?php echo ($tupla[0]['entidad_credito']) ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Cuidad</label>
                                <div class="col-sm-8">
                                    <p><?php echo ($tupla[0]['ciudad_credito']) ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Producto</label>
                                <div class="col-sm-8">
                                    <p><?php echo ($tupla[0]['nombre_prod']) ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Monto</label>
                                <div class="col-sm-8">
                                    <p><?php echo '$ '.($tupla[0]['monto_credito']) ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tiempo</label>
                                <div class="col-sm-8">
                                    <p><?php echo ($tupla[0]['tiempo_credito']).'/meses' ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Tasa</label>
                                <div class="col-sm-8">
                                    <p><?php echo ($tupla[0]['tasanominal_tasa']).' %' ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Fecha</label>
                                <div class="col-sm-8">
                                    <p><?php echo ($tupla[0]['fecha_credito']) ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Hora</label>
                                <div class="col-sm-8">
                                    <p><?php echo ($tupla[0]['hora_credito']) ?></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Acuerdo</label>
                                <div class="col-sm-8">
                                    <?php if(($tupla[0]['acuerdo_credito'])== 1 ){ ?>
                                    <p>El usuario Acepto el acuerdo de confidencialidad</p>
                                    <?php }else{ ?>
                                    <p>El usuario No Acepto el acuerdo de confidencialidad</p>
                                    <?php } ?>
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
                                    <select  name="producto" class="form-control">
                                        <option value="">SELECCIONE PRODUCTO</option>
                                        <?php
                                        $tabla = $fn44->fn44_rproducto_all();
                                        if ($tabla->num_rows > 0) {
                                            while ($data = $tabla->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo ($data['id_prod']) ?>"><?php echo ($data['nombre_prod']) ?></option>
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
        <button type="button"  onclick="cn44_d2()" data-dismiss="modal" class="btn btn-warning" >Aplicar </button>
    </div>
    <?php

}