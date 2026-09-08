<?php
require './funciones/fn-23.php';
$fn23 = new Fn_23();
$tabla = $fn23->fn23_rinversionseps_all();
?>
<script src="./jsopc/jsopc-23.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Procentajes inversión SEPS </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=23"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md23_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table23">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Monto Desde</th>
                                    <th>Monto Hasta</th>
                                    <th>Desde</th>
                                    <th>Hasta</th>
                                    <th>Porcentaje</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $id = $menu['id_inversion'];
                                    ?>
                                    <tr>
                                        <td> <?php echo ($menu['montoin_inversion']) ?></td>
                                        <td> <?php echo ($menu['montoout_inversion']) ?></td>
                                        <td> <?php echo ($menu['diain_inversion']) ?></td>
                                        <td> <?php echo ($menu['diaout_inversion']) ?></td>
                                        <td> <?php echo ($menu['prociento_inversion']) ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md23_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
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

