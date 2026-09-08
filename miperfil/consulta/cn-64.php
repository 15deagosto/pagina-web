<?php
require '../controlador/conexion.php';
require '../funciones/fn-64.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn64 = new Fn_64();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn64->fn64_rpersonal_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_per = ($_POST['nombre_per']);
    $apellido_per = ($_POST['apellido_per']);
    $cargo_per = ($_POST['cargo_per']);
    $titulo_per = ($_POST['titulo_per']);
    $telefono1_per = ($_POST['telefono1_per']);
    $tipo_per = 0;
    $estado = 1;
    $cuenta = $fn64->fn64_cpersonal_xdata($nombre_per, $apellido_per, $cargo_per, $titulo_per, $telefono1_per, $tipo_per, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn64->fn64_rpersonal_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $nombre_per = ($_POST['nombre_per']);
    $apellido_per = ($_POST['apellido_per']);
    $cargo_per = ($_POST['cargo_per']);
    $titulo_per = ($_POST['titulo_per']);
    $telefono1_per = ($_POST['telefono1_per']);
    $tipo_per = ($_POST['tipo_per']);
    $cuenta = $fn64->fn64_upersonal_x($nombre_per, $apellido_per, $cargo_per, $titulo_per, $telefono1_per, $tipo_per, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn64->fn64_rpersonal_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn64->fn64_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn64->fn64_upersonal_xest($id, $estado);
    if($cuenta==1){
        $tupla = $fn64->fn64_rpersonal_x($id);
        $st=$tupla[0]["estado_per"];
        if ($st == 0) {
            ?>
            <input value="1" name="estado" onchange="cn64_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
            <?php
        } else if ($st == 1) {
            ?>
            <input value="0" name="estado" onchange="cn64_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
            <?php
        }
        
    }else{
        $tupla = $fn64->fn64_rpersonal_x($id);
        $st=$tupla[0]["estado_per"];
        if ($st == 0) {
            ?>
            <input value="1" name="estado" onchange="cn64_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
            <?php
        } else if ($st == 1) {
            ?>
            <input value="0" name="estado" onchange="cn64_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
            <?php
        }
    }
    //$include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $texto1_prod = $_POST['texto1_prod'];
    $texto2_prod = $_POST['texto2_prod'];
    $texto3_prod = $_POST['texto3_prod'];
    $cuenta = $fn64->fn64_upersonal_xtexto($texto1_prod, $texto2_prod,$texto3_prod,$id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn64->fn64_rpersonal_all();
    $include = 1;
    
}

if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $cuenta = $fn64->fn64_upersonal_xtipo($id, $tipo);
    if($cuenta==1){
        ?><i class='fa fa-check fa-2'><?php
    }else{
        ?><i class='fa fa-exclamation-circle fa-2'><?php
    }
}
if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn64->fn64_upersonal_xest($id, $estado);
    echo $fnalert->fnalert_delete($cuenta);
    $include = 1;
}
//INCLUDE

if ($include == 1) {
    $tabla = $fn64->fn64_rpersonal_all();
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Telefono</th>
                <th>Estado</th>
                <th>Tipo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_per'];
                $id = $menu['id_per'];
                $tipo=$menu['tipo_per'];
                $estado = $fn64->fn64_estado_xid($st);
                if($tipo==1){
                    $ntipo="GOBIERNO COOPERATIVO";
                }elseif ($tipo==2) {
                     $ntipo="STAF EJECUTIVO";
                }elseif ($tipo==0) {
                    $ntipo="NINGUNO";
                }
                ?>
                <tr>
                    <td> <?php echo ($menu['titulo_per'].' '.$menu['nombre_per'].' '.$menu['apellido_per']) ?></td>
                    <td> <?php echo ($menu['cargo_per']) ?> </td>
                    <td> <?php echo ($menu['telefono1_per']) ?></td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3" id="st_<?php echo $id ?>">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn64_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn64_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                    <td>
                        <select  onchange="cn64_f6(6,<?php echo $id ?>,this.value)">
                            <option value="<?php echo $tipo ?>"><?php echo $ntipo ?></option>
                            <option value="1">GOBIERNO COOPERATIVO</option>
                            <option value="2">STAF EJECUTIVO</option>
                        </select>
                        <div id="select<?php echo $id ?>"> 
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md64_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md64_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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

