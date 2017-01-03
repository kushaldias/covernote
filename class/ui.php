<?php
//bootstrap ui
class UI{
	
	public function input_text($attrib=array()){
		//$attrib['equalto'] = <input aqualto='previuspassword' />
		$name 	= $attrib['name'];
		$id 	= $attrib['id'];
		$value  = $attrib['value'];
		$hint	= $attrib['hint'];
		$class  = $attrib['class'];
		$equalto = ($attrib['equalto']!="")? 'equalto="' . $attrib['equalto'] . '"' : '';
		
		return "<input $equalto type='text' id='$id' name='$name' value='$value' class='input $class'  placeholder='$hint' />";
	}
	
	public function input_password($attrib=array()){
		//$attrib['equalto'] = <input aqualto='previuspassword' />
		$name 	= $attrib['name'];
		$id 	= $attrib['id'];
		$value  = $attrib['value'];
		$hint	= $attrib['hint'];
		$class  = $attrib['class'];	
		$equalto = ($attrib['equalto']!="")? 'equalto="' . $attrib['equalto'] . '"' : '';
		return "<input $equalto type='password' id='$id' name='$name' value='$value' class='input $class'  placeholder='$hint' />";
	}
	
	public function input_textarea($attrib=array()){
		$name 	= $attrib['name'];
		$id 	= $attrib['id'];
		$value  = $attrib['value'];
		$hint	= $attrib['hint'];
		$rows   = $attrib['rows'];
		$cols   = $attrib['cols'];
			
		return "<textarea rows='$rows' cols='$cols' id='$id' name='$name' class='input'  placeholder='$hint'></textarea>";
	}
	
	public function input_button($attrib=array()){
		$name 	= $attrib['name'];
		$id 	= $attrib['id'];
		$value  = $attrib['value'];
		$type	= $attrib['type'];
		return "<input type='$type' id='$id' name='$name' value='$value' class='btn' />";
	}
	
	public function input_button_primary($attrib=array()){
		$name 	= $attrib['name'];
		$id 	= $attrib['id'];
		$value  = $attrib['value'];
		$type	= $attrib['type'];
		return "<input type='$type' id='$id' name='$name' value='$value' class='btn btn-primary' />";
	}
	
	public function input_button_success($attrib=array()){
		$name 	= $attrib['name'];
		$id 	= $attrib['id'];
		$value  = $attrib['value'];
		$type	= $attrib['type'];
		return "<input type='$type' id='$id' name='$name' value='$value' class='btn btn-success' />";
	}
	
	public function input_button_warning($attrib=array()){
		$name 	= $attrib['name'];
		$id 	= $attrib['id'];
		$value  = $attrib['value'];
		$type	= $attrib['type'];
		return "<input type='$type' id='$id' name='$name' value='$value' class='btn btn-warning' />";
	}
	
	public function input_button_info($attrib=array()){
		$name 	= $attrib['name'];
		$id 	= $attrib['id'];
		$value  = $attrib['value'];
		$type	= $attrib['type'];
		return "<input type='$type' id='$id' name='$name' value='$value' class='btn btn-info' />";
	}
	
	public function calender($attrib=array()){
		$name 	= $attrib['name'];
		$value  = $attrib['value'];
		$hint	= $attrib['hint'];
		$mindate = date('Ymd', mktime(0,0,0,date('m'),date('d'),date('Y')));
		$js 	= '<script type="text/javascript" language="javascript">
						var cal = Calendar.setup({
						    trigger    : "'.$name.'",
						    inputField : "'.$name.'",
						    showTime   : 0,
						    min		   : '.$mindate.',
					
						    onSelect: function(cal) { cal.hide() },
						});
						cal.manageFields("'.$name.'", "'.$name.'", "%Y-%m-%d");
				  </script>';
		return "<input type='text' id='$name' name='$name' class='input-xlarge' placeholder='$hint' />" . "\n" . $js;
	}
	
