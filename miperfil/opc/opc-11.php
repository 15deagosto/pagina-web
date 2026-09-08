<?php
require './funciones/fn-11.php';
$a = new Fn_11();
$tabla = $a->fn11_rusuario_all();

?>
<script src="./jsopc/jsopc-11.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Usuarios </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=11"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md11_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table11">
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Estado</th>
                                    <th>Roles</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_usuario'];
                                    $id = $menu['id_usuario'];
                                    $idrol = $menu['id_rol'];
                                    $mail = ($menu['email_usuario']);
                                    $estado = $a->fn11_estado_xid($st);
                                    $rolactivo = $a->fn11_rusuario_xrol($idrol);
                                    $roles = $a->fn11_rrol_all();
                                ?>
                                    <tr>
                                        <td> <?php echo ($menu['nombre_usuario']) ?></td>
                                        <td> <?php echo ($menu['apellido_usuario']) ?> </td>
                                        <td> <?php echo ($menu['email_usuario']) ?> </td>
                                        <td> <?php echo ($menu['telefono_usuario']) ?> </td>
                                        <td>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <div id="fill_<?php echo $id ?>">
                                                <?php
                                                if($st == 0){
                                                ?>
                                                <input value="1" name="estado" onchange="cn11_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                <?php
                                                }else if($st == 1){
                                                ?>
                                                <input value="0" name="estado" onchange="cn11_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                                <?php    
                                                }
                                                ?>
                                                </div>
                                            </div>
                                            
                                            
                                        </td>
                                        <td>
                                            <select onchange="cn11_f6(6,<?php echo $id ?>,this.value)">
                                                <option value="<?php echo $rolactivo[0]['id_rol'] ?>"><?php echo $rolactivo[0]['nombre_rol'] ?></option>
                                                <?php
                                                while ($detroles = $roles->fetch_assoc()) {
                                                ?>
                                                <option value="<?php echo $detroles['id_rol'] ?>"><?php echo $detroles['nombre_rol'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button onclick="md11_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md11_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                                                <button onclick="md11_d5(5,<?php echo $id ?>,'<?php echo $mail ?>')" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-key"></i></button>
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
