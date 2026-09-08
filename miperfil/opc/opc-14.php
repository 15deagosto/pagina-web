<?php
require './funciones/fn-14.php';
$a = new Fn_14();
$usuario = $a->fn14_rusuario_x($idusu_open);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Mi perfil </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombre</label>
                                    <input class="form-control" readonly="" value="<?php echo $usuario[0]['nombre_usuario'] ?>">
                                    <label>Email</label>
                                    <input class="form-control" readonly="" value="<?php echo $usuario[0]['email_usuario'] ?>">
                                    <label>Telefono 1</label>
                                    <input class="form-control" readonly="" value="<?php echo $usuario[0]['telefono_usuario'] ?>">
                                    <label>Sexo</label>
                                    <input class="form-control" readonly="" value="<?php echo $usuario[0]['sexo_usuario'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label>Apellido</label>
                                    <input class="form-control" readonly="" value="<?php echo $usuario[0]['apellido_usuario'] ?>">
                                    <label>Dirección</label>
                                    <input class="form-control" readonly="" value="<?php echo $usuario[0]['direccion_usuario'] ?>">
                                    <label>Telefono 2</label>
                                    <input class="form-control" readonly="" value="<?php echo $usuario[0]['telefono2_usuario'] ?>">
                                    <label>Fecha creación</label>
                                    <input class="form-control" readonly="" value="<?php echo $usuario[0]['fechacreacion_usuario'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img style="width: 50%;" src="../images/<?php echo $usuario[0]['foto_usuario'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>