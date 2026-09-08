<?php
require '../controlador/conexion.php';
require '../funciones/fn-99.php';
$opc_mod = $_POST['dato_0'];
$fn99 = new Fn_99();



if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nuevo Indicador</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_nuevo" method="post">
                            <input type="hidden" value="1" name="dato_0">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Nombre</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_indicador" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea id="id" name="desc_indicador" class="form-control" rows="5" cols="10"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Total</label>
                                <div class="col-sm-12">
                                    <input type="text" name="total_indicador" class="form-control" placeholder="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="cn99_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn99->fn99_rindicador_x($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Indicador</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="col-md-12" id="div_editar"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_editar" method="post">
                            <input type="hidden" value="2" name="dato_0">
                            <input type="hidden" value="<?php echo $id ?>" name="dato_1">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Nombre</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nombre_indicador" class="form-control" placeholder="" value="<?php echo ($tupla[0]['nombre_indicador']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Descripción</label>
                                <div class="col-sm-12">
                                    <textarea id="id" name="desc_indicador" class="form-control" rows="5" cols="10"><?php echo ($tupla[0]['desc_indicador']) ?></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Total</label>
                                <div class="col-sm-12">
                                    <input type="text" name="total_indicador" class="form-control" placeholder="" value="<?php echo ($tupla[0]['total_indicador']) ?>">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button onclick="cn99_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn99->fn99_ravisos_x($id);
    ?>
    
    <?php
}

if ($opc_mod == 4) {
    $id = $_POST['dato_1'];
    ?>
    <div class="modal-content" id="content_sm">
        <div class="modal-header">
            <h5 class="modal-title">Eliminar registro</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="POST" id="frm_delete">
                <input type="hidden" name="dato_0" value="4">
                <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                <label> Está seguro que desea eliminar este registro ?</label>
                <button type="button" class="btn btn-danger light" data-dismiss="modal">NO</button>
                <button type="button" onclick="cn99_f10(10, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}

if ($opc_mod == 5) {
    $id = $_POST['dato_1'];
    $tupla = $fn99->fn99_rnosotros_xtextos($id);
    ?>
    <div class="modal-content" id="content_sm">
        <div class="modal-header">
            <h5 class="modal-title">Editar texto  <?php echo ($tupla[0]['nombre_prod']) ?></h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="">
                <div class="row">
                    <div class="col-md-12" id="div_editar"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="basic-form">
                            <form class="form-valide" id="frm_editartxt" method="post">
                                <input type="hidden" value="5" name="dato_0">
                                <input type="hidden" value="<?php echo $id ?>" name="dato_1">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Texto 1</label>
                                    <div class="col-sm-12">
                                        <textarea  name="texto1_prod" rows="5" cols="47"><?php echo ($tupla[0]['texto1_prod']) ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Texto 1</label>
                                    <div class="col-sm-12">
                                        <textarea  name="texto2_prod" rows="5" cols="47"><?php echo ($tupla[0]['texto2_prod']) ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-form-label">Texto 3</label>
                                    <div class="col-sm-12">
                                        <textarea  name="texto3_prod" rows="5" cols="47"><?php echo ($tupla[0]['texto3_prod']) ?></textarea>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
            <button onclick="cn99_f5()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
        </div>
    </div>
    <?php
}

if ($opc_mod == 6) {
    $id_indicador = $_POST['dato_1'];
    $tabla = $fn99->fn99_rindicador_mes_allx($id_indicador);
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Indicadores </h4>
                        <div class="btn-group mb-2">
                            <button onclick="cn99_f6(6,<?php echo $id_indicador ?>)" type="button"  class="btn btn-primary light  px-3" data-toggle="dropdown">
                                <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" id="table99mod">
                            <table style="width: 100% !important" id="example4" class="display table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th>Año</th>
                                        <th>Mes</th>
                                        <th>Valor</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($menu = $tabla->fetch_assoc()) {
                                        $id = $menu['id_indicadormes'];
                                        $mes = $menu['mes_indicadormes'];
                                        $anio = $menu['anio_indicadormes'];
                                        $anio_actual = date('Y');
                                        ?>
                                        <tr>
                                            <td> 
                                                <select class="form-control" id="anio_indicadormes<?php echo $id ?>">
                                                    <option <?php if( ($anio) == date("Y",strtotime($anio_actual."- 5 year"))){echo("selected");}?> 
                                                        value="<?php echo date("Y",strtotime($anio_actual."- 5 year")); ?>"><?php echo date("Y",strtotime($anio_actual."- 5 year")); ?></option> 
                                                    <option <?php if( ($anio) == date("Y",strtotime($anio_actual."- 4 year"))){echo("selected");}?> 
                                                        value="<?php echo date("Y",strtotime($anio_actual."- 4 year")); ?>"><?php echo date("Y",strtotime($anio_actual."- 4 year")); ?></option> 
                                                    <option <?php if( ($anio) == date("Y",strtotime($anio_actual."- 3 year"))){echo("selected");}?> 
                                                        value="<?php echo date("Y",strtotime($anio_actual."- 3 year")); ?>"><?php echo date("Y",strtotime($anio_actual."- 3 year")); ?></option> 
                                                    <option <?php if( ($anio) == date("Y",strtotime($anio_actual."- 2 year"))){echo("selected");}?> 
                                                        value="<?php echo date("Y",strtotime($anio_actual."- 2 year")); ?>"><?php echo date("Y",strtotime($anio_actual."- 2 year")); ?></option> 
                                                    <option <?php if( ($anio) == date("Y",strtotime($anio_actual."- 1 year"))){echo("selected");}?> 
                                                        value="<?php echo date("Y",strtotime($anio_actual."- 1 year")); ?>"><?php echo date("Y",strtotime($anio_actual."- 1 year")); ?></option> 
                                                    <option <?php if( ($anio) == $anio_actual){echo("selected");}?> 
                                                        value="<?php echo $anio_actual ?>"><?php echo $anio_actual; ?></option> 

                                                </select>
                                            </td>
                                            <td> 
                                                <select class="form-control" id="mes_indicadormes<?php echo $id ?>">
                                                    <?php 
                                                    $Meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                                                    for ($index = 1;$index < 13;$index++) {
                                                    ?>
                                                    <option <?php if( ($mes) == $index){echo("selected");}?> value="<?php echo $index ?>"><?php echo $Meses[$index-1] ?></option> 
                                                    <?php } ?>

                                                </select>
                                            </td>
                                            
                                            <td> <input type="text" id="valor_indicadormes<?php echo $id ?>" class="form-control" value="<?php echo ($menu['valor_indicadormes']) ?>"> </td>
                                            
                                            <td>
                                                <div class="d-flex">
                                                    <button onclick="cn99_f8(8,<?php echo $id ?>)"  class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-save"></i></button>
                                                    <button onclick="cn99_f11(11,<?php echo $id ?>,<?php echo $id_indicador ?>)"  class="btn btn-secondary shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                                                    <div id="div_response<?php echo $id ?>"></div>

                                                </div>												
                                            </td>												
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#example4').dataTable();
    </script>
    <?php
}

