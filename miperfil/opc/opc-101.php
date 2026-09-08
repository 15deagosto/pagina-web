<?php
require './funciones/fn-101.php';
$a = new Fn_101();
$tabla = $a->fn101_rcarrusel_all();
?>
<script src="./jsopc/jsopc-101.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Imágenes </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=101"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
<!--                        <button onclick="md101_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>-->
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table101">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Imagen</th>
                                    <th>URL</th>
                                    <th>Estado</th>
                                    <th>Sitio</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_carrusel'];
                                    $id = $menu['id_carrusel'];
                                    $poc = $menu['poc_carrusel'];
                                ?>
                                    <tr>
                                        <td> <?php echo $id ?></td>
                                        <td> <button onclick="md101_d5(5,<?php echo $id ?>)" data-toggle="modal" 
                                                        data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1">
                                                    <i class="fa fa-upload"></i>
                                                </button>
                                        </td>
                                        <td><?php echo ($menu['url_carrusel']) ?></td>
                                        <td>
                                            <div id="fill_<?php echo $id ?>">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if($st == 0){
                                                    ?>
                                                    <input value="1" name="estado" onchange="cn101_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                    <?php
                                                    }else if($st == 1){
                                                    ?>
                                                    <input value="0" name="estado" onchange="cn101_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                                    <?php    
                                                    }
                                                    ?>
                                                </div>
                                            
                                            </div>
                                        </td>
                                        <td><?php 
                                        if($menu['sitio_carrusel']==1){
                                            echo "SERVICIOS";
                                        }else{
                                            echo "COSEDE";
                                        }
                                        ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md101_d2(2,<?php echo $id ?>)" data-toggle="modal" 
                                                        data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                                
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
