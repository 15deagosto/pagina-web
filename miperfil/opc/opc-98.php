<?php
require './funciones/fn-98.php';
$a = new Fn_98();
$tabla = $a->fn98_rimagenes_all();
?>
<script src="./jsopc/jsopc-98.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Imágenes </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=98"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
<!--                        <button onclick="md98_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>-->
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table98">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Título</th>
                                    <th>Tipo</th>
                                    <th style="width: 10%">Imagen</th>
                                    <th style="width: 10%">Imagen 2</th>
                                    <th style="width: 10%">Estado</th>
                                    <th style="width: 10%">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_imagen'];
                                    $id = $menu['id_imagen'];
                                    $tip = $menu['tipo_imagen'];
                                    $dettipo = $a->fn98_tipo_xid($tip);
                                ?>
                                    <tr>
                                        <td> <?php echo ($menu['id_imagen']) ?></td>
                                        <td> <?php echo ($menu['nombre_imagen']) ?></td>
                                        <td>
                                            <select class="form-control" onchange="cn98_f6(6,<?php echo $id ?>, this.value)">
                                                <option value="<?php echo $tip ?>"><?php echo $dettipo ?></option>
                                                <option value="1">BANNER PAGINAS</option> 
                                                <option value="0">IMÁGENES PÁGINAS</option> 
                                            </select>
                                            <div id="selec<?php echo $id ?>">
                                              
                                            </div>
                                        </td>
                                        <td> 
                                            <button onclick='md98_d5(5,<?php echo $id?>,1,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" 
                                                    class='btn btn-outline-primary shadow btn-xs mr-1'><i class="fa fa-file-image-o fa-2x" ></i></button>
                                        </td>
                                        <td> 
                                            <button onclick='md98_d6(6,<?php echo $id?>,1,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" 
                                                    class='btn btn-outline-primary shadow btn-xs mr-1'><i class="fa fa-file-image-o fa-2x" ></i></button>
                                        </td>
                                        <td>
                                            <div id="fill_<?php echo $id ?>">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if($st == 0){
                                                    ?>
                                                    <input value="1" name="estado" onchange="cn98_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                    <?php
                                                    }else if($st == 1){
                                                    ?>
                                                    <input value="0" name="estado" onchange="cn98_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                                    <?php    
                                                    }
                                                    ?>
                                                </div>
                                            
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md98_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md98_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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
