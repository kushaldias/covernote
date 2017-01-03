<?php
/* 
 * Configuration File
 * DESIGN & DEVELOPED BY || NIRANGA JAYAKODY || NIRAGA89@GMAIL.COM
 */
define ( 'HOST', 'localhost' );
define ( 'USER', 'root' );
define ( 'PASS', 'Colombo#99' );
define ( 'DB', 'covernote' );

//if running https please change the code to https://". $_SERVER['HTTP_HOST'] . "/"

define ( 'HTTP_PATH', "https://www.hnbgeneral.com/covernote/" );
//define ( 'HTTP_PATH', "http://". $_SERVER['HTTP_HOST'] . "/" );

define ( 'TEMPLATE_MANAGE_PATH', "templates/manage/" );

define ( 'TEMPLATE_HOME_PATH', "templates/home/" );

define ( 'TEMPLATE_HTTP_PAGES_PATH', HTTP_PATH . TEMPLATE_MANAGE_PATH . "pages/" );

//$template came from .htaccess file

define ( 'ADMIN_PATH', HTTP_PATH . 'templates/'.$template.'/pages/admin/' );

define ( 'AJAX_PATH', HTTP_PATH . 'templates/'.$template.'/ajax/' );
define ( 'CSS_PATH', HTTP_PATH . 'templates/'.$template.'/stylesheets/' );

define ( 'CSSD_PATH', HTTP_PATH . 'templates/'.$template.'/stylesheets/design/stylesheets/' );
define ( 'IMAGED_PATH', HTTP_PATH . 'templates/'.$template.'/stylesheets/design/images/' );

define ( 'JS_PATH', HTTP_PATH . 'templates/'.$template.'/javascripts/js/' );
define ( 'JS_PATH2', HTTP_PATH . 'templates/'.$template.'/javascripts/' );

define ( 'IMAGE_PATH', HTTP_PATH . 'templates/'. $template .'/stylesheets/images/' );

define ( 'BOOSTRAP_PATH', HTTP_PATH . 'templates/'. $template .'/stylesheets/' );
define ( 'BOOSTRAP_JS_PATH', HTTP_PATH . 'templates/'. $template .'/javascripts/' );

define ( 'PATH_3DPARTY' , HTTP_PATH . '3rdparty/');
define ( 'PATH_CHART' , HTTP_PATH . '3rdparty/heighchart/');
define ( 'PATH_FONTKIT' , HTTP_PATH . '3rdparty/fontfacekit/');
define ( 'PATH_TIPTOKEN' , HTTP_PATH . '3rdparty/tiptoken/');

define ( 'UPLOAD_FILE_PATH' , "uploads/");

define ( 'UPLOAD_HTTP_FILE_PATH' ,  HTTP_PATH . "uploads/180-100-");

define ( 'UPLOAD_FILE_THUMB_PATH' , "uploads/thumb/");

define ( 'UPLOAD_FILE_FULL_PATH' , SYSTEM_PATH . "payonline/uploads/");
define ( 'TIME_ATTENDANCE_FILE_NAME', date('Ymd'). 'txt');


define ( 'MAX_ITEMS_PER_PAGE', 2);

define ('MAIL_REPLY_TO','noreply@test.lk');
define ('MAIL_SETFROM','noreply@test.lk');
define ('MAIL_ADDREPLYTO','noreply@test.lk');
define ('MAIL_ADMIN','test@test.com');
define ('MAIL_ADMIN_NAME','Test Admin');

$holiday_name = array('Sunday'=>'gov_holiday', 'Saturday'=>'gov_holiday');
$env_dipartment = array(1=>'IT & SD', 2=> 'Marketing');

$ot_status = array(0=>'Set Ot', 1=>'Yes', 3=>'Rejected');

$todel_users = array(1=>'Thiwanka',2=>'Lahiru', 3=> 'Rupasinghe');

define ('COMPANY_START_WORK', '09:00:00');
define ('COMPANY_END_WORK', '17:00:00');
?>