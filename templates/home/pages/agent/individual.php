		<div class="two columns"> </div>
        <div class="ten columns"> 
        
        	<div id="lob_error" class="hide" role="alert"><b>Error!!</b> Please select Line of Business. </div>
            <div id="product_error" class="hide" role="alert"><b>Error!!</b> Please select Product Type. </div>
        
        	<div class="panel panel-default" style="background-color:#FFF">
            
            		<input name="lineOfBusiness" id="lineOfBusiness" value="individual" type="hidden" />	
                    <div class="row">                	
                      <div class="col-sm-6" style="margin-top:-20px;"><h3>Individual</h3></div>            
                  	</div>
                    
            	  	<div class="row">
                     	<div class="col-lg-2">
                        	<div class="input-group">
                          	<div class="input-group-btn">
                          	<div class="btn-group"> 
                            	<a class="btn btn-default dropdown-toggle btn-select_title" data-toggle="dropdown" href="#">Title <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                      <li><a href="#">Mr.</a></li>
                                      <li><a href="#">Miss.</a></li>
                                      <li><a href="#">Mrs.</a></li>
                                      <li><a href="#">Master.</a></li>
                                      <li><a href="#">Rev.</a></li>
                                </ul>
                                <input name="title" id="title" type="hidden" />
                    		</div>
                        	</div>
                            </div>
                      </div>
                      <div class="col-lg-2"><label style="margin-top:10px;">First Name :</label></div>
                      <div class="col-lg-3">
                      	<input style="font-weight:700;" name="firstName" id="firstName" type="text" required />	
                     </div>  
                     <div class="col-lg-2"><label style="margin-top:10px;">Last Name :</label></div>
                      <div class="col-lg-3">
                      	<input style="font-weight:700;" name="lastName" id="lastName" type="text" required />	
                     </div>                     
                   </div>
  
                    
                    <div class="row">
                    	<div class="col-lg-3">
                        	<label style="margin-top:10px;">Communication Address :</label>                            
                        </div>
                        <div class="col-lg-8">
                      		<input style="font-weight:700;" name="communicationAddress" id="communicationAddress" type="text" required />	
                     	</div>
                        <div class="col-lg-1"><input type="checkbox" class="myClass" value="yes" id="addressCopy" name="addressCopy"/></div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-lg-3"><label style="margin-top:10px;">Risk Address :</label></div>
                        <div class="col-lg-8">
                      		<input style="font-weight:700;" name="riskAddress" id="riskAddress" type="text" />	
                     	</div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-lg-3"><label style="margin-top:10px;">NIC No :</label></div>
                        <div class="col-lg-3">
                      		<input style="font-weight:700;" name="nicNo" id="nicNo" type="text" maxlength="12" required />	
                     	</div>
                        <div class="col-lg-2"><label style="margin-top:10px;">Phone (Cell) :</label></div>
                        <div class="col-lg-3">
                      		<input style="font-weight:700;" name="mobile" id="mobile" type="text" required />	
                     	</div>
                    </div>
                    
                    
                    <div class="row">
                    	<div class="col-lg-3"><label style="margin-top:10px;">Vat No :</label></div>
                        <div class="col-lg-3">
                      		<input style="font-weight:700;" name="vatNo" id="vatNo" value="N/A" type="text" required />	
                     	</div>
                        <div class="col-lg-2"><label style="margin-top:10px;">SVat No :</label></div>
                        <div class="col-lg-3">
                      		<input style="font-weight:700;" name="svatNo" id="svatNo" value="N/A" type="text" required />	
                     	</div>
                    </div>
                    
                    
                     
        
                </div>  
            </div>
       	</div> 	
    </div>    



<script type="text/javascript">
//=================================================================================
$(".dropdown-menu li a").click(function(){
			  var selText = $(this).text();
			  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText);
			  document.getElementById('title').value = selText;
			});
//=================================================================================
jQuery(function ($) {
    $(document).on('change', 'input:checkbox[id="addressCopy"]', function (event) {
     	document.getElementById('riskAddress').value = document.getElementById('communicationAddress').value;
    });
});
//=================================================================================

</script>