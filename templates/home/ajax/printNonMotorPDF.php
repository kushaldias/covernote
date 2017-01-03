<?php include ('../../../system/main.php'); ?>
<?php
require_once('../../../3rdparty/pdf/lib/pdf/fpdf.php');
require_once('../../../3rdparty/pdf/lib/pdf/fpdi.php');

$id = $_GET['id'];

$pdf   = & new FPDI();
$yposition=42;

//=============================================================================
foreach($fw->agent($_SESSION['USERID'])->getCovernoteByIdNonmotor($id) as $v){
//============================================================================
	

	//============================================================	
    if($v['print_status'] == '1')
    {
        $pagecount = $pdf->setSourceFile('pdf_template/NonMotor_copy.pdf');
    }
    else
    {
        $pagecount = $pdf->setSourceFile('pdf_template/NonMotor.pdf');
    }
	$pagecount  = $pdf->setSourceFile('pdf_template/NonMotor.pdf');	
	$tplidx     = $pdf->importPage(1, '/MediaBox');
	$pdf->addPage();
	$pdf->useTemplate($tplidx, 5, 5, 200);		
	//============================================================	
		
		
	//========================== TOP 4 ROWS =========================================
	$coverNoteNo	= 	$v['coverNoteNo'];
	//$proposalNo	=	'14NP2FDH001101';
	$userId		=	$v['users_idusers'];
	$branch		=	$fw->agent($_SESSION['USERID'])->getuserDetailsById($userId);
	$branchCode	=	$branch[0]['code'];
	$branchNameb	=	$fw->agent($_SESSION['USERID'])->getuserDetailsById($branchCode);
	$branchName	=	strtoupper($branchNameb[0]['agentName']);
	$dateCreated	=	$v['dateCreated'];
	$pdf->SetFont('Arial','',9);
	$pdf->SetXY(85,54);
	//$pdf->Write(10,$coverNoteNo); 
	$pdf->SetXY(85,58);
	$pdf->Write(10,$coverNoteNo); 
	$pdf->SetXY(85,62);
	$pdf->Write(10,$branchName); 
	$pdf->SetXY(85,66);
	$pdf->Write(10,$dateCreated); 
	//===============================================================================
	
	
	//========================= NAME ADDRESS ==========================================
	$customerName	=	strtoupper($v['title'].' '.$v['firstName'].' '.$v['lastName']);
        $jointPolicy    =	strtoupper($v['jointPolicyHolder']);    if($jointPolicy != ''){$jointPolicy =  ' & '.$jointPolicy;}
        $finacialIns    =       strtoupper($v['financialInstitution']); if($finacialIns == ''){$finacialIns = 'HNB-'.$branchName;}
	$nameLine	=	$customerName.$jointPolicy.' & '.$finacialIns.' FOR THEIR RIGHTS AND INTERESTS.';
        if(strlen($nameLine) >= 80){
            $nm1 = substr($nameLine, 0, 80);
            $nm2 = substr($nameLine,80, 166);
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(32.5,82);
            $pdf->Write(10,$nm1); 
            $pdf->SetXY(32.5,86);
            $pdf->Write(10,$nm2); 
        }else {
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(32.5,86);
            $pdf->Write(10,$nameLine); 
        }
        
	
	$address	=	strtoupper($v['communicationAddress']);
	$pdf->SetFont('Arial','',8);
	$pdf->SetXY(33,91);
	$pdf->Write(8,'Address :-'); 
	$pdf->SetFont('Arial','B',8);
	$pdf->SetXY(48,91);
	$pdf->Write(8,$address); 
	//=================================================================================
	
	//========================== DESCRIPTION ==========================================
	$line1		=	'having proposed for insuring the property, person,interest or liability described in the schedule below and having paid / agreed to';
	$premium	=	round($v['netPremium'], 2);
	$premium 	=	$fw->useroracle($_SESSION['USERID'])->getAmountByWord($premium);
	$premiumInWords =       $premium[0]['DD'].' ONLY';
        $pm1            =       substr($premiumInWords, 0, 77);
        $pm2            =       substr($premiumInWords,77, 164);
	$line2          =	'pay the premium of';
	$line3		=	'The insurable interest is hereby held covered in terms of the Companys usual form of policy applicable hereto for a ';
	$line4		=	'period of ';
	$duration	= 	$v['policyDuration'];
	$durationn	= 	explode(" ", $duration); $durationDays = $durationn[0];
	$line4b1	=	'from ';
	$line4bTime	=	'4.00 pm'; //date('h:i a', strtotime($dateCreated));
	$line4b2	=	'on the ';
	$line4bDate	=	date('m/d/Y', strtotime($dateCreated));
	$line4b3	=	'to ';
	$duratinDays    =	$durationDays.'th DAY ';
	$line4b4	=	'thereafter,unless the cover';
	$line5		= 	'be  terminated  by the Company  by  notice  in  writing ,  in  which case  the insurance  will  thereupon cease and  a';
	$line6		= 	'proportionate part of  the annual  premium otherwise  payable for such insurance  will be charged for the period the';
	$line7		=	'has been on risk.';
	$pdf->SetFont('Arial','',8);
	$pdf->SetXY(33,96);
	$pdf->Write(8,$line1); 
	$pdf->SetFont('Arial','',8);
	$pdf->SetXY(33,100);
	$pdf->Write(8,$line2); 
	$pdf->SetFont('Arial','B',8);
	$pdf->SetXY(58,100);
	$pdf->Write(8,$pm1); 
        $pdf->SetXY(33,103.5);
	$pdf->Write(8,$pm2); 
	$pdf->SetFont('Arial','',9);
	$pdf->SetXY(33,106);
	$pdf->Write(10,$line3);
	$pdf->SetXY(33,110);
	//------------- LINE4 ---------------------------
	$pdf->Write(10,$line4);	 
	$pdf->SetFont('Arial','B',9);
	$pdf->SetXY(47,110);
	$pdf->Write(10,$duration);	
	$pdf->SetFont('Arial','',9);
	$pdf->SetXY(63,110);
	$pdf->Write(10,$line4b1);
	$pdf->SetFont('Arial','B',9);
	$pdf->SetXY(71,110);
	$pdf->Write(10,$line4bTime);
	$pdf->SetFont('Arial','',9);
	$pdf->SetXY(85,110);
	$pdf->Write(10,$line4b2);
	$pdf->SetFont('Arial','B',9);
	$pdf->SetXY(95,110);
	$pdf->Write(10,$line4bDate);
	$pdf->SetFont('Arial','',9);
	$pdf->SetXY(113,110);
	$pdf->Write(10,$line4b3);
	$pdf->SetFont('Arial','B',9);
	$pdf->SetXY(117,110);
	$pdf->Write(10,$line4bTime);
	$pdf->SetFont('Arial','',9);
	$pdf->SetXY(132,110);
	$pdf->Write(10,$line4b2);
	$pdf->SetFont('Arial','B',9);
	$pdf->SetXY(142,110);
	$pdf->Write(10,$duratinDays);
	$pdf->SetFont('Arial','',9);
	$pdf->SetXY(157,110);
	$pdf->Write(10,$line4b4);
	//--------------------------------------------
	$pdf->SetXY(33,114);
	$pdf->Write(10,$line5);
	$pdf->SetXY(33,118);
	$pdf->Write(10,$line6);
	$pdf->SetXY(33,122);
	$pdf->Write(10,$line7);
	//=================================================================================
	
	//======================== SCHEDULE ===========================
	$classOfInsurance 	=	$v['nonmotorProductType'];
	$premiumLKR		=	number_format($v['netPremium'],2);
	$sumInsured		=	number_format($v['sumInsured'],2);
	$pdf->SetFont('Arial','B',11);
	$pdf->SetXY(75,138);
	$pdf->Write(10,$classOfInsurance);
	$pdf->SetXY(75,147);
	$pdf->Write(10,$premiumLKR);
	$pdf->SetXY(150,147);
	$pdf->Write(10,$sumInsured);	
	//=============================================================
	//======================  DESCRIPTION ==========================================================================
	$onBuilding 		= number_format($v['onBuilding'],2); 	if($onBuilding 		== ''){$onBuilding      = 0;};
	$onParapet 		= number_format($v['onParapet'],2);	if($onParapet 		== ''){$onParapet 	= 0;};
	$onFurniture 		= number_format($v['onFurniture'],2);	if($onFurniture 	== ''){$onFurniture 	= 0;};
	$onElectronic 		= number_format($v['onElectronic'],2);	if($onElectronic 	== ''){$onElectronic 	= 0;};
	$onMachinery 		= number_format($v['onMachinery'],2);	if($onMachinery 	== ''){$onMachinery 	= 0;};
	$onStock 		= number_format($v['onStock'],2);	if($onStock 		== ''){$onStock 	= 0;};
	$onOther 		= number_format($v['onOther'],2);	if($onOther 		== ''){$onOther 	= 0;};
	//==============================================================================================================
	$descriptionLine	=	'';
	if($onBuilding 		!= 0){$descriptionLine 		= 'On the Building('.$onBuilding.'),'; }
	if($onParapet 		!= 0){$descriptionLine 		= $descriptionLine.'On the Parapet('.$onParapet.'),';}
	if($onFurniture 	!= 0){$descriptionLine 		= $descriptionLine.'On Furniture('.$onFurniture.'),';}
	if($onElectronic 	!= 0){$descriptionLine 		= $descriptionLine.'On Electronics('.$onElectronic.'),';}
	if($onMachinery 	!= 0){$descriptionLine 		= $descriptionLine.'on Machinery('.$onMachinery.'),';}
	if($onStock	 	!= 0){$descriptionLine 		= $descriptionLine.'on Stock('.$onStock.'),';}
	if($onOther 		!= 0){$descriptionLine 		= $descriptionLine.'On Other('.$onOther.'),';}
	//==============================================================================================================
	$ff1 = substr($descriptionLine, 0, 103);
	$ff2 = substr($descriptionLine,103, 206);
	$ff3 = substr($descriptionLine,170, 255);
        $riskAddress	=   strtoupper($v['riskAddress']);
	$addressLine 	=   'situated at '.$riskAddress.' of '.$jointPolicy;
	$fa1 = substr($addressLine, 0, 84);
	$fa2 = substr($addressLine,84, 168);
	$pdf->SetFont('Arial','B',9);
	$pdf->SetXY(34,164);
	$pdf->Write(10,$ff1);
	$pdf->SetXY(34,168.5);
	$pdf->Write(10,$ff2);
	$pdf->SetXY(34,173);
	$pdf->Write(10,$fa1);
	$pdf->SetXY(34,177.5);
	$pdf->Write(10,$fa2);
	//=====================================================================================================================
	//=================== PERILS ================================================================
	$fireLighting 				= $v['fireLighting'];
	$maliciosDamage 			= $v['maliciosDamage'];
	$xPolosion 				= $v['xPolosion'];
	$dcProposal 				= $v['dcProposal'];
	$impactDamage 				= $v['impactDamage'];
	$aircraftDamage 			= $v['aircraftDamage'];
	$cycloneStorm 				= $v['cycloneStorm'];
	$flood 					= $v['flood'];
	$earthquake 				= $v['earthquake'];
	$otherSpecific 				= $v['otherSpecific'];
	$electricalExtra 			= $v['electricalExtra'];
	$strikeRiotv 				= $v['strikeRiot'];
	$terrorism 				= $v['terrorism'];
	$burstingOver 				= $v['burstingOver'];
	$burglaryContent 			= $v['burglaryContent'];
	$burglaryLoss 				= $v['burglaryLoss'];	
        $burglaryLossDiv                        = $v['burglaryLossDiv'];
	$warranties 				= $v['warranties'];
	
	$perilLine		=	'';
	if($fireLighting 	== 'yes'){$perilLine = '(1)Fire Lightning,';};
	if($maliciosDamage 	== 'yes'){$perilLine = $perilLine.'(2)Malicious Damage,';};
	if($xPolosion	 	== 'yes'){$perilLine = $perilLine.'(3)Expoltion,';};
	if($dcProposal	 	== 'yes'){$perilLine = $perilLine.'(4)DC Preoposal,';};
	if($impactDamage	== 'yes'){$perilLine = $perilLine.'(5)Impact Damage,';};
	if($aircraftDamage	== 'yes'){$perilLine = $perilLine.'(6)Aircraft Damage,';};
	if($cycloneStorm	== 'yes'){$perilLine = $perilLine.'(7)Cyclone,';};
	if($flood	 	== 'yes'){$perilLine = $perilLine.'(8)Flood,';};
	if($earthquake	 	== 'yes'){$perilLine = $perilLine.'(9)Earthquake,';};
	if($otherSpecific	== 'yes'){$perilLine = $perilLine.'(10)Other Specific,';};
	if($electricalExtra	== 'yes'){$perilLine = $perilLine.'(11)Electrical Extra,';};
	if($strikeRiotv	 	== 'yes'){$perilLine = $perilLine.'(12)Strike,Riot & Civil Commotions,';};
	if($terrorism	 	== 'yes'){$perilLine = $perilLine.'(13)Terrorism,';};
	if($burstingOver	== 'yes'){$perilLine = $perilLine.'(14)Bursting Over Flowing of water Pipes,';};
	//if($burglaryContent	== 'yes'){$perilLine = $perilLine.'(15)Burglary on Content,';};
	if($burglaryLoss	== 'yes' && $burglaryLossDiv ==100){$perilLine = $perilLine.'(15)Burglary Loss on Content';}
        else if($burglaryLoss	== 'yes' && $burglaryLossDiv !=100){$perilLine = $perilLine.'(15)Burglary '.$burglaryLossDiv .'% 1st Loss (on Content)';}
        
	
	$pline	= (string)$perilLine;
	$pa1 = substr($pline, 0, 100);
	$pa2 = substr($pline,100, 103);
	$pa3 = substr($pline,203, 309);
	$pdf->SetFont('Arial','B',9);
	$pdf->SetXY(34,193);
	$pdf->Write(10,$pa1);
	$pdf->SetXY(34,197.5);
	$pdf->Write(10,$pa2);
	$pdf->SetXY(34,202);
	$pdf->Write(10,$pa3);
	//=============================================================================================
	//=================  As Agreed ==================
	$text1	=	'As Agreed';
	$pdf->SetXY(34,225);
	$pdf->Write(10,$warranties);
	//$pdf->SetXY(65,235);
	//$pdf->Write(10,$warranties );
	//================================================
	//========= PENDING DETAILS ======================
	$pendingInspection	=	$v['pendingInspection'];
	if($pendingInspection == 'yes'){
		$note	=	'Note: - Confirmation of cover is subject to a satisfactory risk inspection report and terms may vary or be withdrawn based on the findings of the inspection report.';
		$na1 = substr($note, 0, 100);
		$na2 = substr($note,100, 103);
		$pdf->SetXY(34,230);
		$pdf->Write(10,$na1);	
		$pdf->SetXY(44.5,234);
		$pdf->Write(10,$na2);
	}
	//================================================
	//================================================
	$currentTime	=	date('Y-m-d H:i:s');
	$agentName	=	strtoupper($branch[0]['agentName']);
	$pdf->SetFont('Arial','',9);
	$pdf->SetXY(60,246.5);
	$pdf->Write(10,$currentTime );
	$pdf->SetXY(60,251.5);
	$pdf->Write(10,$agentName);
	//================================================
}





	
ob_end_clean();	
$page_name="NonMotor CoverNote.pdf";
$pdf->Output($page_name, 'I');	


?>