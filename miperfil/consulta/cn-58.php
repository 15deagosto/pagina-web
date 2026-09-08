<?php
session_start();
require '../controlador/conexion.php';
require '../funciones/fn-58.php';
include '../sesiones/abrir.php';
$a = new Fn_58();
$iopc = $_POST['dato_0'];
$state = 0;
if ($iopc == 1) {
    $id = ($_POST['dato_2']);
    $st = ($_POST['dato_1']);
    $valor_tarea = 0;
    //echo "CODIGO:".$validatecod;
    $numtarea = $a->fn58_uvacante_usuario_estado($id, $st);
    if ($st == 0) {
        ?>
        <label><input type="checkbox" value="1" onchange="cn58_001_2(1, this.value,<?php echo $id ?>)"> PENDIENTE</label> 
        <?php
    } else {
        ?>
        <label><input checked="" type="checkbox" value="0" onchange="cn58_001_2(1, this.value,<?php echo $id ?>)"> ATENDIDO</label> 
        <?php
    }
}
if ($iopc == 2) {
    $fechadesde = $_POST['fechadesde'];
    $fechasta = $_POST['fechasta'];
    $vacante = ($_POST['vacante']);
    $estado = $_POST['estado'];
    $tabla = $a->get_vacante_usuario_filto($fechadesde, $fechasta, $vacante, $estado);
    $include =1;
}
if ($include == 1) {
    ?>
    <form id="frm_filtro" method="post">
    <input type="text" hidden="" id="desde" name="desde" value="<?php echo $fechadesde ?>">
    <input type="text" hidden="" id="hasta" name="hasta" value="<?php echo $fhasta ?>">
    <input type="text" hidden="" id="va" name="va" value="<?php echo $vacante ?>">
    <input type="text" hidden="" id="st" name="st" value="<?php echo $estado ?>">
    </form>    
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Usuario</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Aplica</th>
                <th>Documento</th>
                <th>Estado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['est_vacanusu'];
                $id = $menu['id_vacanusu'];
            ?>
                <tr>
                    <td> <?php echo ($menu['fecha_vacanusu']) ?> </td>
                    <td> <?php echo ($menu['nombre_vacanusu'].' '.$menu['apellido_vacanusu']) ?> </td>
                    <td> <?php echo ($menu['telefono_vacanusu']) ?> </td>
                    <td> <?php echo ($menu['email_vacanusu']) ?> </td>
                    <td> <?php echo ($menu['nombre_vacante']) ?> </td>
                    <td> 
                        <?php 
                        if($menu['documento_vacanusu']!=''){
                        ?> 
                        <a href="">IR A CURRICULUM</a>
                        <?php 
                        }else{
                        ?> 
                        NO DOCUMENTO
                        <?php 
                        }
                        ?> 
                    </td>
                    <td> 
                        <div id="i_estado<?php echo $id ?>">
                        <?php
                        if($st==0){
                           ?>
                        <label><input type="checkbox" value="1" onchange="cn58_001_2(1,this.value,<?php echo $id ?>)"> PENDIENTE</label> 
                        <?php
                        }else{
                           ?>
                        <label><input checked="" type="checkbox" value="0" onchange="cn58_001_2(1,this.value,<?php echo $id ?>)"> ATENDIDO</label> 
                        <?php 
                        }
                        ?>
                        </div>
                    </td>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md58_d1(1,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></button>
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