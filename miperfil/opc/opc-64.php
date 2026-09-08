<?php
require './funciones/fn-64.php';
$a = new Fn_64();
$tabla = $a->fn64_rpersonal_all();
?>
<script src="./jsopc/jsopc-64.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Personal </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=64"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md64_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table64">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Cargo</th>
                                    <th>Telefono</th>
                                    <th>Estado</th>
                                    <th>Tipo</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_per'];
                                    $id = $menu['id_per'];
                                    $tipo=$menu['tipo_per'];
                                    $estado = $a->fn64_estado_xid($st);
                                    if($tipo==1){
                                        $ntipo="GOBIERNO COOPERATIVO";
                                    }elseif ($tipo==2) {
                                         $ntipo="STAF EJECUTIVO";
                                    }elseif ($tipo==0) {
                                         $ntipo="NINGUNO";
                                    }
                                    ?>
                                    <tr>
                                        <td> <?php echo ($menu['titulo_per'].' '.$menu['nombre_per'].' '.$menu['apellido_per']) ?></td>
                                        <td> <?php echo ($menu['cargo_per']) ?> </td>
                                        <td> <?php echo ($menu['telefono1_per']) ?></td>
                                        <td>
                                            <div id="fill_<?php echo $id ?>">
                                                <div class="custom-control custom-checkbox mb-3" id="st_<?php echo $id ?>">
                                                    <?php
                                                    if ($st == 0) {
                                                        ?>
                                                        <input value="1" name="estado" onchange="cn64_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                        <?php
                                                    } else if ($st == 1) {
                                                        ?>
                                                        <input value="0" name="estado" onchange="cn64_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>                                        
                                            <select  onchange="cn64_f6(6,<?php echo $id ?>,this.value)">
                                                <option value="<?php echo $tipo ?>"><?php echo $ntipo ?></option>
                                                <option value="1">GOBIERNO COOPERATIVO</option>
                                                <option value="2">STAF EJECUTIVO</option>
                                            </select>
                                            <div id="select<?php echo $id ?>"> 
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md64_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md64_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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
