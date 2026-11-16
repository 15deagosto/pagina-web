<?php
error_reporting(0);
include '../fn/fn-calcula-credito.php';
include '../fn/fn-credito.php';
$fn_calculacredito = new Fn_calculacredito();
$fn_credito = new Fn_credito();
$monto = $_POST['monto_calcula'];
$plazo = $_POST['plazo_calcula'];
$tipocred = $_POST['tipocred_calcula'];
$tasa = $fn_credito->fncredito_xget_creditotasa($tipocred);
$resultado = $fn_calculacredito->calcularCreditoCompleto($monto, $plazo, $tasa, $tipocred);
//echo $monto.'/'.$plazo.'/'.$tasa.'/'.$tipocred;
//print_r($resultado);
?>
<br><br>
<?php if($resultado['cuota_mensual'] == 0){ ?>
<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-12 text-center" style="background: #f8e1e0;border-radius: 20px;">
        <?php echo $resultado['error'] ?>

    </div>
</div>
<?php } else { ?>
<center><h4> Para un crédito de $ <?php echo number_format($monto, 2) ?> a <?php echo $plazo ?> meses plazo, tu cuota mensual aproximada es de: </h4></center>
<br><br>
<div class="row">
    <div class="col-md-12 text-center">
        <h3> Primera Cuota Aproximada </h3>
    </div>
</div>
<div class="row text-center" style="border-color: #a31a16;
     padding: 10px 30px;
     border-radius: 20px;">
    <!--    <div class="col-md-6 dflex">
            <img src="./assets/img/icon-tasa.png" style="width: 60px; ">
        </div>-->
    <div class="col-md-12 text-center" style="align-content: center !important">
        <center>
        <div style="background: #a31a16;width: fit-content;padding: 8px 20px;border-radius: 50px;">
            <h2 class="text-white-coop" style="color: white;font-weight: bold;">$ <?php echo number_format($resultado['cuota_mensual'], 2) ?>  </h2>
        </div>
        </center>
    </div>
</div>

<div class="row" style="margin-top: 20px;text-align: justify !important;">
    <small>Nota: Los resultados de esta calculadora son solo una aproximación. Los montos reales pueden variar por factores intermedios como el seguro de desgravamen y otros gastos administrativos o impuestos, y no representan cotizaciones ni precalificaciones para un préstamo. Para conocer la tasa y condiciones exactas de tu crédito, comunícate con un asesor de la Cooperativa.</small>
</div>
<?php } ?>


