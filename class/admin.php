<?php
class admin extends DB{
	public $userid;
	
	public function __construct($data){
		parent::__construct();
		$this->userid = $data[0];
	}

//________________________________________________________________________	
	public function getAllUsers($data){

		$sql = "SELECT * FROM covernote.users where userRoles_iduserRoles='".$data."'";				
		return parent::query($sql);
	}
        
//________________________________________________________________________	
	public function geBranchUsers($data){

//                $sql = "SELECT * FROM covernote.users where idusers ='".$data."'";
//		$row = parent::query($sql);
//		$userCode = $row[0]['code'];
                
		$sql = "SELECT * FROM covernote.users where code ='".$data."'";				
		return parent::query($sql);
	}        


//___________________________USER CHANGE STATUS__________________________	
	public function userChangeStatus($data){		
		
		$sql = "SELECT users.userstatus as t FROM users WHERE users.idusers ='".$data."' ";
		$row = parent::query($sql);
		$userStatus = $row[0]['t'];
		$changeType = '';
		
		if($userStatus == 1){
			$changeType = 0 ;
			}
		if($userStatus == 0){
			$changeType = 1 ;
			}	
		
		$sql = "UPDATE users SET userstatus ='".$changeType."' WHERE idusers='".$data."' ";				
		parent::query($sql);
		
		if(parent::getAffectedRows() > 0){ return TRUE; }
		else { return FALSE;}
	}
    
    
//-------------------------change print status-------------------------------
    
    public function userChangePrintStatus($data){
        
        $change = 1;
    
    $sql = "UPDATE covernotemotor SET print_status = '".$change."' WHERE id = '".$data."' ";
    parent::query($sql);
        if(parent::getAffectedRows() > 0){ return TRUE; }
		else { return FALSE;}
    
    }
        
    public function userChangePrintStatusNonMotor($data){
        
        $change = 1;

    $sql = "UPDATE covernotenonmotor SET print_status = '".$change."' WHERE id = '".$data."' ";
    parent::query($sql);
        if(parent::getAffectedRows() > 0){ return TRUE; }
		else { return FALSE;}
    
    }
    

//________________________________________________________________________	
	public function get_userType(){
		$sql = "SELECT * FROM covernote.user_roles";				
		return parent::query($sql);
		}

//________________________________________________________________________	
//________________________________________________________________________	
	public function get_username_by_id($data){
		
		$sql = "SELECT * FROM covernote.users where idusers='".$data."' ";				
		return parent::query($sql);
		}

//________________________________________________________________________		
	public function createUser($data){
		$agentName 	= $data['name'];
		$userName 	= $data['userName'];
		$passWord 	= $data['passWord'];
		$email 		= $data['email'];	
		$userType  	= $data['userType'];
		$tname  	= $data['backDate'];
		$agentCode	= '';	
		
		//========= AGENT / BRANCH CODE SELECTION ============
		if($userType == 2){$agentCode 	= $data['codeAgent'];}
		if($userType == 3){$agentCode 	= $data['code'];}
		//=====================================================
		
		$sql = "INSERT INTO `covernote`.`users` (`idusers`, `agentName`, `userName`, `Password`, `email`, `code`, `dateCreated`, `userstatus`, `userRoles_iduserRoles`) VALUES (NULL, '$agentName', '$userName', '$passWord', '$email','$agentCode', CURRENT_TIMESTAMP, '1', '$userType')";
		parent::query($sql);
		
		$sql = "SELECT max(idusers) as id FROM covernote.users";
		$row = parent::query($sql);
		$max = $row[0]['id'];
		
		if($userType == 2 && $tname  == 1){
			$this->updateOptions($max);
			}
		
		
		if(parent::getAffectedRows() > 0){ return TRUE; }
		else { return FALSE;}
	}	

//________________________________________________________________________	
	public function updateOptions($id){
		$sql = "INSERT INTO `covernote`.`user_optons` (`iduserOptons`, `optionDateBackDate`, `dateCreated`, `users_idusers`) VALUES ('', '1', CURRENT_TIMESTAMP, '$id')";
		parent::query($sql);
		}	
//________________________________________________________________________	
	public function getUserOption($data){
		$sql = "SELECT * FROM covernote.user_optons where users_idusers='".$data."' ";
		return parent::query($sql);
		}


//___________________________USER CHANGE OPTION___________________________	
	public function userChangeOption($data1,$data2){
		$optionType = $data2;
		$changeOption = '';
		
		if($optionType == 1){
			$changeOption = 0 ;
			}
		if($optionType == 0){
			$changeOption = 1 ;
			}
			
		$sql="UPDATE `covernote`.`user_optons` SET `optionDateBackDate` = '".$changeOption."' WHERE `user_optons`.`users_idusers` ='".$data1."' ";	
		return parent::query($sql);

		}
		

//________________________________________________________________________	
	public function get_all_branches_by_id($data){
		$sql = "SELECT * FROM covernote.users where userRoles_iduserRoles='".$data."' ";				
		
		return parent::query($sql);
		}		
	
}
?>