<?php
require './funciones/fn-104.php';
$a = new Fn_104();
$fhasta = date('Y-m-d');
$tabla = $a->get_quejas_filto('',$fhasta, '', '');
?>
<script src="./jsopc/jsopc-104.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Quejas / Reclamos / Saras</h4>
<!--                    <div class="col-xl-3 col-md-3">
                        <button class="btn btn-success" onclick="reporte1()" type="button" style="background-color: white; color: #000000;">
                        <i style="color: green;" class="fa fa-file-excel-o"></i> DESCARGAR EXCEL 
                        </button>
                    </div>-->
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=104"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
<!--                        <button onclick="md104_002_d1(2)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-filter"></i> <b class="caret m-l-5"></b>
                        </button>-->
                    </div>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table104">
                        <form id="frm_filtro" method="post">
                            <input type="text" hidden="" id="desde" name="desde" value="">
                            <input type="text" hidden="" id="hasta" name="hasta" value="<?php echo $fhasta ?>">
                            <input type="text" hidden="" id="ag" name="ag" value="">
                            <input type="text" hidden="" id="st" name="st" value="">
                        </form>
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Agencia</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Tipo</th>
                                    <th>Queja</th>
                                    <th>IP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $id = $menu['id_saras'];
                                ?>
                                    <tr>
                                        <td> <?php echo ($menu['nombres_saras']) ?></td>
                                        <td> <?php echo ($menu['email_saras']) ?></td>
                                        <td> <?php echo ($menu['telefono_saras']) ?></td>
                                        <td> <?php echo ($menu['nombre_nosotros']) ?> </td>
                                        <td> <?php echo ($menu['fecha_saras']) ?> </td>
                                        <td> <?php echo ($menu['hora_saras']) ?> </td>
                                        <td> <?php echo ($menu['tipo_saras']) ?> </td>
                                        <td> <?php echo ($menu['msj_saras']) ?> </td>
                                        <td> <?php echo ($menu['ip_saras'].' -- '.$menu['sesion_saras']) ?> </td>
                                        												
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
