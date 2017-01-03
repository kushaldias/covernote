<?php

class agentEmail extends DB{
	public $userid;
	
	public function __construct($data){
		parent::__construct();
		$this->userid = $data[0];
	}

 
  
        //________________________________________________________________________		
        public function send_email_today($cn,$data){



        date_default_timezone_set('Etc/UTC');
        require_once(SYSTEM_PATH.'3rdparty/phpmailer/class.phpmailer.php');

        $mailer_qestion = new PHPMailer();
        $mailer_qestion->IsSMTP();                                      
        $mailer_qestion->Host = "10.20.10.254";  
        $mailer_qestion->SMTPAuth = true;     
        $mailer_qestion->Username = "hnba.elife";  
        $mailer_qestion->Password = "Pakaya@8800"; 
        
        $sql = "SELECT * FROM covernote.users where idusers='".$_SESSION['USERID']."'";
        $row = parent::query($sql);
        $agentName = $row[0]['agentName'];


          $mailer_qestion->From     = "hnba.elife@hnbassurance.com";
          $mailer_qestion->FromName = "HNB General CoverNote";
          $mailer_qestion->AddAddress('niranga.jayakody@hnbassurance.com'); 
//          $mailer_qestion->AddAddress('arshani@hnbassurance.com');   		   
//          $mailer_qestion->AddBCC("samanthi.liyanage@hnbassurance.com"); 
//          $mailer_qestion->AddBCC('niranga.jayakody@hnbassurance.com');

          $mail_body_question='<table width="800" border="0">
<tr style="background-color:#f49d00; color:#FFF;font-size:22px; font-weight:700;">
<td height="25px" align="center">CoverNote New Certificate</td>
</tr>
<tr><td height="25px" align="center" style="color:#FFF;">.</td></tr>
</table>
<table width="800" border="1" bordercolor="#333333" style="line-height:27px;">
    <tr>
        <td width="351">CoverNote Number</td>
        <td width="449">'.$cn.'</td> 
    </tr>
    <tr>
        <td>Product Type </td>
        <td>'.$data['lineOfBusiness'].'</td> 
    </tr>
    <tr>
        <td>User</td>
        <td>'.$agentName.'</td> 
    </tr>
    <tr>
        <td>Customer Name</td>
        <td>'.$data['firstName'].' '.$data['lastName'].'</td> 
    </tr>
    <tr>
        <td>Address</td>
        <td>'.$data['communicationAddress'].'</td> 
    </tr>
    <tr>
        <td>NIC</td>
        <td>'.$data['nicNo'].'</td> 
    </tr>
    <tr>
        <td>Mobile</td>
        <td>'.$data['mobile'].'</td> 
    </tr>
    <tr>
        <td>Inception Date</td>
        <td>'.$data['coverInceptionDate'].'</td> 
    </tr>
        
        </table>
        <table width="800" border="0"><tr>
                <td style="color:#FFF;" height="18px">.</td>
        </tr></table>
        <table width="800" border="1" bgcolor="#CCCCCC" bordercolor="#333333" style="line-height:27px;">
      <tr>
        <td>Vehical No</td>
        <td>Product Type</td>
        <td>Expiry Date</td>
        <td>Vehicle Type</td>
        <td>SumInsured</td>
        <td>Premium</td>                
      </tr>
      <tr>
        <td>'.$data['vehicleNo'].'</td>
        <td>'.$data['motorProductType'].'</td>
        <td>'.$data['coverExpiryDate'].'</td>
        <td>'.$data['vehicleType'].'</td>
        <td>'.$data['sumInsured'].'</td>
        <td>'.$data['premiumAmount'].'</td>
      </tr>
    </table>


<table width="800" border="0">
<tr>
<td style="color:#FFF;" height="25px">.</td>
</tr>
<tr style="background-color:#024DA1; color:#FFF;font-size:16px; font-weight:700;">
<td height="25px" align="center">HNB General CoverNote 2015</td>
</tr>
</table>';

          $mailer_qestion->Subject = "CoverNote - NEW covernote";
          $mailer_qestion->Body = $mail_body_question;
          $mailer_qestion->AltBody = "HNB General CoverNote";
          $mailer_qestion->Send();



return;

	}
	
        
}        
