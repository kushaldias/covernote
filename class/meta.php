<?php
class Meta extends DB{
	
	public function __construc(){
		parent::__construct();
	}		
	
	public function add($data){
		$name = $data['name'];
		$code = ($data['code']=="OTHER")? $data['newcode'] : $data['code'];
		$value = $data['value'];
		 
		$sql = "INSERT INTO `meta` (`name`,`code`, `value`) VALUES ('$name','$code', '$value');";
		parent::query($sql);
		return TRUE;
	}
	
	public function getCode($code=""){
		if($code == ""){
			$sql = "SELECT DISTINCT `code` FROM `meta`;";
		} else {
			$sql = "SELECT `id`, `code` FROM `meta` WHERE `code` = '$code';";
		}
		return parent::query($sql);
	}
	
	public function getByCode($code=""){
		$sql = "SELECT `id`, `name`, `value` FROM `meta` WHERE `code` = '$code';";
		return parent::query($sql);
	}
	
	public function get($id){
		if($id == ""){
			$sql = "SELECT * FROM `meta`;";
		} else {
			$sql = "SELECT * FROM `meta` WHERE `id` = '$id';";
		}
		return parent::query($sql);
	}
	
	public function pagination($next){
		$sql = "SELECT * FROM `meta` LIMIT $next," . MAX_ITEMS_PER_PAGE . ";";
		return parent::query($sql);
	}
	
	public function total(){
		$sql = "SELECT * FROM `meta`;";
		parent::query($sql);
		return parent::getAffectedRows();
	}
	
	public function edit($data){
		$id = $data['id'];
		$name = $data['name'];
		$code = $data['code'];
		$code = $data['value'];
		
		$sql  = "UPDATE `meta` SET `name`= '$name', `code`='$code', `value` = '$value' 
					WHERE `id`='$id';";
		parent::query($sql);
		return TRUE;
	}
	
	public function getMonths(){
		$result = array();
		for($x=1; $x!=13; $x++){
			$result[] = array('name'=> date('M', mktime(0,0,0,$x,1,date('Y'))), 'id'=> date('m', mktime(0,0,0,$x,1,date('Y'))));
		}
		return $result;
	}
	
	
	public function getSignature($id){
		$sql = "SELECT (SELECT `signature` FROM `manage_users` WHERE  `id`=  `vouchers`.`acc_manager`) AS `acc_manager_signature`,
					   (SELECT `signature` FROM `manage_users` WHERE  `id`=  `vouchers`.`excomanager`) AS `excomanager_singature`
				FROM `vouchers`
				WHERE `voucher_number`= '$id' LIMIT 1;";
		$row = parent::query_json($sql);
		return (object)$row[0];		
	}
}
?>