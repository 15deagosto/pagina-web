<?php
session_start();
require '../controlador/conexion.php';
require '../funciones/fn-43.php';
include '../sesiones/abrir.php';
$a = new Fn_43();
$iopc = $_POST['dato_0'];
$state = 0;
if ($iopc == 1) {
    $id = ($_POST['dato_2']);
    $st = ($_POST['dato_1']);
    $valor_tarea = 0;
    //echo "CODIGO:".$validatecod;
    $numtarea = $a->fn43_uquejas_estado($id, $st);
    if ($st == 0) {
        ?>
        <label><input type="checkbox" value="1" onchange="cn43_001_2(1, this.value,<?php echo $id ?>)"> PENDIENTE</label> 
        <?php
    } else {
        ?>
        <label><input checked="" type="checkbox" value="0" onchange="cn43_001_2(1, this.value,<?php echo $id ?>)"> ATENDIDO</label> 
        <?php
    }
}
if ($iopc == 2) {
    $fechadesde = $_POST['fechadesde'];
    $fechasta = $_POST['fechasta'];
    $agencia = ($_POST['agencia']);
    $estado = $_POST['estado'];
    $tabla = $a->get_quejas_filto($fechadesde, $fechasta, $agencia, $estado);
    $include =1;
}
if ($include == 1) {
    ?>
    <form id="frm_filtro" method="post">  
    <input type="text" hidden="" id="desde" value="<?php echo $fechadesde ?>">
    <input type="text" hidden="" id="Hasta" value="<?php echo $fechasta ?>">
    <input type="text" hidden="" id="ag" value="<?php echo $agencia ?>">
    <input type="text" hidden="" id="st" value="<?php echo $estado ?>">
    </form>  
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Agencia</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_queja'];
                $id = $menu['id_queja'];
            ?>
                <tr>
                    <td> <?php echo ($menu['nombre_queja'].' '.$menu['apellido_queja']) ?></td>
                    <td> <?php echo ($menu['nombre_nosotros']) ?> </td>
                    <td> <?php echo ($menu['fecha_queja']) ?> </td>
                    <td> <?php echo ($menu['hora_queja']) ?> </td>
                    <td> 
                        <div id="i_estado<?php echo $id ?>">
                        <?php
                        if($st==0){
                           ?>
                        <label><input type="checkbox" value="1" onchange="cn43_001_2(1,this.value,<?php echo $id ?>)"> PENDIENTE</label> 
                        <?php
                        }else{
                           ?>
                        <label><input checked="" type="checkbox" value="0" onchange="cn43_001_2(1,this.value,<?php echo $id ?>)"> ATENDIDO</label> 
                        <?php 
                        }
                        ?>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                          <button onclick="md43_001_d2(1,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></button>  
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