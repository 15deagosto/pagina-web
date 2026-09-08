<?php
require './funciones/funcion-transparencia.php';
$a = new Transparencia();
$fecha = date('Y-m-d');
$trae_balance = $a->trae_balance();
?>
<script src="./jsopc/jsopc-52.js"></script>
<div class="">
    <form id="i_estadoform">
        <input type="hidden" name="opcstate" id="i_opcstate">
        <input type="hidden" name="datastate" id="i_datastate">
        <input type="hidden" name="idstate" id="i_idstate">
    </form>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h2>Datos de transparencia </h2>
                </div>
                <div class="card-body">
                    <div id="i_cambioresultado">
                        <div class="x_content">
                            <div class="row">

                                <div class="col-md-3">
                                    <form method="post" action="crud/gest-opc-52.php" >
                                        <input type="hidden" name="id_opc" id="i_opc" value="4">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo Balance</button>
                                    </form>
                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-6">
                                    <?php if (isset($_GET['msg'])) { ?>
                                        <div class="alert alert-info alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <strong>Mensaje!</strong>  <?php echo $msg ?> .
                                        </div>
                                    <?php } ?>
                                    <?php if (isset($_GET['msge'])) { ?>
                                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <strong>Mensaje!</strong>  <?php echo $msge ?> .
                                        </div>
                                    <?php } ?>
                                </div>

                            </div>
                            <hr>
                            <div id="table52">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Archivo</th>
                                            <th>Estado</th>
                                            <th>Fecha</th>
                                            <th>Posición</th>
                                            <th></th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                        for ($i = 0; $i < count($trae_balance); $i++) {
                                            $estado = $trae_balance[$i]['estado_transp'];
                                            $codigo = $trae_balance[$i]['id_transp'];
                                            ?>
                                            <tr>
                                                <td><?php echo ($trae_balance[$i]['nombre_transp']) ?></td>
                                                <td><a href="../pdf/<?php echo ($trae_balance[$i]['url_transp']) ?>" target="_blank"><?php echo ($trae_balance[$i]['url_transp']) ?></a></td>
                                                <td><div id="id_estado<?php echo $trae_balance[$i]['id_transp'] ?>">
                                                        <a onclick="estadoBalance(<?php echo $estado ?>, 'ABA',<?php echo ($trae_balance[$i]['id_transp']) ?>)" style="cursor: pointer">
                                                            <?php echo $a->trae_estado($trae_balance[$i]['estado_transp']) ?></a>

                                                    </div>
                                                </td>
                                                <td><?php echo ($trae_balance[$i]['fecha_transp']) ?></td>
                                                <td><a href="" data-toggle="modal" data-target=".posicionamiento<?php echo ($codigo) ?>">
                                                    <?php echo ($trae_balance[$i]['posi_transp']) ?><i class="fa fa-edit"></i></a>

                                                </td>
                                                <td> 
                                                    <a href="" data-toggle="modal" data-target=".detalles<?php echo ($codigo) ?>">
                                                        <i class="fa fa-hand-paper-o"></i></a>
                                                    <a href="" data-toggle="modal" data-target=".archivos<?php echo ($codigo) ?>">
                                                        <i class="fa fa-file"></i></a>
                                                </td>

                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                                
                            <!--modal eliminar-->
                            <?php
                            for ($i = 0; $i < count($trae_balance); $i++) {
                                $codigo = $trae_balance[$i]['id_transp'];
                                ?>
                                <div class="modal fade detalles<?php echo ($trae_balance[$i]['id_transp']) ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel2">Editar Título</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form  id="frm_promos" role="form" method="post" action="crud/gest-opc-52.php" enctype="multipart/form-data">
                                                            <input type="hidden" name="id_opc" value="1">
                                                            <input type="hidden" name="id_transp" value="<?php echo ($trae_balance[$i]['id_transp']); ?>">
                                                            <div class="form-group">
                                                                <label class="control-label " for="input-codigo">Título</label> 
                                                                <input name="nombre_transp" value="<?php echo ($trae_balance[$i]['nombre_transp']); ?>" id="input-codigo" class="form-control" required="" type="text" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label " for="input-codigo">Fecha</label> 
                                                                <input name="fecha_transp" value="<?php echo ($trae_balance[$i]['fecha_transp']); ?>" id="input-codigo" class="form-control" required="" type="date" >
                                                            </div>

                                                            <button type="submit" class="btn btn-default"  >Guardar cambios</button>
                                                        </form>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade posicionamiento<?php echo ($trae_balance[$i]['id_transp']) ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel2">Posición</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form  id="frm_promos" role="form" method="post" action="crud/gest-opc-52.php" enctype="multipart/form-data">
                                                            <input type="hidden" name="id_opc" value="3">
                                                            <input type="hidden" name="id_transp" value="<?php echo ($trae_balance[$i]['id_transp']); ?>">
                                                            <div class="form-group">
                                                                <label class="control-label " for="input-codigo">Posición del archivo</label>
                                                                <select name="posi_transp" class="form-control" required="">
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">A más</option>
                                                                </select>

                                                            </div>

                                                            <button type="submit" class="btn btn-default"  >Guardar cambios</button>
                                                        </form>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade archivos<?php echo ($trae_balance[$i]['id_transp']) ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel2">Archivo Balance</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form  id="frm_img<?php echo ($trae_balance[$i]['id_transp']); ?>" role="form" method="post" action="crud/gest-cajawow.php" enctype="multipart/form-data">
                                                            <input type="hidden" name="id_opc" value="2">
                                                            <input type="hidden" name="id_transp" value="<?php echo ($trae_balance[$i]['id_transp']); ?>">
                                                            <label>Archivo actual</label>
                                                            <div id="i_imgres<?php echo ($trae_balance[$i]['id_transp']); ?>">
                                                                <a href="../pdf/<?php echo ($trae_balance[$i]['url_transp']) ?>" target="_blank"><?php echo ($trae_balance[$i]['url_transp']) ?></a>

                                                            </div>
                                                            <hr> 
                                                            <div class="input-group image-preview">
                                                                <input type="file" accept="" name="url_transp"/> <!-- rename it -->

                                                            </div>
                                                            <hr> 

                                                            <button type="button" onclick="cambiaImagen(<?php echo ($trae_balance[$i]['id_transp']); ?>)" class="btn btn-default"  >Guardar cambios</button>
                                                        </form>
                                                        <hr> 

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--                    banner-->
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

