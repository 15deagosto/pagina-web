<?php
require '../controlador/conexion.php';
require '../funciones/fn-69.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn69 = new Fn_69();
$fnalert = new Fn_alert();

//OPC
if ($opc_cn == -1) {
    $tabla = $fn69->fn69_rusuario_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_menupag = ($_POST['nombre_menupag']);
    $icono_menupag = $_POST['icono_menupag'];
    $cuenta = $fn69->fn69_cmenupag_xdata($nombre_menupag, $icono_menupag);
    echo $fnalert->fnalert_create($cuenta);
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $nombre_menupag = ($_POST['nombre_menupag']);
    $icono_menupag = $_POST['icono_menupag'];
    $cuenta = $fn69->fn69_umenupag_x($nombre_menupag, $icono_menupag, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $include = 1;
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $st = $_POST['dato_2'];
    $cuenta = $fn69->fn69_umenupag_xest($id, $st);
    if ($cuenta == 0) {
        ?>
        <div class="custom-control custom-checkbox mb-3">
            <?php
            if($st == 0){
            ?>
            <input value="1" name="estado" onchange="cn69_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
            <?php
            }else if($st == 1){
            ?>
            <input value="0" name="estado" onchange="cn69_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
            if($st == 0){
            ?>
            <input value="1" name="estado" onchange="cn69_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
            <?php
            }else if($st == 1){
            ?>
            <input value="0" name="estado" onchange="cn69_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
    $cuenta = $fn69->fn69_umenupag_xest($id, $estado);
    $include = 1;
}

if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $cuenta = $fn69->fn69_umenupag_xtip($id, $tipo);
    
    if ($cuenta == 1) {
        $cuenta = $fn69->fn69_umenupag_submen_xtip($id, $tipo);
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
    $idpadre_menupag = ($_POST['dato_1']);
    $nombre_menupag = ($_POST['nombre_menupag']);
    $tipo2_menupag = ($_POST['tipo2_menupag']);
    $url_menupag = $_POST['url_menupag'];
    $target_menupag = $_POST['target_menupag'];
    $desc_menupag = ($_POST['desc_menupag']);
    $cuenta = $fn69->fn69_cmenupag2_xdata($nombre_menupag, $url_menupag,$target_menupag,$idpadre_menupag,$desc_menupag,$tipo2_menupag);
    echo $fnalert->fnalert_create2($cuenta);
    if($tipo2_menupag==1){
        $cuenta2 = $fn69->fn69_cpaginasextra_xdata($titulo_paginaex, 0, $cuenta);
        echo $fnalert->fnalert_createpag($cuenta2);
    }
    $include = 1;
}
if ($opc_cn == 8) {
    $id = ($_POST['dato_1']);
    $nombre_menupag = ($_POST['nombre_menupag']);
    $tipo2_menupag = ($_POST['tipo2_menupag']);
    $url_menupag = ($_POST['url_menupag']);
    $target_menupag = $_POST['target_menupag'];
    $desc_menupag = ($_POST['desc_menupag']);
    $cuenta = $fn69->fn69_umenupag2_x($nombre_menupag, $url_menupag,$target_menupag,$desc_menupag,$tipo2_menupag, $id);
    echo $fnalert->fnalert_edit($cuenta);
    if($tipo2_menupag==1){
        $verificapag = $fn69->fn69_rpaginasextra_x($id);
        if(count($verificapag)==0){
            $cuenta2 = $fn69->fn69_cpaginasextra_xdata($titulo_paginaex, 0, $cuenta);
            echo $fnalert->fnalert_createpag($cuenta2);
        } 
    }
    $include = 1;
}


//INCLUDE

if ($include == 1) {
    $tabla = $fn69->fn69_rmenupag_all();
    ?>
    <table  class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_menupag'];
                $id = $menu['id_menupag'];
                $tip = $menu['tipo_menupag'];
                $dettipo = $fn69->fn69_tipo_xid($tip);
                $subtabla = $fn69->fn69_rmenupag_xpadre($id);
            ?>
                <tr>
                    <td> <?php echo ($menu['nombre_menupag']) ?></td>

                    <td>
                        <select class="form-control" onchange="cn69_f6(6,<?php echo $id ?>, this.value)">
                            <option value="<?php echo $tip ?>"><?php echo $dettipo ?></option>
                            <option value="0">PIE DE PÁGINA</option> 
                            <option value="1">MENÚ</option>
                        </select>
                        <div id="selec<?php echo $id ?>">

                        </div>
                    </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if($st == 0){
                                ?>
                                <input value="1" name="estado" onchange="cn69_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                <?php
                                }else if($st == 1){
                                ?>
                                <input value="0" name="estado" onchange="cn69_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                <?php    
                                }
                                ?>
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md69_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md69_r005_d2(5,<?php echo $id ?>)"  data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-plus"></i></button>
                            <!--<button onclick="md69_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>-->
                        </div>												
                    </td>												
                </tr>
                <tr id="div_plus<?php echo $id ?>" <?php if($subtabla->num_rows==0){ echo 'style="display: none"' ;} ?>>
                    <td colspan="4">
                        <div id="subtable<?php echo $id ?>">
                            <table class="display" style="width: 100%">

                                <tbody>
                                    <?php

                                    while ($menus = $subtabla->fetch_assoc()) {
                                        $st = $menus['estado_menupag'];
                                        $ids = $menus['id_menupag'];
                                        $tip = $menus['tipo_menupag'];
                                        $dettipo = $fn69->fn69_tipo_xid($tip);
                                    ?>
                                        <tr>
                                            <td> <?php echo ($menus['nombre_menupag']) ?></td>

                                            <td>

                                            </td>
                                            <td style="width: 15%">
                                                <div id="fill_<?php echo $ids ?>">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <?php
                                                        if($st == 0){
                                                        ?>
                                                        <input value="1" name="estado" onchange="cn69_f4(4, <?php echo $ids ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $ids ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $ids ?>">Inactivo</label>
                                                        <?php
                                                        }else if($st == 1){
                                                        ?>
                                                        <input value="0" name="estado" onchange="cn69_f4(4, <?php echo $ids ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $ids ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $ids ?>">Activo</label>
                                                        <?php    
                                                        }
                                                        ?>
                                                    </div>

                                                </div>
                                            </td>
                                            <td style="width: 17%">
                                                <div class="d-flex">
                                                    <button onclick="md69_r006_d2(6,<?php echo $ids ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                    <button onclick="md69_d4(4,<?php echo $ids ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                                                </div>												
                                            </td>												
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>    
                    </td>
                </tr>    
            <?php
            }
            ?>
        </tbody>
    </table>
    </table>
    <?php
}