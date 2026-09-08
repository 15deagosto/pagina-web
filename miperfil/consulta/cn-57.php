<?php
require '../controlador/conexion.php';
require '../funciones/fn-57.php';
require '../funciones/fn-91.php';
require '../funciones/fn-alert.php';
require '../sesiones/abrir.php';
$opc_cn = $_POST['dato_0'];
$fn57 = new Fn_57();
$fn91 = new Fn_91();
$fnalert = new Fn_alert();

//OPC

    $fecha=date('Y-m-d');
if ($opc_cn == 1) {
    $nombre = ($_POST['nombre']);
    $desc = ($_POST['descripcion']);
    $url = ($_POST['url']);
    $imagen = "sin img";
    $estado = 0;
    $cuenta = $fn57->fn57_cslider_x($nombre, $desc, $url, $estado, $imagen);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn57->fn57_rslider_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $nombre = ($_POST['nombre']);
    $desc = ($_POST['descripcion']);
    $url = ($_POST['url']);
    $hoffset1_slider = ($_POST['hoffset1_slider']);
    $hoffset2_slider = ($_POST['hoffset2_slider']);
    $voffset1_slider = ($_POST['voffset1_slider']);
    $voffset2_slider = ($_POST['voffset2_slider']);
    
    $cuenta = $fn57->fn57_uslider_x($nombre, $desc, $url,$hoffset1_slider,$hoffset2_slider,$voffset1_slider,$voffset2_slider, $id);
    echo $fnalert->fnalert_edit($cuenta);
//    $tabla = $fn57->fn57_rslider_all();
//    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn57->fn57_uslider_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn57->fn57_uslider_xest($id, $estado);
    if ($cuenta == 0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
    //$tabla = $fn57->fn57_rslider_all();
    //$include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn57->fn57_uslider_xest($id, $estado);
    $tabla = $fn57->fn57_rslider_all();
    $include = 1;
}
if ($opc_cn == 6) {
////Guarda en la tabla repositorio los datos de la imagen
    $estado = 1;
    $tipo_rep = 1;
    $fecha_rep = date('Y-m-d');
    $fileTmpPath = $_FILES['url_rep']['tmp_name'];
    $fileName = $_FILES['url_rep']['name'];
    $fileSize = $_FILES['url_rep']['size'];
    $fileType = $_FILES['url_rep']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../assets/img/';
    $newFileName = $fileNameCmps[0] . '' . $fecha . '.' . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo = $fileNameCmps[0];
    $url_repositorio = $newFileName;
    //print_r($fileName);
    $id_slider = $_POST['dato_1'];
    if ($fileSize < 2000000 && ($fileName != null || $fileName != "")) {
        if ($tipo_rep == 1 && ($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "webp" )) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            ////Guarda en la tabla slider la la direccion de la imagen

            $urlimagen = $url_repositorio;
            $cuenta = $fn57->fn57_uslider_xImg($id_slider, $urlimagen);
            echo $fnalert->fnalert_file($cuenta);
            ?>
            <img src="../assets/img/<?php echo $urlimagen ?>" width="440px" />
            <?php
        } else {
            echo $fnalert->fnalert_file(2);
        }
    } else {
        echo $fnalert->fnalert_file(2);
    }
}
if ($opc_cn == 7) {
////Guarda en la tabla repositorio los datos de la imagen
    $estado = 1;
    $tipo_rep = 1;
    $fecha_rep = date('Y-m-d');
    $fileTmpPath = $_FILES['url_rep']['tmp_name'];
    $fileName = $_FILES['url_rep']['name'];
    $fileSize = $_FILES['url_rep']['size'];
    $fileType = $_FILES['url_rep']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../images/';
    $newFileName = $fileNameCmps[0] . '' . $fecha . '.' . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo = $fileNameCmps[0];
    $url_repositorio = $newFileName;
    //print_r($fileName);
    $id_slider = $_POST['dato_1'];
    if ($fileSize < 2000000 && ($fileName != null || $fileName != "")) {
        if ($tipo_rep == 1 && ($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "webp" )) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            ////Guarda en la tabla slider la la direccion de la imagen

            $urlimagen = $url_repositorio;
            $cuenta = $fn57->fn57_uslider_xImg1($id_slider, $urlimagen);
            echo $fnalert->fnalert_file($cuenta);
            ?>
            <img src="../images/<?php echo $urlimagen ?>" width="440px" />
            <?php
        } else {
            echo $fnalert->fnalert_file(2);
        }
    } else {
        echo $fnalert->fnalert_file(2);
    }
}
if ($opc_cn == 8) {
////Guarda en la tabla repositorio los datos de la imagen
    $estado = 1;
    $tipo_rep = 1;
    $fecha_rep = date('Y-m-d');
    $fileTmpPath = $_FILES['url_rep']['tmp_name'];
    $fileName = $_FILES['url_rep']['name'];
    $fileSize = $_FILES['url_rep']['size'];
    $fileType = $_FILES['url_rep']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../images/';
    $newFileName = $fileNameCmps[0] . '' . $fecha . '.' . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo = $fileNameCmps[0];
    $url_repositorio = $newFileName;
    //print_r($fileName);
    $id_slider = $_POST['dato_1'];
    if ($fileSize < 2000000 && ($fileName != null || $fileName != "")) {
        if ($tipo_rep == 1 && ($fileExtension == "jpg" || $fileExtension == "png" || $fileExtension == "webp" )) {
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
            ////Guarda en la tabla slider la la direccion de la imagen

            $urlimagen = $url_repositorio;
            $cuenta = $fn57->fn57_uslider_xImg2($id_slider, $urlimagen);
            echo $fnalert->fnalert_file($cuenta);
            ?>
            <img src="../images/<?php echo $urlimagen ?>" width="440px" />
            <?php
        } else {
            echo $fnalert->fnalert_file(2);
        }
    } else {
        echo $fnalert->fnalert_file(2);
    }
}

