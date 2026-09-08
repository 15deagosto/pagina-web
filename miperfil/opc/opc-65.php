<?php
require './funciones/fn-65.php';
$a = new Fn_65();
$tabla = $a->fn65_rdocumentos_all();
?>
<script src="./jsopc/jsopc-65.js"></script>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Documentos </h4>
                    <div class="btn-group mb-2">
                        <a href="index.php?opc=65"  class="btn btn-warning light  px-3" >
                            <i class="fa fa-refresh"></i> <b class="caret m-l-5"></b>
                        </a>
                        <button onclick="md65_d1(1)" type="button" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-primary light  px-3" data-toggle="dropdown">
                            <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive" id="table65">
                        <div id="cargando" class="bg_load" style="display: none" >
                            <img class="loader_animation" src="../images/loading-gif.gif"  /><br>
                        </div>
                        <table id="example3" class="display">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Sección</th>
                                    <th>Archivo</th>
                                    <th>Imagen / Docuemnto</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['estado_doc'];
                                    $id = $menu['id_doc'];
                                    $estado = $a->fn65_estado_xid($st);
                                    $fecha = date("d-m-Y", strtotime($value['fecha_doc']));
                                    $tipo3 = $menu['tipo3_doc'];
                                    if ($tipo3 == 1) {
                                        $ntipo3 = "Instructivos";
                                    } elseif ($tipo3 == 2) {
                                        $ntipo3 = "Indicadores";
                                    } elseif ($tipo3 == 3) {
                                        $ntipo3 = "Gobernanza";
                                    } elseif ($tipo3 == 4) {
                                        $ntipo3 = "Información Financiera";
                                    } elseif ($tipo3 == 5) {
                                        $ntipo3 = "Cosede";
                                    } elseif ($tipo3 == 6) {
                                        $ntipo3 = "Organigrama";
                                    }elseif ($tipo3 == 7) {
                                        $ntipo3 = "Costos y Tarifarios por Servicio";
                                    }elseif ($tipo3 == 8) {
                                        $ntipo3 = "Protección de datos";
                                    }
                                    $tipo1 = $menu['tipo1_doc']; //1= IMAGEN , 2 = VIDEO, 3 = PDF, 4 = EXCEL
                                    if ($tipo1 == 1) {
                                        $ntipo1 = "Imagen";
                                    } elseif ($tipo1 == 2) {
                                        $ntipo1 = "Video";
                                    } elseif ($tipo1 == 3) {
                                        $ntipo1 = "PDF";
                                    } elseif ($tipo1 == 4) {
                                        $ntipo1 = "Excel";
                                    } elseif ($tipo1 == 5) {
                                        $ntipo1 = "Word";
                                    }
                                    $tipo2 = $menu['tipo2_doc']; //1= Interno , 2 = Externo
                                    ?>
                                    <tr>
                                        <td> <?php echo ($menu['titulo_doc']) ?></td>
                                        <td> 
                                            <select  name="tipo3" onchange="cn65_f8(7, 3,<?php echo $id ?>, this.value)">
                                                <option value="<?php echo $tipo3 ?>"><?php echo $ntipo3 ?></option>
                                                <option value="1">Instructivos</option>
                                                <option value="2">Indicadores</option>
                                                <option value="3">Gobernanza</option>
                                                <option value="4">Información Financiera</option>
                                                <option value="5">Cosede</option>
                                                <option value="6">Organigrama</option>
                                                <option value="7">Costos y Tarifarios por Servicio</option>
                                                <option value="8">Protección de datos</option>
                                            </select>
                                            <div id="select<?php echo $id ?>"> 
                                            </div>
                                        </td>
                                        <td> 
                                            <select  name="tipo1" onchange="cn65_f9(7, 1,<?php echo $id ?>, this.value)">
                                                <option value="<?php echo $tipo3 ?>"><?php echo $ntipo1 ?></option>
                                                <option value="1">Imagen</option>
                                                <option value="2">Video</option>
                                                <option value="3">PDF</option>
                                                <option value="4">Excel</option>
                                                <option value="5">Word</option>
                                            </select>
                                        </td>
                                <div id="select2<?php echo $id ?>"> 
                                </div>
                                <td> 
                                    <?php
                                    if ($tipo1 == 1) {
                                        if ($tipo2 == 1) {
                                            ?>
                                            <label><i class="fa fa-file-image-o fa-3x" ></i></label>
                                            <button onclick='md65_f7(6, 1,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        <?php } elseif ($tipo2 == 2) { ?>
                                            <img src="<?php echo ($menu['imagen_doc']) ?> " width="70px"/>
                                            <?php
                                        }
                                    } else {
                                        if ($tipo2 == 1) {
                                            ?>
                                            <a href="../documentos/<?php echo ($menu['url_doc']) ?>" target="_blank">
                                                <?php echo ($menu['url_doc']) ?>
                                            </a>
                                            <button onclick='md65_f7(6, 3,<?php echo $id ?>)' data-toggle="modal" data-target="#modalcontent_md" class='btn btn-outline-primary shadow btn-xs sharp mr-1'><i class='fa fa-upload'></i></button>
                                        <?php } elseif ($tipo2 == 2) { ?>
                                            <a href="<?php echo ($menu['url_doc']) ?>"></a>
                                        <?php }
                                    }
                                    ?>
                                </td>
                                <td>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <?php
                                        if ($st == 0) {
                                            ?>
                                            <input value="1" name="estado" onchange="cn65_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                            <?php
                                        } else if ($st == 1) {
                                            ?>
                                            <input value="0" name="estado" onchange="cn65_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                                        <button onclick="md65_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                        <button onclick="md65_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>

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
