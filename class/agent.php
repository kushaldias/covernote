<?php
class agent extends DB{
	public $userid;
	
	public function __construct($data){
		parent::__construct();
		$this->userid = $data[0];
	}


//________________________________________________________________________	
	public function get_username_by_id($data){
		$user_id = $data[0].$data[1].$data[2].$data[3].$data[4];
		$sql = "SELECT * FROM covernote.users where idusers='".$user_id."' ";				
		$row = parent::query($sql);
		$userName = $row[0]['agentName'];
		
		return $userName;
		}





//________________________________________________________________________	
	public function createCoverNoteMotor($data){
		
		$coverNoteNo                = $this->generateCertificateMotor($_SESSION['USERID'],$data['motorProductType']);
		$lineOfBusiness             = $data['lineOfBusiness'];
		$product                    = $data['product'];
		$users_idusers              = $_SESSION['USERID'];
                
                
        $sql = "select * from users where idusers = $users_idusers";
		$row = parent::query($sql);
		$branch = $row[0]['code'];
		
		$title 						= $data['title'];
		$firstName 					= $data['firstName'];
		$lastName 					= $data['lastName'];
		$communicationAddress 		= $data['communicationAddress'];
		$riskAddress 				= $data['riskAddress'];
		$nicNo 						= $data['nicNo'];
		$mobile 					= $data['mobile'];
		$vatNo 						= $data['vatNo'];
		$svatNo 					= $data['svatNo'];
		
		
		$motorProductType 			= $data['motorProductType'];
        $jointPolicyHolder 			=  "N/A";      //$data['jointPolicyHolder'];
		$financialInstitution 		= $data['financialInstitution'];
		$coverInceptionDate 		= $data['coverInceptionDate'];
		$coverPeriod 				= $data['coverPeriod'];
		$coverExpiryDate 			= $data['coverExpiryDate'];
		$coverType 					= $data['coverType'];
		$riskType 					= $data['riskType'];
		$vehicleType 				= $data['vehicleType'];
		$usage						= $data['usage'];
		$sumInsured 				= $data['sumInsured'];
		$make 						= $data['make'];
		$model 						= $data['model'];
		$vehicleNo 					= $data['vehicleNo'];
		$engineCapacity 			= $data['engineCapacity'];
		$engineNo 					= $data['engineNo'];
		$frameNo 					= $data['frameNo'];
		$additionalCovers 			= $data['additionalCovers'];
		$previousCoverNo 			= $data['previousCoverNo'];
                $previousPolicyNo 			= $data['previousPolicyNo'];
		
		$pendingRegistration 		= $data['pendingRegistration'];
		$pendingInspection 			= $data['pendingInspection'];
		$copyRegistration 			= $data['copyRegistration'];
		$pendingPayment 			= $data['pendingPayment'];
		$dulyCompleted 				= $data['dulyCompleted'];
		$transferOwnership 			= $data['transferOwnership'];
		$particularsVehicle 		= $data['particularsVehicle'];
		$dualPurpose 				= $data['dualPurpose'];
		$rubberStamp 				= $data['rubberStamp'];
		
		$premiumAmount 				= $data['premiumAmount'];
		$quotaionNumber 			= $data['quotationNumber'];
		$fuelType 			        = $data['fuelType'];
		
		
		$users_idusers      		= $_SESSION['USERID'];
		
		
		$sql = "INSERT INTO `covernote`.`covernotemotor` (`id`, `coverNoteNo`, `lineOfBusiness`, `product`, `title`, `firstName`, 
		`lastName`, `commnicationAddress`, `riskAddress`, `nicNo`, `mobile`, `vatNo`, `sVatNo`, `motorProductType`,`jointPolicyHolder`,`financialInstitution`,`coverInceptionDate`, `coverPeriod`, `coverExpiryDate`, `coverType`, `riskType`, `vehicleType`, `usage`,
		 `sumInsured`, `make`, `model`, `vehicleNo`,`engineCapacity`,`engineNo`, `frameNo`, `additionalCovers`, `previousCoverNo`,`previousPolicyNo`,
		  `pendingRegistration`, `pendingInspection`, `copyRegistration`, `pendingPayment`, `dulyCompleted`, 
		  `transferOwnership`, `particularsVehicle`, `dualPurpose`, `rubberStamp`, `premiumAmount`,`dateCreated`, `users_idusers`, `branch`,`quotationNumber`,`fuelType`) 
		  VALUES (NULL,'$coverNoteNo', '$lineOfBusiness', '$product', '$title', '$firstName', '$lastName', '$communicationAddress',
		   '$riskAddress', '$nicNo', '$mobile', '$vatNo', '$svatNo', '$motorProductType','$jointPolicyHolder','$financialInstitution', '$coverInceptionDate', 
		   '$coverPeriod', '$coverExpiryDate', '$coverType', '$riskType', '$vehicleType','$usage','$sumInsured','$make', 
		   '$model', '$vehicleNo', '$engineCapacity','$engineNo', '$frameNo', '$additionalCovers', '$previousCoverNo', '$previousPolicyNo', 
		   '$pendingRegistration', '$pendingInspection', '$copyRegistration', '$pendingPayment', '$dulyCompleted', 
		   '$transferOwnership', '$particularsVehicle', '$dualPurpose', '$rubberStamp', '$premiumAmount',CURRENT_TIMESTAMP, '$users_idusers', '$branch','$quotaionNumber','$fuelType')";
		
