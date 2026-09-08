<?php
require './funciones/fn-57.php';
$a = new Fn_57();
$tabla = $a->fn57_rslider_all();
?>
<script src="./jsopc/jsopc-57.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Slider </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=57"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md57_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table57">
                        
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
<!--                                    <th>Descripción</th>-->
                                    <th>Imagen</th>
                                    <th>Imagen Título</th>
                                    <th>Imagen Sub-título</th>
                                    <th>URL</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['est_slider'];
                                    $id = $menu['id_slider'];
                                    $_st = '';
                                    $_nst = 'Inactivo';
                                    if ($st == 1) {
                                        $_st = 'checked';
                                        $_nst = 'Activo';
                                    }
                                    ?>
                                    <tr>
                                        <td> <?php echo ($menu['nom_slider']) ?> </td>
<!--                                        <td> <?php echo ($menu['desc_slider']) ?> </td>-->
                                        <td> 
                                            <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                                            <button onclick='md57_d6(6,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        </td>
                                        <td> 
                                            <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                                            <button onclick='md57_d6(7,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        </td>
                                        <td> 
                                            <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                                            <button onclick='md57_d6(8,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        </td>
                                        <td> <?php echo ($menu['url_slider']) ?> </td>
                                        <td>
                                            
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if($menu['est_slider'] == 0){
                                                    ?>
                                                    <input value="1" name="estado" onchange="cn57_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <input value="0" name="estado" onchange="cn57_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <?php    
                                                    }
                                                    ?>
                                                    
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>"><?php echo $_nst ?></label>
                                                </div>
                                            <div id="fill_<?php echo $id ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md57_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md57_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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
