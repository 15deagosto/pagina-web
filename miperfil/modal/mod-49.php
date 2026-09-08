<?php
require '../controlador/conexion.php';
require '../funciones/fn-49.php';
$opc_mod = $_POST['dato_0'];
$fn49 = new Fn_49();

if ($opc_mod == 1) {
    $id = $_POST['dato_1'];
    $detempresa = $fn49->fn49_rempresa_x($id);
    $listrelacioncomercial = $fn49->fn49_rrelacioncomercial_xid($id);
    $listreferecia = $fn49->fn49_rreferencia_xid($id,1);  
    $detzona = $fn49->fn49_rzona_x($detempresa[0]['id_zona']);
    $tipo1=$detempresa[0]['tipopersona_empresa'];
    $txttipo1 = 'NATURAL';
    if($tipo1==1){
        $txttipo1 = 'JURIDICO';
    }
    $tipo2=$detempresa[0]['tipo_empresa'];
    $txttipo2 = 'CEDULA';
    if($tipo2==1){
        $txttipo2 = 'RUC';
    }if($tipo2==1){
        $txttipo2 = 'PASAPORTE';
    }
    ?>
    <div class="modal-header">
        <h5 class="modal-title">PROVEEDOR "<?php echo ($detempresa[0]['representante_empresa']) ?>"</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        <form class="form-valide" id="frm_editar" >
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label" style="font-weight: 800">DATOS DE LA PERSONA NATURAL / JURÍDICA:</label>
                                <label class="col-sm-3 col-form-label">TIPO DE PERSONA:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $txttipo1 ?></label>
                                <label class="col-sm-3 col-form-label">NOMBRE:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['representante_empresa'])?></label>
                                <label class="col-sm-3 col-form-label">TIPO DE DOCUMENTO:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $txttipo2 ?></label>
                                <label class="col-sm-3 col-form-label">DOCUMENTO:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $detempresa[0]['ruc_empresa'] ?></label>
                                <label class="col-sm-3 col-form-label">ACTIVIDAD ECONOMICA:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['actividad_empresa']) ?></label>
                                <label class="col-sm-3 col-form-label">FECHA DE INICIO DE ACTIVIDADES EN EL SRI:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['fechinsri_empresa']) ?></label>
                                <label class="col-sm-3 col-form-label">PAIS DE CONSTITUCIÓN:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['paisrepre_empresa']) ?></label>
                                <label class="col-sm-3 col-form-label">PRODUCTO PRINCIPAL:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['prodprincipal_empresa']) ?></label>
                                <label class="col-sm-12 col-form-label" style="font-weight: 800">DIRECCIÓN DEL NEGOCIO</label>
                                <label class="col-sm-3 col-form-label">PAÍS:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $detzona[0]['pais'] ?></label>
                                <label class="col-sm-3 col-form-label">PROVINCIA:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $detzona[0]['provincia'] ?></label>
                                <label class="col-sm-3 col-form-label">CANTÓN:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $detzona[0]['canton'] ?></label>
                                <label class="col-sm-3 col-form-label">EMAIL:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['email_empresa']) ?></label>
                                <label class="col-sm-3 col-form-label">TELÉFONO:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['tlf1_empresa']) ?></label>
                                <label class="col-sm-3 col-form-label">CELULAR:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['tlf2_empresa']) ?></label>
                                <label class="col-sm-12 col-form-label" style="font-weight: 800">DATOS DEL ASESOR COMERCIAL O CONTACTO:</label>
                                <label class="col-sm-3 col-form-label">NOMBRE:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['tlf2_empresa'].' '.$detempresa[0]['apellido_conemp']) ?></label>
                                <label class="col-sm-3 col-form-label">CARGO:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['cargo_conemp']) ?></label>
                                <label class="col-sm-3 col-form-label">EMAIL:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['email_conemp']) ?></label>
                                <label class="col-sm-3 col-form-label">TELEFONO:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['tlf1_conemp']) ?></label>
                                <label class="col-sm-3 col-form-label">CELULAR:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['tlf2_conemp']) ?></label>
                                <label class="col-sm-12 col-form-label" style="font-weight: 800">PERFIL FINANCIERO ( NIVEL DE VENTAS MENSUALES ):</label>
                                <label class="col-sm-3 col-form-label">AÑO:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($detempresa[0]['anio_empresa']) ?></label>
                                <label class="col-sm-3 col-form-label">INGRESOS:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo number_format($detempresa[0]['ingreso_empresa'],2) ?></label>
                                <label class="col-sm-3 col-form-label">EGRESOS:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo number_format($detempresa[0]['egreso_empresa'],2) ?></label>
                                <label class="col-sm-3 col-form-label">UTILIDAD BRUTA:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo number_format($detempresa[0]['utilidadbruto_empresa'],2) ?></label>
                                <label class="col-sm-3 col-form-label">ACTIVOS:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo number_format($detempresa[0]['pasivos_empresa'],2) ?></label>
                                <label class="col-sm-3 col-form-label">PASIVOS:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo number_format($detempresa[0]['activos_empresa'],2) ?></label>
                                <label class="col-sm-3 col-form-label">PATRIMONIO:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo number_format($detempresa[0]['patrimonio_empresa'],2) ?></label>
                                <label class="col-sm-12 col-form-label" style="font-weight: 800">DATOS DE LA RELACIÓN COMERCIAL:</label>
                                <?php 
                                while ($menuRC = $listrelacioncomercial->fetch_assoc()) { 
                                ?>
                                <label class="col-sm-3 col-form-label">PRODUCTO OFERTADO:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($menuRC['prodofertado_relcom']) ?></label>
                                <label class="col-sm-3 col-form-label">SERVICIO OFERTADO:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($menuRC['servofertado_relcom']) ?></label>
                                <label class="col-sm-3 col-form-label">CATEGORIA:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($menuRC['nombre_catcom']) ?></label>
                                <?php 
                                }
                                ?>
                                <label class="col-sm-12 col-form-label" style="font-weight: 800">REFERENCIAS:</label>
                                <label class="col-sm-12 col-form-label">FINANCIERAS:</label>
                                <?php 
                                while ($menuR = $listreferecia->fetch_assoc()) {  
                                    $tipoc = $menuR['tipocuenta_referencia'];
                                    $txttipoc = 'AHORROS';
                                    if($tipoc==2){
                                        $txttipoc = 'CORRIENTE';
                                    }
                                ?>
                                <label class="col-sm-3 col-form-label">INTITUCIÓN FINANCIERA:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($menuR['instituto_referencia']) ?></label>
                                <label class="col-sm-3 col-form-label">CUENTA:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo $txttipoc ?></label>
                                <label class="col-sm-3 col-form-label">NRO.CUENTA O TARGETA:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($menuR['numcuenta_referencia']) ?></label>
                                <?php 
                                }
                                ?>
                                <label class="col-sm-12 col-form-label">COMERCIALES:</label>
                                <?php 
                                $listreferecia = $fn49->fn49_rreferencia_xid($id,2);  
                                while ($menuR = $listreferecia->fetch_assoc()) {  
                                ?>
                                <label class="col-sm-3 col-form-label">ESTABLECIMIENTO COMERCIAL:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($menuR['instituto_referencia']) ?></label>
                                <label class="col-sm-3 col-form-label">DIRECIÓN:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($menuR['direccion_referencia']) ?></label>
                                <label class="col-sm-3 col-form-label">TELÉFONO:</label>
                                <label class="col-sm-3 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php echo ($menuR['tlf_referencia']) ?></label>
                                <?php 
                                }
                                ?>
                                <label class="col-sm-3 col-form-label">Suscripció para envio de correos:</label>
                                <label class="col-sm-9 col-form-label" style="border-bottom: 1px dotted #A2A2A3"><?php if($detempresa[0]['terminos_empresa']==1){ echo 'ACEPTADO'; }else{ echo 'RECHAZADO'; }  ?></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
    </div>
    <?php
}

if ($opc_mod == 2) {
    $fechaactual = date('Y-m-d');
    $fechantes = date("Y-m-d",strtotime($fechaactual."- 1 month"));
    ?>
    <!-- Material color picker -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <div class="modal-header">
        <h5 class="modal-title">Filtros</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="basic-form">
                        
                        <form class="form-valide" id="frm_filtromod" method="post">
                            <input type="hidden" value="2" name="dato_0">
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Fecha Desde</label>
                                <label class="col-sm-6 col-form-label">Fecha Hasta</label>
                                <div class="col-sm-6">
                                    <input type="date" name="fechadesde" class="form-control" value="<?php echo $fechantes ?>">
                                </div>
                                
                                <div class="col-sm-6">
                                    <input type="date" name="fechasta" class="form-control" value="<?php echo $fechaactual ?>">
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
        <button type="button"  onclick="cn49_r002_f1()" data-dismiss="modal" class="btn btn-warning" >Aplicar </button>
    </div>
    <?php

}