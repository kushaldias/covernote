<?php
require_once('fpdf.php');
require_once('fpdi.php');

$pdf =& new FPDI();

$pagecount = $pdf->setSourceFile('add_details.pdf');
$tplidx = $pdf->importPage(1, '/MediaBox');

$pdf->addPage();
$pdf->useTemplate($tplidx, 5, 5, 200);
$pdf->SetFont('Arial','B',11);
$pdf->SetXY(110,0);
$pdf->Write(8,"Top Copy - A Copy has been Sent to Neways");

$name_title = "roshan";
$date_of_birth  = "asdasdasd";
$pdf_country = "sri lanka";
$last_name = "kumara";
$pdf->SetXY(57,80);
	$pdf->Write(8,"$name_title");
	// date of birth
	$pdf->SetXY(40,101);
	$pdf->Write(8,"$date_of_birth");
	// country
	$pdf->SetXY(57,122);
	$pdf->Write(8,"$pdf_country");
	// language
	$pdf->SetXY(57,126.5);
	$languages = array(1=>'English',2=>'French',3=>'Italian',4=>'German',5=>'Dutch',6=>'Spanish');
	$pdf->Write(8,$languages[$language]);
	
	$pdf->SetXY(35,88.5);
	$pdf->Write(8,"$first_name");
	$pdf->SetXY(35,84.5);
	$pdf->Write(8,"$last_name");
	$pdf->SetXY(28,105);
	

$pdf->Output('newpdf.pdf', 'D');
?>