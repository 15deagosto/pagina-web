<?php
require './funciones/fn-66.php';
$a = new Fn_66();
$tabla = $a->fn66_reducacion_financiera_all();
?>
<script src="./jsopc/jsopc-66.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Educación Financiera </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=66"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md66_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table66">
                        <div id="cargando" class="bg_load" style="display: none" >
                            <img class="loader_animation" src="../assets/images/Loading_2.gif"  /><br>
                        </div>
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Fecha</th>
                                    <th>Resumen</th>
                                    <th>URL</th>
                                    <th>Imagen</th>
                                    <th>Slider</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_edfi'];
                                    $id = $menu['id_edfi'];
                                    $estado = $a->fn66_estado_xid($st);
                                    ?>
                                    <tr>
                                        <td> <?php echo ($menu['titulo_edfi']) ?></td>
                                        <td> <?php echo ($menu['fecha_edfi']) ?> </td>
                                        <td> <?php echo ($menu['resumen_edfi']) ?> </td>
                                        <td> 
                                            <button onclick='md66_u005_d4(5,1,2,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs  mr-1'><i class="fa fa-file-video-o fa-2x" ></i></button>
                                        </td>
                                        <td> 
                                            <button onclick='md66_d6(6,1,1,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs  mr-1'><i class="fa fa-file-image-o fa-2x" ></i></button>
                                        </td>
                                        <td> 
                                            <button onclick='md66_007_d6(7,1,1,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs  mr-1'><i class="fa fa-file-image-o fa-2x" ></i></button>
                                        </td>
                                        <td>
                                            <div id="fill_<?php echo $id ?>">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if ($st == 0) {
                                                        ?>
                                                        <input value="1" name="estado" onchange="cn66_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                        <?php
                                                    } else if ($st == 1) {
                                                        ?>
                                                        <input value="0" name="estado" onchange="cn66_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md66_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md66_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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
