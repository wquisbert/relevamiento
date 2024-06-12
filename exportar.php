<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.8.0, 2014-03-02
 */



if (PHP_SAPI == 'cli')
	die('Este ejemplo sólo se puede ejecutar desde un navegador Web');

/** Incluye PHPExcel */
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';
// Crear nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();

// Propiedades del documento
$objPHPExcel->getProperties()->setCreator("Obed Alvarado")
							 ->setLastModifiedBy("Obed Alvarado")
							 ->setTitle("Office 2010 XLSX Documento de prueba")
							 ->setSubject("Office 2010 XLSX Documento de prueba")
							 ->setDescription("Documento de prueba para Office 2010 XLSX, generado usando clases de PHP.")
							 ->setKeywords("office 2010 openxml php")
							 ->setCategory("Archivo con resultado de prueba");



// Combino las celdas desde A1 hasta E1
$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:E1');

$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A1', 'REPORTE ESTADO DIARIO')
            ->setCellValue('A2', 'DEPENDENCIA')
            ->setCellValue('B2', 'NOMBRE DIRECTOR')
            ->setCellValue('C2', 'UBICACION')
            ->setCellValue('D2', 'TIPO ATENCION')
			->setCellValue('E2', 'NOMBRE DEL HOSPITAL')
			->setCellValue('F2', 'N° DE CAMAS DISPONIBLES (INSTALADAS/CENSABLES)')
			->setCellValue('G2', 'EMERGENCIAS')
			->setCellValue('H2', 'HOSPITALIZACION')
			->setCellValue('I2', 'UTI')
			->setCellValue('J2', 'STOCK TUBOS (6m3)')
			->setCellValue('K2', 'CAPACIDAD TANQUE (m3)')
			->setCellValue('L2', 'No.PACIENTES COVID')
			->setCellValue('M2', 'No.PACIENTES OTROS')
			->setCellValue('N2', 'CUANDO Y A QUIEN SE SOLICITO O2?')
			->setCellValue('O2', 'POR QUE NO SE ABASTECIO 02?')
			->setCellValue('P2', 'QUIEN O QUE DEBERIA ABASTERCER OXIGENO?')
			->setCellValue('Q2', 'EMPRESAS QUE ABASTECEN O2 AL HOSP/ CS?')
			->setCellValue('R2', 'A QUIEN ATRIBUYEN LA FALTA DE O2?')
			->setCellValue('S2', 'NIÑOS CON COVID')
			->setCellValue('T2', 'MUJERES CON COVID')
			->setCellValue('U2', 'ADULTOS CON COVID')
			->setCellValue('V2', 'NIÑOS OTRAS CAUSAS')
			->setCellValue('W2', 'MUJERES OTRAS CAUSAS')
			->setCellValue('X2', 'ADULTOS OTRAS CAUSAS')
			->setCellValue('Y2', 'ES PERSONAL DE SALUD?');
			
// Fuente de la primera fila en negrita
$boldArray = array('font' => array('bold' => true,),'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER));

$objPHPExcel->getActiveSheet()->getStyle('A1:Y2')->applyFromArray($boldArray);		

	
			
//Ancho de las columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(30);	
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);	
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);	
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(10);	
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(45);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(30);			
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('V`')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(30);

/*Extraer datos de MYSQL*/
	# conectare la base de datos
    $con=@mysqli_connect('localhost', 'root', '', 'camas');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	$sql="SELECT * FROM deudas  order by hosp";
	$query=mysqli_query($con,$sql);
	$cel=3;//Numero de fila donde empezara a crear  el reporte
	while ($row=mysqli_fetch_array($query)){
		$procedencia=$row['procedencia'];
		$nomdic=$row['nomdic'];
		$ubic=$row['ubic'];
		$covid=$row['covid'];
		$hosp=$row['hosp'];
		$nrodisp=$row['nrodisp'];
		$emerg=$row['emerg'];
		$hospit=$row['hospit'];
		$uti=$row['uti'];
		$stockt=$row['stockt'];
		$capt=$row['capt'];
		$nropac=$row['nropac'];
		$nropacotro=$row['nropacotro'];
		$o1=$row['o1'];
		$o2=$row['o2'];
		$o3=$row['o3'];
		$o4=$row['o4'];
		$o5=$row['o5'];
		$cn=$row['cn'];
		$cm=$row['cm'];
		$cad=$row['cad'];
		$oni=$row['oni'];
		$oad=$row['oad'];
		$ps=$row['ps'];
		
			$a="A".$cel;
			$b="B".$cel;
			$c="C".$cel;
			$d="D".$cel;
			$e="E".$cel;
			$f="F".$cel;
			$g="G".$cel;
			$h="H".$cel;
			$i="I".$cel;
			$j="J".$cel;
			$k="K".$cel;
			$l="L".$cel;
			$m="M".$cel;
			$n="N".$cel;
			$o="O".$cel;
			$p="P".$cel;
			$q="Q".$cel;
			$r="R".$cel;
			$s="S".$cel;
			$t="T".$cel;
			$u="U".$cel;
			$v="V".$cel;
			$w="W".$cel;
			$x="X".$cel;
			$y="Y".$cel;
			
			// Agregar datos
			$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue($a, $procedencia)
            ->setCellValue($b, $nomdic)
            ->setCellValue($c, $ubic)
            ->setCellValue($d, $covid)
			->setCellValue($e, $hosp)
			->setCellValue($f, $nrodisp)
			->setCellValue($g, $emerg)
			->setCellValue($h, $hospit)
			->setCellValue($i, $uti)
			->setCellValue($j, $stockt)
			->setCellValue($k, $capt)
			->setCellValue($l, $nropac)
			->setCellValue($m, $nropacotro)
			->setCellValue($n, $continentName)
			->setCellValue($o, $o1)
			->setCellValue($p, $o2)
			->setCellValue($q, $o3)
			->setCellValue($r, $o4)
			->setCellValue($s, $o5)
			->setCellValue($t, $cn)
			->setCellValue($u, $cm)
			->setCellValue($v, $cad)
			->setCellValue($w, $oni)
			->setCellValue($x, $om)
			->setCellValue($y, $ps);
			
			
	$cel+=1;
	}

/*Fin extracion de datos MYSQL*/
$rango="A2:$e";
$styleArray = array('font' => array( 'name' => 'Arial','size' => 10),
'borders'=>array('allborders'=>array('style'=> PHPExcel_Style_Border::BORDER_THIN,'color'=>array('argb' => 'FFF')))
);
$objPHPExcel->getActiveSheet()->getStyle($rango)->applyFromArray($styleArray);
// Cambiar el nombre de hoja de cálculo
$objPHPExcel->getActiveSheet()->setTitle('Reporte estado diario');


// Establecer índice de hoja activa a la primera hoja , por lo que Excel abre esto como la primera hoja
$objPHPExcel->setActiveSheetIndex(0);


// Redirigir la salida al navegador web de un cliente ( Excel5 )
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="reporte.xls"');
header('Cache-Control: max-age=0');
// Si usted está sirviendo a IE 9 , a continuación, puede ser necesaria la siguiente
header('Cache-Control: max-age=1');

// Si usted está sirviendo a IE a través de SSL , a continuación, puede ser necesaria la siguiente
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
