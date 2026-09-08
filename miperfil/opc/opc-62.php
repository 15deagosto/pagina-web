<?php
require './funciones/fn-62.php';
$a = new Fn_62();
$tabla = $a->fn62_rtextos_all();
?>
<script src="./jsopc/jsopc-62.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Textos </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=62"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
<!--                        <button onclick="md62_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>-->
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table62">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Fecha</th>
                                    <th>Tipo</th>
                                    <th>Imagen</th>
                                    <th>Gob. Corporativo</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_texto'];
                                    $id = $menu['id_texto'];
                                    $tip = $menu['tipo_texto'];
                                    $dettipo = $a->fn62_tipo_xid($tip);
                                ?>
                                    <tr>
                                        <td> <?php echo ($menu['titulo_texto']) ?></td>
                                        <td> <?php echo ($menu['fecha_texto']) ?> </td>
                                        <td>
                                            <select class="form-control" onchange="cn62_f6(6,<?php echo $id ?>, this.value)">
                                                <?php if(($tip) ==0 ){ ?>
                                                <option <?php if( ($tip) =="" || ($tip) ==null ){echo("selected");}?> value="0">Ninguno</option> 
                                                <?php }else{ ?>
                                                <option value="<?php echo $tip ?>"><?php echo $dettipo ?></option>
                                                <?php }?>
                                                <option value="5">MISION Y VISIÓN</option>
                                                <option value="1">BUENAS PRÁCTICAS AMBIENTALES</option> 
                                                <option value="2">TRASPARENCIA</option>
                                                <option value="3">POLÍTICA DE PRIVACIDAD</option> 
                                                <option value="4">RESPONSABILIDAD SOCIAL</option> 
                                            </select>
                                            <div id="selec<?php echo $id ?>">
                                              
                                            </div>
                                        </td>
                                        <td> 
                                            <button onclick='md62_d5(5,<?php echo $id?>,1)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs mr-1'><i class="fa fa-file-image-o fa-2x" ></i></button>
                                        </td>
                                        <td> 
                                            <button onclick='md62_d6(6,<?php echo $id?>,1)' data-toggle="modal" 
                                                    data-target="#modalcontent_md" 
                                                    class='btn btn-outline-primary shadow btn-xs mr-1'>
                                                <i class="fa fa-file-pdf-o fa-2x" ></i></button>
                                        </td>
                                        <td>
                                            <div id="fill_<?php echo $id ?>">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if($st == 0){
                                                    ?>
                                                    <input value="1" name="estado" onchange="cn62_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                    <?php
                                                    }else if($st == 1){
                                                    ?>
                                                    <input value="0" name="estado" onchange="cn62_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                                    <?php    
                                                    }
                                                    ?>
                                                </div>
                                            
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md62_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md62_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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
