<?php
require './funciones/fn-34.php';
$a = new Fn_34();
$tabla = $a->fn34_rlinea_credito_all();
?>
<script src="./jsopc/jsopc-34.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">linea_credito </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=34"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md34_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table34">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Imágen</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_lineacred'];
                                    $id = $menu['id_lineacred'];
                                    $estado = $a->fn34_estado_xid($st);
                                ?>
                                    <tr>
                                        <td> <?php echo ($menu['nombre_lineacred']) ?></td>
                                        <td>
                                            <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                                            <button onclick='md34_d5(5, 1, 1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        </td>
                                        <td>
                                            
                                            <div class="custom-control custom-checkbox mb-3">
                                                <?php
                                                if($st == 0){
                                                ?>
                                                <input value="1" name="estado" onchange="cn34_f4(5, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                <?php
                                                }else if($st == 1){
                                                ?>
                                                <input value="0" name="estado" onchange="cn34_f4(5, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                                                <button onclick="md34_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md34_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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
