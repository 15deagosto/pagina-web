<?php
$con = new Conecciones();
$mysqlidato = $con->crearConexion();

function contar($mysqlidato, $sql) {
    $res = $mysqlidato->query($sql);
    if (!$res) {
        return 0;
    }
    $fila = $res->fetch_row();
    return (int) $fila[0];
}

$quejasPendientes = contar($mysqlidato, "SELECT COUNT(*) FROM quejas WHERE estado_queja = 0");
$creditosPendientes = contar($mysqlidato, "SELECT COUNT(*) FROM solicitud_credito WHERE estado_credito = 0");
$vacantesActivas = contar($mysqlidato, "SELECT COUNT(*) FROM vacante WHERE estado_vacante = 1");
$usuariosActivos = contar($mysqlidato, "SELECT COUNT(*) FROM usuario WHERE estado_usuario = 1");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h4 class="mb-4">Bienvenido, <?php echo htmlspecialchars($nombreusu_open ?? '') ?></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-0"><?php echo $quejasPendientes ?></h2>
                    <p class="mb-0 text-muted">Quejas / reclamos pendientes</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-0"><?php echo $creditosPendientes ?></h2>
                    <p class="mb-0 text-muted">Solicitudes de crédito pendientes</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-0"><?php echo $vacantesActivas ?></h2>
                    <p class="mb-0 text-muted">Vacantes activas</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-0"><?php echo $usuariosActivos ?></h2>
                    <p class="mb-0 text-muted">Usuarios activos del panel</p>
                </div>
            </div>
        </div>
    </div>
</div>
