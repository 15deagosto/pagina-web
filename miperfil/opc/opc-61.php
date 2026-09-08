<?php
require './funciones/fn-61.php';
$a = new Fn_61();
$tabla = $a->fn61_rindicadores_all();
?>
<script src="./jsopc/jsopc-61.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Indicadores </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=61"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md61_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table61">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Dato</th>
                                    <th>Sucursal</th>
                                    <th>Tipo</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_indicador'];
                                    $tipo = $menu['tipo_indicador'];
                                    $id = $menu['id_indicador'];
                                    
                                    switch ($tipo) {
                                        case 0:
                                            $destipo = "No seleccionado";
                                            break;
                                        case 1:
                                            $destipo = "Crecimiento";
                                            break;
                                        case 2:
                                            $destipo = "Crédito";
                                            break;
                                        case 3:
                                            $destipo = "Inversión";
                                            break;
                                    }
                                ?>
                                    <tr>
                                        <td> <?php echo ($menu['fecha_indicador']) ?> </td>
                                        <td> <?php echo ($menu['dato_indicador']) ?> </td>
                                        <td> 
                                            <?php
                                            if($menu['sucursal_indicador'] == ""){
                                                echo "No necesita sucursal.";
                                            }else{
                                                echo ($menu['sucursal_indicador']);
                                            }
                                            ?> 
                                        </td>
                                        <td>
                                            <div id="fill_<?php echo $id ?>">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <select onchange="cn61_f3(3, <?php echo $id ?>, this.value)" class="form-control" name="tipo_trabajo">
                                                        <option value="<?php echo $tipo ?>"><?php echo $destipo ?></option>
                                                        <option value="0">-- Seleccionar --</option>
                                                        <option value="1">Crecimiento</option>
                                                        <option value="2">Crédito</option>
                                                        <option value="3">Inversión</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div id="fill_<?php echo $id ?>">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if($st == 0){
                                                    ?>
                                                    <input value="1" name="estado" onchange="cn61_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                    <?php
                                                    }else{
                                                    ?>
                                                    <input value="0" name="estado" onchange="cn61_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                                    <?php    
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md61_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md61_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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
