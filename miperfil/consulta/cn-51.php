<?php
require '../controlador/conexion.php';
require '../funciones/fn-51.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn51 = new Fn_51();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn51->fn51_rnosotros_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_nosotros = ($_POST['nombre_nosotros']);
    $direccion_nosotros = ($_POST['direccion_nosotros']);
    $tele1_nosotros = ($_POST['tele1_nosotros']);
    $tele2_nosotros = ($_POST['tele2_nosotros']);
    $red1_nosotros = ($_POST['red1_nosotros']);
    $id_zona = ($_POST['id_zona']);
    $horario_nosotros = ($_POST['horario_nosotros']);
    $posicion_nosotros = ($_POST['posicion_nosotros']);
    $x_nosotros = ($_POST['x_nosotros']);
    $y_nosotros = ($_POST['y_nosotros']);
    $tipo_nosotros = 0;
    $estado = 1;
    $cuenta = $fn51->fn51_cnosotros_xdata($nombre_nosotros, $direccion_nosotros, $tele1_nosotros, $tele2_nosotros, $id_zona, $horario_nosotros, $posicion_nosotros, $x_nosotros, $y_nosotros, $tipo_nosotros, $estado, $red1_nosotros);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn51->fn51_rnosotros_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $nombre_nosotros = ($_POST['nombre_nosotros']);
    $direccion_nosotros = ($_POST['direccion_nosotros']);
    $tele1_nosotros = ($_POST['tele1_nosotros']);
    $tele2_nosotros = ($_POST['tele2_nosotros']);
    $id_zona = ($_POST['id_zona']);
    $horario_nosotros = ($_POST['horario_nosotros']);
    $posicion_nosotros = ($_POST['posicion_nosotros']);
    $red1_nosotros = ($_POST['red1_nosotros']);
    $x_nosotros = ($_POST['x_nosotros']);
    $y_nosotros = ($_POST['y_nosotros']);
    $cuenta = $fn51->fn51_unosotros_x($nombre_nosotros, $direccion_nosotros, $tele1_nosotros, $tele2_nosotros, $id_zona, $horario_nosotros, $x_nosotros, $y_nosotros, $posicion_nosotros, $red1_nosotros, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn51->fn51_rnosotros_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn51->fn51_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn51->fn51_unosotros_xest($id, $estado);
    if ($cuenta == 0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
    //$tabla = $fn51->fn51_rnosotros_all();
    //$include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $texto1_prod = $_POST['texto1_prod'];
    $texto2_prod = $_POST['texto2_prod'];
    $texto3_prod = $_POST['texto3_prod'];
    $cuenta = $fn51->fn51_unosotros_xtexto($texto1_prod, $texto2_prod, $texto3_prod, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn51->fn51_rnosotros_all();
    $include = 1;
}
if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    $estado_coordinador = 0;
    $cuenta = $fn51->fn51_ccoordinador_xdata($estado_coordinador, $id);
    $tabla = $fn51->fn51_rcordinadores_allx($id);
    $include = 2;
}

if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn51->fn51_ucoordinador_xest($id, $estado);
    $tabla = $fn51->fn51_rcordinadores_all();
    $include = 2;
}

if ($opc_cn == 8) {
    $id = ($_POST['dato_1']);
    $nombre_coordinador = ($_POST['dato_2']);
    $apellido_coordinador = ($_POST['dato_3']);
    $mail_coordinador = ($_POST['dato_4']);
    $cuenta = $fn51->fn51_ucoordinador_xupdate($nombre_coordinador, $apellido_coordinador, $mail_coordinador, $id);
    if ($cuenta == 1) {
        ?>
        <label style="color: green"><i class="fa fa-check"></i></label>
        <?php
    } else {
        ?>
        <label style="color: red"><i class="fa fa-exclamation"></i></label>
        <?php
    }
}

if ($opc_cn == 9) {
    $id = $_POST['dato_1'];
    $valor = $_POST['dato_2'];
    $cuenta = $fn51->fn51_uagencia_xtipo($valor, $id);
    if ($cuenta == 1) {
        ?>
        <label><i class="fa fa-check"></i></label>
        <?php
    } else {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
}

if ($opc_cn == 10) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn51->fn51_unosotros_xest($id, $estado);
    $tabla = $fn51->fn51_rnosotros_all();
    $include = 1;
}

