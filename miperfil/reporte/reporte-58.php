<?php

/** Include PHPExcel */
require '../controlador/conexion.php';
require '../excel/PHPExcel.php';
//require '../funciones/fn-58.php';

/*$desde = $_POST['desde'];
$hasta = $_POST['hasta'];
$va = $_POST['va'];
$st = $_POST['st'];*/
// Create new PHPExcel object
//$fn58 = new Fn_58();
//$tabla = $fn58->get_vacante_usuario_filto2($desde,$hasta, $va, $st);
echo '66666666';
/*
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
$objPHPExcel->getActiveSheet()->getStyle('A1:T1')->applyFromArray($stylecolorceldas1);
$objPHPExcel->getActiveSheet()->getStyle("A1:T1")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID.');
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('B1', 'NOMBRE');
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('C1', 'IDENTIFICACION');
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('D1', 'TELEFONO');
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('E1', 'NACIONALIDAD');
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('F1', 'FECHA DE NACIMIENTO');
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('G1', 'EMAIL');
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('H1', 'DISCAPACIDAD');
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('I1', 'PORCENTAJE DE DISCAPACIDAD');
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('J1', 'NIVEL ACADEMINO');
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('K1', 'TITULO ACADEMINO');
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('L1', 'INSTITUCION EDUCATIVA');
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('M1', 'AREA EXPERIENCIA LABORAL');
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('N1', 'AÑOS EXPERIENCIA LABORAL');
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('O1', 'CONOCIMIENTOS');
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('P1', 'APLICA');
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('Q1', 'DOCUMENTO');
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('R1', 'FECHA');
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('S1', 'ESTADO');
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->setCellValue('T1', 'ACUERDO');




$count = 5;
$letra = 'F';
//body excel
$objPHPExcel->getActiveSheet()->getStyle('A1:' . $letra . '1')->applyFromArray($styleArray);
$total = 0;
$fila = 2;
while ($detalletabla = $tabla->fetch_assoc()) {
    
    $estado = $fn58->fn58_restado($detalletabla['est_vacanusu']);
    $acuerdo = $fn58->fn58_racuerdo($detalletabla['politicas_vacanusu']);
    $objPHPExcel->getActiveSheet()->getStyle('A' . $fila . ':T' . $fila)->applyFromArray($stylecolorceldas3);
    $objPHPExcel->getActiveSheet()->setCellValue('A' . $fila, $detalletabla['id_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('B' . $fila, utf8_encode($detalletabla['nombre_vacanusu'].' '.$detalletabla['apellido_vacanusu']));
    $objPHPExcel->getActiveSheet()->setCellValue('C' . $fila, $detalletabla['identificacion_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('D' . $fila, $detalletabla['telefono_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('E' . $fila, $detalletabla['nacionalidad_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('F' . $fila, $detalletabla['fechnacimiento_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('G' . $fila, $detalletabla['email_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('H' . $fila, $detalletabla['discapacidad_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('I' . $fila, $detalletabla['porcentdiscap_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('J' . $fila, $detalletabla['niveledu_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('K' . $fila, $detalletabla['tituloaca_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('L' . $fila, $detalletabla['intitucion_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('M' . $fila, $detalletabla['areaexplab_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('N' . $fila, $detalletabla['aniosxp_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('O' . $fila, $detalletabla['conocimientos_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('P' . $fila, $detalletabla['nombre_vacante']);
    $objPHPExcel->getActiveSheet()->setCellValue('Q' . $fila, $detalletabla['documento_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('R' . $fila, $detalletabla['fecha_vacanusu']);
    $objPHPExcel->getActiveSheet()->setCellValue('S' . $fila, $estado);
    $objPHPExcel->getActiveSheet()->setCellValue('T' . $fila, $acuerdo);
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
header('Content-Disposition: attachment;filename=Reporte_solicitud_trabajo.xlsx');
header('Cache-Control: max-age=0');

$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
$objWriter->save('php://output');*/
