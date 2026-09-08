<?php
require './funciones/fn-69.php';
$a = new Fn_69();
$tabla = $a->fn69_rmenupag_all();
?>
<script src="./jsopc/jsopc-69.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menú Externo </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=69"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md69_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table69">
                        <table  class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Tipo</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_menupag'];
                                    $id = $menu['id_menupag'];
                                    $tip = $menu['tipo_menupag'];
                                    $dettipo = $a->fn69_tipo_xid($tip);
                                    $subtabla = $a->fn69_rmenupag_xpadre($id);
                                ?>
                                    <tr>
                                        <td> <?php echo ($menu['nombre_menupag']) ?></td>
                                        
                                        <td>
                                            <select class="form-control" onchange="cn69_f6(6,<?php echo $id ?>, this.value)">
                                                <option value="<?php echo $tip ?>"><?php echo $dettipo ?></option>
                                                <option value="0">PIE DE PÁGINA</option> 
                                                <option value="1">MENÚ</option>
                                            </select>
                                            <div id="selec<?php echo $id ?>">
                                              
                                            </div>
                                        </td>
                                        <td>
                                            <div id="fill_<?php echo $id ?>">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if($st == 0){
                                                    ?>
                                                    <input value="1" name="estado" onchange="cn69_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                    <?php
                                                    }else if($st == 1){
                                                    ?>
                                                    <input value="0" name="estado" onchange="cn69_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                                    <?php    
                                                    }
                                                    ?>
                                                </div>
                                            
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md69_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md69_r005_d2(5,<?php echo $id ?>)"  data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-plus"></i></button>
                                                <!--<button onclick="md69_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>-->
                                            </div>												
                                        </td>												
                                    </tr>
                                    <tr id="div_plus<?php echo $id ?>" <?php if($subtabla->num_rows==0){ echo 'style="display: none"' ;} ?>>
                                        <td colspan="4">
                                            <div id="subtable<?php echo $id ?>">
                                                <table class="display" style="width: 100%">
                                                    
                                                    <tbody>
                                                        <?php
                                                        
                                                        while ($menus = $subtabla->fetch_assoc()) {
                                                            $st = $menus['estado_menupag'];
                                                            $ids = $menus['id_menupag'];
                                                            $tip = $menus['tipo_menupag'];
                                                            $dettipo = $a->fn69_tipo_xid($tip);
                                                        ?>
                                                            <tr>
                                                                <td> <?php echo ($menus['nombre_menupag']) ?></td>

                                                                <td>
                                                                    
                                                                </td>
                                                                <td style="width: 15%">
                                                                    <div id="fill_<?php echo $ids ?>">
                                                                        <div class="custom-control custom-checkbox mb-3">
                                                                            <?php
                                                                            if($st == 0){
                                                                            ?>
                                                                            <input value="1" name="estado" onchange="cn69_f4(4, <?php echo $ids ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $ids ?>" required>
                                                                            <label class="custom-control-label" for="customCheckBox<?php echo $ids ?>">Inactivo</label>
                                                                            <?php
                                                                            }else if($st == 1){
                                                                            ?>
                                                                            <input value="0" name="estado" onchange="cn69_f4(4, <?php echo $ids ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $ids ?>" required>
                                                                            <label class="custom-control-label" for="customCheckBox<?php echo $ids ?>">Activo</label>
                                                                            <?php    
                                                                            }
                                                                            ?>
                                                                        </div>

                                                                    </div>
                                                                </td>
                                                                <td style="width: 17%">
                                                                    <div class="d-flex">
                                                                        <button onclick="md69_r006_d2(6,<?php echo $ids ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                                        <button onclick="md69_d4(4,<?php echo $ids ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                                                                    </div>												
                                                                </td>												
                                                            </tr>
                                                                
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
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
