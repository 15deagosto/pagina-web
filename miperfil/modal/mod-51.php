<?php
require '../controlador/conexion.php';
require '../funciones/fn-51.php';
$opc_mod = $_POST['dato_0'];
$fn51 = new Fn_51();



if ($opc_mod == 1) {
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Nueva Agencia</h5>
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
                                    <input type="text" name="nombre_nosotros" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Dirección</label>
                                <div class="col-sm-12">
                                    <input type="text" name="direccion_nosotros" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Telefono 1</label>
                                <div class="col-sm-12">
                                    <input type="text" name="tele1_nosotros" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Telefono 2</label>
                                <div class="col-sm-12">
                                    <input type="text" name="tele2_nosotros" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" name="red1_nosotros" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label style="margin-left: 20px; font-weight: 700">País *</label>
                                    <select class="form-control"  onchange="cn51_r011_d3(11,this.value)">
                                        <option value="" selected="selected">Selecciona un País </option>
                                        <?php 
                                        $listzonapa = $fn51->fn51_rzona_all(1,'mundo');
                                        while ($menupa = $listzonapa->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo ($menupa['id_zona']) ?>"><?php echo ($menupa['lugar_zona']) ?> </option>
                                        <?php 
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12" id="div_provincia_usu">
                                    <label style="margin-left: 20px; font-weight: 700">Provincia *</label>
                                    <select class="form-control" >
                                        <option value="" selected="selected">Selecciona una Provincia </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12" id="div_canton_usu">
                                    <label style="margin-left: 20px; font-weight: 700">Cantón *</label>
                                    <select class="form-control">
                                        <option value="" selected="selected">Selecciona un Cantón </option>
                                    </select>
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Horario</label>
                                <div class="col-sm-12">
                                    <input type="text" name="horario_nosotros" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Posición</label>
                                <div class="col-sm-12">
                                    <input type="text" name="posicion_nosotros" class="form-control" placeholder="">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Latitud</label>
                                <div class="col-sm-12">
                                    <input type="text" name="x_nosotros" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Longitud</label>
                                <div class="col-sm-12">
                                    <input type="text" name="y_nosotros" class="form-control" placeholder="">
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
        <button type="button"  onclick="cn51_f1()" data-dismiss="modal" class="btn btn-warning" >Guardar </button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $id = $_POST['dato_1'];
    $tupla = $fn51->fn51_rnosotros_x($id);
    $detzona =  $fn51->fn51_rzona_xid($tupla[0]['zona_nosotros']);
//    print_r($detzona);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Editar Agencia</h5>
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
                                    <input type="text" name="nombre_nosotros" class="form-control" value="<?php echo ($tupla[0]['nombre_nosotros']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Dirección</label>
                                <div class="col-sm-12">
                                    <input type="text" name="direccion_nosotros" class="form-control" value="<?php echo ($tupla[0]['direccion_nosotros']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Telefono 1</label>
                                <div class="col-sm-12">
                                    <input type="text" name="tele1_nosotros" class="form-control" value="<?php echo ($tupla[0]['tele1_nosotros']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Telefono 2</label>
                                <div class="col-sm-12">
                                    <input type="text" name="tele2_nosotros" class="form-control" value="<?php echo ($tupla[0]['tele2_nosotros']) ?>">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" name="red1_nosotros" class="form-control"  value="<?php echo ($tupla[0]['red1_nosotros']) ?>">
                                </div>
                            </div>
                           <div class="form-group row">
                                <div class="col-md-12">
                                    <label style="margin-left: 20px; font-weight: 700">País *</label>
                                    <select class="form-control"  onchange="cn51_r011_d3(11,this.value)">
                                        <option value="" selected="selected">Selecciona un País </option>
                                        <?php 
                                        $listzonapa = $fn51->fn51_rzona_all(1,'mundo');
                                        while ($menupa = $listzonapa->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo ($menupa['id_zona']) ?>" <?php if($detzona[0]['idpais']==$menupa['id_zona']){ echo 'selected'; } ?>>
                                            <?php echo ($menupa['lugar_zona']) ?> 
                                        </option>
                                        <?php 
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12" id="div_provincia_usu">
                                    <label style="margin-left: 20px; font-weight: 700">Provincia *</label>
                                    <select class="form-control"  onchange="cn51_r012_d3(12,this.value)">
                                        <option value="" selected="selected">Selecciona una Provincia </option>
                                        <?php
                                        $listprov = $fn51->fn51_rzona_all(2, $detzona[0]['idpais']);
                                        while ($menup = $listprov->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo ($menup['id_zona']) ?>" <?php if($detzona[0]['idprovincia']==$menup['id_zona']){ echo 'selected'; } ?>>
                                            <?php echo ($menup['lugar_zona']) ?> 
                                        </option>
                                        <?php 
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12" id="div_canton_usu">
                                    <label style="margin-left: 20px; font-weight: 700">Cantón *</label>
                                    <select class="form-control" name="id_zona">
                                        <option value="" selected="selected">Selecciona un Cantón </option>
                                            <?php
                                            $listprov = $fn51->fn51_rzona_all(3, $detzona[0]['idprovincia']);
                                            while ($menup = $listprov->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo ($menup['id_zona']) ?>" <?php if($detzona[0]['idcanton']==$menup['id_zona']){ echo 'selected'; } ?>>
                                                <?php echo ($menup['lugar_zona']) ?> 
                                            </option>
                                            <?php 
                                            }
                                            ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Horario</label>
                                <div class="col-sm-12">
                                    <input type="text" name="horario_nosotros" class="form-control" value="<?php echo ($tupla[0]['horario_nosotros']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Posición</label>
                                <div class="col-sm-12">
                                    <input type="text" name="posicion_nosotros" class="form-control" value="<?php echo ($tupla[0]['posicion_nosotros']) ?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Latitud</label>
                                <div class="col-sm-12">
                                    <input type="text" name="x_nosotros" class="form-control" value="<?php echo ($tupla[0]['x_nosotros']) ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label">Longitud</label>
                                <div class="col-sm-12">
                                    <input type="text" name="y_nosotros" class="form-control" value="<?php echo ($tupla[0]['y_nosotros']) ?>">
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
        <button onclick="cn51_f2()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
    </div>
    <?php
}

if ($opc_mod == 3) {
    $id = $_POST['dato_1'];
    $tupla = $fn51->fn51_ravisos_x($id);
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
                <button type="button" onclick="cn51_f10(10, <?php echo $id ?>, -1)"  class="btn btn-primary" data-dismiss="modal">SI</button>
            </form>
        </div>

    </div>
    <?php
}

if ($opc_mod == 5) {
    $id = $_POST['dato_1'];
    $tupla = $fn51->fn51_rnosotros_xtextos($id);
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
            <button onclick="cn51_f5()" type="button" class="btn btn-warning" data-dismiss="modal">Guardar cambios</button>
        </div>
    </div>
    <?php
}

if ($opc_mod == 6) {
    $id = $_POST['dato_1'];
    $tabla = $fn51->fn51_rcordinadores_allx($id);
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Coordinadores </h4>
                        <div class="btn-group mb-2">
                            <button onclick="cn51_f6(6,<?php echo $id ?>)" type="button"  class="btn btn-primary light  px-3" data-toggle="dropdown">
                                <i class="fa fa-plus"></i> <b class="caret m-l-5"></b>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" id="table51mod">
                            <table id="example4" class="display table table-striped table-bordered" >
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Email</th>
                                        <th>Estado</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($menu = $tabla->fetch_assoc()) {
                                        $st = $menu['estado_coordinador'];
                                        $id = $menu['id_coordinador'];
                                        $estado = $fn51->fn51_estado_xid($st);
                                        ?>
                                        <tr>
                                            <td> <input type="text" id="nombre_coordinador<?php echo $id ?>" class="form-control" value="<?php echo ($menu['nombre_coordinador']) ?>"></td>
                                            <td> <input type="text" id="apellido_coordinador<?php echo $id ?>" class="form-control" value="<?php echo ($menu['apellido_coordinador']) ?>"></td>
                                            <td> <input type="text" id="mail_coordinador<?php echo $id ?>" class="form-control" value="<?php echo ($menu['mail_coordinador']) ?>"> </td>
                                            <td>
                                                <div id="fill_<?php echo $id ?>">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <?php
                                                        if ($st == 0) {
                                                            ?>
                                                            <input value="1" name="estado" onchange="cn51_f7(7, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                            <?php
                                                        } else if ($st == 1) {
                                                            ?>
                                                            <input value="0" name="estado" onchange="cn51_f7(7, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button onclick="cn51_f8(8,<?php echo $id ?>)"  class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-save"></i></button>
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
        $('#example3').dataTable();
    </script>
    <?php
}
if ($opc_mod == 7) {
    $id = $_POST['dato_1'];
    $tupla = $fn51->fn51_rnosotros_xtextos($id);
    ?>
    <div class="modal-header">
        <h5 class="modal-title">Sucursal "<?php echo ($tupla[0]['nombre_nosotros']) ?>"</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body" >
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form">
                    <form class="form-valide" id="frm_imagen" >
                        <center><h4>Imagen recomendada 800x800</h4></center>
                        <input type="hidden" name="dato_0" value="14" id="idato_0">
                        <input type="hidden" name="dato_1" value="<?php echo $id ?>">
                        <div id="div_editimagen">
                            <img src="../images/<?php echo $tupla[0]['imagen_nosotros'] ?>" width="400">
                        </div>
                        <input  name="dato_5"  type="file" data-theme="fas"><hr>
                         
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="cn62_f14()" class="btn btn-warning">Guardar imagen</button>
    </div>
    <?php
}

