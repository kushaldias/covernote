<?php
class DBi{
	
	protected $cn;
	public $rc;
	public function __construct(){
		$this->cn = new mysqli(LOCALHOST, USER, PASS,DB);
		if($this->cn->connect_errono){
			echo $this->messageSystem('Mysql Error','alert',$this->cn->connect_error);
		}
	}

	public function __sleep(){
		return true;
	}	
	
	public function __wakeup(){
		$this->__construct();
	}
	
	public function query($sql)	{	
		$result = array();
		$statement = explode(' ',strtoupper($sql));
		switch ($statement[0]){			
			case 'SELECT':		
					$this->rc = $this->cn->query($sql)or die($this->cn->error);
						while($rw = $this->rc->fetch_array(MYSQLI_BOTH)){
							$result[] =$rw;
						}
						return $result;
					
				break;
			default:
				$this->rc = $this->cn->query($sql);
				return TRUE;
				break;
		}
	}
	
	public function prepare($sql){
		$statment = $this->cn->prepare($sql);
	}
	
	public function query_json($sql){	
		$result = array();
		$statement = explode(' ',strtoupper($sql));
		switch ($statement[0]){			
			case 'SELECT':
				if(is_resource($this->cn)) {
					$this->rc = $this->cn->query($sql)or die($this->cn->error);
					while($rw = mysql_fetch_array($this->rc,MYSQLI_ASSOC)){
						$result[] =$rw;
					}
					return $result;
				} else {
					return FALSE;
				}
				break;
			default:
				$this->rc = mysql_query($sql,$this->cn);
				return TRUE;
				break;
		}
	}
	
	public function query2($sql){
		$result = array();
		$statement = explode(' ',strtoupper($sql));
		switch ($statement[0]){			
			case 'SELECT':
				if(is_resource($this->cn)) {
					$this->rc = mysql_query($sql,$this->cn) or die(mysql_error());
					while($rw = mysql_fetch_array($this->rc)){
						$result[] = $rw;
					}
					if(sizeof($result)>1){
						return $reslut;
					} else {
						return $result[0];
					}
				}
			default:
				$this->rc = mysql_query($sql,$this->cn); break;
				return TRUE;
		}
	}
	
	public function getAffectedRows(){
		return $this->cn->affected_rows;
	}
	
	public function getLastId(){
		return $this->cn->insert_id;
	}
	
	public function getRowCount(){
		return $this->rc->num_rows;
	}
	
	public function messageBox($head,$MessageBoxType,$bodyText){
		$msgBox = '<table class="formBox" width="100%" border="0" cellspacing="1" cellpadding="1">
				  <tr>
					<th colspan="2" class="agentLogin">' . $head .'</th>
				  </tr>
				  <tr>
					<td width="6%" align="center"> + </td>
					<td>'. $bodyText .'</td>
					</tr>
			</table>
			<br />';
		return $msgBox;
	}
	public function messageSystem($head,$type,$bodyText){
		$msgBox = '<h2>FW-V-3 System Message</h2>
				  <table style="border:1px solid red;" width="100%" border="0" cellspacing="1" cellpadding="1">
				  <tr>
					<th colspan="2" class="agentLogin" style="background:red;"><font color="white">' . $head .'</font></th>
				  </tr>
				  <tr>
					<td width="6%" align="center"></td>
					<td><li><font size="4">'. $bodyText .'</font></li></td>
					</tr>
			</table>';
		return $msgBox;
	}

	public function newmessage($text,$type=TRUE){
		switch($type){
			case TRUE: 		return '<div id="message_show">' . $text .'</div>';	break;
			case FALSE: 	return '<div id="message_error">' . $text .'</div>';	break;
		}
	}
	
	public function jQueryMessage($message='',$type=TRUE){
		switch($type){
			case TRUE: return '<script language="javascript" type="text/javascript">
							$(\'.sys_message\').html(\''.$message .'\').removeClass().addClass(\'success\').slideDown(1000).delay(1000).slideUp(1000);
						</script>'; 
			break;
			case FALSE: return '<script language="javascript" type="text/javascript">
							$(\'.sys_message\').removeClass().addClass(\'information\').html(\''.$message .'\').slideDown(10).delay(1000).slideUp(1000);
						</script>'; 
			break;
		
		}	
	}
}
?>
