<?php
/** Include PHPExcel */
require '../controlador/conexion.php';
require '../phpexcel/Classes/PHPExcel.php';
require '../funciones/fn-45.php';

$desde = $_POST['desde'];
$hasta = $_POST['hasta'];
$pr = $_POST['pr'];
$st = $_POST['st'];
// Create new PHPExcel object
$fn45 = new Fn_45();
$pedidos = $fn45->fn45_rsolinversion2_fecha($desde, $hasta,$pr,$st);

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
$objPHPExcel->getActiveSheet()->setTitle("Reporte Solicitud de Inversión");
$objPHPExcel->getActiveSheet()->getStyle('A1:L1')->applyFromArray($stylecolorceldas1);
$objPHPExcel->getActiveSheet()->getStyle("A1:L1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID.');
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NOMBRE');
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'IDENTIFICACION');
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'PARROQUIA');
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'DIRECCION');
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'TELEFONO');
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'AGENCIA');
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'CAPITAL');
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'PRODUCTO');
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
    $id_credito = $detalletabla['id_inversion'];
    $estado = $fn45->fn45_restado($detalletabla['estado_inversion']);
    $acuerdo = $fn45->fn45_racuerdo($detalletabla['acuerdo_inversion']);
    $objPHPExcel->getActiveSheet()->getStyle('A' . $fila . ':L' . $fila)->applyFromArray($stylecolorceldas3);
    $objPHPExcel->getActiveSheet()->setCellValue('A' . $fila, $detalletabla['id_inversion']);
    $objPHPExcel->getActiveSheet()->setCellValue('B' . $fila, $detalletabla['apellido_inversion'] . ' ' . $detalletabla['nombre_inversion']);
    $objPHPExcel->getActiveSheet()->setCellValue('C' . $fila, $detalletabla['dni_inversion']);
    $objPHPExcel->getActiveSheet()->setCellValue('D' . $fila, $detalletabla['ciudad_inversion']);
    $objPHPExcel->getActiveSheet()->setCellValue('E' . $fila, $detalletabla['direccion_inversion']);
    $objPHPExcel->getActiveSheet()->setCellValue('F' . $fila, $detalletabla['telefono_inversion']);
    $objPHPExcel->getActiveSheet()->setCellValue('G' . $fila, $detalletabla['entidad_inversion']);
    $objPHPExcel->getActiveSheet()->setCellValue('H' . $fila, $detalletabla['monto_inversion']);
    $objPHPExcel->getActiveSheet()->setCellValue('I' . $fila, $detalletabla['nombre_prod']);
    $objPHPExcel->getActiveSheet()->setCellValue('J' . $fila, $detalletabla['email_inversion']);
    $objPHPExcel->getActiveSheet()->setCellValue('K' . $fila, $detalletabla['fecha_inversion']);
    $objPHPExcel->getActiveSheet()->setCellValue('L' . $fila, $detalletabla['hora_inversion']);
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
header('Content-Disposition: attachment;filename=Reporte_solicitud_inversion.xlsx');
header('Cache-Control: max-age=0');

$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('php://output');
