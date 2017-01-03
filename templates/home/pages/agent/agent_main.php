<div class="row">
    <div class="twelve columns">
        <ul class="breadcrumbs">
            <li class="unavailable"><a href="index.php">Home</a></li>
            <li><a href="#">CoverNote type Selection</a></li>
            <li style="float:right; color:#000;"><a href="#">Welcome <b><?php echo $fw->agent($_SESSION['USERID'])->get_username_by_id($_SESSION['USERID']); ?></b></a></li>
        </ul>        
    </div>
</div>    
      
      
<div class="row">
	<h3 class="subheader offset-by-five">CoverNote Type</h3>
</div>



<div class="row">  
	<div class="twelve columns">
    <div class="row">
	<?php  include_once ('agent_menu.php');?>
    
    
        <div class="ten columns"> 
        
        	<div id="lob_error" class="hide" role="alert"><b>Error!!</b> Please select Line of Business. </div>
            <div id="product_error" class="hide" role="alert"><b>Error!!</b> Please select Product Type. </div>
        
        	<div class="panel panel-default" style="background-color:#FFF">
            	<div class="row">
                	<div class="col-lg-1"></div>
  					<div class="col-lg-4">
                    	<h6><span class="label label-default" style="font-size:16px">Line Of Business</span> :</h6>
                    </div>
                    <div class="col-lg-4">
                    	<!--<div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select1" data-toggle="dropdown" href="#">Individual / Organization<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Individual</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Organization</a></li>
                        </ul>
                    	</div>-->
                        <select class="form-control" id="type">
                                    <option value="Individual">Individual</option>
                                    <option value="Organization">Organization</option>
                                </select>
                    </div>
                </div>  
                
                
                <div class="row" style="padding-top:25px;">
                	<div class="col-lg-1"></div>
  					<div class="col-lg-4">
                    	<h6><span class="label label-default" style="font-size:16px">Product</span> :</h6>
                    </div>
                    <div class="col-lg-4">
                    	<!--<div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select2" data-toggle="dropdown" href="#">Motor / Non-Motor<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Motor</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Non-Motor</a></li>
                        </ul>
                    	</div>-->
                        		<select class="form-control" id="product">
                                    <option value="Motor">Motor</option>
                                    <!-- <option value="Non-Motor">Non-Motor</option> -->
                                </select>
                    </div>
                </div>
                
                
                <div class="row" style="padding-top:25px;">
                	<div class="col-lg-5"></div>
  					<div class="col-lg-3">
                    	<input type="button" class="btn btn-primary " name="btnSearch" value="Submit" id="btnSearch" onClick="test()" />
                    </div>
                </div>    
                  
            </div>
       	</div> 	
    </div>    
	</div>
</div>

<script type="text/javascript">

$(".dropdown-menu li a").click(function(){
			  var selText = $(this).text();
			  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText);
			});
			
function test(){
	
	
	var e = document.getElementById("type");
	var type = e.options[e.selectedIndex].value;
	
	var e = document.getElementById("product");
	var product = e.options[e.selectedIndex].value;
	
	/*var l= $('.btn-select1').text();
	var p = $('.btn-select2').text();
	
	var lob = l.toString();
	var product = p.toString();

	var l = '';
	var p= '';*/
	
	/*if(lob == 'Individual / Organization'){
		$("#lob_error").attr("class", "alert alert-danger");
	}
	if(product == 'Motor / Non-Motor'){
		$("#product_error").attr("class", "alert alert-danger");
	}
	else{
		$("#lob_error").attr("class", "hide");
		$("#product_error").attr("class", "hide");*/
		
		
		
		if(type == 'Individual' && product == 'Motor'){
			window.location="http://www.hnbgeneral.com/covernote/createCoverNote.html?type=1";
			}
		if(type == 'Individual' && product == 'Non-Motor'){
			window.location="http://www.hnbgeneral.com/covernote/createCoverNote.html?type=2";
			}
		if(type == 'Organization' && product == 'Motor'){
			window.location="http://www.hnbgeneral.com/covernote/createCoverNote.html?type=3";
			}
		if(type == 'Organization' && product == 'Non-Motor'){
			window.location="http://www.hnbgeneral.com/covernote/createCoverNote.html?type=4";
			}	
		
		
	<!--}-->
	
	}			

</script>