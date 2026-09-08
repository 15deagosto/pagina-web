<?php
require '../controlador/conexion.php';
require '../funciones/fn-62.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn62 = new Fn_62();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn62->fn62_rusuario_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $titulo_texto = $_POST['titulo_texto'];
    $resumen_texto = $_POST['resumen_texto'];
    $texto_texto = $_POST['texto_texto'];
    $desc_texto = $_POST['desc_texto'];
    $car1_texto = "";
    $car2_texto = "";
    $car3_texto = "";
    $estado = 0;
    $cuenta = $fn62->fn62_ctextos_xdata($titulo_texto, $texto_texto, $resumen_texto, $desc_texto, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $titulo_texto = $_POST['titulo_texto'];
    $resumen_texto = $_POST['resumen_texto'];
    $texto_texto = $_POST['texto_texto'];
    $desc_texto = $_POST['desc_texto'];
    $car1_texto = $_POST['car1_texto'];
    $car2_texto = $_POST['car2_texto'];
    $car3_texto = $_POST['car3_texto'];
    $cuenta = $fn62->fn62_utextos_x($titulo_texto, $texto_texto, $resumen_texto, $desc_texto,
            $car1_texto, $car2_texto, $car3_texto, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../assets/img/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn62->fn62_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $st = $_POST['dato_2'];
    $cuenta = $fn62->fn62_utextos_xest($id, $st);
    if ($cuenta == 0) {
        ?>
        <div class="custom-control custom-checkbox mb-3">
            <?php
            if ($st == 0) {
                ?>
                <input value="1" name="estado" onchange="cn62_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                <?php
            } else if ($st == 1) {
                ?>
                <input value="0" name="estado" onchange="cn62_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                <?php
            }
            ?>
        </div>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    } else {
        ?>
        <div class="custom-control custom-checkbox mb-3">
            <?php
            if ($st == 0) {
                ?>
                <input value="1" name="estado" onchange="cn62_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                <?php
            } else if ($st == 1) {
                ?>
                <input value="0" name="estado" onchange="cn62_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                <?php
            }
            ?>
        </div>
        <?php
    }
//    $include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn62->fn62_utextos_xest($id, $estado);
    $include = 1;
}

if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $cuenta = $fn62->fn62_utextos_xtip($id, $tipo);
    if ($cuenta == 1) {
        ?>
        <label><i class="fa fa-check"></i></label>
        <?php
    } else {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }

    //$include = 1;
}

if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../assets/img/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn62->fn62_uimg_xid($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
    $imagen_upd = $dato;
    $include = 2;
}
if ($opc_cn == 8) {
    $id = $_POST['dato_1'];
    $dato = '';
    $cuenta = $fn62->fn62_uimg_xid($id, $dato);
    $imagen_upd = $dato;
    $include = 2;
}

if ($opc_cn == 9) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../documentos/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn62->fn62_uimg_xid($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
    ?>
    <a href="../documentos/<?php echo $dato ?>"><?php echo $dato ?></a>
    <?php
}

//INCLUDE

if ($include == 1) {
    $tabla = $fn62->fn62_rtextos_all();
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Título</th>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Imagen</th>
                <th>Gob. Corporativo</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_texto'];
                $id = $menu['id_texto'];
                $tip = $menu['tipo_texto'];
                $dettipo = $fn62->fn62_tipo_xid($tip);
                ?>
                <tr>
                    <td> <?php echo $menu['titulo_texto'] ?></td>
                    <td> <?php echo ($menu['fecha_texto']) ?> </td>
                    <td>
                        <select class="form-control" onchange="cn62_f6(6,<?php echo $id ?>, this.value)">
                            <?php if (($tip) == 0) { ?>
                                <option <?php
                                if (($tip) == "" || ($tip) == null) {
                                    echo("selected");
                                }
                                ?> value="0">Ninguno</option> 
                            <?php } else { ?>
                                <option value="<?php echo $tip ?>"><?php echo $dettipo ?></option>
        <?php } ?>
                            <option value="1">BUENAS PRÁCTICAS AMBIENTALES</option> 
                            <option value="2">TRASPARENCIA</option>
                            <option value="3">POLÍTICA DE PRIVACIDAD</option> 
                            <option value="4">RESPONSABILIDAD SOCIAL</option> 
                        </select>
                        <div id="selec<?php echo $id ?>">

                        </div>
                    </td>
                    <td> 
                        <button onclick='md62_d5(5,<?php echo $id ?>, 1)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs mr-1'><i class="fa fa-file-image-o fa-2x" ></i></button>
                    </td>
                    <td> 
                        <button onclick='md62_d6(6,<?php echo $id ?>, 1)' 
                                data-toggle="modal" 
                                data-target="#modalcontent_md" 
                                class='btn btn-outline-primary shadow btn-xs mr-1'>
                            <i class="fa fa-file-pdf-o fa-2x" ></i></button>
                    </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn62_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn62_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md62_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md62_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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
    <?php if ($imagen_upd != '') { ?>
        <img src="../assets/img/<?php echo $imagen_upd ?>" width="200px" />
    <?php } else { ?>
        <center><h5> Sin imagen</h5></center>
    <?php } ?>
    <div id="cargando_img" class="bg_load" style="display: none" >
        <img class="loader_animation" src="../images/loading-gif.gif"  /><br>
    </div>
    <?php
}