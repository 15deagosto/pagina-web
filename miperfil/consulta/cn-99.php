<?php
require '../controlador/conexion.php';
require '../funciones/fn-99.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn99 = new Fn_99();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn99->fn99_rindicador_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_indicador = ($_POST['nombre_indicador']);
    $desc_indicador = ($_POST['desc_indicador']);
    $color_indicador = ($_POST['color_indicador']);
    $total_indicador = ($_POST['total_indicador']);
    $tipo_indicador = 0;
    $estado = 1;
    $cuenta = $fn99->fn99_cindicador_xdata($nombre_indicador, $desc_indicador, $color_indicador, $total_indicador,$tipo_indicador,$estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn99->fn99_rindicador_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $nombre_indicador = ($_POST['nombre_indicador']);
    $desc_indicador = ($_POST['desc_indicador']);
    $color_indicador = ($_POST['color_indicador']);
    $total_indicador = ($_POST['total_indicador']);
    $cuenta = $fn99->fn99_uindicador_x($nombre_indicador, $desc_indicador, $color_indicador, $total_indicador,$id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn99->fn99_rindicador_all();
    $include = 1;
}

if ($opc_cn == 3) {

}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $st = $_POST['dato_2'];
    $cuenta = $fn99->fn99_uindicador_xest($id, $st);
    if ($cuenta==0) {
        ?>
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
        <label style="color: red"><i class="fa fa-exclamation"></i></label>
        <?php
    } else {
        ?>
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
        <label style="color: green"><i class="fa fa-check"></i></label>
        <?php
    }
    //$tabla = $fn99->fn99_rnosotros_all();
    //$include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $texto1_prod = $_POST['texto1_prod'];
    $texto2_prod = $_POST['texto2_prod'];
    $texto3_prod = $_POST['texto3_prod'];
    $cuenta = $fn99->fn99_unosotros_xtexto($texto1_prod, $texto2_prod,$texto3_prod,$id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn99->fn99_rindicador_all();
    $include = 1;
    
}
if ($opc_cn == 6) {
    $id_indicador = $_POST['dato_1'];
    $anio_indicadormes = date('Y');
    $mes_indicadormes = date('m');
    $cuenta = $fn99->fn99_cindicador_mes_xdata($id_indicador, 0, $mes_indicadormes, $anio_indicadormes);
    $tabla = $fn99->fn99_rindicador_mes_allx($id_indicador);
    $include = 2;
    
}

if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $tipo2 = $_POST['dato_2'];
    $cuenta = $fn99->fn99_utipo2_indicador_xest($id, $tipo2);
    $txttipo2 = $fn99->fn99_tipo2_xid($tipo2);
    if ($cuenta==0) {
        ?>
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
        <label style="color: red"><i class="fa fa-exclamation"></i></label>
        <?php
    } else {
        ?>
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
        <label style="color: green"><i class="fa fa-check"></i></label>
        <?php
    }
}

if ($opc_cn == 8) {
    $id = ($_POST['dato_1']);
    $anio_indicadormes = ($_POST['dato_2']);
    $mes_indicadormes= ($_POST['dato_3']);
    $valor_indicadormes = ($_POST['dato_4']);
    $cuenta = $fn99->fn99_uindicador_mes_xupdate($anio_indicadormes,$mes_indicadormes,$valor_indicadormes,$id);
    if ($cuenta==1) {
        ?>
        <label style="color: green"><i class="fa fa-check"></i></label>
        <?php
    } else {
        ?>
        <label style="color: red"><i class="fa fa-exclamation"></i></label>
        <?php
    }
    
}

if ($opc_cn == 9) {
    $id = $_POST['dato_1']; 
    $valor = $_POST['dato_2']; 
    $cuenta = $fn99->fn99_utipo_indicador_xtipo($valor, $id);
    if ($cuenta==1) {
        ?>
        <label><i class="fa fa-check"></i></label>
        <?php
    } else {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
}

if ($opc_cn == 10) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn99->fn99_uindicador_xest($id, $estado);
    $tabla = $fn99->fn99_rindicador_all();
    $include = 1;
}

if ($opc_cn == 11) {
    $id = $_POST['dato_1'];
    $id_indicador = $_POST['dato_2']; 
    $cuenta = $fn99->fn99_dtipo_indicador_xtipo($id);
//    echo "HOLA".$id_indicador;
    $tabla = $fn99->fn99_rindicador_mes_allx($id_indicador);
    $include = 2;
}
//INCLUDE

if ($include == 1) {
    ?>
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
                $estado = $fn99->fn99_estado_xid($st);
                $tipo = $menu['tipo_indicador'];
                $tipo2 = $menu['tipo2_indicador'];
                $txttipo2 = $fn99->fn99_tipo2_xid($tipo2);
                ?>
                <tr>
                    <td><?php echo ($menu['nombre_indicador']) ?></td>
                    <td> 
                        <select class="form-control" onchange="cn99_f9(9,<?php echo $id ?>, this.value)">
                            <?php if(($tipo) ==0 ){ ?>
                            <option <?php if( ($tipo) ==0){echo("selected");}?> value="0">Sin Ninguno</option> 
                            <?php } ?>
                            <?php 
                            for ($index = 1;$index < 11;$index++) {
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
    <script>
        $('#example3').dataTable();
    </script>
    <?php
}

if ($include == 2) {
    ?>
    <table id="example4" class="display table table-striped table-bordered" >
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
    <script>
        $('#example4').dataTable();
    </script>
    <?php
}

