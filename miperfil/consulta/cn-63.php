<?php
require '../controlador/conexion.php';
require '../funciones/fn-21.php';
require '../funciones/fn-63.php';
require '../funciones/fn-alert.php';
require '../funciones/fn-91.php';
require '../funciones/fn-34.php';
$fn21 = new Fn_21();
$fn63 = new Fn_63();
$fn91 = new Fn_91();
$fn34 = new Fn_34();
$fnalert = new Fn_alert();
$opc_cn = $_POST['dato_0'];

//OPC
$fechactual=date('Y-m-d');
if ($opc_cn == -1) {
    $tabla = $fn63->fn63_rproducto_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_prod = ($_POST['nombre_prod']);
    $descripcion_prod = ($_POST['descripcion_prod']);
    $tipo_prod = 0;
    $estado = 0;
    $cuenta = $fn63->fn63_cproducto_xdata($nombre_prod, $descripcion_prod, $tipo_prod, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn63->fn63_rproducto_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $nombre_prod = ($_POST['nombre_prod']);
    $descripcion_prod = ($_POST['descripcion_prod']);
    $cuenta = $fn63->fn63_uproducto_x($nombre_prod, $descripcion_prod, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn63->fn63_rproducto_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn63->fn63_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn63->fn63_uproducto_xest($id, $estado);
    if ($cuenta == 0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
//    $tabla = $fn63->fn63_rproducto_all();
//    $include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $texto1_prod = ($_POST['texto1_prod']);
    $texto2_prod = ($_POST['texto2_prod']);
    $texto3_prod = ($_POST['texto3_prod']);
    $cuenta = $fn63->fn63_uproducto_xtexto($texto1_prod, $texto2_prod, $texto3_prod, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn63->fn63_rproducto_all();
    $include = 1;
}

if ($opc_cn == 6) {
////Guarda en la tabla repositorio los datos de la imagen
    $nombre_rep = ($_POST['nombre_rep']);
    $estado = 1;
    $tipo_rep = 1;
    $fecha_rep = date('Y-m-d');
    $fileTmpPath = $_FILES['url_rep']['tmp_name'];
    $fileName = $_FILES['url_rep']['name'];
    $fileSize = $_FILES['url_rep']['size'];
    $fileType = $_FILES['url_rep']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../assets/images/';
    $newFileName = $fileNameCmps[0] . '' . $fechactual . '.' . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo = $fileNameCmps[0];
    $url_repositorio = $newFileName;
    $qImg = $_POST['dato_1'];
    if ($fileSize < 2000000 && ($fileName != null || $fileName != "")) {
        if ($tipo_rep == 1 && ($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "webp" )) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            ////Guarda en la tabla slider la la direccion de la imagen    


            $id_prod = $_POST['dato_2'];
            $urlimagen = $url_repositorio;
            if ($qImg == 1) {
                $imagen = "imagen1_prod";
                $cuenta = $fn63->fn63_uproducto_xImg($imagen, $urlimagen, $id_prod);
                echo $fnalert->fnalert_edit($cuenta);
            } elseif ($qImg == 2) {
                $imagen = "imagen2_prod";
                $cuenta = $fn63->fn63_uproducto_xImg($imagen, $urlimagen, $id_prod);
                echo $fnalert->fnalert_edit($cuenta);
            }
        }
    } else {
        echo $fnalert->fnalert_file(2);
    }
    if ($qImg == 1) {
        ?>
        <img src="../assets/images/<?php echo $url_repositorio ?>" width="200px" />
    <?php } elseif ($qImg == 2) { ?>
        <img src="../assets/images/<?php echo $url_repositorio ?>" width="200px" />
        <?php
    }
//    $tabla = $fn63->fn63_rproducto_all();
//    $include = 1;
}
if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $valor = $_POST['dato_2'];
    $cuenta = $fn63->fn63_utipoproducto_x($valor, $id);
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

if ($opc_cn == 8) {
    $id = $_POST['dato_1'];
    $id_lineacred = $_POST['dato_2'];
    $cuenta = $fn63->fn63_ulineaproducto_x($id_lineacred, $id);
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

if ($opc_cn == 9) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn63->fn63_uproducto_xest($id, $estado);

    $tabla = $fn63->fn63_rproducto_all();
    $include = 1;
}

if ($opc_cn == 10) {
    $id_prod = $_POST['dato_1'];
    $estado = 0;
    $tasanominal_tasa = 0;
    $valmin_tasa = 0;
    $valmax_tasa = 0;
    $min_tasa = 0;
    $max_tasa = 0;
    $cuenta = $fn21->fn21_ctasaproducto_xdata($id_prod, $estado, $tasanominal_tasa, $valmin_tasa, $valmax_tasa, $min_tasa, $max_tasa);
    $tabla = $fn21->fn21_rtasas_allx($id_prod);
    $include = 2;
}

if ($opc_cn == 11) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $id_prod = $_POST['dato_3'];
    $cuenta = $fn21->fn21_utasa_xest($id, $estado);
    $tabla = $fn21->fn21_rtasas_allx($id_prod);
    $include = 2;
}

if ($opc_cn == 12) {
    $id = ($_POST['dato_1']);
    $tasanominal_tasa = ($_POST['dato_2']);
    $valmin_tasa = ($_POST['dato_3']);
    $valmax_tasa = ($_POST['dato_4']);
    $min_tasa = ($_POST['dato_5']);
    $max_tasa = ($_POST['dato_6']);
    $id_prod = ($_POST['dato_7']);
    $cuenta = $fn21->fn21_utasaproducto_x($tasanominal_tasa, $valmin_tasa, $valmax_tasa, $min_tasa, $max_tasa, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn21->fn21_rtasas_allx($id_prod);
    $include = 2;
}
//INCLUDE
if ($opc_cn == 13) {
    $id = ($_POST['dato_2']);
    $valor = ($_POST['dato_1']);
    $cuenta = $fn63->fn63_ucantproduc_x($valor, $id);
    if ($cuenta == 1) {
        echo '<i class="fa fa-check-circle" style="color:green;"></i>';
    } else {
        echo '<i class="fa fa-times" style="color:red;"></i>';
    }
}
if ($opc_cn == 14) {
////Guarda en la tabla repositorio los datos de la imagen
    $nombre_rep = ($_POST['nombre_rep']);
    $estado = 1;
    $tipo_rep = 1;
    $fecha_rep = date('Y-m-d');
    $fileTmpPath = $_FILES['url_rep']['tmp_name'];
    $fileName = $_FILES['url_rep']['name'];
    $fileSize = $_FILES['url_rep']['size'];
    $fileType = $_FILES['url_rep']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../assets/images/';
    $newFileName = $fileNameCmps[0] . '' . $fechactual . '.' . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo = $fileNameCmps[0];
    $url_repositorio = $newFileName;
    $qImg = $_POST['dato_1'];
    if ($fileSize < 2000000 && ($fileName != null || $fileName != "")) {
        if ($tipo_rep == 1 && ($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "webp" )) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            ////Guarda en la tabla slider la la direccion de la imagen    


            $id_prod = $_POST['dato_2'];
            $urlimagen = $url_repositorio;
            if ($qImg == 1) {
                $imagen = "imagen2_prod";
                $cuenta = $fn63->fn63_uproducto_xImg($imagen, $urlimagen, $id_prod);
                echo $fnalert->fnalert_edit($cuenta);
            } elseif ($qImg == 2) {
                $imagen = "imagen2_prod";
                $cuenta = $fn63->fn63_uproducto_xImg($imagen, $urlimagen, $id_prod);
                echo $fnalert->fnalert_edit($cuenta);
            }
        }
    } else {
        echo $fnalert->fnalert_file(2);
    }
    if ($qImg == 1) {
        ?>
        <img src="../assets/images/<?php echo $url_repositorio ?>" width="200px" />
    <?php } elseif ($qImg == 2) { ?>
        <img src="../assets/images/<?php echo $url_repositorio ?>" width="200px" />
        <?php
    }
//    $tabla = $fn63->fn63_rproducto_all();
//    $include = 1;
}
if ($opc_cn == 15) {
    $secuencial_empresa = 1;
    $json_data = $fn63->fn63_wscredito_all($secuencial_empresa);
    $count_ingreso = 0;
    $count_existe = 0;
    $count_errorexiste = 0;
    for ($i = 0; $i < count($json_data['tiposPrestamo']); $i++) {
        //verificar si existe el credito
        $codERP_prod = $json_data['tiposPrestamo'][$i]['codigo'];
        $cuenta = $fn63->fn63_rproducto_xcodERP($codERP_prod);
        if (count($cuenta) > 0) {
            $count_existe = $count_existe + 1;
        } else {
            $nombre_credito = $json_data['tiposPrestamo'][$i]['nombre'];
            $alias_credito = $json_data['tiposPrestamo'][$i]['alias'];
            $tipo_prod = 1;
            $estado_prod = 0;
            //ingresar credito
            $cuentaing = $fn63->fn63_cproducto_xdataERP($nombre_credito, $alias_credito, $tipo_prod, $codERP_prod, $estado_prod);
            //contar credito ingresado
            if ($cuentaing > 0) {
                $count_ingreso = $count_ingreso + 1;
            } else {
                $count_errorexiste = $count_errorexiste + 1;
            }
        }
    }
    //listado de inversiones
    $json_datainv = $fn63->fn63_wsinversiones_all($secuencial_empresa);
    $count_ingresoinv = 0;
    $count_existeinv = 0;
    $count_errorexisteinv = 0;
    for ($i = 0; $i < count($json_datainv['tiposDeposito']); $i++) {
        //verificar si existe el credito
        $codERP_prod = $json_datainv['tiposDeposito'][$i]['codigo'];
        $cuenta = $fn63->fn63_rproducto_xcodERP($codERP_prod);
        if (count($cuenta) > 0) {
            $count_existeinv = $count_existeinv + 1;
        } else {
            $nombre_credito = $json_datainv['tiposDeposito'][$i]['nombre'];
            $alias_credito = $json_datainv['tiposDeposito'][$i]['alias'];
            $tipo_prod = 1;
            $estado_prod = 0;
            //ingresar credito
            $cuentaing = $fn63->fn63_cproducto_xdataERP($nombre_credito, $alias_credito, $tipo_prod, $codERP_prod, $estado_prod);
            //contar credito ingresado
            if ($cuentaing > 0) {
                $count_ingresoinv = $count_ingresoinv + 1;
            } else {
                $count_errorexisteinv = $count_errorexisteinv + 1;
            }
        }
    }
    //inversiones

    echo '<br>CRÉDITOS<hr>';
    echo 'Productos ya existentes: ' . $count_existe . '<br>';
    echo '<b> Productos ingresados: ' . $count_ingreso . '</b><br>';
    echo 'Productos con error en el ingreso: ' . $count_errorexiste . '<br>';
    echo '<br>INVERSIONES<hr>';
    echo 'Productos ya existentes: ' . $count_existeinv . '<br>';
    echo '<b> Productos ingresados: ' . $count_ingresoinv . '</b><br>';
    echo 'Productos con error en el ingreso: ' . $count_errorexisteinv . '<br>';
}
if ($include == 1) {
    ?>
    <div id="cargando"  style="display: none" >
        <img class="loader_animation" src="../assets/loader.gif"  /><br>
    </div>    
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Orden</th>
                <th>Nombre</th>
                <th>Imágen</th>
                <th>Banner</th>
                <th>Linea Credito</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_prod'];
                $id = $menu['id_prod'];
                $tipo = $menu['tipo_prod'];
                $estado = $fn63->fn63_estado_xid($st);
                $tabla2 = $fn34->fn34_rlinea_credito_alles();
                $dettipo = $fn63->fn63_tipo_xid($tipo);
                ?>
                <tr>
                    <td><input onkeyup="cn63_f13(13, this.value,<?php echo ($menu['id_prod']) ?>, event)" type="text" value="<?php echo ($menu['posicion_prod']) ?>" style="width: 50px;"><div id="i_orden<?php echo ($menu['id_prod']) ?>"></div></td>
                    <td> <?php echo ($menu['nombre_prod']) ?></td>
                    <td>
                        <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                        <button onclick='md63_d6(6, 1, 1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                    </td>
                                        <td>
                                            <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                                            <button onclick='md63_d6(8, 2, 1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        </td>
       
                    <td>

                        <select class="form-control" onchange="cn63_f8(8,<?php echo $id ?>, this.value)">
                            <?php if ($menu['id_lineacred'] == "" || $menu['id_lineacred'] == null) { ?>
                                <option  value="0" >Ninguno</option>
                            <?php } ?>
                            <?php while ($menu2 = $tabla2->fetch_assoc()) { ?>
                                <option  value="<?php echo $menu2['id_lineacred'] ?>" <?php
                                if ($menu2['id_lineacred'] == $menu['id_lineacred']) {
                                    echo("selected");
                                }
                                ?>><?php echo ($menu2['nombre_lineacred']) ?></option>
                                     <?php } ?>
                        </select>
                        <div id="div_result2<?php echo $id ?>">
                        </div>
                    </td>
                    <td>
                        <select class="form-control" onchange="cn63_f7(7,<?php echo $id ?>, this.value)">
                            <option <?php if ($tipo == 0) echo("selected"); ?> value="0">Ninguno</option> 
                            <option <?php if ($tipo == 1) echo("selected"); ?> value="1">Crédito</option> 
                            <option <?php if ($tipo == 2) echo("selected"); ?> value="2">Inversión</option>  
                            <option <?php if ($tipo == 3) echo("selected"); ?> value="3">Ahorro</option>  
                            <option <?php if ($tipo == 4) echo("selected"); ?> value="4">Cuentas</option>  
                        </select>
                        <div id="selec<?php echo $id ?>">

                        </div>
                    </td>
                    <td>

                        <div class="custom-control custom-checkbox mb-3">
                            <?php
                            if ($st == 0) {
                                ?>
                                <input value="1" name="estado" onchange="cn63_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                <?php
                            } else if ($st == 1) {
                                ?>
                                <input value="0" name="estado" onchange="cn63_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                            <button onclick="md63_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md63_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                            <button onclick="md63_d5(5,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-book"></i></button>
                            <button onclick="md63_d7(7,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-list"></i></button>
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
                <th>Tasa nominal</th>
                <th>Monto min</th>
                <th>Monto max</th>
                <th>Nro. cuotas min</th>
                <th>Nro. cuotas max</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_tasa'];
                $id = $menu['id_tasa'];
                $estado = $fn63->fn63_estado_xid($st);
                ?>
                <tr>
                    <td> <input type="text" id="tasanominal_tasa<?php echo $id ?>"  class="form-control" value="<?php echo ($menu['tasanominal_tasa']) ?>"></td>
                    <td> <input type="text" id="valmin_tasa<?php echo $id ?>" class="form-control" value="<?php echo ($menu['valmin_tasa']) ?>"></td>
                    <td> <input type="text" id="valmax_tasa<?php echo $id ?>" class="form-control" value="<?php echo ($menu['valmax_tasa']) ?>"></td>
                    <td> <input type="text" id="min_tasa<?php echo $id ?>" class="form-control" value="<?php echo ($menu['min_tasa']) ?>"></td>
                    <td> <input type="text" id="max_tasa<?php echo $id ?>" class="form-control" value="<?php echo ($menu['max_tasa']) ?>"> </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn63_f11(11, <?php echo $id ?>, this.value,<?php echo $id_prod ?>)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn63_f11(11, <?php echo $id ?>, this.value,<?php echo $id_prod ?>)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="cn63_f12(12,<?php echo $id ?>,<?php echo $id_prod ?>)"  class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-save"></i></button>


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