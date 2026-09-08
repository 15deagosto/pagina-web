<?php
require '../controlador/conexion.php';
require '../funciones/fn-97.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn97 = new Fn_97();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn97->fn97_rpaginasextra_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $titulo_texto = $_POST['titulo_texto'];
    $resumen_texto = $_POST['resumen_texto'];
    $texto_texto = $_POST['texto_texto'];
    $estado = 0;
    $cuenta = $fn97->fn97_ctextos_xdata($titulo_texto, $texto_texto, $resumen_texto, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $titulo_paginaex = $_POST['titulo_paginaex'];
    $text1_paginaex = $_POST['text1_paginaex'];
    $text2_paginaex = $_POST['text2_paginaex'];
    $text3_paginaex = $_POST['text3_paginaex'];
    $cuenta = $fn97->fn97_upaginasextra_x($titulo_paginaex, $text1_paginaex,$text2_paginaex,$text3_paginaex, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $include = 1;
}



if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $st = $_POST['dato_2'];
    $cuenta = $fn97->fn97_upaginasextra_xest($id, $st);
    if ($cuenta == 0) {
        ?>
        <div class="custom-control custom-checkbox mb-3">
            <?php
            if($st == 0){
            ?>
            <input value="1" name="estado" onchange="cn97_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
            <?php
            }else if($st == 1){
            ?>
            <input value="0" name="estado" onchange="cn97_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
            <input value="1" name="estado" onchange="cn97_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
            <?php
            }else if($st == 1){
            ?>
            <input value="0" name="estado" onchange="cn97_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
    $cuenta = $fn97->fn97_upaginasextra_xest($id, $estado);
    $include = 1;
}

if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $cuenta = $fn97->fn97_upaginasextra_xtip($id, $tipo);
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
    $dir_subida = '../../assets/images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    
    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn97->fn97_uimg_xid($id, $dato);
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
    $cuenta = $fn97->fn97_uimg_xid($id, $dato);
    $imagen_upd = $dato;
    $include = 2;
}

if ($opc_cn == 9) {
        $dato = ($_FILES['dato_1']['name']);
        $dir_subida = '../../assets/images/';
        $fichero_subido = $dir_subida . basename($_FILES['dato_1']['name']);
        if (move_uploaded_file($_FILES['dato_1']['tmp_name'], $fichero_subido)) {
            ?>
            <small style="color:green">Actualizado</small>
            <img class="img-responsive avatar-view" 
                 src="../assets/images/<?php echo $dato ?>" 
                 alt="Avatar" title="Change the avatar" style="width: 150px;">
                 <?php
             } else {
                 ?>
            <small style="color:red">PERMISOS DENEGADOS</small>
            <?php
        }
    
}
//INCLUDE

if ($include == 1) {
    $tabla = $fn97->fn97_rpaginasextra_all();
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Menú</th>
                <th>Titulo</th>
                <th>Tipo</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_paginaex'];
                $id = $menu['id_paginaex'];
                $tip = $menu['tipo_paginaex'];
                $dettipo = $fn97->fn97_tipo_xid($tip);
            ?>
                <tr>
                    <td> <?php echo $menu['nombre_menupag'] ?></td>
                    <td> <?php echo $menu['titulo_paginaex'] ?></td>
                    <td>
                        <select class="form-control" onchange="cn97_f6(6,<?php echo $id ?>, this.value)">
                            <option value="<?php echo $tip ?>"><?php echo $dettipo ?></option>
                            <option value="0">TEMPLATE 1</option> 
                            <option value="1">TEMPLATE 2</option>
                        </select>
                        <div id="selec<?php echo $id ?>">

                        </div>
                    </td>
                    <td> 
                        <button onclick='md97_d5(5,<?php echo $id?>,1,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs mr-1'><i class="fa fa-file-image-o fa-2x" ></i></button>
                    </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if($st == 0){
                                ?>
                                <input value="1" name="estado" onchange="cn97_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                <?php
                                }else if($st == 1){
                                ?>
                                <input value="0" name="estado" onchange="cn97_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                <?php    
                                }
                                ?>
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md97_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md97_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                            <button onclick="getlink(<?php echo $id ?>)" title="COPIAR URL"  class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-files-o"></i></button>
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
        <img src="../assets/images/<?php echo $imagen_upd ?>" width="200px" />
    <?php } else { ?>
        <center><h5> Sin imagen</h5></center>
    <?php } ?>
    <div id="cargando_img" class="bg_load" style="display: none" >
        <img class="loader_animation" src="../images/loading-gif.gif"  /><br>
    </div>
    <?php
}