	public function calender_with_time($attrib=array()){
		$name 	= $attrib['name'];
		$value  = $attrib['value'];
		$hint	= $attrib['hint'];
		$js 	= '<script type="text/javascript" language="javascript">
						var cal = Calendar.setup({
						    trigger    : "'.$name.'",
						    inputField : "'.$name.'",
						    ifFormat       :    "%m/%d/%Y %I:%M %p",
        					showsTime      :    1,
						    onSelect: function(cal) { cal.hide() },
						});
						cal.manageFields("'.$name.'", "'.$name.'", "%Y-%m-%d %H:%i-%s");
				  </script>';
		return "<input type='text' id='$name' name='$name' class='input-xlarge' placeholder='$hint' />" . "\n" . $js;
	}
	
	public function calender_normal($attrib=array()){
		$name 	= $attrib['name'];
		$value  = $attrib['value'];
		$hint	= $attrib['hint'];
		$class  = $attrib['class'];
		$mindate = date('Ymd', mktime(0,0,0,date('m'),date('d'),date('Y')));
		$js 	= '<script type="text/javascript" language="javascript">
						var cal = Calendar.setup({
						    trigger    : "'.$name.'",
						    inputField : "'.$name.'",
						    showTime   : 0,
						    onSelect: function(cal) { cal.hide() },
						});
						cal.manageFields("'.$name.'", "'.$name.'", "%d-%m-%Y");
				  </script>';
		return "<input type='text' id='$name' name='$name' class='input-small $class' value='$value' placeholder='$hint' />" . "\n" . $js;
	}
	
	
	public function boot_calander_date_range($data){
			$startDate = $data['startDate'];
			$endDate   = $data['endDate'];
			
			return '<script type="text/javascript" language="javascript">						
						$(\'#reportrange\').daterangepicker(
	                     {
	                        ranges: {
	                           \'Today\': [\'today\', \'today\'],
	                           \'Yesterday\': [\'yesterday\', \'yesterday\'],
	                           \'Last 7 Days\': [Date.today().add({ days: -6 }), \'today\'],
	                           \'Last 30 Days\': [Date.today().add({ days: -29 }), \'today\'],
	                           \'This Month\': [Date.today().moveToFirstDayOfMonth(), Date.today().moveToLastDayOfMonth()],
	                           \'Last Month\': [Date.today().moveToFirstDayOfMonth().add({ months: -1 }), Date.today().moveToFirstDayOfMonth().add({ days: -1 })]
	                        },
	                       opens: \'right\',
	                        format: \'d\/m\/yyyy\',
	                        separator: \' to \',
	                        startDate: Date.today().add({ days: -1 }),
	                        endDate: Date.today(),
	                        minDate: \'01-01-2013\',
	                        maxDate: Date.today(),
	                        locale: {
	                            applyLabel: \'Submit\',
	                            fromLabel: \'From\',
	                            toLabel: \'To\',
	                            customRangeLabel: \'Custom Range\',
	                            daysOfWeek: [\'Su\', \'Mo\', \'Tu\', \'We\', \'Th\', \'Fr\',\'Sa\'],
	                            monthNames: [\'January\', \'February\', \'March\', \'April\', \'May\', \'June\', \'July\', \'August\', \'September\', \'October\', \'November\', \'December\'],
	                            firstDay: 1
	                        },
	                        showWeekNumbers: true,
	                        buttonClasses: [\'btn-danger\']
	                     }, 
	                     function(start, end) {
	                        $(\'#reportrange span\').html(start.toString(\'MMMM d, yyyy\') + \' - \' + end.toString(\'MMMM d, yyyy\'));
	                    	$(\'#'.$startDate.'\').val(start.toString(\'d-M-yyyy\'));
	                    	$(\'#'.$endDate.'\').val(end.toString(\'d-M-yyyy\'));
	                    }
	                  );	              
	                	$(\'#reportrange span\').html(Date.today().add({ days: -1 }).toString(\'MMMM d, yyyy\') + \' - \' + Date.today().toString(\'MMMM d, yyyy\'));
	              </script>';	
	}
}
?>
