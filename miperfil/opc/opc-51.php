<?php
require './funciones/fn-51.php';
$a = new Fn_51();
$tabla = $a->fn51_rnosotros_all();
?>
<script src="./jsopc/jsopc-51.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Agencias </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=51"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md51_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table51">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Direccónn</th>
                                    <th>Teléfono</th>
                                    <th>Tipo</th>
                                    <th>Imagen</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_nosotros'];
                                    $id = $menu['id_nosotros'];
                                    $estado = $a->fn51_estado_xid($st);
                                    $tipo = $menu['tipo_nosotros'];
                                    ?>
                                    <tr>
                                        <td><?php echo ($menu['nombre_nosotros']) ?></td>
                                        <td> <?php echo ($menu['direccion_nosotros']) ?> </td>
                                        <td> <?php echo ($menu['tele1_nosotros']) ?> </td>
                                        <td> 
                                            <select class="form-control" onchange="cn51_f9(9,<?php echo $id ?>, this.value)">
                                                <?php if(($tipo) ==0 ){ ?>
                                                <option <?php if( ($tipo) ==0){echo("selected");}?> value="0">Ninguno</option> 
                                                <?php } ?>
                                                <option <?php if( ($tipo) == 1){echo("selected");}?> value="1">Agencia</option> 
                                                <option <?php if( ($tipo) == 2){echo("selected");}?> value="2">Cajero</option>  
                                            </select>
                                            <div id="selec<?php echo $id ?>">
                                            </div>
                                        </td>
                                        <td> 
                                            <button onclick='md51_d7(7,<?php echo $id?>)' data-toggle="modal" 
                                                    data-target="#modalcontent_lg" 
                                                    class='btn btn-outline-primary shadow btn-xs mr-1'>
                                                <i class="fa fa-file-image-o fa-2x" ></i>
                                            </button>
                                        </td>
                                        
                                        <td>
                                            
                                            <div class="custom-control custom-checkbox mb-3">
                                                <?php
                                                if ($st == 0) {
                                                    ?>
                                                    <input value="1" name="estado" onchange="cn51_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                    <?php
                                                } else if ($st == 1) {
                                                    ?>
                                                    <input value="0" name="estado" onchange="cn51_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                                                <button onclick="md51_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md51_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                                                <!--<button onclick="md51_d6(6,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-primary light  btn-xs sharp mr-1" data-toggle="dropdown"><i class="fa fa-user-plus"></i></button>-->
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
