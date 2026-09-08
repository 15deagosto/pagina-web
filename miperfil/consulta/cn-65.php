<?php
require '../controlador/conexion.php';
require '../funciones/fn-65.php';
require '../funciones/fn-91.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn65 = new Fn_65();
$fn91 = new Fn_91();
$fnalert = new Fn_alert();
$fecha = date('Y-m-d');
//OPC

if ($opc_cn == -1) {
    $tabla = $fn65->fn65_rdocumentos_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $titulo_doc = ($_POST['titulo_doc']);
    $descripcion_doc = ($_POST['descripcion_doc']);
    $tipo1_doc = 0;
    $tipo2_doc = ($_POST['tipo2_doc']);
    $tipo3_doc = 0;
    $url_doc = ($_POST['url_doc']);
    $fecha_doc = date('Y-m-d');
    $estado = 1;
    if ($tipo2_doc == 1) {
        $url_doc = "";
    }
    $cuenta = $fn65->fn65_cdocumentos_xdata($titulo_doc, $descripcion_doc, $tipo1_doc, $tipo2_doc, $tipo3_doc, $url_doc, $fecha_doc, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn65->fn65_rdocumentos_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $titulo_doc = ($_POST['titulo_doc']);
    $descripcion_doc = ($_POST['descripcion_doc']);
    $tipo2_doc = ($_POST['tipo2_doc']);
    $url_doc = ($_POST['url_doc']);
    $cuenta = $fn65->fn65_udocumentos_x($titulo_doc, $descripcion_doc, $tipo2_doc, $url_doc, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn65->fn65_rdocumentos_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn65->fn65_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn65->fn65_udocumentos_xest($id, $estado);
    if ($cuenta == 0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
//    $tabla = $fn65->fn65_rdocumentos_all();
//    $include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $texto1_prod = $_POST['texto1_prod'];
    $texto2_prod = $_POST['texto2_prod'];
    $texto3_prod = $_POST['texto3_prod'];
    $cuenta = $fn65->fn65_udocumentos_xtexto($texto1_prod, $texto2_prod, $texto3_prod, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn65->fn65_rdocumentos_all();
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
    $uploadFileDir = '../../documentos/';
    $aleatorio = rand(5, 10000);
    $newFileName = 'doc' . $fecha . '-' . $aleatorio . '.' . $fileExtension;
    $dest_path = trim($uploadFileDir) . $newFileName;
    $nuevoArchivo = $fileNameCmps[0];
    $url_repositorio = $newFileName;
//    print_r($fileSize);
    if ($fileSize < 11000000 && ($fileName != null || $fileName != "")) {
        if ($tipo_rep == 1 && ($fileExtension == "jpg" || $fileExtension == "png" )) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            ////Guarda en la tabla slider la la direccion de la imagen    
            $qImg = $_POST['dato_1'];
            $id_doc = $_POST['dato_2'];
            $urlimagen = $url_repositorio;
            if ($qImg == 1) {
                $imagen = "imagen_doc";
                $cuenta = $fn65->fn65_udocumentos_xImg($imagen, $urlimagen, $id_doc);
            }
            echo "" . $qImg;
            echo $fnalert->fnalert_file($cuenta);
        } else if ($tipo_rep == 1 && ($fileExtension == "mp4" || $fileExtension == "mov" || $fileExtension == "avi" || $fileExtension == "mpeg-2" || $fileExtension == "mpeg" )) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            $qImg = $_POST['dato_1'];
            $id_doc = $_POST['dato_2'];
            $urlimagen = $url_repositorio;
            if ($qImg == 3) {
                $imagen = "url_doc";
                $cuenta = $fn65->fn65_udocumentos_xImg($imagen, $urlimagen, $id_doc);
            }
            echo "A" . $qImg;
            echo $fnalert->fnalert_file($cuenta);
        } else if ($tipo_rep == 1 && ($fileExtension == "pdf" )) {
//            move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            } else {
                echo "ERROR" . $_FILES["url_rep"]["error"];
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            $qImg = $_POST['dato_1'];
            $id_doc = $_POST['dato_2'];
            $urlimagen = $url_repositorio;
            if ($qImg == 3) {
                $imagen = "url_doc";
                $cuenta = $fn65->fn65_udocumentos_xImg($imagen, $urlimagen, $id_doc);
            }
            echo "B" . $qImg;
            echo $fnalert->fnalert_file($cuenta);
        } else if ($tipo_rep == 1 && ($fileExtension == "xls" )) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            $qImg = $_POST['dato_1'];
            $id_doc = $_POST['dato_2'];
            $urlimagen = $url_repositorio;
            if ($qImg == 3) {
                $imagen = "url_doc";
                $cuenta = $fn65->fn65_udocumentos_xImg($imagen, $urlimagen, $id_doc);
            }
            echo "C" . $qImg;
            echo $fnalert->fnalert_file($cuenta);
        } elseif ($tipo_rep == 1 && ($fileExtension == "docx" || $fileExtension == "doc" )) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            $qImg = $_POST['dato_1'];
            $id_doc = $_POST['dato_2'];
            $urlimagen = $url_repositorio;
            if ($qImg == 3) {
                $imagen = "url_doc";
                $cuenta = $fn65->fn65_udocumentos_xImg($imagen, $urlimagen, $id_doc);
            }
            echo "D" . $qImg;
            echo $fnalert->fnalert_file($cuenta);
        }
    } else {
        echo $fnalert->fnalert_file(2);
    }

//    $tabla = $fn65->fn65_rdocumentos_all();
//    $include = 1;
}

