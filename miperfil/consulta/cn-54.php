<?php
require '../controlador/conexion.php';
require '../funciones/fn-54.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn54 = new Fn_54();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn54->fn54_ravisos_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_transp = ($_POST['nombre_transp']);
    $resumen_transp = "";
    $tipo_transp = ($_POST['tipo_transp']);
    $estado = 0;
    $fecha_transp = date('Y-m-d');
    $id_padre = 0;
    //echo "asdasd";
    $cuenta = $fn54->fn54_ctransparencia_x($nombre_transp, $resumen_transp, $fecha_transp, $tipo_transp, $estado, $id_padre);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $a->fn54_rtransparencia_xpadre(0);
    $include = 1;
}

if ($opc_cn == 2) {
    $id_hijo = $_POST['dato_1'];
    $nombre_transp = ($_POST['nombre_transp']);
    $tipo_transp = ($_POST['tipo_transp']);
    $cuenta = $fn54->fn54_utransparencia_xid($nombre_transp, $tipo_transp, $id_hijo);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn54->fn54_rtransparencia_xpadre(0);
    $include = 1;
}

if ($opc_cn == 3) {
    $id_hijo = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../doctransparencia/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn54->fn54_utransparencia_xdocumento($id_hijo, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
    ?>
    <a href="../../doctransparencia/<?php echo ($tupla[0]['url_transp']) ?>" target="_blank">DOCUMENTO</a>
    <?php
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn54->fn54_utransparencia_xest($id, $estado);
    if ($cuenta == 1) {
        ?>
        <i class="fa fa-check" style="color:green"></i>
        <?php
    } else {
        ?>
        <i class="fa fa-times" style="color:red"></i>
        <?php
    }
}
if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn54->fn54_uavisos_xest($id, $estado);
    if ($cuenta == 0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
    //$tabla = $fn54->fn54_ravisos_all();
    //$include = 1;
}

if ($opc_cn == 6) {
    $id_padre = $_POST['dato_1'];
    $nombre_transp = ($_POST['nombre_transp']);
    $resumen_transp = ($_POST['resumen_transp']);
    $fecha_transp = ($_POST['fecha_transp']);
    $tipo_transp = 0;
    $estado = 0;

    $cuenta = $fn54->fn54_ctransparencia_x($nombre_transp, $resumen_transp, $fecha_transp, $tipo_transp, $estado, $id_padre);
    echo $fnalert->fnalert_create($cuenta);
    $tabla1 = $fn54->fn54_rtransparencia_xpadre($id_padre);
    $include = 2;
}

if ($opc_cn == 7) {
    $id_hijo = $_POST['dato_1'];
    $id_padre = $_POST['dato_2'];
    $nombre_transp = ($_POST['nombre_transp']);
    $resumen_transp = ($_POST['resumen_transp']);
    $fecha_transp = ($_POST['fecha_transp']);
    $cuenta = $fn54->fn54_utransparencia_xidfecha($nombre_transp, $resumen_transp, $fecha_transp, $id_hijo);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla1 = $fn54->fn54_rtransparencia_xpadre($id_padre);
    $include = 2;
}


//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_transp'];
                $id = $menu['id_transp'];
                ?>
                <tr>
                    <td> <?php echo $id ?></td>
                    <td> <?php echo ($menu['nombre_transp']) ?> </td>
                    <td> <?php
                        if ($menu['tipo_transp'] == 0) {
                            echo "TRANSPARENCIA DE LA INFORMACIÓN";
                        } else {
                            echo "BUENA GOBERNANZA";
                        }
                        ?> 
                    </td>
                    <td>

                        <div class="custom-control custom-checkbox mb-3">
                            <?php
                            if ($st == 0) {
                                ?>
                                <input value="1" name="estado" onchange="cn54_004_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                <?php
                            } else {
                                ?>
                                <input value="0" name="estado" onchange="cn54_004_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                            <button onclick="md54_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md54_x_d3(<?php echo $id ?>)" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></button>

                        </div>												
                    </td>												
                </tr>
                <tr>
                    <td colspan="5">
                        <div id="i_trans<?php echo $id ?>" style="display: none">
                            <table style="width: 100%">
                                <tr>
                                    <td colspan="6">
                                        <button onclick="md54_005_d2(5,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow"><i class="fa fa-plus"> Agregar Descarga</i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Resumen</th>
                                    <th>Link</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                                <?php
                                $tabla1 = $fn54->fn54_rtransparencia_xpadre($id);
                                while ($menu2 = $tabla1->fetch_assoc()) {
                                    $st1 = $menu2['estado_transp'];
                                    $id_1 = $menu2['id_transp'];
                                    ?>        
                                    <tr>
                                        <td><?php echo ($menu2['nombre_transp']) ?></td>
                                        <td><?php echo ($menu2['fecha_transp']) ?></td>
                                        <td><?php echo ($menu2['resumen_transp']) ?></td>
                                        <td>
                                            <button onclick="md54_003_d2(3,<?php echo $id_1 ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-file"></i></button>

                                        </td>
                                        <td>

                                            <div class="custom-control custom-checkbox mb-3">
                                                <?php
                                                if ($st1 == 0) {
                                                    ?>
                                                    <input value="1" name="estado" onchange="cn54_004_f4(4, <?php echo $id_1 ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBoxtra1<?php echo $id_1 ?>" required>
                                                    <label class="custom-control-label" for="customCheckBoxtra1<?php echo $id_1 ?>">Inactivo</label>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <input value="0" name="estado" onchange="cn54_004_f4(4, <?php echo $id_1 ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBoxtra1<?php echo $id_1 ?>" required>
                                                    <label class="custom-control-label" for="customCheckBoxtra1<?php echo $id_1 ?>">Activo</label>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <div id="fill_<?php echo $id_1 ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md54_006_d2(6,<?php echo $id_1 ?>,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                            </div>												
                                        </td>   
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>

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
    <table style="width: 100%">
        <tr>
            <td colspan="6">
                <button onclick="md54_005_d2(5,<?php echo $id_padre ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow"><i class="fa fa-plus"> Agregar Descarga</i></button>
            </td>
        </tr>
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Resumen</th>
            <th>Link</th>
            <th>Estado</th>
            <th>Acción</th>
        </tr>
        <?php
        while ($menu2 = $tabla1->fetch_assoc()) {
            $st1 = $menu2['estado_transp'];
            $id_1 = $menu2['id_transp'];
            ?>        
            <tr>
                <td><?php echo ($menu2['nombre_transp']) ?></td>
                <td><?php echo ($menu2['fecha_transp']) ?></td>
                <td><?php echo ($menu2['resumen_transp']) ?></td>
                <td>
                    <button onclick="md54_003_d2(3,<?php echo $id_1 ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-file"></i></button>

                </td>
                <td>

                    <div class="custom-control custom-checkbox mb-3">
                        <?php
                        if ($st1 == 0) {
                            ?>
                            <input value="1" name="estado" onchange="cn54_004_f4(4, <?php echo $id_1 ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBoxtra1<?php echo $id ?>" required>
                            <label class="custom-control-label" for="customCheckBoxtra1<?php echo $id_1 ?>">Inactivo</label>
                            <?php
                        } else {
                            ?>
                            <input value="0" name="estado" onchange="cn54_004_f4(4, <?php echo $id_1 ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBoxtra1<?php echo $id ?>" required>
                            <label class="custom-control-label" for="customCheckBoxtra1<?php echo $id_1 ?>">Activo</label>
                            <?php
                        }
                        ?>
                    </div>
                    <div id="fill_<?php echo $id_1 ?>">
                    </div>
                </td>
                <td>
                    <div class="d-flex">
                        <button onclick="md54_006_d2(6,<?php echo $id_1 ?>,<?php echo $id_padre ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                    </div>												
                </td>   
            </tr>
            <?php
        }
        ?>
    </table>
    <script>
        $('#example3').dataTable();
    </script>
    <?php
}