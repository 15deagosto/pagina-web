<?php
require './funciones/fn-63.php';
require './funciones/fn-34.php';
$a = new Fn_63();
$fn34 = new Fn_34();
$tabla = $a->fn63_rproducto_all();
?>
<script src="./jsopc/jsopc-63.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Producto </h4>
                    <div class="btn-group mb-2">
                        <button onclick="md63_d1(9)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            SINCRONIZAR  <b class="caret m-l-5"></b>
                        </button>
                        <a href="index.php?opc=63"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md63_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table63">
                        <div id="cargando"  style="display: none" >
                            <img class="loader_animation" src="../assets/loader.gif"  /><br>
                        </div>
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Orden</th>
                                    <th>Nombre</th>
                                    <th>Imágen</th>
                                    <th>Banner</th>
<!--                                    <th>Imagen 2</th>-->
                                    <th>Linea Credito</th>
                                    <th>Tipo</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_prod'];
                                    $id = $menu['id_prod'];
                                    $tipo = $menu['tipo_prod'];
                                    $estado = $a->fn63_estado_xid($st);
                                    $tabla2 = $fn34->fn34_rlinea_credito_alles();
                                    $dettipo = $a->fn63_tipo_xid($tipo);
                                    ?>
                                    <tr>
                                        <td><input onkeyup="cn63_f13(13, this.value,<?php echo ($menu['id_prod']) ?>, event)" type="text" value="<?php echo ($menu['posicion_prod']) ?>" style="width: 50px;"><div id="i_orden<?php echo ($menu['id_prod']) ?>"></div></td>
                                        <td> <?php echo ($menu['nombre_prod']) ?></td>
                                        <td>
                                            <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                                            <button onclick='md63_d6(6, 1, 1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        </td>
                                        <td>
                                            <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                                            <button onclick='md63_d6(8, 2, 1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        </td>
    <!--                                        <td> 
                                            <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                                            <button onclick='md63_d6(6,2,1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        </td>-->
                                        <td>

                                            <select class="form-control" onchange="cn63_f8(8,<?php echo $id ?>, this.value)">
                                                <?php if ($menu['id_lineacred'] == "" || $menu['id_lineacred'] == null) { ?>
                                                    <option  value="0" >Ninguno</option>
                                                <?php } ?>
                                                <?php while ($menu2 = $tabla2->fetch_assoc()) { ?>
                                                    <option  value="<?php echo $menu2['id_lineacred'] ?>" <?php
                                                    if ($menu2['id_lineacred'] == $menu['id_lineacred']) {
                                                        echo("selected");
                                                    }
                                                    ?>><?php echo ($menu2['nombre_lineacred']) ?></option>
                                                         <?php } ?>
                                            </select>
                                            <div id="div_result2<?php echo $id ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <select class="form-control" onchange="cn63_f7(7,<?php echo $id ?>, this.value)">
                                                <option <?php if ($tipo == 0) echo("selected"); ?> value="0">Ninguno</option> 
                                                <option <?php if ($tipo == 1) echo("selected"); ?> value="1">Crédito Normal</option> 
                                                <option <?php if ($tipo == 2) echo("selected"); ?> value="2">Inversión</option>  
                                                <option <?php if ($tipo == 3) echo("selected"); ?> value="3">Ahorro</option>  
                                                <option <?php if ($tipo == 4) echo("selected"); ?> value="4">Cuentas</option> 
                                                <option <?php if ($tipo == 5) echo("selected"); ?> value="5">Microcrédito</option> 
                                                <option <?php if ($tipo == 6) echo("selected"); ?> value="6">Crédito Consumo</option> 
                                            </select>
                                            <div id="selec<?php echo $id ?>">

                                            </div>
                                        </td>
                                        <td>

                                            <div class="custom-control custom-checkbox mb-3">
                                                <?php
                                                if ($st == 0) {
                                                    ?>
                                                    <input value="1" name="estado" onchange="cn63_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                    <?php
                                                } else if ($st == 1) {
                                                    ?>
                                                    <input value="0" name="estado" onchange="cn63_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                                                <button onclick="md63_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md63_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                                                <button onclick="md63_d5(5,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-book"></i></button>
                                                <button onclick="md63_d7(7,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-list"></i></button>
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
