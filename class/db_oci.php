<?php
class db_oci{
	public $cn;
	public $rc;
	public function __construct(){
		try{
			$host = '10.100.200.95:1521/PRODSTDBY';
			
			$this->cn = oci_connect('IIMS_UWR', 'iims', $host) or die($this->messageSystem('Orcale Connection','alert','Could not connect to Oralce {'.$host.'} - Please contact network admin'));
			throw new Exception($this->messageSystem('Could not connect to Oralce {'.$host.'} - Please contact network admin','alert',0),0);
		}
		catch (Exception $exc) {
			//echo $exc->getMessage();	
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
				if(is_resource($this->cn)) {
					$this->rc = oci_parse($this->cn, $sql);
					oci_execute($this->rc, OCI_DEFAULT);
					while($rw = oci_fetch_array($this->rc)){
						$result[] =$rw;
					}
					return $result;
				} else {
					return FALSE;
				}
				break;
			default:
				$this->rc = oci_parse($this->cn, $sql);
				oci_execute($stid);
				return TRUE;
				break;
		}
	}
	

	public function getAffectedRows(){
		return oci_num_rows ($this->rc);
	}
	
	public function getLastId(){
		return mysql_insert_id($this->cn);
	}
	
	public function getRowCount(){
		return oci_num_rows($this->rc);
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
		$msgBox = '<table style="border:1px solid red;" width="100%" border="0" cellspacing="1" cellpadding="1">
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