if ($opc_cn == 9) {
    $id = $_POST['dato_1'];
    $urlimagen = "";
    $cuenta = $fn57->fn57_uslider_xImg1($id, $urlimagen);
    ?>
         <img src="" width="440px" />   
    <?php        
    
}

if ($opc_cn == 10) {
    $id_slider = $_POST['dato_1'];
    $urlimagen = "";
    $cuenta = $fn57->fn57_uslider_xImg2($id_slider, $urlimagen);
    ?>
         <img src="" width="440px" />   
    <?php        
    
}
if ($opc_cn == 100) {
    $tabla = $fn57->fn57_rslider_all();
    $include = 1;
}
//INCLUDE

if ($include == 1) {
    ?>
    <div id="cargando"  style="display: none" >
        <img class="loader_animation" src="../images/loader.gif"  /><br>
    </div>    
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Imagen Título</th>
                <th>Imagen Sub-título</th>
                <th>URL</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['est_slider'];
                $id = $menu['id_slider'];
                $_st = '';
                $_nst = 'Inactivo';
                if ($st == 1) {
                    $_st = 'checked';
                    $_nst = 'Activo';
                }
                ?>
                <tr>
                    <td> <?php echo ($menu['nom_slider']) ?> </td>
                    <!--<td> <?php echo ($menu['desc_slider']) ?> </td>-->
                    <td> 
                        <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                        <button onclick='md57_d6(6,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                    </td>
                    <td> 
                        <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                        <button onclick='md57_d6(7,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                    </td>
                    <td> 
                        <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                        <button onclick='md57_d6(8,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                    </td>
                    <td> <?php echo ($menu['url_slider']) ?> </td>
                    <td>

                        <div class="custom-control custom-checkbox mb-3">
                            <?php
                            if ($menu['est_slider'] == 0) {
                                ?>
                                <input value="1" name="estado" onchange="cn57_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <?php
                            } else {
                                ?>
                                <input value="0" name="estado" onchange="cn57_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <?php
                            }
                            ?>

                            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>"><?php echo $_nst ?></label>
                        </div>
                        <div id="fill_<?php echo $id ?>">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md57_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md57_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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