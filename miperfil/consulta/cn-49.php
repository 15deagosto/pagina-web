<?php
session_start();
require '../controlador/conexion.php';
require '../funciones/fn-49.php';
include '../sesiones/abrir.php';
$a = new Fn_49();
$iopc = $_POST['dato_0'];
$state = 0;
if ($iopc == 1) {
    $id = ($_POST['dato_2']);
    $st = ($_POST['dato_1']);
    $valor_tarea = 0;
    //echo "CODIGO:".$validatecod;
    $numtarea = $a->fn49_uvacante_usuario_estado($id, $st);
    if ($st == 0) {
        ?>
        <label><input type="checkbox" value="1" onchange="cn49_001_2(1, this.value,<?php echo $id ?>)"> PENDIENTE</label> 
        <?php
    } else {
        ?>
        <label><input checked="" type="checkbox" value="0" onchange="cn49_001_2(1, this.value,<?php echo $id ?>)"> ATENDIDO</label> 
        <?php
    }
}
if ($iopc == 2) {
    $fechadesde = $_POST['fechadesde'];
    $fechasta = $_POST['fechasta'];
    $tabla = $a->fn49_rempresa_all($fechadesde, $fechasta);
    $include =1;
}
if ($include == 1) {
    ?>
    <form id="frm_filtro" method="post">
        <input type="text" hidden="" id="desde" name="desde" value="<?php echo $fechadesde ?>">
        <input type="text" hidden="" id="hasta" name="hasta" value="<?php echo $fhasta ?>">
    </form>    
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Representante</th>
                <th>Teléfono</th>
                <th>Celular</th>
                <th>Email</th>
                <th>Tipo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $id = $menu['id_empresa'];
            ?>
                <tr>
                    <td> <?php echo ($menu['representante_empresa']) ?> </td>
                    <td> <?php echo ($menu['tlfrep_empresa']) ?> </td>
                    <td> <?php echo ($menu['tlf2rep_empresa']) ?> </td>
                    <td> <?php echo ($menu['emailrep_empresa']) ?> </td>
                    <td> <?php echo $txt?> </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md49_d1(1,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></button>
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