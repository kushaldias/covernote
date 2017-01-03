<!--========================================-->
<!--======= DESIGN & DEVELOPED BY  =========-->
<!--=======   NIRANGA JAYAKODY     =========-->
<!--=======   NIRAGA89@GMAIL.COM   =========-->
<!--========================================-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<meta name="google-site-verification" content="BaG2COeYaZfAA8KeoJU5g4I9vL1IigWIqyR-la4ZY5Y" />-->

<!--[if lt IE 7]> !--> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <!--<![endif]-->
<!--[if IE 7]> <!-->    <html class="no-js lt-ie9 lt-ie8" lang="en"> <!--<![endif]-->
<!--[if IE 8]> <!-->    <html class="no-js lt-ie9" lang="en"> <!--<![endif]-->
<!--[if IE 9]> <!-->    <html class="no-js lt-ie10" lang="en"> <!--<![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]--> 


<title><?php echo HTTP_PATH;?></title>

	<!-- bootstrap -->
    <?php /*?><link href="<?php echo PATH_3DPARTY;?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo PATH_3DPARTY;?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link  rel="stylesheet" type="text/css" href="<?php echo PATH_3DPARTY;?>bootstrap-editable/css/bootstrap-editable.css"></link><?php */?>
    
    <link href="<?php echo BOOSTRAP_PATH;?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BOOSTRAP_PATH;?>bootstrap-responsive.css" rel="stylesheet" media="screen">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
    <link href="<?php echo BOOSTRAP_PATH;?>datepicker.css" rel="stylesheet">

    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="<?php echo BOOSTRAP_JS_PATH;?>bootstrap.min.js"></script>
    <script src="<?php echo BOOSTRAP_JS_PATH;?>bootstrap-datepicker.js"></script>


	<!-- Included CSS Files (Compressed) -->
  	<link rel="stylesheet" href="<?php echo CSSD_PATH;?>foundation.min.css">
  	<link rel="stylesheet" href="<?php echo CSSD_PATH;?>app.css">
  	<?php /*?><link rel="stylesheet" href="<?php echo CSSD_PATH;?>buttons.css"><?php */?>
    
    
    
    <!-- Bootsrap Editable  -->
	<script type="text/javascript" src="<?php echo JS_PATH;?>jquery-1.8.3.min.js"></script> 
	<script type="text/javascript" src="<?php echo PATH_3DPARTY;?>bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo PATH_3DPARTY;?>bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo PATH_3DPARTY;?>bootstrap-editable/js/bootstrap-editable.min.js"></script>

  
  
      
      
      <!-- fancybox -->
	<script type="text/javascript" src="<?php echo PATH_3DPARTY;?>fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="<?php echo PATH_3DPARTY;?>fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_3DPARTY;?>fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    
    <!-- Validation Form -->
    <script type="text/javascript" src="<?php echo PATH_3DPARTY;?>validation/validation.js"></script>
    
    <!-- Mask Input -->
   <?php /*?> <script type="text/javascript" src="<?php echo PATH_3DPARTY;?>mask/jquery.maskedinput-1.3.js"></script>
    <script src="<?php echo HTTP_PATH ?>templates/default/js/jquery-ui.min.js"></script>
    
    <!-- cycle -->
    <script type="text/javascript" src="<?php echo PATH_3DPARTY;?>cycle/jquery.cycle.all.latest.js"></script><?php */?>
    
    <!-- uploadify -->
    <?php /*?><!-- <script type="text/javascript" src="<?php echo PATH_3DPARTY;?>uploadify/jquery-1.4.2.min.js"></script> -->
    <link href="<?php echo PATH_3DPARTY;?>uploadify/uploadify.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="<?php echo PATH_3DPARTY;?>uploadify/swfobject.js"></script>
    <script type="text/javascript" src="<?php echo PATH_3DPARTY;?>uploadify/jquery.uploadify.v2.1.4.js"></script><?php */?>
    
    <!-- calender -->
    <script type="text/javascript" src="<?php echo PATH_3DPARTY;?>jsCal219/src/js/jscal2.js"></script>
    <script type="text/javascript" src="<?php echo PATH_3DPARTY;?>jsCal219/src/js/lang/en.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_3DPARTY;?>jsCal219/src/css/jscal2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_3DPARTY;?>jsCal219/src/css/border-radius.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo PATH_3DPARTY;?>jsCal219/src/css/win2k/win2k.css" />
    
    


</head>



<!-------------------------------------Header and Nav ---------------------------------------->
<div class="header">
	<div class="row">
		
        <div class="eleven columns">
        	<div class="two columns"><a href="index.html"><img src="<?php echo IMAGE_PATH ?>general.jpg" width="105" height="124" alt=""></a></div>
			<div class="connect">
            	<ul class="phone">
                <img src="<?php echo IMAGED_PATH ?>phone.png" alt="" style="padding-top:5px; padding-right:20px;"> 0114 883883
                </ul>
                <ul class="icons">Connect With Us
                <li><a href="http://www.youtube.com/channel/UCY_orwi74Q9rVdH7QCztGHA" target="_blank"><img src="<?php echo IMAGED_PATH ?>youtube.png" width="28" height="28" alt=""></a>
                </li>
                <li><a href="https://www.facebook.com/HNBAssurance" target="_blank"><img src="<?php echo IMAGED_PATH ?>icon1.png" alt=""></a></li>
                </ul>
           	</div>
            <!--<div class="hnblogo" style="float:right">
            </div>-->
          </div>
          <hr> <!-- Header sperator -->
      </div>
      </div>
</div>
<!-------------------------------------Header and Nav ---------------------------------------->
      






















