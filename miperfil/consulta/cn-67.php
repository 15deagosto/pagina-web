<?php
require '../controlador/conexion.php';
require '../funciones/fn-67.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn67 = new Fn_67();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn67->fn67_rredes_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $tipo_redes = ($_POST['tipo_redes']);
    $url_redes = ($_POST['url_redes']);
    $icono = ($_POST['icono']);
    $estado = 1;
    $cuenta = $fn67->fn67_credes_xdata($tipo_redes, $url_redes, $icono, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn67->fn67_rredes_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $tipo_redes = ($_POST['tipo_redes']);
    $url_redes = ($_POST['url_redes']);
    $icono = ($_POST['icono']);
    $cuenta = $fn67->fn67_uredes_x($tipo_redes, $url_redes, $icono, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn67->fn67_rredes_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn67->fn67_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn67->fn67_uredes_xest($id, $estado);
    if ($cuenta==0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
//    $tabla = $fn67->fn67_rredes_all();
//    $include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $texto1_prod = $_POST['texto1_prod'];
    $texto2_prod = $_POST['texto2_prod'];
    $texto3_prod = $_POST['texto3_prod'];
    $cuenta = $fn67->fn67_uredes_xtexto($texto1_prod, $texto2_prod,$texto3_prod,$id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn67->fn67_rredes_all();
    $include = 1;
    
}

if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    $idrol = $_POST['dato_2'];
    $cuenta = $fn67->fn67_uredes_xrol($id, $idrol);
    $include = 1;
}

if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn67->fn67_uredes_xest($id, $estado);
    $tabla = $fn67->fn67_rredes_all();
    $include = 1;
}

//INCLUDE

if ($include == 1) {
    $tabla = $fn67->fn67_rredes_all();
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>URL</th>
                <th>Icono</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_redes'];
                $id = $menu['id_redes'];
                $tipo=$menu['tipo_redes'];
                $estado = $fn67->fn67_estado_xid($st);
                ?>
                <tr>
                    <td>
                        <?php if ($tipo==1){ ?>
                        <label >FACEBOOK</label>
                        <?php }else if ($tipo==2){ ?>
                        <label>X (Twiter)</label>
                         <?php }else if ($tipo==3){ ?>
                        <label >INSTAGRAM</label>
                        <?php }else if ($tipo==4){ ?>
                        <label >YOUTUBE</label>
                        <?php }else if ($tipo==5){ ?>
                        <label >TIKTOK</label>
                        <?php }else if ($tipo==6){ ?>
                        <label >LINKEDIN</label>
                        <?php }?>
                    </td>
                    <td> <?php echo ($menu['url_redes']) ?> </td>
                    <td>
                        <?php echo ($menu['icono']) ?>
                    </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn67_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn67_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="d-flex">
                            <button onclick="md67_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <!--<button onclick="md67_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>-->
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

