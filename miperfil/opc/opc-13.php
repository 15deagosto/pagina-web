<?php
session_start();
require './funciones/fn-13.php';
$a = new Fn13();
$rol = $a->fn13_r_rol_x_xestado();
?>
<script src="./jsopc/jsopc-13.js"></script>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">PERMISOS Y MENÚS</h4>
    <!--            <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target=".mod_1" onclick="mod41_001_d1(6)"><span
                    class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                </span>RESUMEN DE PROYECTOS Y AVANCES</button>-->

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-intro-title">ROL</h4>

                            <div class="">
                                <div id="external-events" class="my-3">
                                    <?php
                                    while ($datos = $rol->fetch_assoc()) {
                                        $id = $datos['id_rol'];
                                        ?>
                                        <div class="external-event" data-class="bg-primary">
                                            <button class="btn btn-secondary" onclick="cn13_001_d2(1,<?php echo $id ?>)" style="width: 90%">
                                                <?php echo ($datos['nombre_rol']) ?></button></div>
                                        <?php
                                    }
                                    ?>
                                    <!--                                    <div class="external-event" data-class="bg-success"><button class="btn btn-primary">MENU1</button></div>
                                                                        <div class="external-event" data-class="bg-warning"><button class="btn btn-primary">MENU1</button></div>
                                                                        <div class="external-event" data-class="bg-dark"><button class="btn btn-primary">MENU1</button></div>-->
                                </div>
                                <!-- checkbox -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-intro-title">MENÚ</h4>

                            <div class="">
                                <div id="external-events" class="my-3">
                                    <div id="i_menu">
                                        <!--<div class="external-event" data-class="bg-pri
                                        mary"><button class="btn btn-primary">MENU1</button></div>-->
                                    </div>
                                    
                                </div>
                                <!-- checkbox -->
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-intro-title">SUB-MENÚ</h4>

                            <div class="">
                                <div id="external-events" class="my-3">
                                    <div id="i_submenu">
                                        <!--<div class="external-event" data-class="bg-primary"><button class="btn btn-primary">MENU1</button></div>-->
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade mod_1" tabindex="-1" role="dialog" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="i_content1">

        </div>
    </div>
</div>
<div class="modal fade mod_2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content" id="i_content2">

        </div>
    </div>
</div>
<div class="modal fade mod_3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" id="i_content3">

        </div>
    </div>
</div>
