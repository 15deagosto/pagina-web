<?php
require './funciones/fn-93.php';
$a = new Fn_93();
$tabla = $a->fn93_rsolinversion_all();
$hasta = date('Y-m-d');
$desde = date('Y-m-d', strtotime($hasta . "- 30 days"));
?>
<script src="./jsopc/jsopc-93.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Solicitudes de Ahorro </h4>
                    <div class="col-xl-3 col-md-3">
                        <button class="btn btn-success" onclick="reporte1()" type="button" style="background-color: white; color: #000000;">
                        <i style="color: green;" class="fa fa-file-excel-o"></i> DESCARGAR EXCEL 
                        </button>
                    </div>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=93"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md93_002_d1(2)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-filter"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                    
                </div>
                <div class="card-body">
                      
                    <div class="table-responsive" id="table93">
                        <form id="frm_filtro" method="post">
                            <input type="text" hidden="" id="desde" name="desde" value="">
                            <input type="text" hidden="" id="hasta" name="hasta" value="<?php echo $hasta ?>">
                            <input type="text" hidden="" id="pr" name="pr" value="">
                            <input type="text" hidden="" id="st" name="st" value="">
                        </form>
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Agencia</th>
                                    <th>Provincia / Canton / Parroquia</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_inversion'];
                                    $id = $menu['id_inversion'];
                                    $detzona =  $a->fn93_rzona_xid($menu['ciudad_inversion']);
                                ?>
                                    <tr>
                                        <td> <?php echo ($menu['nombre_inversion'].' '.$menu['apellido_inversion']) ?></td>
                                        <td> <?php echo ($menu['telefono_inversion']) ?> </td>
                                        <td> <?php echo ($menu['email_inversion']) ?> </td>
                                        <td> <?php echo ($menu['entidad_inversion']) ?> </td>
                                        <td> <?php echo ($detzona[0]['provincia'].' - '.$detzona[0]['canton'].' - '.$detzona[0]['parroquia']) ?> </td>
                                        <td> 
                                            
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if ($st == 0) {
                                                        ?>
                                                        <input value="1" name="estado" onchange="cn93_f1(1, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Pendiente</label>
                                                        <?php
                                                    } else if ($st == 1) {
                                                        ?>
                                                        <input value="0" name="estado" onchange="cn93_f1(1, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Aceptado</label>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            <div id="fill_<?php echo $id ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md93_d1(1,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                            </div>												
                                        </td>												
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Md modal  -->
                    <div class="modal fade" id="modalcontent_md">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" id="content_md">
                            </div>
                        </div>
                    </div>
                    <!-- Small modal -->
                    <div class="modal fade bd-example-modal-sm" id="modalcontent_sm" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content" id="content_sm">
                            </div>
                        </div>
                    </div>
                    <!-- lg modal -->
                    <div class="modal fade bd-example-modal-lg" id="modalcontent_lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content" id="content_lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
