<?php
class Ajax{
		
	public function submitForm($data=array()){
		//form - name attribute
		//do   - ajax page do_
		//get - ajax result
		//do_pages
		//fancybox - open fancy box
		//inline_result_id - inline result
		//inline_result_url - inline result load url
		return '<script language="javascript" type="text/javascript">
					$(document).ready(function (data){						
						$(\'form[name='.$data['form'].']\').validate({
								submitHandler: function(form) {
									$.ajax({
										type : \'post\',
										url	   : \''. AJAX_PATH . $data['do'].'\',
										data   : $(form).serialize(),
										dataType : \'json\',
																				
										beforeSend : function(data){
											$(\'form[name=checkthis] input[type=submit]\').val(\'Wait..\');
										},
										success : function(data){
											$(\'form[name=checkthis], input[type=submit]\').val(\'Done\');
											$(\'form[name=checkthis] *\').attr(\'disabled\', \'disabled\');
											
											if(data.status){
												$(\''. $data['get'] .'\').html(data.message).removeClass("sys_message information").addClass("success").fadeIn(1000).delay(1000).fadeOut(1000);
												
												if(data.inline_result){ 
													$(data.inline_result_id).hide().load(data.inline_result_url).slideDown(600);
													$(\'form[name='.$data['form'].']\').hide();
												}
												
												if(data.fancybox){
														$.fancybox({
														 	\'href\'	:	data.fancyboxurl,
														 	\'overlayShow\'	: true,
															\'transitionIn\'	: \'fade\',
															\'transitionOut\'	: \'elastic\',
															\'width\'			: \'75%\',
															\'height\'			: \'100%\',
															\'modal\'			: true,
															\'showCloseButton\' : false
														});
													}
												try { $.fancybox.close(); } catch(e){}
											} else {
												$(\''. $data['get'] .'\').html(data.message).removeClass("sys_message success").addClass("information").fadeIn(1000).delay(1000).fadeOut(1000);
											}											
										},
										error : function(data) {
												$(\'form[name=checkthis] input[type=submit]\').val(\'Fail\');
												$(\'form[name=checkthis] *\').attr(\'disabled\', \'disabled\');
												$(\'form[name='.$data['form'].']\').prepend(\'<span class="label label-important">file is missing..</span>\'); 
										}
									});
									
									return false;
								 }
						});
					});
				</script>';
	}
	
	public function submitRelativePathForm($data=array()){
		//form - name attribute
		//do   - ajax page do_
		//get - ajax result
		//do_pages
		//fancybox - open fancy box
		//inline_result_id - inline result
		//inline_result_url - inline result load url
		$path = pathinfo($_SERVER['REQUEST_URI']);
		$path = $path['dirname'] . "/";
		
		return '<script language="javascript" type="text/javascript">
					$(document).ready(function (data){						
						$(\'form[name='.$data['form'].']\').validate({
								submitHandler: function(form) {
									$.ajax({
										type : \'post\',
										url	   : \''. $path . $data['do'].'\',
										data   : $(form).serialize(),
										dataType : \'json\',
																				
										beforeSend : function(data){
											$(\'form[name=checkthis] input[type=submit]\').val(\'Wait..\');
										},
										success : function(data){
											$(\'form[name=checkthis], input[type=submit]\').val(\'Done\');
											$(\'form[name=checkthis] *\').attr(\'disabled\', \'disabled\');
											
											if(data.status){
												$(\''. $data['get'] .'\').html(data.message).removeClass("sys_message information").addClass("success").fadeIn(1000).delay(1000).fadeOut(1000);
												
												if(data.inline_result){ 
													$(data.inline_result_id).hide().load(data.inline_result_url).slideDown(600);
													$(\'form[name='.$data['form'].']\').hide();
												}
												
												if(data.fancybox){
														$.fancybox({
														 	\'href\'	:	data.fancyboxurl,
														 	\'overlayShow\'	: true,
															\'transitionIn\'	: \'fade\',
															\'transitionOut\'	: \'elastic\',
															\'width\'			: \'75%\',
															\'height\'			: \'100%\',
															\'modal\'			: true,
															\'showCloseButton\' : false
														});
													}
												try { $.fancybox.close(); } catch(e){}	
											} else {
												$(\''. $data['get'] .'\').html(data.message).removeClass("sys_message success").addClass("information").fadeIn(1000).delay(1000).fadeOut(1000);
											}											
										},
										error : function(data) {
												$(\'form[name=checkthis] input[type=submit]\').val(\'Fail\');
												$(\'form[name=checkthis] *\').attr(\'disabled\', \'disabled\');
												$(\'form[name='.$data['form'].']\').prepend(\'<span class="label label-important">file is missing..</span>\'); 
										}
									});
									
									return false;
								 }
						});
					});
				</script>';
	}
	public function showHide($click='',$id=''){
		return '<script language="javascript" type="text/javascript">
					$(document).ready(function (data){
						$(\''.$click.'\').click( function (data) {
							$(\''.$id.'\').hide().fadeIn(1000);
						});
					});
				</script>';
	}
	
	public function loadPage($data=array()){
		//form - name attribute
		//do   - ajax page do_
		//get - ajax result
		$path = pathinfo($_SERVER['PHP_SELF']);
		$path = HTTP_PATH . $path['dirname'] . "/";
		
		return '<script language="javascript" type="text/javascript">
					$(document).ready(function (data){
							$(\'form[name='.$data['form'].']\').submit(function (data){
								$.ajax({
									method : \'post\',
									url	   : \'' . AJAX_PATH . ''. $data['do'].'\',
									data   : $(this).serialize(),
									dataType : \'html\',
									success : function(data){
										$(\''. $data['get'] .'\').hide().html(data).slideDown(800);
									},
									error : function(data) {alert(\'missing file\'); }
								});
								return false;
							});
					});
				</script>';
	}
	
	public function populateParentsChilds($data=array()){
		//parent
		//do
		//child
		$path = pathinfo($_SERVER['PHP_SELF']);
		$path = HTTP_PATH . $path['dirname'] . "/";
		return '<script type="text/javascript" language="javascript">
					$(document).ready(function (data){
						$(\'select[name='.$data['parent'].']\').change(function (data){
							$(\'select[name='.$data['child'].']\').empty();
								$.ajax({
									type : \'post\', 
									dataType : \'json\',
									url	 : \'' . AJAX_PATH . ''. $data['do'].'\',
									data : $(this).serialize(),
									success : function(data){
										$.each(data, function(index,value){
											$(\'select[name='.$data['child'].']\').append("<option value=" + value.id + ">" + value.name + "</option>");
										});
									}
								});
						});
					});
					</script>';
	} 
	
	public function tagAutoComplete($data){
		$id = $data['id'];		
		return '<script type="text/javascript">
        $(document).ready(function() {
        	$(\''. $id .'\').tokenInput("http://shell.loopj.com/tokeninput/tvshows.php", {
                theme: "facebook"
            });
        });
        </script>';
	}
	
	public function fancyBoxAuto($url){
		return '<script type="text/javascript">
				 $(document).ready(function (data){
					$.fancybox({
					 	\'href\'	:	\'' . $url . '\',
					 	\'overlayShow\'	: true,
						\'transitionIn\'	: \'fade\',
						\'transitionOut\'	: \'elastic\',
						\'width\'			: \'75%\',
						\'height\'			: \'100%\'
					});
					});
				</script>';
	}
	
	public function fancyBox($id){
		return '<script type="text/javascript">
					 $("#'.$id.'").fancybox({
						  	\'overlayShow\'	: true,
							\'transitionIn\'	: \'fade\',
							\'transitionOut\'	: \'fade\',
							\'width\'			: \'100%\',
							\'height\'			: \'100%\',
							\'centerOnScroll\'	: \'true\'
						});
				</script>';
	}
	
	public function fancyBoxByRel($name){
		return '<script type="text/javascript">
					 $("a[rel='.$name.']").fancybox({
						  	\'overlayShow\'	: true,
							\'transitionIn\'	: \'fade\',
							\'transitionOut\'	: \'fade\',
							\'width\'			: \'100%\',
							\'height\'			: \'100%\',
							\'centerOnScroll\'	: \'true\'
						});
				</script>';
	}
	
	public function fancyBoxByClass($name){
		return '<script type="text/javascript">
					 $(".'.$name.'").fancybox({
					 		\'autoDimensions\'	: false,
						  	\'overlayShow\'	: true,
							\'transitionIn\'	: \'fade\',
							\'transitionOut\'	: \'fade\',
							\'width\'			: \'80%\',
							\'height\'			: \'100%\',
							\'centerOnScroll\'	: \'true\',
						});
				</script>';
	}
		
	public function mask($id,$patten){
		return '<script language="javascript" type="text/javascript">
					$(document).ready(function (data){
						 $("#'.$id.'").mask("'.$patten.'");
					});
				</script>';
	}
	
	public function uploadify_Auto($id,$response){
		return '<script type="text/javascript" language="javascript">
				$(document).ready(function() {
				  $(\'#'.$id.'\').uploadify({
					\'uploader\'  : \'' . PATH_3DPARTY . 'uploadify/uploadify.swf\',
					\'script\'    : \'' . PATH_3DPARTY . 'uploadify/uploadify.php\',
					\'cancelImg\' : \'' . PATH_3DPARTY . 'uploadify/cancel.png\',
					\'folder\'    : \'' . UPLOAD_TENDERS_PATH . '\',
					\'auto\'      : true,
					\'multi\'	  : false,
					\'fileDesc\': \'Image Files\',
					\'displayData\': \'speed\',
					\'onAllComplete\' : function(event,data) {
				      alert(\'data.file\');
				    }
				  });
				  	
				});
				</script>';
	}
	
	public function uploadify($id,$response){
		//<a href="javascript:$('#file_upload').uploadifyUpload($('.uploadifyQueueItem').last().attr('id').replace('file_upload',''));">Upload Last File</a>
		return '<script type="text/javascript" language="javascript">
				$(document).ready(function() {
				  $(\'#'.$id.'\').uploadify({
					\'uploader\'  : \'' . PATH_3DPARTY . 'uploadify/uploadify.swf\',
					\'script\'    : \'' . PATH_3DPARTY . 'uploadify/uploadify.php\',
					\'cancelImg\' : \'' . PATH_3DPARTY . 'uploadify/cancel.png\',
					\'folder\'    : \'' . UPLOAD_FILE_PATH . '\',
					\'auto\'      : true,
					\'multi\'	  : false,
					\'fileExt\'     : \'*.pdf;*.doc;*.docx;*.ppt\',
					\'onComplete\'  : function(event, ID, fileObj, response, data) {
				      $(\'#'.$response.'\').val(response);
				    }
				  });
				  	
				});
				</script>';
	}
	
	public function uploadify_multi_resizeimage_withwatermark($id,$response){
		//<a href="javascript:$('#file_upload').uploadifyUpload($('.uploadifyQueueItem').last().attr('id').replace('file_upload',''));">Upload Last File</a>
		return '<script type="text/javascript" language="javascript">
				$(document).ready(function() {
				  $(\'#'.$id.'\').uploadify({
					\'uploader\'  : \'' . PATH_3DPARTY . 'uploadify/uploadify.swf\',
					\'script\'    : \'' . PATH_3DPARTY . 'uploadify/uploadify_image_resize_watermark.php\',
					\'cancelImg\' : \'' . PATH_3DPARTY . 'uploadify/cancel.png\',
					\'folder\'    : \'' . UPLOAD_FILE_PATH . '\',
					\'auto\'      : true,
					\'multi\'	  : true,
					\'fileExt\'     : \'*.jpg;*.png;*.gif;*.jpeg\',
					\'onComplete\'  : function(event, ID, fileObj, response, data) {
						$(\'#'.$response.'\').append(\'<li class="span4"><div><img src="'. HTTP_PATH . '/uploads/' .'180-100-\' + response + \'"> <label><input checked="checked" type="checkbox" name="images[]" value="\' + response + \'" /> Select </label></div></li>\');
					}
				  });				  	
				});
				</script>';
	}
	
	public function setAutoSize($id,$normal,$width){
		return '<script type="text/javascript" language="javascript">
				$(document).ready(function() {
					$(\'#'.$id.'\').focus(function(){						
						$(this).animate({
							width: '.$width .'
						}, 800 )
					});
					$(\'#'.$id.'\').blur(function(){						
						$(this).animate({
							width: '.$normal .'
						}, 800 )
					});
				
				});
				</script>';
	}
	
	public function bootpage($data){
		$contentpanel = $data['content'];
		$paginationpanel = $data['pagination'];
		$total = round($data['total'] / MAX_ITEMS_PER_PAGE, 0);
		$do 	= $data['do'];
		
		$searchform = $data['form'];

		return '<script type="text/javascript" language="javascript">
    				$("'.$contentpanel.'").load("'. AJAX_PATH . 'pagination/' . $do .'", {next: 0}); 
					
    				$(\''.$paginationpanel.'\').bootpag({
					    total: '.$total.',
					    page: 1,
					    maxVisible: 10,
					    href: "#page-{{number}}", 	
					    leaps: true,
					    next: \'next\',
					    prev: \'prev\'
				    }).live(\'page\', function(event, num){
				    	$("'.$contentpanel.'").hide().load("'. AJAX_PATH . 'pagination/' . $do .'", {next:(num - 1) * '. MAX_ITEMS_PER_PAGE .'}).fadeIn(200); 
					});
				</script>';
	}
	
	public function editable($data){
		//<a class="inline_edit" href="<?php echo $d['id']"><?php echo $d['in_time'];</a>
		$element = $data['element'];
		$title = $data['title'];
		$type = $data['type'];
		$params = json_encode($data['params']);
		$source = json_encode($data['source']);
		$do = $data['do'];
		
		return '<script type="text/javascript" language="javascript">
					$(document).ready(function() {
							$("'.$element.'").editable({
								type: \''.$type.'\',
								params : '. $params .',
								source : '.$source.',
								pk: function () { return $(this).attr(\'href\'); },
							    url: "' . AJAX_PATH . $do . '",
							    title: "'.$title.'",
							});
					 });
				</script>';
	}
}
?>
