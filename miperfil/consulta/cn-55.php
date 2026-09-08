<?php
require '../controlador/conexion.php';
require '../funciones/fn-55.php';
require '../funciones/fn-91.php';
require '../funciones/fn-alert.php';
require '../sesiones/abrir.php';
$opc_cn = $_POST['dato_0'];
$fn55 = new Fn_55();
$fn91 = new Fn_91();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == 1) {
    $nombre = ($_POST['nombre']);
    $apellido_testimonio = ($_POST['apellido_testimonio']);
    $lugar_testimonio = ($_POST['lugar_testimonio']);
    $resumen_testimonio = ($_POST['resumen_testimonio']);
    $fecha_inicio = date('Y-m-d');
    $fecha_final = date('Y-m-d');
    $estado = 0;
    $cuenta = $fn55->fn55_ctestimonios_x($nombre, $apellido_testimonio,$lugar_testimonio, $fecha_inicio,$resumen_testimonio, $fecha_final, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn55->fn55_rtestimonios_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = $_POST['dato_1'];
    $nombre = ($_POST['nombre']);
    $apellido_testimonio = ($_POST['apellido_testimonio']);
    $lugar_testimonio = ($_POST['lugar_testimonio']);
    $resumen_testimonio = ($_POST['resumen_testimonio']);
    $cuenta = $fn55->fn55_utestimonios_x($nombre, $apellido_testimonio,$lugar_testimonio, $resumen_testimonio, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn55->fn55_rtestimonios_all();
    $include = 1;
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn55->fn55_utestimonios_xest($id, $estado);
    if ($cuenta==0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
    //$tabla = $fn55->fn55_rtestimonios_all();
    //$include = 1;
}
if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn55->fn55_utestimonios_xest($id, $estado);
    $tabla = $fn55->fn55_rtestimonios_all();
    $include = 1;
}

if ($opc_cn == 6) {
////Guarda en la tabla repositorio los datos de la imagen
    $estado = 1;
    $tipo_rep = 1;
    $fecha_rep= date('Y-m-d');
    $fileTmpPath = $_FILES['url_rep']['tmp_name'];
    $fileName = $_FILES['url_rep']['name'];
    $fileSize = $_FILES['url_rep']['size'];
    $fileType = $_FILES['url_rep']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $uploadFileDir = '../../assets/img/';
    $newFileName=$fileNameCmps[0].''.$idusu_open.'.'.$fileExtension;
    $dest_path = $uploadFileDir . $newFileName;
    $nuevoArchivo=$fileNameCmps[0];
    $url_repositorio=$newFileName;
    
    
    if($fileSize<2000000 && ($fileName!=null || $fileName!="")){
        if($tipo_rep==1 && ($fileExtension=="jpg" ||  $fileExtension=="png" )){
            if(move_uploaded_file($fileTmpPath, $dest_path)){
            }
            $cuenta = $fn91->fn91_crepositorio_xdata($nuevoArchivo, $url_repositorio, $tipo_rep, $fecha_rep, $estado);
        ////Guarda en la tabla slider la la direccion de la imagen    
            $qImg= $_POST['dato_1'];
            $id_testimonio  = $_POST['dato_2'];
            $urlimagen=$url_repositorio;
            if($qImg==1){
                $imagen="img_testimonio";
                $cuenta = $fn55->fn55_utestimonios_xImg($imagen, $urlimagen,$id_testimonio);
                echo $fnalert->fnalert_file($cuenta);
            }
        }
    }else {
         echo $fnalert->fnalert_file(2);
    }
    $tabla = $fn55->fn55_rtestimonios_all();
    $include = 1;
}

//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Lugar</th>
                <th>Fecha</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['est_testimonio'];
                $id = $menu['id_testimonio'];
            ?>
                <tr>
                    <td> <?php echo ($menu['nom_testimonio'].' '.$menu['apellido_testimonio']) ?> </td>
                    <td> <?php echo ($menu['lugar_testimonio']) ?> </td>
                    <td> <?php echo ($menu['fecini_testimonio']) ?> </td>
                    <td>
                        <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                        <button onclick='md55_d6(6,1,1,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                    </td>
                    <td>
                        
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn55_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn55_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                            <button onclick="md55_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md55_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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