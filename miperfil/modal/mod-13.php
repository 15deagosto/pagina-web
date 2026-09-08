<?php
session_start();
require '../controlador/conexion.php';
require '../funciones/fn-13.php';
include '../sesiones/abrir.php';
$a = new Fn13();
$iopc = $_POST['dato_0'];
//echo $iopc;
if ($iopc == 1) {
    $id_rol = $_POST['dato_1'];
    $rol = $a->fn13_rol_xid($id_rol);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">NUEVO MENÚ</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form id="i_modform">
            <input type="hidden" name="dato_0" value="4">
            <input type="hidden" name="dato_1" value="<?php echo $id_rol ?>">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">NOMBRE MENÚ</label>
                <div class="col-sm-9">
                    <input type="text" name="nombre_menu" class="form-control" placeholder="Nombre Menú">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">ICONO</label>
                <div class="col-sm-9">
                    <select class="form-control fa-wordpress" name="icon_menu">
                        <option>Elija un icono</option>
                        <option value="fa fa-user">fa fa-user</option>
                        <option value="fa fa-clone">fa fa-clone</option>
                        <option value="fa fa-wordpress">fa fa-wordpress</option>
                        <option value="fa fa-gears">fa fa-gears</option>
                        <option value="fa fa-check-square-o">fa fa-check-square-o</option>
                        <option value="fa fa-table">fa fa-table</option>
                        <option value="fa fa-edit">fa fa-edit</option>

                    </select>

                </div>
            </div>

        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="cn13_004_f5()" data-dismiss="modal">Guardar</button>
    </div>
    <?php
}

if ($iopc == 2) {
    $id_rol = $_POST['dato_1'];
    $id_padre = $_POST['dato_2'];
    $menu = $a->fn41_r_menu_xid($id_menu);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">NUEVO SUB-MENÚ</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form id="i_modform">
            <input type="hidden" name="dato_0" value="5">
            <input type="hidden" name="dato_1" value="<?php echo $id_rol ?>">
            <input type="hidden" name="dato_2" value="<?php echo $id_padre ?>">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">NOMBRE MENÚ</label>
                <div class="col-sm-9">
                    <input type="text" name="nombre_menu" class="form-control" placeholder="Nombre Menú">
                </div>
            </div>
            

        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="cn13_005_f5()" data-dismiss="modal">Guardar</button>
    </div>
    <?php
}