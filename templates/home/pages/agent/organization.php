		<div class="two columns"> </div>
        <div class="ten columns"> 
        
        	<div id="lob_error" class="hide" role="alert"><b>Error!!</b> Please select Line of Business. </div>
            <div id="product_error" class="hide" role="alert"><b>Error!!</b> Please select Product Type. </div>
        
        	<div class="panel panel-default" style="background-color:#FFF">
            	  	
                  <input name="lineOfBusiness" id="lineOfBusiness" value="organization" type="hidden" /> 
                  <div class="row">                	
                      <div class="col-sm-6" style="margin-top:-20px;"><h3>Organization</h3></div>            
                  	</div>  
           
           		<div class="row">
                    <div class="col-lg-3"><label style="margin-top:10px;">Business Name :</label></div>
                    <div class="col-lg-8">
                        <input style="font-weight:700;" name="firstName" id="firstName" type="text" required />	
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
                        <input style="font-weight:700;" name="riskAddress" id="riskAddress" type="text" required />	
                    </div>
                 </div>
                 
                 
                 <div class="row">
                    <div class="col-lg-3"><label style="margin-top:10px;">Business Registration No :</label></div>
                    <div class="col-lg-3">
                        <input style="font-weight:700;" name="registrationNo" id="registrationNo" type="text"  />	
                    </div>
                    <div class="col-lg-2"><label style="margin-top:10px;">Vat Reg No :</label></div>
                    <div class="col-lg-3">
                        <input style="font-weight:700;" name="n" id="n" type="text"  />	
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-3"><label style="margin-top:10px;">Phone (Cell) :</label></div>
                    <div class="col-lg-3">
                        <input style="font-weight:700;" name="mobile" id="mobile" type="text"  />	
                    </div>
                    <div class="col-lg-2"><label style="margin-top:10px;">SVAT Reg No:</label></div>
                    <div class="col-lg-3">
                        <input style="font-weight:700;" name="svatNo" id="svatNo" type="text"  />	
                    </div>
                </div>
           
       			</div>  
            </div>
       	</div> 	
    </div>    

<script type="text/javascript">


//=================================================================================
jQuery(function ($) {
    $(document).on('change', 'input:checkbox[id="addressCopy"]', function (event) {
     	document.getElementById('riskAddress').value = document.getElementById('communicationAddress').value;
    });
});
//=================================================================================



</script>