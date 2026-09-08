<?php
session_start();
require '../controlador/conexion.php';
require '../funciones/fn-91.php';
require '../funciones/fn-alert.php';
require '../sesiones/abrir.php';
$opc_cn = $_POST['dato_0'];
$fn91 = new Fn_91();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn91->fn91_rrepositorio_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_rep = ($_POST['nombre_rep']);
    $estado = 1;
    $tipo_rep = ($_POST['tipo_rep']);
    $fecha_rep= date('Y-m-d');
    $fileTmpPath = $_FILES['url_rep']['tmp_name'];
    $fileName = $_FILES['url_rep']['name'];
    $fileSize = $_FILES['url_rep']['size'];
    $fileType = $_FILES['url_rep']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../images/';
    $newFileName=$nombre_rep.''.$idusu_open.'.'.$fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo=$nombre_rep;
    $url_repositorio=$newFileName;
    
    if($tipo_rep==1 && ($fileExtension=="jpg" ||  $fileExtension=="png" )){
        if(move_uploaded_file($fileTmpPath, $dest_path)){
        }
        $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
        echo $fnalert->fnalert_create($cuenta);
    }else if($tipo_rep==2 && ($fileExtension=="mp4" ||  $fileExtension=="mov" ||  $fileExtension=="avi" ||  $fileExtension=="mpeg-2" ||  $fileExtension=="mpeg" )){
        if(move_uploaded_file($fileTmpPath, $dest_path)){
        }
        $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
        echo $fnalert->fnalert_create($cuenta);
    }else if($tipo_rep==3 && ($fileExtension=="pdf" )){
        if(move_uploaded_file($fileTmpPath, $dest_path)){
        }
        $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
        echo $fnalert->fnalert_create($cuenta);
    }else if($tipo_rep==4 && ($fileExtension=="xls" )){
        if(move_uploaded_file($fileTmpPath, $dest_path)){
        }
        $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
        echo $fnalert->fnalert_create($cuenta);
    }elseif($tipo_rep==5 && ($fileExtension=="docx" || $fileExtension=="doc" )){
        if(move_uploaded_file($fileTmpPath, $dest_path)){
        }
        $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
        echo $fnalert->fnalert_create($cuenta);
    }else{
        echo $fnalert->fnalert_extencion();
    }
    $tabla = $fn91->fn91_rrepositorio_alltp();
    $include = 1;    
    
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $nombre_prod = ($_POST['nombre_prod']);
    $descripcion_prod = ($_POST['descripcion_prod']);
    $tipo_prod = ($_POST['tipo_prod']);
    $cuenta = $fn91->fn91_urepositorio_x($nombre_prod, $descripcion_prod, $tipo_prod, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn91->fn91_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn91->fn91_urepositorio_xest($id, $estado);
    if ($cuenta==0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
//    $tabla = $fn91->fn91_rrepositorio_all();
//    $include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $texto1_prod = $_POST['texto1_prod'];
    $texto2_prod = $_POST['texto2_prod'];
    $texto3_prod = $_POST['texto3_prod'];
    $cuenta = $fn91->fn91_urepositorio_xtexto($texto1_prod, $texto2_prod,$texto3_prod,$id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn91->fn91_rrepositorio_all();
    $include = 1;
    
}

if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    $idrol = $_POST['dato_2'];
    $cuenta = $fn91->fn91_urepositorio_xrol($id, $idrol);
    $include = 1;
}

if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn91->fn91_urepositorio_xest($id, $estado);
    echo $fnalert->fnalert_delete($cuenta);
    $tabla = $fn91->fn91_rrepositorio_all();
    $include = 1;
}

//INCLUDE

if ($include == 1) {
    $tabla = $fn91->fn91_rrepositorio_alltp();
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Vista </th>
                <th>URL </th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_rep'];
                $id = $menu['id_rep'];
                $tipo=$menu['tipo_rep'];
                $estado = $fn91->fn91_estado_xid($st);
                $fecha = date("d-m-Y", strtotime($archivo['fecha_rep']));
                ?>
                <tr>
                    <td><?php echo $menu['nombre_rep']?></td>
                    <?php 
                    if ($tipo==1){
                    ?>
                    <td><label><i class="fa fa-file-image-o fa-3x" ></td>
                    <?php
                    }elseif ($tipo==2) {
                    ?>
                    <td><label><i class="fa fa-file-video-o fa-3x" ></label></td>
                    <?php
                    }elseif ($tipo==3) {
                    ?>
                    <td><label><i class="fa fa-file-pdf-o fa-3x" ></td>
                    <?php
                    }elseif ($tipo==4) {
                    ?>
                    <td><label><i class="fa fa-file-excel-o fa-3x" ></td>
                    <?php
                    }elseif ($tipo==5) {
                    ?>
                    <td><label><i class="fa fa-file-word-o fa-3x" ></td>
                    <?php
                    }
                    ?>
                    <td><?php echo $menu['url_rep']?></td>
                    <td><?php echo $fecha?></td>
                    <td>
                        
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn91_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn91_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                            <button onclick="md91_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                            <button onclick="copia_f(<?php echo $id ?>)" class="btn btn-twitter shadow btn-xs sharp mr-1" title="Copiar URL"><i class="fa fa-files-o" ></i></button>
                            <p id="url_copia<?php echo $id ?>" hidden=""><?php echo urlsite.''.$menu['url_rep']?></p>
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