		parent::query($sql);
		
		if(parent::getAffectedRows() > 0){ 
                    //$fw->agentEmail($_SESSION['USERID'])->send_email_today($_REQUEST);
                    return $coverNoteNo; }
		else { 
                    return FALSE;}
		
		}			
//====================================================================================================================



//___________________________NON MOTOR INSERT_____________________________________________	
	public function createCoverNoteNonMotor($data){
            
                $coverNoteNo              = $this->generateCertificateNoNonMotor($_SESSION['USERID'],$data['nonmotorProductType']);
                $users_idusers              = $_SESSION['USERID'];
                
                $sql = "select * from users where idusers = $users_idusers";
		$row = parent::query($sql);
		$branch = $row[0]['code'];
		
		$lineOfBusiness             = $data['lineOfBusiness'];
		$product 		    = $data['product'];
		
		$title                      = $data['title'];
		$firstName                  = $data['firstName'];
		$lastName                   = $data['lastName'];
		$communicationAddress       = $data['communicationAddress'];
		$riskAddress                = $data['riskAddress'];
		$nicNo                      = $data['nicNo'];
		$mobile                     = $data['mobile'];
		$vatNo                      = $data['vatNo'];
		$svatNo                     = $data['svatNo'];
		
		$nonmotorProductType        = $data['nonmotorProductType'];
                $jointPolicyHolder          = $data['jointPolicyHolder'];
		$financialInstitution       = $data['financialInstitution'];
		$policyDuration             = $data['coverPeriodInput'];
		$durationUnit               = $data['durationUnit'];
		$policyStartDate            = $data['policyStartDate'];
		$policyExpirationDate       = $data['policyExpirationDate'];
		
		$sumInsured                 = $data['sumInsuredValue'];
		$onBuilding                 = $data['onBuilding'];
		$onParapet                  = $data['onParapet'];
		$onFurniture                = $data['onFurniture'];
		$onElectronic               = $data['onElectronic'];
		$onMachinery                = $data['onMachinery'];
		$onStock                    = $data['onStock'];
		$onOther                    = $data['onOther'];
		
		$fireLighting               = $data['fireLighting'];
		$pendingInspection          = $data['pendingInspection'];
		$maliciosDamage             = $data['maliciosDamage'];
		$pendingPayment             = $data['pendingPayment'];
		$xPolosion                  = $data['xPolosion'];
		$dcProposal                 = $data['dcProposal'];
		$impactDamage               = $data['impactDamage'];
		$aircraftDamage             = $data['aircraftDamage'];
		$cycloneStorm               = $data['cycloneStorm'];
		$flood                      = $data['flood'];
		$earthquake                 = $data['earthquake'];
		$otherSpecific              = $data['otherSpecific'];
		$electricalExtra            = $data['electricalExtra'];
		$strikeRiotv                = $data['strikeRiot'];
		$terrorism                  = $data['terrorism'];
		$burstingOver               = $data['burstingOver'];
		$burglaryContent            = $data['burglaryContent'];
		$burglaryLoss               = $data['burglaryLoss'];
                $burglaryLossDiv            = $data['burglaryLossCombo'];
		$warranties                 = $data['warranties'];
		
		$basicRate                  = $data['basicRate'];
		$basicPremium               = $data['basicPremiumInput'];
		$srccRate                   = $data['srccRateInput'];
		$srccPremium                = $data['srccPremiumInput'];
		$tcRate                     = $data['tcRateInput'];
		$tcPremium                  = $data['tcPremiumInput'];
                    
		$policyPeriod               = $data['policyPeriodInput'];
		$adminFeeInput              = $data['adminFeeInput'];
		$policyFeeInput             = $data['policyFeeInput'];
		$stampFeInput               = $data['stampFeInput'];
		$nbtInput                   = $data['nbtInput'];
		$vatInput                   = $data['vatInput'];
		
		
		$grossPremium               = $data['grossPremiumInput'];
		$netPremium                 = $data['netPremiumInput'];
		
		
		
		
		$sql = "INSERT INTO `covernote`.`covernotenonmotor` (`id`,`coverNoteNo`, `lineOfBusiness`, `product`, `title`, `firstName`, `lastName`, `communicationAddress`, `riskAddress`, `nicNo`, `mobile`, `vatNo`, `svatNo`, `nonmotorProductType`,`jointPolicyHolder`,`financialInstitution`, `policyDuration`, `durationUnit`, `policyStartDate`, `policyExpirationDate`, `sumInsured`, `onBuilding`, `onParapet`, `onFurniture`, `onElectronic`, `onMachinery`, `onStock`, `onOther`, `fireLighting`, `pendingInspection`, `maliciosDamage`, `pendingPayment`, `xPolosion`, `dcProposal`, `impactDamage`, `aircraftDamage`, `cycloneStorm`, `flood`, `earthquake`, `otherSpecific`, `electricalExtra`, `strikeRiot`, `terrorism`, `burstingOver`, `burglaryContent`, `burglaryLoss`, `burglaryLossDiv`, `warranties`, `basicRate`, `basicPremium`, `srccRate`, `srccPremium`, `tcRate`, `tcPremium`, `policyPeriod`, `adminFeeInput`, `policyFeeInput`, `stampFeInput`, `nbtInput`, `vatInput`, `grossPremium`, `netPremium`,`dateCreated`, `users_idusers`, `branch`) VALUES (NULL, '$coverNoteNo', '$lineOfBusiness', '$product', 
			'$title', '$firstName', '$lastName', '$communicationAddress', '$riskAddress', '$nicNo', '$mobile', '$vatNo', '$svatNo',
			 '$nonmotorProductType','$jointPolicyHolder','$financialInstitution', '$policyDuration', '$durationUnit', '$policyStartDate', '$policyExpirationDate', 
			 '$sumInsured', '$onBuilding', '$onParapet', '$onFurniture', '$onElectronic', '$onMachinery', '$onStock', '$onOther', 
			 '$fireLighting', '$pendingInspection', '$maliciosDamage', '$pendingPayment', '$xPolosion', '$dcProposal', '$impactDamage', 
			 '$aircraftDamage', '$cycloneStorm', '$flood', '$earthquake', '$otherSpecific', '$electricalExtra', '$strikeRiotv',
			  '$terrorism', '$burstingOver', '$burglaryContent', '$burglaryLoss', '$burglaryLossDiv', '$warranties', '$basicRate', '$basicPremium', 
			  '$srccRate', '$srccPremium', '$tcRate', '$tcPremium','$policyPeriod', '$adminFeeInput','$policyFeeInput','$stampFeInput','$nbtInput','$vatInput',
			   '$grossPremium', '$netPremium',CURRENT_TIMESTAMP,'$users_idusers','$branch')";
		
		parent::query($sql);
		
		if(parent::getAffectedRows() > 0){ return TRUE; }
		else { return FALSE;}
		
		}

