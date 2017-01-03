<?
require("../lib/class.mysql.php");
require("../inc_functions.php");
require('fpdf.php');

$db = new  mySQL();
$sql="SELECT * FROM advertisement WHERE advertisement_id ='2'";
$db->execute($sql,$result);
	while($row = mysql_fetch_array($result)){
		foreach($row AS $key => $val){
			$key	=strtolower($key);
			global $key;
			$$key=$val;
		}
	}
class PDF extends FPDF{

	//Page header
	function Header(){
    	//Logo
    	$this->Image('buyandsell.jpg',10,8,50);
    	//Arial bold 15
    	$this->SetFont('Arial','B',15);
    	//Move to the right
    	$this->Cell(180);
    	//Title
    	//$this->Cell(30,10,'',1,0,'C');
		$this->Image('hotline.jpg',150,18,50);
    	//Line break
    	$this->Ln(20);
	}

	function Add_number(){
    	//Logo
    	//$this->Image('buyandsell.jpg',10,8,50);
    	//Arial bold 15
    	$this->SetFont('Arial','B',15);
    	//Move to the right
    	$this->Cell(180);
    	//Title
    	//$this->Cell(30,10,'',1,0,'C');
	 	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    	//Line break
    	$this->Ln(20);
	}

	//Page footer
	function Footer(){
    	//Position at 1.5 cm from bottom
    	$this->SetY(-15);
    	//Arial italic 8
    	$this->SetFont('Arial','I',8);
    	//Page number
   	 	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}

	function WriteHTML($html)
	{
    	//HTML parser
    	$html=str_replace("\n",' ',$html);
    	$a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    	foreach($a as $i=>$e){
        	if($i%2==0){
            	//Text
            	if($this->HREF)
                	$this->PutLink($this->HREF,$e);
            	else
                	$this->Write(5,$e);
        	}else{
            	//Tag
            	if($e[0]=='/')
                	$this->CloseTag(strtoupper(substr($e,1)));
            	else{
                	//Extract attributes
                	$a2=explode(' ',$e);
                	$tag=strtoupper(array_shift($a2));
                	$attr=array();
                	foreach($a2 as $v){
                    	if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        	$attr[strtoupper($a3[1])]=$a3[2];
                	}
                	$this->OpenTag($tag,$attr);
            	}
        	}
    	}
	}

	function OpenTag($tag,$attr){
    	//Opening tag
    	if($tag=='B' || $tag=='I' || $tag=='U')
        	$this->SetStyle($tag,true);
    	if($tag=='A')
        	$this->HREF=$attr['HREF'];
    	if($tag=='BR')
        	$this->Ln(5);
	}

	function CloseTag($tag){
    	//Closing tag
    	if($tag=='B' || $tag=='I' || $tag=='U')
        	$this->SetStyle($tag,false);
    	if($tag=='A')
        	$this->HREF='';
	}

	function SetStyle($tag,$enable){
    	//Modify style and select corresponding font
    	$this->$tag+=($enable ? 1 : -1);
    	$style='';
    	foreach(array('B','I','U') as $s){
        	if($this->$s>0)
            	$style.=$s;
    	}
    	$this->SetFont('',$style);
	}

	function PutLink($URL,$txt){
    	//Put a hyperlink
    	$this->SetTextColor(0,0,255);
    	$this->SetStyle('U',true);
    	$this->Write(5,$txt,$URL);
    	$this->SetStyle('U',false);
    	$this->SetTextColor(0);
	}
}

$html = 'Description : <b>'.$description.'</b>';
$src  = "images/".$advertisement_id.".jpg";
	
//Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->SetLeftMargin(70);
$pdf->Cell(0,10,'Advertisement Number : ' .$form_number,0,1);
$pdf->Image($src,15,40,50,0);
$pdf->Cell(0,10, 'Type    : ' .get_advertisement_type($advertisement_type),15,40,50,0);
$pdf->Cell(0,2, 'Location : '.$street_address.$city,15,40,50,0);
$pdf->Cell(0,10, 'Price Note : '.$price_note,15,40,50,0);
$pdf->WriteHTML($html);
$pdf->Image('1.1.jpg',15,40,50,0);
$pdf->Image('1.1.jpg',60,90,40,0);
$pdf->Image('1.1.jpg',105,90,40,0);

$pdf->Output("filename.pdf","F");  

$download_file = "filename.pdf";
$download = fopen("".$download_file,"r");

if(!$download) die('error in openinig file');

$file = basename($download_file);

$content = "";
while(!feof($download)) 
	$content .= fread($download,4096);
fclose($download);

header('Content-Disposition: attachment; filename='.sprintf($download_file).'');
echo($content);

exit();
?>