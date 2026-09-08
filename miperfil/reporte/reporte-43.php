<?php

/** Include PHPExcel */
require '../controlador/conexion.php';
require '../phpexcel/Classes/PHPExcel.php';
require '../funciones/fn-43.php';

$desde = $_POST['desde'];
$hasta = $_POST['hasta'];
$ag = $_POST['ag'];
$st = $_POST['st'];
// Create new PHPExcel object
$fn43 = new Fn_43();
$tabla = $fn43->get_quejas_filto2($desde,$hasta, $ag, $st);

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
$objPHPExcel->getActiveSheet()->getStyle('A1:R1')->applyFromArray($stylecolorceldas1);
$objPHPExcel->getActiveSheet()->getStyle("A1:R1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID.');
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NOMBRE');
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'IDENTIFICACION');
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'TELEFONO');
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'CELULAR');
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'PROVINCIA');
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'CANTON');
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'DIRECCION');
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'REFERENCIA');
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('J1', 'AGENCIA');
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('K1', 'EMAIL');
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('L1', 'FECHA');
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('M1', 'HORA');
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('N1', 'DOCUMENTO');
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('O1', 'MENSAJE');
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('P1', 'PETICION');
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('Q1', 'ESTADO');
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('R1', 'ACUERDO');
$count = 5;
$letra = 'F';
//body excel
$objPHPExcel->getActiveSheet()->getStyle('A1:' . $letra . '1')->applyFromArray($styleArray);
$total = 0;
$fila = 2;
while ($detalletabla = $tabla->fetch_assoc()) {
    
    $estado = $fn43->fn43_restado($detalletabla['estado_queja']);
    $acuerdo = $fn43->fn43_racuerdo($detalletabla['acuerdo_queja']);
    $objPHPExcel->getActiveSheet()->getStyle('A' . $fila . ':R' . $fila)->applyFromArray($stylecolorceldas3);
    $objPHPExcel->getActiveSheet()->setCellValue('A' . $fila, $detalletabla['id_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('B' . $fila, utf8_encode($detalletabla['nombre_queja']));
    $objPHPExcel->getActiveSheet()->setCellValue('C' . $fila, $detalletabla['cedula_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('D' . $fila, $detalletabla['telefono1_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('E' . $fila, $detalletabla['telefono2_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('F' . $fila, $detalletabla['padrelugar_zona']);
    $objPHPExcel->getActiveSheet()->setCellValue('G' . $fila, $detalletabla['lugar_zona']);
    $objPHPExcel->getActiveSheet()->setCellValue('H' . $fila, $detalletabla['direccion_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('I' . $fila, $detalletabla['referencia_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('J' . $fila, $detalletabla['nombre_nosotros']);
    $objPHPExcel->getActiveSheet()->setCellValue('K' . $fila, $detalletabla['email_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('L' . $fila, $detalletabla['fecha_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('M' . $fila, $detalletabla['hora_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('N' . $fila, $detalletabla['datocuenta_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('O' . $fila, $detalletabla['mensaje_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('P' . $fila, $detalletabla['peticion_queja']);
    $objPHPExcel->getActiveSheet()->setCellValue('Q' . $fila, $estado);
    $objPHPExcel->getActiveSheet()->setCellValue('R' . $fila, $acuerdo);
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
$fila = $fila + 5;

//$objPHPExcel->getActiveSheet()->setCellValue('A' . $fila, 'TOTAL');
// $objPHPExcel->getActiveSheet()->setCellValue('B' . $fila, number_format($total, 2));

header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Disposition: attachment;filename=Reporte_solicitud_credito.xlsx');
header('Cache-Control: max-age=0');

$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('php://output');