//_________________________________________________EM N_______________________
	public function generateCertificateNoNonMotor($data,$product){
		
		$sql = "select * from users where idusers = $data";
		$row = parent::query($sql);
		$codeB      = $row[0]['code'];
                //$userCode   = $row[0]['code'];
		
                $sql = "select * from users where idusers = $codeB";
		$row = parent::query($sql);
		$code = $row[0]['code'];
                
                $productCode = '';                
                if($product == 'Fire Business Premise'){$productCode = 'FBP';}
                if($product == 'Dwelling House'){$productCode = 'FDH';}
		
                $sql = "select MAX(`coverNoteNo`) as cnumber from covernotenonmotor where users_idusers = $data OR branch = $codeB";
                $row = parent::query($sql);
		$maxCNumber = $row[0]['cnumber']; 
                
                $sqld = "select branch from covernotenonmotor WHERE branch =$codeB ";
                $row = parent::query($sqld);
		$branch = $row[0]['branch']; 
                
                $numberpart = '';
                
                if($maxCNumber == NULL && $branch== NULL){$numberpart = '00001';}
                else{
                    $stringpart =  substr($maxCNumber, 0, -5);                   
                    $numberpart = (integer) substr($maxCNumber, -5);           
                    $numberpart = $numberpart+1;                                
                    $numberpart = str_pad($numberpart, 5, "0", STR_PAD_LEFT);   
                }
                
                
                $coverNoteNo    =   $code.'/'.$productCode.'/CN/NM/'.$numberpart;
		
		return $coverNoteNo;
		}	
                
                
 //_____________________________ Motor cover note number______________________
	public function generateCertificateMotor($data,$product){
		
		$sql = "select * from users where idusers = $data";
		$row = parent::query($sql);
		$codeB      = $row[0]['code'];
                //$userCode   = $row[0]['code'];
		
                $sql = "select * from users where idusers = $codeB";
		$row = parent::query($sql);
		$code = $row[0]['code'];
                
                $productCode = '';                
                if($product == 'Motor Guard'){$productCode = 'MG';}
                if($product == 'MotorGuard Extra'){$productCode = 'MGE';}
                if($product == 'MotorGuard Agro'){$productCode = 'MGA';}
                if($product == 'MotorGuard Eco'){$productCode = 'MGE';}
                if($product == 'Motor Takafull'){$productCode = 'MT';}
		
                $sql = "select MAX(`coverNoteNo`) as cnumber from covernotemotor where users_idusers = $data OR branch = $codeB";
                $row = parent::query($sql);
		$maxCNumber = $row[0]['cnumber']; 
                
                $sqld = "select branch from covernotemotor WHERE branch =$codeB ";
                $row = parent::query($sqld);
		$branch = $row[0]['branch']; 
                
                $numberpart = '';
                
                if($maxCNumber == NULL && $branch== NULL){$numberpart = '00001';}
                else{
                    $stringpart =  substr($maxCNumber, 0, -5);                   
                    $numberpart = (integer) substr($maxCNumber, -5);           
                    $numberpart = $numberpart+1;                                
                    $numberpart = str_pad($numberpart, 5, "0", STR_PAD_LEFT);   
                }
                
                
                $coverNoteNo    =   $code.'/'.$productCode.'/CN/MOTOR/'.$numberpart;
		
		return $coverNoteNo;
		}
                
