<?php
require '../controlador/conexion.php';
require '../funciones/fn-21.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn21 = new Fn_21();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn21->fn21_rusuario_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_tasa = ($_POST['nombre_tasa']);
    $tasanominal_tasa = ($_POST['tasanominal_tasa']);
    $efectivaanual_tasa = ($_POST['efectivaanual_tasa']);
    $efectivofin_tasa = ($_POST['efectivofin_tasa']);
    $acumulacion_tasa = ($_POST['acumulacion_tasa']);
    $interesanual_tasa = ($_POST['interesanual_tasa']);
    $valmin_tasa = ($_POST['valmin_tasa']);
    $valmax_tasa = ($_POST['valmax_tasa']);
    $min_tasa = ($_POST['min_tasa']);
    $max_tasa = ($_POST['max_tasa']);
    $desc_tasa = ($_POST['desc_tasa']);
    $estado = 0;
    $cuenta = $fn21->fn21_ctasa_xdata($nombre_tasa, $tasanominal_tasa,$efectivaanual_tasa,$efectivofin_tasa,$acumulacion_tasa,$interesanual_tasa,$valmin_tasa,$valmax_tasa,$min_tasa,$max_tasa,$desc_tasa, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn21->fn21_rtasa_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $nombre_tasa = ($_POST['nombre_tasa']);
    $tasanominal_tasa = ($_POST['tasanominal_tasa']);
    $efectivaanual_tasa = ($_POST['efectivaanual_tasa']);
    $efectivofin_tasa = ($_POST['efectivofin_tasa']);
    $acumulacion_tasa = ($_POST['acumulacion_tasa']);
    $interesanual_tasa = ($_POST['interesanual_tasa']);
    $valmin_tasa = ($_POST['valmin_tasa']);
    $valmax_tasa = ($_POST['valmax_tasa']);
    $min_tasa = ($_POST['min_tasa']);
    $max_tasa = ($_POST['max_tasa']);
    $desc_tasa = ($_POST['desc_tasa']);
    $cuenta = $fn21->fn21_utasa_x($nombre_tasa, $tasanominal_tasa,$efectivaanual_tasa,$efectivofin_tasa,$acumulacion_tasa,$interesanual_tasa,$valmin_tasa,$valmax_tasa,$min_tasa,$max_tasa,$desc_tasa, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn21->fn21_rtasa_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn21->fn21_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn21->fn21_utasa_xest($id, $estado);
    if ($cuenta==0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
    //$tabla = $fn21->fn21_rtasa_all();
    //$include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn21->fn21_utasa_xest($id, $estado);
    $tabla = $fn21->fn21_rtasa_all();
    $include = 1;
}

if ($opc_cn == 8) {
   $id = $_POST['dato_1']; 
   $frecuencia_pago = $_POST['dato_2']; 
   $cuenta = $fn21->fn21_utasa_xfrecuencia_pago($frecuencia_pago, $id);
   if ($cuenta==1) {
        ?>
        <label><i class="fa fa-check"></i></label>
        <?php
    } else {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
}

//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Frecuancia</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_tasa'];
                $id = $menu['id_tasa'];
                $estado = $fn21->fn21_estado_xid($st);
                $tabla2 = $fn21->fn21_rfrecuencias_alles();
                ?>
                <tr>
                    <td> <?php echo utf8_encode($menu['id_tasa']) ?></td>
                    <td> 
                        <select class="form-control" onchange="cn21_f7(8,<?php echo $id ?>, this.value)">
                            <?php  if ($menu['id_frecuencia'] == 0 ) { ?>
                            <option  value="0" >Ninguno</option>
                            <?php } ?>
                            <?php  while ($menu2 = $tabla2->fetch_assoc()) { ?>
                            <option  value="<?php echo $menu2['id_frecuencia'] ?>" <?php if( $menu2['id_frecpago'] == $menu['id_frecuencia']){echo("selected");}?>><?php echo utf8_encode($menu2['nombre_frecpago']) ?></option>
                            <?php } ?>
                        </select 
                        <div id="div_result2<?php echo $id ?>">
                        </div>
                    </td>
                    <td>
                        
                            <div class="custom-conttasa custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn21_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-conttasa-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-conttasa-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn21_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-conttasa-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-conttasa-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                    <?php
                                }
                                ?>
                            </div>
                        <div id="fill_<?php echo $id ?>">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md21_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md21_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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
