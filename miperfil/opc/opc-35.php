<?php
require './funciones/fn-35.php';
$a = new Fn_35();
$tabla = $a->fn35_rresponsabilidad_social_all();
?>
<script src="./jsopc/jsopc-35.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Responsabilidad Social </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=35"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md35_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table35">
                        <div id="cargando" class="bg_load" style="display: none" >
                            <img class="loader_animation" src="../images/loading-gif.gif"  /><br>
                        </div>
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Título</th>
                                    <th>Fecha</th>
                                    <th>Autor</th>
                                    <th>Imagen</th>
<!--                                    <th>Imagen Detalle</th>-->
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_respsocial'];
                                    $id = $menu['id_respsocial'];
                                    $tipo = $menu['tipo_respsocial'];
                                    $estado = $a->fn35_estado_xid($st);
                                    $user = $a->fn35_ruserresponsabilidad_social_xid($id);
                                    switch($tipo) {
                                        case 0:
                                            $tiponot = "Normal";
                                        break;
                                        case 1:
                                            $tiponot = "Destacado";
                                        break;
                                        case 2:
                                            $tiponot = "Slider";
                                        break;
                                        case 3:
                                            $tiponot = "Actualidad";
                                        break;
                                    }
                                    ?>
                                    <tr>
                                        <td>  </td>
                                        <td> <?php echo ($menu['titulo_respsocial']) ?> </td>
                                        <td> <?php echo ($menu['fechainicio_respsocial']) ?> </td>
                                        <td> <?php echo ($user[0]['nombre_usuario'].' '.$user[0]['apellido_usuario']) ?> </td>
                                        <td> 
                                            <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                                            <button onclick='md35_d6(6,1,1,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        </td>
<!--                                        <td> 
                                            <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                                            <button onclick='md35_d6(7,1,1,<?php echo $id?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        </td>-->
                                        
                                        <td>
                                            
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if ($st == 0) {
                                                        ?>
                                                        <input value="1" name="estado" onchange="cn35_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                        <?php
                                                    } else if ($st == 1) {
                                                        ?>
                                                        <input value="0" name="estado" onchange="cn35_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                                                <button onclick="md35_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <button onclick="md35_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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
