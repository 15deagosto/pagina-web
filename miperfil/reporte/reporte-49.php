<?php

/** Include PHPExcel */
require '../controlador/conexion.php';
require '../phpexcel/Classes/PHPExcel.php';
require '../funciones/fn-49.php';

$desde = $_POST['desde'];
$hasta = $_POST['hasta'];
// Create new PHPExcel object
$fn49 = new Fn_49();
$tabla = $fn49->fn49_rempresa_all($desde, $hasta);

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
$objPHPExcel->getActiveSheet()->setTitle("Reporte Proveedores");
$objPHPExcel->getActiveSheet()->getStyle('A1:G1')->applyFromArray($stylecolorceldas1);
$objPHPExcel->getActiveSheet()->getStyle("A1:G1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID.');
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NOMBRE');
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'EMAIL');
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'TIPO');
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'MENSAJE');
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'FECHA');
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'ACUERDO');




$count = 5;
$letra = 'F';
//body excel
$objPHPExcel->getActiveSheet()->getStyle('A1:' . $letra . '1')->applyFromArray($styleArray);
$total = 0;
$fila = 2;
while ($detalletabla = $tabla->fetch_assoc()) {
    
    $tipo  = $fn49->fn49_rrequerimiento($detalletabla['requerimiento_contactanos']);
    $acuerdo  = $fn49->fn49_racuerdo($detalletabla['suscribe_contactanos']);
    $objPHPExcel->getActiveSheet()->getStyle('A' . $fila . ':G' . $fila)->applyFromArray($stylecolorceldas3);
    $objPHPExcel->getActiveSheet()->setCellValue('A' . $fila, $detalletabla['id_contactanos']);
    $objPHPExcel->getActiveSheet()->setCellValue('B' . $fila, utf8_encode($detalletabla['nombre_contactanos']));
    $objPHPExcel->getActiveSheet()->setCellValue('C' . $fila, $detalletabla['email_contactanos']);
    $objPHPExcel->getActiveSheet()->setCellValue('D' . $fila, $tipo);
    $objPHPExcel->getActiveSheet()->setCellValue('E' . $fila, $detalletabla['msg_contactanos']);
    $objPHPExcel->getActiveSheet()->setCellValue('F' . $fila, $detalletabla['fecha_contactanos']);
    $objPHPExcel->getActiveSheet()->setCellValue('G' . $fila, $acuerdo);
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
header('Content-Disposition: attachment;filename=Reporte_contactanos.xlsx');
header('Cache-Control: max-age=0');

$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('php://output');
