<?php
require './funciones/fn-49.php';
$a = new Fn_49();
$fhasta = date('Y-m-d');
$fechin = '';
$tabla = $a->fn49_rempresa_all($fechin, $fhasta);

?>
<script src="./jsopc/jsopc-49.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Proveedores </h4>
<!--                    <div class="col-xl-3 col-md-3">
                        <button class="btn btn-success" onclick="reporte1()" type="button" style="background-color: white; color: #000000;">
                        <i style="color: green;" class="fa fa-file-excel-o"></i> DESCARGAR EXCEL 
                        </button>
                    </div>-->
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=55"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md49_002_d1(2)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-filter"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table49">
                        <form id="frm_filtro" method="post">
                            <input type="text" hidden="" id="desde" name="desde" value="">
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
                        <div class="modal-dialog modal-lg" style="max-width:150%;width: 90% !important">
                            <div class="modal-content" id="content_lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