if ($opc_cn == 7) {
    $qtipo = $_POST['dato_1'];
    $id = $_POST['dato_2'];
    $tipo = $_POST['dato_3'];

    if ($qtipo == 1) {
        $stipo = "tipo1_doc";
        $cuenta = $fn65->fn65_udocumentos_xtipo($stipo, $id, $tipo);
        $include = 1;
    } elseif ($qtipo == 3) {
        $stipo = "tipo3_doc";
        $cuenta = $fn65->fn65_udocumentos_xtipo($stipo, $id, $tipo);
        if ($cuenta == 1) {
            ?><i class='fa fa-check fa-2'></i><?php
            } else {
                ?>
            <i class='fa fa-exclamation-circle fa-2'></i><?php
        }
    }
}

if ($opc_cn == 8) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn65->fn65_udocumentos_xest($id, $estado);
    $tabla = $fn65->fn65_rdocumentos_all();
    $include = 1;
}
if ($opc_cn == 100) {
    $tabla = $fn65->fn65_rdocumentos_all();
    $include = 1;
}

//INCLUDE

if ($include == 1) {
    $tabla = $fn65->fn65_rdocumentos_all();
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Título</th>
                <th>Sección</th>
                <th>Archivo</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_doc'];
                $id = $menu['id_doc'];
                $estado = $fn65->fn65_estado_xid($st);
                $fecha = date("d-m-Y", strtotime($value['fecha_doc']));
                $tipo3 = $menu['tipo3_doc'];
                if ($tipo3 == 1) {
                    $ntipo3 = "Instructivos";
                } elseif ($tipo3 == 2) {
                    $ntipo3 = "Indicadores";
                } elseif ($tipo3 == 3) {
                    $ntipo3 = "Gobernanza";
                } elseif ($tipo3 == 4) {
                    $ntipo3 = "Información Financiera";
                } elseif ($tipo3 == 5) {
                    $ntipo3 = "Cosede";
                } elseif ($tipo3 == 6) {
                    $ntipo3 = "Organigrama";
                } elseif ($tipo3 == 7) {
                    $ntipo3 = "Costos y Tarifarios por Servicio";
                } elseif ($tipo3 == 8) {
                    $ntipo3 = "Protección de datos";
                }
                $tipo1 = $menu['tipo1_doc']; //1= IMAGEN , 2 = VIDEO, 3 = PDF, 4 = EXCEL
                if ($tipo1 == 1) {
                    $ntipo1 = "Imagen";
                } elseif ($tipo1 == 2) {
                    $ntipo1 = "Video";
                } elseif ($tipo1 == 3) {
                    $ntipo1 = "PDF";
                } elseif ($tipo1 == 4) {
                    $ntipo1 = "Excel";
                } elseif ($tipo1 == 5) {
                    $ntipo1 = "Word";
                }
                $tipo2 = $menu['tipo2_doc']; //1= Interno , 2 = Externo
                ?>
                <tr>
                    <td> <?php echo ($menu['titulo_doc']) ?></td>
                    <td> 
                        <select  name="tipo3" onchange="cn65_f8(7, 3,<?php echo $id ?>, this.value)">
                            <option value="<?php echo $tipo3 ?>"><?php echo $ntipo3 ?></option>
                            <option value="1">Instructivos</option>
                            <option value="2">Indicadores</option>
                            <option value="3">Gobernanza</option>
                            <option value="4">Información Financiera</option>
                            <option value="5">Cosede</option>
                            <option value="6">Organigrama</option>
                            <option value="7">Costos y Tarifarios por Servicio</option>
                            <option value="8">Protección de datos</option>
                        </select>
                        <div id="select<?php echo $id ?>"> 
                        </div>
                    </td>
                    <td> 
                        <select  name="tipo1" onchange="cn65_f9(7, 1,<?php echo $id ?>, this.value)">
                            <option value="<?php echo $tipo3 ?>"><?php echo $ntipo1 ?></option>
                            <option value="1">Imagen</option>
                            <option value="2">Video</option>
                            <option value="3">PDF</option>
                            <option value="4">Excel</option>
                            <option value="5">Word</option>
                        </select>
                    </td>
            <div id="select2<?php echo $id ?>"> 
            </div>
            <td> 
                <?php
                if ($tipo1 == 1) {
                    if ($tipo2 == 1) {
                        ?>
                        <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                        <button onclick='md65_f7(6, 1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                    <?php } elseif ($tipo2 == 2) { ?>
                        <img src="<?php echo ($menu['imagen_doc']) ?> " width="70px"/>
                        <?php
                    }
                } else {
                    if ($tipo2 == 1) {
                        ?>
                        <a href="../documentos/<?php echo ($menu['url_doc']) ?>"><?php echo ($menu['url_doc']) ?></a>
                        <button onclick='md65_f7(6, 3,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                    <?php } elseif ($tipo2 == 2) { ?>
                        <a href="<?php echo ($menu['url_doc']) ?>"></a>
                        <?php
                    }
                }
                ?>

            </td>
            <td>

                <div class="custom-control custom-checkbox mb-3">
                    <?php
                    if ($st == 0) {
                        ?>
                        <input value="1" name="estado" onchange="cn65_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                        <?php
                    } else if ($st == 1) {
                        ?>
                        <input value="0" name="estado" onchange="cn65_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                    <button onclick="md65_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                    <button onclick="md65_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>

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

