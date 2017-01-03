<?php
class assign extends DB{
	private $userid;
	public function __construct($data){
		$this->userid = $data[0];
		parent::__construct();
	}
	
	public function put($data){
		//TODO users_from_id session
		$voucherid = $data['id'];
		
		$sql = "INSERT INTO `voucher_assign` (`users_from_id`, `users_to_id`, `voucher_id`) 
					VALUES ('$this->userid','$this->userid','$voucherid')
				  ON DUPLICATE KEY UPDATE 	`users_from_id` = '$this->userid', 
				  							`users_to_id` = '$this->userid', 
				  							`voucher_id` = '$voucherid';";
		parent::query($sql);
		return TRUE;
	}
	
	public function get($id){
		$sql = "SELECT * FROM `voucher_assign` 
					WHERE `users_from_id` = '$this->userid'
							AND `voucher_id` = '$id';";
		parent::query($sql);
		if(parent::getRowCount() > 0){
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
	public function getReviewVouhcers(){
		global $fw;
		$sql = "SELECT * FROM `table`;";
		return $fw->db_oci()->query($sql);
	}
}
?>