if ($opc_cn == 11) {
    $search = ($_POST['dato_1']);
    $listprov = $fn51->fn51_rzona_all(2, $search);
    ?>
    <label style="margin-left: 20px; font-weight: 700">Provincia *</label>
    <select class="form-control"  onchange="cn51_r012_d3(12, this.value)">
        <option value="" selected="selected">Selecciona una Provincia </option>
        <?php
        while ($menup = $listprov->fetch_assoc()) {
            ?>
            <option value="<?php echo ($menup['id_zona']) ?>"><?php echo ($menup['lugar_zona']) ?> </option>
            <?php
        }
        ?>
    </select>
    <?php
}
if ($opc_cn == 12) {
    $search = ($_POST['dato_1']);
    $listprov = $fn51->fn51_rzona_all(3, $search);
    ?>
    <label style="margin-left: 20px; font-weight: 700">Cantón *</label>
    <select class="form-control" name="id_zona">
        <option value="" selected="selected">Selecciona un Cantón </option>
        <?php
        while ($menup = $listprov->fetch_assoc()) {
            ?>
            <option value="<?php echo ($menup['id_zona']) ?>"><?php echo ($menup['lugar_zona']) ?> </option>
            <?php
        }
        ?>
    </select>
    <?php
}
if ($opc_cn == 13) {
    $search = ($_POST['dato_1']);
    $listprov = $fn51->fn51_rzona_all(4, $search);
    ?>
    <label style="margin-left: 20px; font-weight: 700">Parroquia *</label>
    <select class="form-control"  name="id_zona">
        <option value="" selected="selected">Selecciona una Parroquia </option>
        <?php
        while ($menup = $listprov->fetch_assoc()) {
            ?>
            <option value="<?php echo ($menup['id_zona']) ?>"><?php echo ($menup['lugar_zona']) ?> </option>
            <?php
        }
        ?>
    </select>
    <?php
}

if ($opc_cn == 14) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn51->fn51_uimg_xid($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
    ?>

    <img src="../images/<?php echo $dato ?>" width="400">
    <?php
}
//INCLUDE

if ($include == 1) {
    $tabla = $fn51->fn51_rnosotros_all();
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Direccónn</th>
                <th>Teléfono</th>
                <th>Tipo</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_nosotros'];
                $id = $menu['id_nosotros'];
                $estado = $fn51->fn51_estado_xid($st);
                $tipo = $menu['tipo_nosotros'];
                ?>
                <tr>
                    <td><?php echo ($menu['nombre_nosotros']) ?></td>
                    <td> <?php echo ($menu['direccion_nosotros']) ?> </td>
                    <td> <?php echo ($menu['tele1_nosotros']) ?> </td>
                    <td> 
                        <select class="form-control" onchange="cn51_f9(9,<?php echo $id ?>, this.value)">
                            <?php if (($tipo) == 0) { ?>
                                <option <?php if (($tipo) == 0) {
                        echo("selected");
                    } ?> value="0">Ninguno</option> 
        <?php } ?>
                            <option <?php if (($tipo) == 1) {
            echo("selected");
        } ?> value="1">Agencia</option> 
                            <option <?php if (($tipo) == 2) {
            echo("selected");
        } ?> value="2">Cajero</option>  
                        </select>
                        <div id="selec<?php echo $id ?>">
                        </div>
                    </td>
                    <td> 
                        <button onclick='md51_d7(7,<?php echo $id ?>)' data-toggle="modal" 
                                data-target="#modalcontent_lg" 
                                class='btn btn-outline-primary shadow btn-xs mr-1'>
                            <i class="fa fa-file-image-o fa-2x" ></i>
                        </button>
                    </td>

                    <td>

                        <div class="custom-control custom-checkbox mb-3">
                            <?php
                            if ($st == 0) {
                                ?>
                                <input value="1" name="estado" onchange="cn51_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                <?php
                            } else if ($st == 1) {
                                ?>
                                <input value="0" name="estado" onchange="cn51_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
            <?php
        }
        ?>
                        </div>
                        <div id="fill_<?php echo $id ?>">
                        </div>
                    </td>

                    <td>
                        <div class="d-flex">
                            <button onclick="md51_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md51_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                            <!--<button onclick="md51_d6(6,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-primary light  btn-xs sharp mr-1" data-toggle="dropdown"><i class="fa fa-user-plus"></i></button>-->
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

if ($include == 2) {
    ?>
    <table id="example4" class="display table table-striped table-bordered" >
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
    <?php
    while ($menu = $tabla->fetch_assoc()) {
        $st = $menu['estado_coordinador'];
        $id = $menu['id_coordinador'];
        $estado = $fn51->fn51_estado_xid($st);
        ?>
                <tr>
                    <td> <input type="text" id="nombre_coordinador<?php echo $id ?>" class="form-control" value="<?php echo ($menu['nombre_coordinador']) ?>"></td>
                    <td> <input type="text" id="apellido_coordinador<?php echo $id ?>" class="form-control" value="<?php echo ($menu['apellido_coordinador']) ?>"></td>
                    <td> <input type="text" id="mail_coordinador<?php echo $id ?>" class="form-control" value="<?php echo ($menu['mail_coordinador']) ?>"> </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn51_f7(7, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn51_f7(7, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
            <?php
        }
        ?>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="cn51_f8(8,<?php echo $id ?>)"  class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-save"></i></button>
                            <div id="div_response<?php echo $id ?>"></div>

                        </div>												
                    </td>												
                </tr>
        <?php
    }
    ?>
        </tbody>
    </table>
    <?php
}

