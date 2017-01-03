<?php
class FW{
	public function __construct($class){
		foreach($class as $object=>$c){
			if(is_file(SYSTEM_CLASS_PATH . $c . '.php')){
				include_once (SYSTEM_CLASS_PATH . $c . '.php');
				if(FW_REPORTS){
					echo "<h3 style='background:green; color:white; padding:4px; font-size:11px; margin-bottom:2px;'>loaded default ". SYSTEM_CLASS_PATH . $c . '.php' ." class</h3>";
				}
			}  else {
				exit("<h3 style='background:red; color:white; padding:4px; font-size:11px;'>cannot load default $c class</h3>");
			}
		}
		return;
	}
	
	public function __call($class,$args=array()){
		if(is_file(SYSTEM_CLASS_PATH . $class . '.php')){
			include_once (SYSTEM_CLASS_PATH . $class . '.php');
				$class = new $class($args);
			if(FW_REPORTS){
					echo "<h3 style='background:green; color:white; padding:4px; font-size:11px; margin-bottom:2px;'>MANUAL loaded  ". SYSTEM_CLASS_PATH . $class . '.php' ." class</h3>";
			}
		}  else {
			exit("<h3 style='background:red; color:white; padding:4px; font-size:11px;'>cannot call $class class</h3>");
		}
		return $class;
	}
}
?>