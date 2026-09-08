<?php
require '../controlador/conexion.php';
require '../funciones/fn-11.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn11 = new Fn_11();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn11->fn11_rusuario_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_usuario = ($_POST['nombre_usuario']);
    $apellido_usuario = ($_POST['apellido_usuario']);
    $telefono_usuario = ($_POST['telefono_usuario']);
    $email_usuario = ($_POST['email_usuario']);
    $estado = 0;
    $cuenta = $fn11->fn11_cusuario_xdata($nombre_usuario, $apellido_usuario, $telefono_usuario, $email_usuario, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn11->fn11_rusuario_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $nombre_usuario = ($_POST['nombre_usuario']);
    $apellido_usuario = ($_POST['apellido_usuario']);
    $telefono_usuario = ($_POST['telefono_usuario']);
    $email_usuario = ($_POST['email_usuario']);
    //echo($id.' - '.$nombre_usuario.' - '.$apellido_usuario.' - '.$telefono_usuario.' - '.$email_usuario);
    $cuenta = $fn11->fn11_uusuario_x($nombre_usuario, $apellido_usuario, $telefono_usuario, $email_usuario, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn11->fn11_rusuario_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn11->fn11_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $st = $_POST['dato_2'];
    $cuenta = $fn11->fn11_uusuario_xest($id, $st);
    if ($cuenta==0) {
        if($st == 0){
        ?>
        <input value="1" name="estado" onchange="cn11_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
        <?php
        }else if($st == 1){
        ?>
        <input value="0" name="estado" onchange="cn11_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
        <?php    
        }
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    } else {
        if($st == 0){
        ?>
        <input value="1" name="estado" onchange="cn11_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
        <?php
        }else if($st == 1){
        ?>
        <input value="0" name="estado" onchange="cn11_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
        <?php    
        }
    }
    //$tabla = $fn11->fn11_rusuario_all();
    //$include = 1;
}



if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $mail = $_POST['dato_2'];
    $pass1 = $_POST['new_pass'];
    $pass2 = $_POST['conf_pass'];
    
    $clave = md5($mail.''.$pass1);
    
    if($pass1 == $pass2){
        $cuenta = $fn11->fn11_uusuario_xpass($id, $clave);
        if($cuenta == 1){
            echo "Contraseña actualizada correctamente.";
        }else{
            echo "Error al actualizar la contraseña.";
        }
    }else{
        echo "Las contraseñas no coinciden.";
    }
}

if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    $idrol = $_POST['dato_2'];
    $cuenta = $fn11->fn11_uusuario_xrol($id, $idrol);
    $include = 1;
}

if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn11->fn11_uusuario_xest($id, $estado);
    
    $tabla = $fn11->fn11_rusuario_all();
    $include = 1;
}

//INCLUDE

if ($include == 1) {
    $tabla = $fn11->fn11_rusuario_all();
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Estado</th>
                <th>Roles</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_usuario'];
                $id = $menu['id_usuario'];
                $idrol = $menu['id_rol'];
                $mail = ($menu['email_usuario']);
                $estado = $fn11->fn11_estado_xid($st);
                $rolactivo = $fn11->fn11_rusuario_xrol($idrol);
                $roles = $fn11->fn11_rrol_all();
            ?>
                <tr>
                    <td> <?php echo ($menu['nombre_usuario']) ?></td>
                    <td> <?php echo ($menu['apellido_usuario']) ?> </td>
                    <td> <?php echo ($menu['email_usuario']) ?> </td>
                    <td> <?php echo ($menu['telefono_usuario']) ?> </td>
                    <td>
                        <div class="custom-control custom-checkbox mb-3">
                            <div id="fill_<?php echo $id ?>">
                            <?php
                            if($st == 0){
                            ?>
                            <input value="1" name="estado" onchange="cn11_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                            <?php
                            }else if($st == 1){
                            ?>
                            <input value="0" name="estado" onchange="cn11_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                            <?php    
                            }
                            ?>
                            </div>
                        </div>


                    </td>
                    <td>
                        <select onchange="cn11_f6(6,<?php echo $id ?>,this.value)">
                            <option value="<?php echo $rolactivo[0]['id_rol'] ?>"><?php echo $rolactivo[0]['nombre_rol'] ?></option>
                            <?php
                            while ($detroles = $roles->fetch_assoc()) {
                            ?>
                            <option value="<?php echo $detroles['id_rol'] ?>"><?php echo $detroles['nombre_rol'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md11_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md11_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                            <button onclick="md11_d5(5,<?php echo $id ?>,'<?php echo $mail ?>')" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-key"></i></button>
                        </div>												
                    </td>												
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script>
        $('#example3').dataTable();
    </script>
    <?php
}