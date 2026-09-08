<?php
require './funciones/fn-99.php';
$a = new Fn_99();
$tabla = $a->fn99_rindicador_all();
?>
<script src="./jsopc/jsopc-99.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Indicadores Financieros </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=99"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md99_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table99">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th style="width: 15%">Gráfico</th>
                                    <th style="width: 15%">Tipo</th>
                                    <th style="width: 13%">Estado</th>
                                    <th style="width: 13%">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_indicador'];
                                    $id = $menu['id_indicador'];
                                    $estado = $a->fn99_estado_xid($st);
                                    $tipo = $menu['tipo_indicador'];
                                    $tipo2 = $menu['tipo2_indicador'];
                                    $txttipo2 = $a->fn99_tipo2_xid($tipo2);
                                    ?>
                                    <tr>
                                        <td><?php echo ($menu['nombre_indicador']) ?></td>
                                        <td> 
                                            <select class="form-control" onchange="cn99_f9(9,<?php echo $id ?>, this.value)">
                                                <?php if(($tipo) ==0 ){ ?>
                                                <option <?php if( ($tipo) ==0){echo("selected");}?> value="0">Sin Ninguno</option> 
                                                <?php } ?>
                                                <?php 
                                                for ($index = 1;$index < 4;$index++) {
                                                ?>
                                                <option <?php if( ($tipo) == $index){echo("selected");}?> value="<?php echo $index ?>">Gráfico <?php echo $index ?></option> 
                                                <?php } ?>
                                                
                                            </select>
                                            <div id="selec<?php echo $id ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div id="fill2_<?php echo $id ?>" style="display: flex">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if ($tipo2 == 0) {
                                                        ?>
                                                        <input value="1" name="estado" onchange="cn99_f7(7, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="CheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="CheckBox<?php echo $id ?>"><?php echo $txttipo2 ?></label>
                                                        <?php
                                                    } else if ($tipo2 == 1) {
                                                        ?>
                                                        <input value="0" name="estado" onchange="cn99_f7(7, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="CheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="CheckBox<?php echo $id ?>"><?php echo $txttipo2 ?></label>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div id="fill_<?php echo $id ?>" style="display: flex">
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if ($st == 0) {
                                                        ?>
                                                        <input value="1" name="estado" onchange="cn99_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                        <?php
                                                    } else if ($st == 1) {
                                                        ?>
                                                        <input value="0" name="estado" onchange="cn99_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md99_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md99_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                                                <button onclick="md99_d6(6,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-primary light  btn-xs sharp mr-1" data-toggle="dropdown"><i class="fa fa-plus"></i></button>
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