//=================================================================================	
//____________________________________________________________________________
	public function getAllCovernotesByIdmotor($data){
		
		$sql = "SELECT * FROM covernote.covernotemotor where users_idusers='".$data."' order by dateCreated desc";
		
		return parent::query($sql);
		}
                
//____________________________________________________________________________
	public function getAllCovernotesMotor(){
		
		$sql = "SELECT * FROM covernote.covernotemotor";
		
		return parent::query($sql);
		}       
                
//____________________________________________________________________________
	public function getAllCovernotesNonmotor(){
		
		$sql = "SELECT * FROM covernote.covernotenonmotor";
		
		return parent::query($sql);
		}                    
                
                
//____________________________________________________________________________
	public function getAllCovernotesByBranchMotor($data){
		
		$sql = "SELECT * FROM covernote.covernotemotor where branch='".$data."'";
		
		return parent::query($sql);
		}                
		
//____________________________________________________________________________
	public function getAllCovernotesByIdNonmotor($data){
		
		$sql = "SELECT * FROM covernote.covernotenonmotor where users_idusers='".$data."'";
		
		return parent::query($sql);
		}	
                
//____________________________________________________________________________
	public function getAllCovernotesByBranchNonmotor($data){
		
		$sql = "SELECT * FROM covernote.covernotenonmotor where branch='".$data."'";
		
		return parent::query($sql);
		}                
		
		
//____________________________________________________________________________
	public function getAllShortPeriodRates(){
		
		$sql = "SELECT * FROM covernote.shortperiodrate";
		
		return parent::query($sql);
		}	

//____________________________________________________________________________		
	public function getAllRiskTypes(){
		$sql = "SELECT * FROM covernote.risktype";
		
		return parent::query($sql);
		}		
		
//____________________________________________________________________________		
	public function getAllVehicleTypes(){
		$sql = "SELECT * FROM covernote.vehicletype";
		
		return parent::query($sql);
		}
//____________________________________________________________________________		
	public function getAllUsageTypes(){
		$sql = "SELECT * FROM covernote.vehicleusage";
		
		return parent::query($sql);
		}			

//____________________________________________________________________________
	public function getCovernoteByIdNonmotor($data){
		
		$sql = "SELECT * FROM covernote.covernotenonmotor where id='".$data."'";
		
		return parent::query($sql);
		}			
		
//____________________________________________________________________________
	public function getuserDetailsById($data){
		
		$sql = "SELECT * FROM covernote.users where idusers='".$data."'";
		
		return parent::query($sql);
		}								

//____________________________________________________________________________
	public function getCovernoteByIdMotor($data){
		
		$sql = "SELECT * FROM covernote.covernotemotor where id='".$data."'";
		
		return parent::query($sql);
		}	
		

//____________________________________________________________________________
	public function getCovernoteByCertnumberMotor($data){
		
		$sql = "SELECT * FROM covernote.covernotemotor where coverNoteNo='".$data."'";
		
		return parent::query($sql);
		}			



//____________________________________________________________________________
	public function getAgentNamebyUserid($data){
		
		$sql = "SELECT * FROM covernote.users where idusers='".$data."'";
                $row = parent::query($sql);
		$agentName = $row[0]['agentName'];
		
		return $agentName;
		}










				
								
}
?>