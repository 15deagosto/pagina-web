<?php
require '../controlador/conexion.php';
require '../funciones/fn-59.php';
$opc_mod = $_POST['dato_0'];
$fn59 = new Fn_59();


if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo horario</h5>
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
                                <label class="col-sm-6 col-form-label">Día</label>
                                <label class="col-sm-6 col-form-label">Tipo</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="dia_horario">
                                        <option value="0">-- Seleccionar --</option>
                                        <option value="Lunes">Lunes</option>
                                        <option value="Martes">Martes</option>
                                        <option value="Miércoles">Miércoles</option>
                                        <option value="Jueves">Jueves</option>
                                        <option value="Viernes">Viernes</option>
                                        <option value="Sábado">Sábado</option>
                                        <option value="Domingo">Domingo</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" name="tipo_horario">
                                        <option value="0">-- Seleccionar --</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Feriado">Feriado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Hora inicio</label>
                                <label class="col-sm-6 col-form-label">Hora fin</label>
                                <div class="col-sm-6">
                                    <input type="time" name="hora_inicio" class="form-control" placeholder="">
                                </div>
                                <div class="col-sm-6">
                                    <input type="time" name="hora_final" class="form-control" placeholder="">
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
        <button type="button"  onclick="cn59_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn59->fn59_rhorarios_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Horario</h5>
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
                                <label class="col-sm-6 col-form-label">Día</label>
                                <label class="col-sm-6 col-form-label">Tipo</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="dia_horario">
                                        <option value="<?php echo $tupla[0]['dia_horario'] ?>"><?php echo $tupla[0]['dia_horario'] ?></option>
                                        <option value="0">-- Seleccionar --</option>
                                        <option value="Lunes">Lunes</option>
                                        <option value="Martes">Martes</option>
                                        <option value="Miércoles">Miércoles</option>
                                        <option value="Jueves">Jueves</option>
                                        <option value="Viernes">Viernes</option>
                                        <option value="Sábado">Sábado</option>
                                        <option value="Domingo">Domingo</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" name="tipo_horario">
                                        <option value="<?php echo $tupla[0]['tipo_horario'] ?>"><?php echo $tupla[0]['tipo_horario'] ?></option>
                                        <option value="0">-- Seleccionar --</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Feriado">Feriado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Hora inicio</label>
                                <label class="col-sm-6 col-form-label">Hora fin</label>
                                <div class="col-sm-6">
                                    <input type="time" name="hora_inicio" class="form-control" placeholder="" value="<?php echo ($tupla[0]['horaini_horario']) ?>">
                                </div>
                                <div class="col-sm-6">
                                    <input type="time" name="hora_final" class="form-control" placeholder="" value="<?php echo ($tupla[0]['horafin_horario']) ?>">
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
        <button onclick="cn59_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
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
                <button type="button" onclick="cn59_f5(5, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}