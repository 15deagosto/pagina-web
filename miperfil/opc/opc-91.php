<?php
require './funciones/fn-91.php';
require './config.php';
$a = new Fn_91();
$tabla = $a->fn91_rrepositorio_alltp();


?>
<script src="./jsopc/jsopc-91.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Repositorio </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=91"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md91_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table91">
                       
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Vista </th>
                                    <th>URL </th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_rep'];
                                    $id = $menu['id_rep'];
                                    $tipo=$menu['tipo_rep'];
                                    $estado = $a->fn91_estado_xid($st);
                                    $fecha = date("d-m-Y", strtotime($archivo['fecha_rep']));
                                    ?>
                                    <tr>
                                        <td><?php echo $menu['nombre_rep']?></td>
                                        <?php 
                                        if ($tipo==1){
                                        ?>
                                        <td><label><i class="fa fa-file-image-o fa-3x" ></i></label></td>
                                        <?php
                                        }elseif ($tipo==2) {
                                        ?>
                                        <td><label><i class="fa fa-file-video-o fa-3x" ></i></label></td>
                                        <?php
                                        }elseif ($tipo==3) {
                                        ?>
                                        <td><label><i class="fa fa-file-pdf-o fa-3x" ></i></label></td>
                                        <?php
                                        }elseif ($tipo==4) {
                                        ?>
                                        <td><label><i class="fa fa-file-excel-o fa-3x" ></i></label></td>
                                        <?php
                                        }elseif ($tipo==5) {
                                        ?>
                                        <td><label><i class="fa fa-file-word-o fa-3x" ></i></label></td>
                                        <?php
                                        }
                                        ?>
                                        <td><?php echo $menu['url_rep']?></td>
                                        <td><?php echo $fecha?></td>
                                        <td>
                                            
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if ($st == 0) {
                                                        ?>
                                                        <input value="1" name="estado" onchange="cn91_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                        <?php
                                                    } else if ($st == 1) {
                                                        ?>
                                                        <input value="0" name="estado" onchange="cn91_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                                                <button onclick="md91_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash" title="Eliminar"></i></button>
                                                <button onclick="copia_f(<?php echo $id ?>)" class="btn btn-twitter shadow btn-xs sharp mr-1" title="Copiar URL"><i class="fa fa-files-o" ></i></button>
                                                <p id="url_copia<?php echo $id ?>" hidden=""><?php echo urlsite.''.$menu['url_rep']?></p>
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
