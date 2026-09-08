<?php



/** Include PHPExcel */
require '../controlador/conexion.php';
require '../phpexcel/Classes/PHPExcel.php';
require '../funciones/fn-44.php';

$desde = $_POST['desde'];
$hasta = $_POST['hasta'];
$pr = $_POST['pr'];
$st = $_POST['st'];
// Create new PHPExcel object
$fn44 = new Fn_44();
$pedidos = $fn44->fn44_rsolcredito_fecha($desde, $hasta,$pr,$st);

$styleArray = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$stylecolorceldas1 = array(
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array('rgb' => 'c1ff72')
    )
);
$stylecolorceldas2 = array(
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array('rgb' => 'ffc598')
    )
);
$stylecolorceldas3 = array(
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array('rgb' => 'f2fb99')
    )
);
$stylecolorceldas4 = array(
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array('rgb' => 'ddded6')
    )
);
$stylecolorceldas5 = array(
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array('rgb' => '22f72c')
    )
);

$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator(" GiftCards ")->
        setDescription("Reporte GiftCards Devengadas ");

$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("Reporte Solicitud de Credito");
$objPHPExcel->getActiveSheet()->getStyle('A1:N1')->applyFromArray($stylecolorceldas1);
$objPHPExcel->getActiveSheet()->getStyle("A1:N1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID.');
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NOMBRE');
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'CIUDAD');
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'TELEFONO');
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'AGENCIA');
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'PRODUCTO');
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'MONTO');
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'TIEMPO');
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'TASA');
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('J1', 'EMAIL');
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('K1', 'FECHA');
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('L1', 'HORA');
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('M1', 'ESTADO');
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('N1', 'ACUERDO');
$count = 5;
$letra = 'F';
//body excel
$objPHPExcel->getActiveSheet()->getStyle('A1:' . $letra . '1')->applyFromArray($styleArray);
//$total = 0;
$fila = 2;
while ($detalletabla = $pedidos->fetch_assoc()) {
    $id_credito = $detalletabla['id_credito'];
    $estado = $fn44->fn44_restado($detalletabla['estado_credito']);
    $acuerdo = $fn44->fn44_racuerdo($detalletabla['acuerdo_credito']);
    $objPHPExcel->getActiveSheet()->getStyle('A' . $fila . ':N' . $fila)->applyFromArray($stylecolorceldas3);
    $objPHPExcel->getActiveSheet()->setCellValue('A' . $fila, $detalletabla['id_credito']);
    $objPHPExcel->getActiveSheet()->setCellValue('B' . $fila, $detalletabla['apellido_credito'] . ' ' . $detalletabla['nombre_credito']);
    $objPHPExcel->getActiveSheet()->setCellValue('C' . $fila, $detalletabla['ciudad_credito']);
    $objPHPExcel->getActiveSheet()->setCellValue('D' . $fila, $detalletabla['telefono_credito']);
    $objPHPExcel->getActiveSheet()->setCellValue('E' . $fila, $detalletabla['entidad_credito']);
    $objPHPExcel->getActiveSheet()->setCellValue('F' . $fila, $detalletabla['nombre_prod']);
    $objPHPExcel->getActiveSheet()->setCellValue('G' . $fila, $detalletabla['monto_credito']);
    $objPHPExcel->getActiveSheet()->setCellValue('H' . $fila, $detalletabla['tiempo_credito']);
    $objPHPExcel->getActiveSheet()->setCellValue('I' . $fila, $detalletabla['tasanominal_tasa']);
    $objPHPExcel->getActiveSheet()->setCellValue('J' . $fila, $detalletabla['email_credito']);
    $objPHPExcel->getActiveSheet()->setCellValue('K' . $fila, $detalletabla['fecha_credito']);
    $objPHPExcel->getActiveSheet()->setCellValue('L' . $fila, $detalletabla['hora_credito']);
    $objPHPExcel->getActiveSheet()->setCellValue('M' . $fila, $estado);
    $objPHPExcel->getActiveSheet()->setCellValue('N' . $fila, $acuerdo);
//    
//
//    $objPHPExcel->getActiveSheet()->getStyle('A' . $fila . ':F' . $fila)->applyFromArray($styleArray);
//    //$total=$total+$detalletabla['valor_giftcard'];
//    //$productotienda=$fn101->fn101_rtiendaproducto_xid($id_tienda);
//
//
//
//
    $fila++;
}
//$fila = $fila + 5;

//$objPHPExcel->getActiveSheet()->setCellValue('A' . $fila, 'TOTAL');
// $objPHPExcel->getActiveSheet()->setCellValue('B' . $fila, number_format($total, 2));

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename=Reporte_solicitud_credito.xlsx');
header('Cache-Control: max-age=0');

$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('php://output');
