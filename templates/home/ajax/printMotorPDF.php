<?php include ('../../../system/main.php'); ?>
<?php
//===================================================
//=============== DESGN & DEVELOPEED BY =============
//=============== NIRANGA JAYAKODY ==================
//=============== niraga89@gmial.com ================
//===================================================
require_once('../../../3rdparty/pdf/lib/pdf/fpdf.php');
require_once('../../../3rdparty/pdf/lib/pdf/fpdi.php');

$id = $_GET['id'];

$pdf   = & new FPDI();
$yposition=42;

//=============================================================================
foreach($fw->agent($_SESSION['USERID'])->getCovernoteByIdMotor($id) as $v){
//============================================================================
	
    
	//=========================================================	
    if($v['print_status'] == '1')
    {
        $pagecount = $pdf->setSourceFile('pdf_template/Motor_copy.pdf');
    }
    else
    {
        $pagecount = $pdf->setSourceFile('pdf_template/Motor.pdf');
    }
		
	$tplidx = $pdf->importPage(1, '/MediaBox');
	$pdf->addPage();
	$pdf->useTemplate($tplidx, 5, 5, 200);		
	//=========================================================	
	
        //================= HEADING ===============================
        $product_type           =       $v['motorProductType'];
        $heading                =       '';
        $line                   =       '';
        if($product_type == 'Motor Takafull'){
            $heading            = 'Certificate of  TAKAFUL';
            $line1		=	'having proposed for  TAKAFUL in respect  of the  motor  vehicle  described  in  the schedule  below and having paid the';
            $line2a		=	'contribution of';
            $line2		=	'the risk is hereby held covered in terms of the operator\'s usual form of';
            $line3		=	'policy applicable thereto for a period of';
            $period             =	$fw->useroracle($_SESSION['USERID'])->getAmountByWord($v['coverPeriod']); 
            $periodWords        = 	$period[0]['DD'];  $periodWordsB = explode(" ", $periodWords);
            $periodWords        = 	$periodWordsB[0].' DAYS';
            $line3b		=	'this is to say, from';
            $line3bTime         =	date('h:i a', strtotime($v['dateCreated']));
            $line3b2            =	'on the';
            $line3bDate         =	date('d/m/Y', strtotime($v['dateCreated']));
            $line3b3            =	'to the same';
            $line4		=	'time on the';
            $line4Day           =  	$v['coverPeriod'].'th';
            $line4B		=	'DAY thereafter unless the cover be terminated by the operator by notice in writing in which case takaful';
            $line5		=	'will thereupon cease and proportionate part of the annual contribution otherwise payable for such takaful will be charged';
            $line6		=	'for the time the operator has been on risk.';
            
            $scheduleCol1       =       'Sum Covered';
            $pending_col10      =       'Contribution Amount';
            $premium_subject    =       '*****CONTRIBUTION IS SUBJECT TO CONTRIBUTION PAYMENT WARRANTY*****';
            
            $pdf->SetFont('Arial','BI',9);
            $pdf->SetXY(120,224);
            $pdf->Write(10,"HNB Assurance Non Life Takaful Unit"); 
            
            $pdf->SetFont('Arial','B',12);
            $pdf->SetXY(139,60.2);
            $pdf->Write(10,$heading ); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(40.8,93);
            $pdf->Write(10,'As Agreed'); 
            
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(20,88);
            $pdf->Write(10,$line1); 
            $pdf->SetXY(20,93);
            $pdf->Write(10,$line2a); 
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(57,93);
            $pdf->Write(10,$line2); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(145,93);
            if($v['pendingInspection']=='yes'){$pdf->SetXY(160,93);$pdf->Write(10,' ---- 3rd Party ----'); }
            else {$pdf->SetXY(156,93);$pdf->Write(10,'Comprehensive Cover');}
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(180,93);
            $pdf->Write(10,$line2b); 
            $pdf->SetXY(20,98);
            $pdf->Write(10,$line3); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(76,98);
            $pdf->Write(10,$periodWords); 
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(104,98);
            $pdf->Write(10,$line3b); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(130,98);
            $pdf->Write(10,$line3bTime); 
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(144,98);
            $pdf->Write(10,$line3b2); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(153.8,98);
            $pdf->Write(10,$line3bDate); 
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(171,98);
            $pdf->Write(10,$line3b3); 
            $pdf->SetXY(20,103);
            $pdf->Write(10,$line4); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(36.5,103);
            $pdf->Write(10,$line4Day); 
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(44,103);
            $pdf->Write(10,$line4B); 
            $pdf->SetXY(20,108);
            $pdf->Write(10,$line5); 
            $pdf->SetXY(20,113);
            $pdf->Write(10,$line6); 
            
            //========== PHONE NO =================
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(65,240);
            $pdf->Write(10,'0114677000'); 
            //$pdf->SetXY(65,244.5);
            //$pdf->Write(10,'0114677000'); 
            //=====================================
            
        }
        else {
            $heading            =       'Certificate of Insurance';
            $line1		=	'having proposed for insurance in respect of the motor vehicle described in the schedule below and having paid the sum';
            $line2a             =       "of";
            $line2		=	'the risk  is hereby  held covered in terms of the company\'s usual form of ';
            $line2b		=	'policy';
            $line3		=	'applicable thereto for a period of';
            $period             =	$fw->useroracle($_SESSION['USERID'])->getAmountByWord($v['coverPeriod']); 
            $periodWords        = 	$period[0]['DD'];  $periodWordsB = explode(" ", $periodWords);
            $periodWords        = 	$periodWordsB[0].' DAYS';
            $line3b		=	' this is to say, from';
            $line3bTime         =	date('h:i a', strtotime($v['dateCreated']));
            $line3b2            =	'on the';
            $line3bDate         =	date('d/m/Y', strtotime($v['dateCreated']));
            $line3b3            =	'to the  same time';
            $line4		=	'on the';
            $line4Day           =  	$v['coverPeriod'].'th';
            $line4B		=	'DAY thereafter unless the cover be terminated by the company by notice in writing in which case  insurance';
            $line5		=	'will thereupon cease and proportionate part of the annual premium otherwise payable for such insurance will be charged';
            $line6		=	'for the time the company has been on risk.';
            
            $scheduleCol1       =       'Sum Insured';
            $pending_col10      =       'Premium Amount';
            $premium_subject    =       '*****PREMIUM IS SUBJECT TO PREMIUM PAYMENT WARRANTY*****';
            
            $pdf->SetFont('Arial','BI',9);
            $pdf->SetXY(135,226);
            $pdf->Write(10,"HNB General Insurance Ltd"); 
            
            $pdf->SetFont('Arial','B',12);
            $pdf->SetXY(141,60.2);
            $pdf->Write(10,$heading ); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(25,93);
            $pdf->Write(10,'As Agreed'); 
            
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(20,88);
            $pdf->Write(10,$line1); 
            $pdf->SetXY(20,93);
            $pdf->Write(10,$line2a); 
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(43,93);
            $pdf->Write(10,$line2); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(145,93);
            if($v['pendingInspection']=='yes'){$pdf->SetXY(150,93);$pdf->Write(10,' --- 3rd Party ---'); }
            else {$pdf->Write(10,'Comprehensive Cover');}
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(180,93);
            $pdf->Write(10,$line2b); 
            $pdf->SetXY(20,98);
            $pdf->Write(10,$line3); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(67,98);
            $pdf->Write(10,$periodWords); 
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(95,98);
            $pdf->Write(10,$line3b); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(123,98);
            $pdf->Write(10,$line3bTime); 
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(137,98);
            $pdf->Write(10,$line3b2); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(147,98);
            $pdf->Write(10,$line3bDate); 
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(164,98);
            $pdf->Write(10,$line3b3); 
            $pdf->SetXY(20,103);
            $pdf->Write(10,$line4); 
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(30,103);
            $pdf->Write(10,$line4Day); 
            $pdf->SetFont('Arial','',9);
            $pdf->SetXY(37,103);
            $pdf->Write(10,$line4B); 
            $pdf->SetXY(20,108);
            $pdf->Write(10,$line5); 
            $pdf->SetXY(20,113);
            $pdf->Write(10,$line6); 
            
            //========== PHONE NO =================
            $pdf->SetFont('Arial','B',9);
            $pdf->SetXY(65,240);
            $pdf->Write(10,'0114883883'); 
            //=====================================
        }
        
        //=========================================================
        
        
        
        //================= HEADER BOXES ==========================
        $pdf->Rect(20, 57, 35, 5, 'D');
        $pdf->Rect(55, 57, 50, 5, 'D');
        $pdf->Rect(105, 57, 85, 5, 'D');
        
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(20,54.5);
        $pdf->Write(10,"Policy No :"); 
        $pdf->SetFont('Arial','B',10);
        $policyNo = $v['previousPolicyNo'];
        $pdf->SetXY(57,54.8);
        $pdf->Write(10,$policyNo); 
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(130,54.8);
        $pdf->Write(9,"MOTOR TRAFFIC ACT NO. 14 OF 1951"); 
        
        
        $pdf->Rect(20, 62, 35, 6, 'D');
        $pdf->Rect(55, 62, 50, 6, 'D');
        $pdf->Rect(105, 62, 85, 6, 'D');
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(20,60);
        $pdf->Write(10,"Quotation No :"); 


        $quotationNumber = $v['quotationNumber'];
        $pdf->SetXY(57,60.8);
        $pdf->Write(10,$quotationNumber); 
        
        $pdf->Rect(20, 68, 35, 5, 'D');
        $pdf->Rect(55, 68, 50, 5, 'D');
        $pdf->Rect(105, 68,85, 5, 'D');
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(20,65.8);
        $pdf->Write(10,"Cover Note No :"); 
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(153.8,66);
        $pdf->Write(9,"Temporary Cover Note"); 

       
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(160,71);
        $pdf->Write(9,$product_type ); 
        
        //=========================================================
	
	//========================== TOP 3 ROWS ===================
	$coverNoteNo            = 	$v['coverNoteNo'];
	//$proposalNo		=	'14NP2FDH001101';
	$userId			=	$v['users_idusers'];
	$dateCreated            =	date('d/m/Y h:i a', strtotime($v['dateCreated']));//$v['dateCreated'];
	$branch			=	$fw->agent($_SESSION['USERID'])->getuserDetailsById($userId);
	$branchCode		=	$branch[0]['code'];
	$userName		=	$branch[0]['userName'];
	$agentName		=	strtoupper($branch[0]['agentName']);
	$branchNameb            =	$fw->agent($_SESSION['USERID'])->getuserDetailsById($userId);
	$branchName		=	strtoupper($branchNameb[0]['agentName']);
	$pdf->SetFont('Arial','B',9);
    $pdf->SetXY(57,66);
	$pdf->Write(10,$coverNoteNo); 
	$pdf->SetXY(48,49);
	//$pdf->Write(10,$agentName); 
	$pdf->SetXY(48,53);
	//$pdf->Write(10,$dateCreated); 
	$pdf->SetXY(48,57);
	//$pdf->Write(10,$product_type); 
	//=========================================================

	//========================= NAME ADDRESS ==========================================
	/*$customerName	=	strtoupper($v['title'].' '.$v['firstName'].' '.$v['lastName']);
	$hnb			=	''.$branchName;
	$address		=	strtoupper($v['commnicationAddress']);
	$nameLine1		=	$customerName.' of '.$address.' and ';
	$nameLine2		=	$hnb.' for their rights and interests';
	//$ff1 = substr($nameLine, 0, 88);
	//$ff2 = substr($nameLine,88, 180);
	$pdf->SetFont('Arial','BU',9);
	$pdf->SetXY(20,70);
	//$pdf->Write(10,$nameLine1); 
	$pdf->SetXY(20,74);
	//$pdf->Write(10,$nameLine2); */
	
        
        //========================= NAME ADDRESS ==========================================
	$customerName	=	strtoupper($v['title'].' '.$v['firstName'].' '.$v['lastName']);

        $jointPolicy    =	strtoupper($v['jointPolicyHolder']);    if($jointPolicy != 'N/A'  ){$jointPolicy =  ' & '.$jointPolicy;}else{
            $jointPolicy = '';
        }

        if($jointPolicy == ''  ){$jointPolicy =  $jointPolicy;}

        $finacialIns    =       strtoupper($v['financialInstitution']); 

          if($finacialIns == '' ){
            $nameLine   =   $customerName.$jointPolicy;
        }else{
            $nameLine   =   $customerName.$jointPolicy.' & '.$finacialIns.' FOR THEIR RIGHTS AND INTERESTS';

        }

	

	
        
        if(strlen($nameLine) > 90){

            $nm1 = substr($nameLine, 0, 90);
            $nm2 = substr($nameLine,90, 160);
            $pdf->SetFont('Arial','BU',9);
            $pdf->SetXY(20,75);
            $pdf->Write(10,$nm1); 
            $pdf->SetXY(20,79);
            $pdf->Write(10,$nm2); 
        }else {
            $pdf->SetFont('Arial','BU',9);
            $pdf->SetXY(20,75);
            $pdf->Write(10,$nameLine); 
        }
        
	$address	=	strtoupper($v['commnicationAddress']);
	$pdf->SetFont('Arial','',9);
	$pdf->SetXY(20,83);
	$pdf->Write(10,'Address :-'); 
	$pdf->SetFont('Arial','BU',9);
	$pdf->SetXY(35,83);
	$pdf->Write(10,$address); 
	//=================================================================================
	//====================== DESCRIPTION ==============================================
	//$line1		=	'having proposed for insurance in respect of the motor vehicle described in the schedule below and having paid the sum';
	
	
	//=================================================================================
	//====================== TABLE LEFT SIDE ==========================================
	$sumInsured		=		number_format($v['sumInsured'],2);
	$make			=		$v['make'];
	$model			=		$v['model'];
	$vehicleNumber          = 		$v['vehicleNo'];
	$chasiNo		=		$v['engineNo'];
	$engineNo		=		$v['frameNo'];
	$engineCapacity     	=		$v['engineCapacity'];
	$useOfVehicle           =		$v['usage'];
	$additionalCove     	=		$v['additionalCovers'];		if($additionalCove == ''){$additionalCove = 'N/A';}
	$previosCover           =		$v['previousCoverNo']; 		if($previosCover == ''){$previosCover = 'N/A';}
	
        
    $pdf->SetFont('Arial','',9);
	$pdf->SetXY(21,130.8);
	$pdf->Write(10,$scheduleCol1);
        
	$pdf->SetFont('Arial','B',7);
	$pdf->SetXY(65,130.5);
	$pdf->Write(10,$sumInsured); 
	$pdf->SetXY(65,135.4);
	$pdf->Write(10,$make); 
	$pdf->SetXY(65,139.8);
	$pdf->Write(10,$model); 
	$pdf->SetXY(65,145);
	$pdf->Write(10,$vehicleNumber); 
	$pdf->SetXY(65,150);
	$pdf->Write(10,$chasiNo); 
	$pdf->SetXY(65,154.8);
	$pdf->Write(10,$engineNo); 
	$pdf->SetXY(65,160);
	$pdf->Write(10,$engineCapacity); 
	$pdf->SetXY(65,168);
	$pdf->Write(10,$useOfVehicle); 
	$pdf->SetXY(65,173);
	$pdf->Write(10,$additionalCove); 
	$pdf->SetXY(65,178);
	$pdf->Write(10,$previosCover); 
	//=================================================================================  
	//====================== TABLE RIGHT SIDE ===================================================================================================================================================
	$inspectionOfVehicle	=	$v['pendingInspection'];                if($inspectionOfVehicle	== ''){$inspectionOfVehicle = 'No';} 	else{ $inspectionOfVehicle 	= ucfirst($inspectionOfVehicle);}
	$transferOwnership	=	$v['transferOwnership'];		if($transferOwnership	== ''){$transferOwnership = 'No';}	else{ $transferOwnership 	= ucfirst($transferOwnership);}
	$particuler		=	$v['particularsVehicle'];		if($particuler 		== ''){$particuler = 'No';}		else{ $particuler 		= ucfirst($particuler);}
	$copyRegistration	=	$v['copyRegistration'];			if($copyRegistration 	== ''){$copyRegistration = 'No';}	else{ $copyRegistration 	= ucfirst($copyRegistration);}
	$rubberStamp		=	$v['rubberStamp'];			if($rubberStamp	 	== ''){$rubberStamp = 'No';}		else{ $rubberStamp 		= ucfirst($rubberStamp);}
	$dulyComleted		=	$v['dulyCompleted'];			if($dulyComleted 	== ''){$dulyComleted = 'No';}		else{ $dulyComleted 		= ucfirst($dulyComleted);}
	$documents		=	$v['rubberStamp'];			if($documents 		== ''){$documents = 'No';}		else{ $documents 		= ucfirst($documents);}
	$tax			=	$v['dualPurpose'];			if($tax 		== ''){$tax = 'No';}			else{ $tax 			= ucfirst($tax);}
	$pendingPayment		=	$v['pendingPayment'];			if($pendingPayment 	== ''){$pendingPayment = 'No';}		else{ $pendingPayment 		= ucfirst($pendingPayment);}
	$premium		=	number_format($v['premiumAmount'],2);
	//==========================================================================================================================================================================================
	$pdf->SetXY(155,131);
	$pdf->Write(10,$inspectionOfVehicle); 
	$pdf->SetXY(155,135.5);
	$pdf->Write(10,$vehicleNumber); 
	$pdf->SetXY(155,140.5);
	$pdf->Write(10,$transferOwnership); 
	$pdf->SetXY(155,145);
	$pdf->Write(10,$particuler); 
	$pdf->SetXY(155,150);
	$pdf->Write(10,$copyRegistration); 
	$pdf->SetXY(155,154.5);
	$pdf->Write(10,$rubberStamp); 
	$pdf->SetXY(155,160);
	$pdf->Write(10,$dulyComleted); 
	$pdf->SetXY(155,168);
	$pdf->Write(10,$documents); 
	$pdf->SetXY(155,173.5);
	$pdf->Write(10,$tax); 
	$pdf->SetXY(155,178.5);
	$pdf->Write(10,$pendingPayment); 
	$pdf->SetXY(155,187);
	$pdf->Write(10,$premium); 
        
        $pdf->SetFont('Arial','',9);
        $pdf->SetXY(98,186.5);
	$pdf->Write(10,$pending_col10);
	//===========================================================================================================
        //==================== CONDITIONLINE ===============================
        $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(45,210);
	$pdf->Write(10,$premium_subject);

     $pdf->SetFont('Arial','B',9);
        $pdf->SetXY(75,213);
    $pdf->Write(10,"(Refer overleaf for the warranty)");
        //==================================================================
	//==================== LAST 4 LINES ================================
        $br_channel_data	=	$fw->agent($_SESSION['USERID'])->getuserDetailsById($branchCode);
        $broker                 =       strtoupper($br_channel_data[0]['code']);
        $channel                =       strtoupper($br_channel_data[0]['agentName']);  
        $brokerChannel          =       $broker.'/'.$channel; 
	$pdf->SetXY(65,219.5);
	$pdf->Write(10,$dateCreated); 
	$pdf->SetXY(65,225);
	$pdf->Write(10,$brokerChannel); 
	$pdf->SetXY(65,230);
	$pdf->Write(10,$userName); 
	$pdf->SetXY(65,235);
	$pdf->Write(10,$agentName); 
	
	//==================================================================

}
	
ob_end_clean();	
$page_name="Motor Cover Note Document.pdf";
$pdf->Output($page_name, 'I');	




 ?>