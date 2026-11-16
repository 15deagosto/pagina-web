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
<?php if($resultado['cuota_mensual'] == 0){ ?>
<div class="w-full bg-white rounded-2xl p-5 flex items-start gap-3 text-left">
    <div class="w-9 h-9 rounded-full bg-red-50 flex items-center justify-center text-red-600 flex-shrink-0">
        <i class="fa-solid fa-triangle-exclamation"></i>
    </div>
    <div>
        <h4 class="font-black text-sm text-neutral-800 mb-1">Monto o plazo fuera de rango</h4>
        <p class="text-xs text-neutral-600 leading-relaxed"><?php echo $resultado['error'] ?></p>
    </div>
</div>
<?php } else { ?>
<div class="w-full text-center">
    <p class="text-[11px] uppercase tracking-widest font-bold text-white/60 mb-1">Cuota mensual aproximada</p>
    <h2 class="text-4xl font-black text-white mb-3">$ <?php echo number_format($resultado['cuota_mensual'], 2) ?></h2>
    <div class="flex items-center justify-center gap-2 mb-3">
        <div class="bg-white/10 border border-white/10 rounded-full px-3 py-1 text-[11px] font-bold text-white/90"><i class="fa-solid fa-money-bill-wave mr-1"></i> $ <?php echo number_format($monto, 2) ?></div>
        <div class="bg-white/10 border border-white/10 rounded-full px-3 py-1 text-[11px] font-bold text-white/90"><i class="fa-solid fa-calendar-days mr-1"></i> <?php echo $plazo ?> meses</div>
    </div>
    <p class="text-[10px] text-white/50 leading-relaxed px-2">Es solo una aproximación: puede variar por el seguro de desgravamen u otros cargos. Para la tasa y condiciones exactas, consulta con un asesor.</p>
</div>
<?php } ?>

