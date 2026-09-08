<?php
require './funciones/fn-54.php';
$a = new Fn_54();
$tabla = $a->fn54_rtransparencia_xpadre(0);
?>
<script src="./jsopc/jsopc-54.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Transparencia </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=54"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md54_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table54">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_transp'];
                                    $id = $menu['id_transp'];
                                    ?>
                                    <tr>
                                        <td> <?php echo $id ?></td>
                                        <td> <?php echo ($menu['nombre_transp']) ?> </td>
                                        <td> <?php
                                            if ($menu['tipo_transp'] == 0) {
                                                echo "TRANSPARENCIA DE LA INFORMACIÓN";
                                            } else {
                                                echo "BUENA GOBERNANZA";
                                            }
                                            ?> 
                                        </td>
                                        <td>

                                            <div class="custom-control custom-checkbox mb-3">
                                                <?php
                                                if ($st == 0) {
                                                    ?>
                                                    <input value="1" name="estado" onchange="cn54_004_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <input value="0" name="estado" onchange="cn54_004_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                                                <button onclick="md54_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md54_x_d3(<?php echo $id ?>)" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></button>
                                                
                                            </div>												
                                        </td>												
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <div id="i_trans<?php echo $id ?>" style="display: none">
                                                <table style="width: 100%">
                                                    <tr>
                                                        <td colspan="6">
                                                           <button onclick="md54_005_d2(5,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow"><i class="fa fa-plus"> Agregar Descarga</i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Fecha</th>
                                                        <th>Resumen</th>
                                                        <th>Link</th>
                                                        <th>Estado</th>
                                                        <th>Acción</th>
                                                    </tr>
                                                    <?php
                                                    $tabla1 = $a->fn54_rtransparencia_xpadre($id);
                                                    while ($menu2 = $tabla1->fetch_assoc()) {
                                                        $st1 = $menu2['estado_transp'];
                                                        $id_1 = $menu2['id_transp'];
                                                        ?>        
                                                        <tr>
                                                            <td><?php echo ($menu2['nombre_transp']) ?></td>
                                                            <td><?php echo ($menu2['fecha_transp']) ?></td>
                                                            <td><?php echo ($menu2['resumen_transp']) ?></td>
                                                            <td>
                                                                <button onclick="md54_003_d2(3,<?php echo $id_1 ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-file"></i></button>
                                                                
                                                            </td>
                                                            <td>

                                                                <div class="custom-control custom-checkbox mb-3">
                                                                    <?php
                                                                    if ($st1 == 0) {
                                                                        ?>
                                                                        <input value="1" name="estado" onchange="cn54_004_f4(4, <?php echo $id_1 ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBoxtra1<?php echo $id_1 ?>" required>
                                                                        <label class="custom-control-label" for="customCheckBoxtra1<?php echo $id_1 ?>">Inactivo</label>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <input value="0" name="estado" onchange="cn54_004_f4(4, <?php echo $id_1 ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBoxtra1<?php echo $id_1 ?>" required>
                                                                        <label class="custom-control-label" for="customCheckBoxtra1<?php echo $id_1 ?>">Activo</label>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                                <div id="fill_<?php echo $id_1 ?>">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <button onclick="md54_006_d2(6,<?php echo $id_1 ?>,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                                </div>												
                                                            </td>   
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </table>

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
