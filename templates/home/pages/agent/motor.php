<div class="row">
<div class="twelve columns"> 
		<div class="two columns"> </div>
        <div class="ten columns"> 
        
        	<div id="lob_error" class="hide" role="alert"><b>Error!!</b> Please select Line of Business. </div>
            <div id="product_error" class="hide" role="alert"><b>Error!!</b> Please select Product Type. </div>
        
        	<div class="panel panel-default" style="background-color:#FFF">
            
            		<input name="product" id="product" value="motor" type="hidden" />
            		<div class="row">                	
                      <div class="col-sm-6" style="margin-top:-20px;"><h3>Motor</h3></div>            
                  	</div>
            
            	  	<div class="row" style="padding-bottom:30px;">
                    	<div class="col-sm-2"><label style="margin-top:10px;">Product :</label></div>
                    	<div class="btn-group" style="padding-left:15px;padding-top:10px;">
                            <label class="btn btn-primary" data-bind="css: { 'active': selectedOption() === 'Option 1' }">
                                <input type="radio" name="options" id="option1" value="Motor Guard" data-bind="checked: selectedOption, checkedValue: 'Option 1'" required>Motor Guard
                            </label>
                            <label class="btn btn-primary" data-bind="css: { 'active': selectedOption() === 'Option 2' }">
                                <input type="radio" name="options" id="option2" value="MotorGuard Extra" data-bind="checked: selectedOption, checkedValue: 'Option 2'" required>Motor Guard Extra
                            </label>
                           <label class="btn btn-primary" data-bind="css: { 'active': selectedOption() === 'Option 3' }">
                                <input type="radio" name="options" id="option3" value="MotorGuard Agro" data-bind="checked: selectedOption, checkedValue: 'Option 3'" required>Motor Guard Agro
                            </label>
                            <label class="btn btn-primary" data-bind="css: { 'active': selectedOption() === 'Option 4' }">
                                <input type="radio" name="options" id="option2" value="MotorGuard Eco" data-bind="checked: selectedOption, checkedValue: 'Option 4'" required>Motor Guard Eco
                            </label>
                           <label class="btn btn-primary" data-bind="css: { 'active': selectedOption() === 'Option 5' }">
                                <input type="radio" name="options" id="option3" value="Motor Takafull" data-bind="checked: selectedOption, checkedValue: 'Option 5'"required>Motor Takafull
                            </label>
                        </div>   
                        <input name="motorProductType" id="motorProductType" type="hidden" />	       
                   </div>
                        
                        
                <!-------------------------------------------------------------------------------------->
                <hr />
                <!-------------------------------------------------------------------------------------->
            <!-- 
                    <div class="row">
                    	<div class="col-lg-3">
                        	<label style="margin-top:10px;">Joint Policy Holder :</label>                            
                        </div>
                        <div class="col-lg-6">
                                    <input style="font-weight:700;" name="jointPolicyHolder" id="jointPolicyHolder" type="text" />	
                     	</div>
                    </div> -->
                    
                    <div class="row">
                    	<div class="col-lg-3"><label style="margin-top:10px;">Financial Institution:</label></div>
                        <div class="col-lg-6">
                      		<input style="font-weight:700;" name="financialInstitution" id="financialInstitution" type="text" required />	
                     	</div>
                    </div>     
  
                    
                    <div class="row">
                    	<div class="col-lg-3"><label style="margin-top:10px;">Cover Inception Date :</label></div>
                        <div class="col-lg-3">
                      		                            
                            <select style="width: 100%" class="form-control" name="coverInceptionDate" id="coverInceptionDate">
                                <option value="<?php echo date("Y/m/d"); ?>"><?php echo date("Y/m/d"); ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+1 days")) ?>"><?php echo date('Y/m/d', strtotime("+1 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+2 days")) ?>"><?php echo date('Y/m/d', strtotime("+2 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+3 days")) ?>"><?php echo date('Y/m/d', strtotime("+3 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+4 days")) ?>"><?php echo date('Y/m/d', strtotime("+4 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+5 days")) ?>"><?php echo date('Y/m/d', strtotime("+5 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+6 days")) ?>"><?php echo date('Y/m/d', strtotime("+6 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+7 days")) ?>"><?php echo date('Y/m/d', strtotime("+7 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+8 days")) ?>"><?php echo date('Y/m/d', strtotime("+8 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+9 days")) ?>"><?php echo date('Y/m/d', strtotime("+9 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+10 days")) ?>"><?php echo date('Y/m/d', strtotime("+10 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+11 days")) ?>"><?php echo date('Y/m/d', strtotime("+11 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+12 days")) ?>"><?php echo date('Y/m/d', strtotime("+12 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+13 days")) ?>"><?php echo date('Y/m/d', strtotime("+13 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+14 days")) ?>"><?php echo date('Y/m/d', strtotime("+14 days")) ?></option>
                                <option value="<?php echo date('Y/m/d', strtotime("+15 days")) ?>"><?php echo date('Y/m/d', strtotime("+15 days")) ?></option>
                                
                                
                            </select>
                     	</div>
                        <div class="col-lg-2"><label style="margin-top:10px;">Cover Period :</label></div>
                        <div class="col-lg-3">
                      		<select id="coverPeriod" name="coverPeriod" style="width: 120%" class="form-control" onchange="ExpirayDateCalculation()">

                              <option value="60">60 Days</option>
                              <option value="15">15 Days</option>
                              <option value="30">30 Days</option>
                              <option value="45">45 Days</option>    
                              
                                                       
                            </select>
                     	</div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-lg-3"><label style="margin-top:10px;">CoverNote Expiry Date :</label></div>
                        <div class="col-lg-3">
                        	<input style="font-weight:700;" name="coverExpiryDate" id="coverExpiryDate" type="text" readonly />
                        </div>
                        <div class="col-lg-2"><label style="margin-top:10px;">Cover Type :</label></div>
                        <div class="col-lg-3">
                      		<!-- <input style="font-weight:700;" name="coverType" id="coverType" value="N/A" type="text" required />	 -->
                          <select name="coverType" id="coverType"  class="form-control" style="font-weight:700;width: 120%" required>
                              <option value="COMPREHENSIVE" >Comphrehensive Cover</option>
                              <option value=" THIRD PARTY">Third Party Only</option>

                          </select>
                     	</div>
                    </div>
                    
                    <!-------------------------------------------------------------------------------------->
                    <hr />
                    <!-------------------------------------------------------------------------------------->
                    
                    <div class="row">                    	
                      <div class="col-sm-6"><h5><i class="glyphicon glyphicon-plane" style="padding-right:10px;"></i>Vehicle Details</h5></div>            
                  	</div> 
                    
                    <div class="row">
                    	<div class="col-sm-2"><label style="margin-top:10px;">Risk Type :</label></div>
                      	<div class="col-lg-4">
                        	<select id="riskType" name="riskType" class="form-control" onchange="setRiskType()">
						
                                   <option value="MOTOR CAR">MOTOR CAR</option> 
                                   <option value="DUAL POURPOSE VEHICLE">DUAL POURPOSE VEHICLE</option>
                                   <option value="THREE WHEELER">THREE WHEELER</option>
                                   <option value="GOODS VEHICLE">GOODS VEHICLE</option>
                                   <option value="MOTOR COACH (PASS-VEHI)">MOTOR COACH (PASS-VEHI)</option>
                                   <option value="TRACTORS">TRACTORS</option>
                                   <option value="MOTOR CYCLE">MOTOR CYCLE</option>
                                   <option value="OTHERS">OTHERS</option> 
                                   <option value="OTHER SPECIAL">OTHER SPECIAL</option>                         
                              </select>	
                      		<!--<input style="font-weight:700;" name="riskType" id="riskType" type="hidden" required />	-->
                     	</div>  
                     	<div class="col-lg-2"><label style="margin-top:10px;">Vehicle Type :</label></div>
                      	<div class="col-lg-4">
                        	<select id="vehicleType" name="vehicleType" class="form-control" >
							                  
                                <option value="MOTOR CAR">MOTOR CAR</option>  
                                <option value="JEEP">JEEP</option>            

                          </select>	
                      		<!--<input style="font-weight:700;" name="vehicleType" id="vehicleType" type="hidden" required />-->	
                     	</div>  
                  </div>   
                  
                     
                  <div class="row" style="margin-top:15px;margin-bottom:15px;">      
                        <div class="col-lg-2"><label style="margin-top:10px;">Usage :</label></div>
                      	<div class="col-lg-4">
                        	<select id="usage" name="usage" class="form-control" onchange="setVehicleUsage()">
							  <?php  foreach($fw->agent($_SESSION['USERID'])->getAllUsageTypes() as $v){?>
                                    <option value="<?php echo $v['vehicleUsage'] ?>"><?php echo $v['vehicleUsage']; ?></option>
                              <?php }?>	                             
                              </select>	
                      		<!--<input style="font-weight:700;" name="usage" id="usage" type="hidden" required />	-->
                     	</div>
                        <div class="col-sm-2"><label style="margin-top:10px;">Sum Insured :</label></div>
                      	<div class="col-lg-4">
                        	<div class="input-group">
                      		<input style="font-weight:700;" name="sumInsured" id="sumInsured" type="text" class="form-control" onkeypress="return alpha(event)" required />	
                            <span class="input-group-addon">LKR</span>
                            </div>
                     	</div> 
                    </div>
               
                  
                    
                    <div class="row"> 
                     	<div class="col-lg-2"><label style="margin-top:10px;">Make :</label></div>
                      	<div class="col-lg-4">
                      		<input style="font-weight:700;" name="make" id="make" type="text" required />	
                     	</div>  
                        <div class="col-lg-2"><label style="margin-top:10px;">Model :</label></div>
                      	<div class="col-lg-4">
                      		<input style="font-weight:700;" name="model" id="model" type="text" required />	
                     	</div>
                    </div>



                    <div class="row"> 
                    <div class="col-sm-2"><label style="margin-top:10px;">Vehicle No :</label></div>
                        <div class="col-lg-4">
                          <input style="font-weight:700;" name="vehicleNo" id="vehicleNo" type="text" required /> 
                      </div>  
                      <div class="col-lg-2"><label style="margin-top:10px;">Fuel Type :</label></div>
                        <div class="col-lg-4">

                         <select id="fuelType" name="fuelType" class="form-control"  required>
                         
                           <option value="Petrol" selected="">Petrol</option>
                           <option value="Diesel">Diesel </option>
                           <option value="Hybrid">Hybrid </option>
                           <option value="Electric">Electric</option>

                         </select>
                      </div>   
                    </div>
                


                    
                    <div class="row">
                    	<div class="col-sm-2"><label style="margin-top:10px;">Engine No :</label></div>
                        <div class="col-lg-4">
                          <input style="font-weight:700;" name="engineNo" id="engineNo" type="text" required /> 
                      </div> 



                      <div class="col-lg-2"><label style="margin-top:10px;">Chassis/Frame # :</label></div>
                        <div class="col-lg-4">
                          <input style="font-weight:700;" name="frameNo" id="frameNo" type="text" required /> 
                      </div>

                        <div class="col-lg-2">
                      	<div class="col-lg-2">
                      			
                     	</div>
                    </div>
                    </div>
                    
                    
                    <div class="row">

                       <div class="col-lg-2"><label style="margin-top:10px;">Engine Capacity :</label></div>
                        <div class="col-lg-4">
                          <div class="input-group">
                              <input style="font-weight:700;" name="engineCapacity" id="engineCapacity"  type="text" class="form-control" >
                              <span class="input-group-addon"  >CC</span>
                               <p id="engineCapacityError" style="color: red"></p>
                            </div>
                      </div>  

                    	 <div class="col-lg-2"><label style="margin-top:10px;">Additional Covers :</label></div>
                        <div class="col-lg-4">
                          <input style="font-weight:700;" name="additionalCovers" id="additionalCovers" value="N/A" type="text" required /> 
                      </div>

                     	
                   

                    </div>
                    
                    <div class="row">
                    	  <div class="col-lg-2"><label style="margin-top:10px;">Previous Policy No :</label></div>
                        <div class="col-lg-4">
                          <input style="font-weight:700;" name="previousPolicyNo" id="previousPolicyNo" type="text" />  
                                <small id="nic_msg" class="info">* Leave Blank for NEW Policy</small>
                      </div>
                     	<div class="col-lg-2"><label style="margin-top:10px;">Previous CoverNote # :</label></div>
                      	<div class="col-lg-4">
                      		<input style="font-weight:700;" name="previousCoverNo" id="previousCoverNo" value="N/A" type="text" required />
                     	</div>
                    </div>
                    
                    
                    <!-------------------------------------------------------------------------------------->
                    <hr />
                    <!-------------------------------------------------------------------------------------->
        
        			<div class="row">                    	
                        <div class="col-sm-6"><h5><i class="glyphicon glyphicon-info-sign" style="padding-right:10px;"></i>Pending Requirements</h5></div>            
                    </div>
                    
                    <div class="row">
                    	<div class="col-lg-1"></div>
                    	<div class="col-lg-5">
                    	<div class="control-group">
                          <div class="controls">
                            <label class="checkbox">
                              <input type="checkbox" name="pendingRegistration" id="pendingRegistration" value="yes" >
                              Pending Registration
                            </label>
                            <label class="checkbox">
                              <input type="checkbox" name="pendingInspection" id="pendingInspection" value="yes">
                              Pending inspecton
                            </label>
                            <label class="checkbox">
                              <input type="checkbox" name="copyRegistration" id="copyRegistration" value="yes">
                              Pending VIC /Copy of registration
                            </label>
                             <label class="checkbox">
                              <input type="checkbox" name="pendingPayment" id="pendingPayment" value="yes">
                              Pending Payment
                            </label>
                            <label class="checkbox">
                              <input type="checkbox" name="dulyCompleted" id="dulyCompleted" value="yes">
                              Duly Completed Proposal Form
                            </label>
                          </div>
                          </div>
                          </div>
                          
                          <div class="col-lg-5">
                    	<div class="control-group">
                          <div class="controls">
                            <label class="checkbox">
                              <input type="checkbox" name="transferOwnership" id="transferOwnership" value="yes" >
                              Transfer of Ownership
                            </label>
                            <label class="checkbox">
                              <input type="checkbox" name="particularsVehicle" id="particularsVehicle" value="yes">
                              Particulars of Vehicle
                            </label>
                            <label class="checkbox">
                              <input type="checkbox" name="dualPurpose" id="dualPurpose" value="yes">
                              Luxury/ Semi Luxury / Dual Purpose Tax
                            </label>
                             <label class="checkbox">
                              <input type="checkbox" name="rubberStamp" id="rubberStamp" value="yes">
                              Ins. Sign / Ruber Stamp Documents
                            </label>
                          </div>
                        </div>
                    </div>
                </div>     
                
                    <!-------------------------------------------------------------------------------------->
                    <hr />
                    <!-------------------------------------------------------------------------------------->


                    <div class="row">

                    <div class="col-lg-3"><label style="margin-top:10px;">Quotation  Number :</label></div>
                        <div class="col-lg-4">
                          <input style="font-weight:700;" name="quotationNumber" id="quotationNumber" type="text" required /> 

                 <p id="Qerror" style="color: red"></p>
                      </div> 

                             <div class="col-lg-1"></div>
                      <div class="col-lg-2">
                          <div class="control-group">
                              <div class="controls">
                                <label class="radio" style="left: -20%">
                                 
                                Ex.16HDO00001
                                </label>
                            </div>
                          </div>
                    </div> 

                      </div>
                    
                    <div class="row">

                    	<div class="col-lg-3"><label style="margin-top:10px;">Premium Amount :</label></div>
                      	<div class="col-lg-4">
                      		<input style="font-weight:700;" name="premiumAmount" id="premiumAmount" type="text" required />	
                           <p id="perror" style="color: red"></p>
                     	</div>  
                        <div class="col-lg-1"></div>
                     	<div class="col-lg-2">
                        	<div class="control-group">
                              <div class="controls">
                                <label class="radio">
                                  <input type="radio" name="asAgreed" id="asAgreed" value="Managing editor" checked>
                                  As agreed
                                </label>
                            </div>
                      		</div>
                    </div>
                 
            </div>

       	</div> 	

    </div>    

</div>
</div>
<script type="text/javascript">

$('#datepicker').datepicker();

//================ PGAE LOAD FOR EXPIRAY DATE 15 ========
window.onload = function(){
	ExpirayDateCalculation();
};
//=======================================================
//================ FUNCTION FOR EXPIRAY DATE CALCULATION ================================
function ExpirayDateCalculation(){
	var coverPeriod = 60;
	var e = document.getElementById("coverPeriod");
	coverPeriod = parseInt(e.options[e.selectedIndex].value);
	
	var someDate = new Date();
	var numberOfDaysToAdd = coverPeriod;
	someDate.setDate(someDate.getDate() + numberOfDaysToAdd); 
	
	var dd = someDate.getDate().toString();
	var mm = (someDate.getMonth() + 1).toString();
	var y = someDate.getFullYear().toString();
	
	var someFormattedDate = y + '/' + (mm[1]?mm:"0"+mm[0]) + '/' + (dd[1]?dd:"0"+dd[0]);
	
	document.getElementById('coverExpiryDate').value = someFormattedDate; 

	}
//======================================================================================
//================ FUNCTION FOR PRODUCT ASSIGN =========================================
jQuery(function ($) {
    $(document).on('change', 'input:radio[id^="option"]', function (event) {
     	var productType =$("input[name='options']:checked").val();
		document.getElementById('motorProductType').value = productType;
    });
});
//======================================================================================

var viewModel = function() {
    var self = this;    
    self.selectedOption = ko.observable("Option 2");
}
var vm = new viewModel();
ko.applyBindings(vm);

//======================================================================================
function alpha(e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
}
//======================================================================================


  function setRiskType(){


      var riskType = document.getElementById('riskType').value;

      if(riskType == 'MOTOR CAR'){

        var string = "<option value='MOTOR CAR'>MOTOR CAR</Option><option value='JEEP'>JEEP</Option>";

        document.getElementById('vehicleType').innerHTML = string;

      }
       if(riskType == 'DUAL POURPOSE VEHICLE'){

        var string = "<option value='DOUBLE CAB'>DOUBLE CAB</Option><option value='CREW CAB'>CREW CAB</Option><option value='VAN'>VAN</Option>";

        document.getElementById('vehicleType').innerHTML = string;

      }
       if(riskType == 'THREE WHEELER'){

        var string = "<option value='THREE WHEELER'>THREE WHEELER</Option>";

        document.getElementById('vehicleType').innerHTML = string;

      }
       if(riskType == 'GOODS VEHICLE'){

        var string = "<option value='MOTOR LORRY'>MOTOR LORRY</Option><option value='SINGLE CAB'>SINGLE CAB</Option><option value='BOWSER'>BOWSER</Option><option value='PRIME MOVER'>PRIME MOVER</Option>";

        document.getElementById('vehicleType').innerHTML = string;

      }
       if(riskType == 'MOTOR COACH (PASS-VEHI)'){

        var string = "<option value='PASSENGER CARRYING BUS'>PASSENGER CARRYING BUS</Option><option value='ROUTE BUS'>ROUTE BUS</Option><option value='JEEP'>JEEP</Option><option value='VAN'>VAN</Option>";

        document.getElementById('vehicleType').innerHTML = string;

      }
       if(riskType == 'TRACTORS'){

        var string = "<option value='2WD TRACTOR'>2WD TRACTOR</Option><option value='4WD TRACTOR'>4WD TRACTOR</Option>";

        document.getElementById('vehicleType').innerHTML = string;

      }
       if(riskType == 'MOTOR CYCLE'){

        var string = "<option value='MOTOR CYCLE NORMAL'>MOTOR CYCLE NORMAL</Option><option value='MOTOR CYCLE STAFF'>MOTOR CYCLE STAFF</Option>";

        document.getElementById('vehicleType').innerHTML = string;

      }
       if(riskType == 'OTHERS'){

        var string = "<option value='AMBULANCE'>AMBULANCE</Option><option value='ANGLEDOZER'>ANGLEDOZER</Option><option value='BACHOE'>BACHOE</Option><option value='BULLDOZER'>BULLDOZER</Option><option value='BULLGRADER'>BULLGRADER</Option> <option value='CATTEPILLER'>CATTEPILLER</Option><option value='COMBINE HARVESTER'>COMBINE HARVESTER</Option><option value='CONCRETE MIXER'>CONCRETE MIXER</Option> <option value='CRANE'>CRANE</Option><option value='DOZER'>DOZER</Option><option value='DUMPER'>DUMPER</Option><option value='EXCAVATOR'>EXCAVATOR</Option> <option value='FIRE BRIGADE'>FIRE BRIGADE</Option><option value='FORK LIFTER'>FORK LIFTER</Option><option value='HEARSE'>HEARSE</Option><option value='ROAD ROLLER'>ROAD ROLLER</Option><option value='TRADE PLATE'>TRADE PLATE</Option><option value='TRAILER'>TRAILER</Option><option value='TREEDOZER'>TREEDOZER</Option>";

        document.getElementById('vehicleType').innerHTML = string;

      }
      if(riskType == 'OTHER SPECIAL'){

        var string = "<option value='AGRICULTURE SPRAYER'>AGRICULTURE SPRAYER</Option><option value='DUST CART'>DUST CART</Option><option value='GRABS'>GRABS</Option><option value='LEVELLER'>LEVELLER</Option><option value='MOBILE CANTEEN / SHOP'>MOBILE CANTEEN / SHOP</Option> <option value='MOBILE PLANT'>MOBILE PLANT</Option><option value='MOBILE SURGERY VEHICLE'>MOBILE SURGERY VEHICLE</Option><option value='RIPPER'>RIPPER</Option><option value='ROAD FINISHING MACHINE'>ROAD FINISHING MACHINE</Option><option value='ROAD SWEEPER'>ROAD SWEEPER</Option><option value='SCRAPER'>SCRAPER</Option><option value='SHEEP FOOT TAMPING ROLLER'>SHEEP FOOT TAMPING ROLLER</Option><option value='SHOVELS'>SHOVELS</Option><option value='TAR SPRAYER'>TAR SPRAYER</Option><option value='TEA SPRAYER'>TEA SPRAYER</Option><option value='TOWER WAGON'>TOWER WAGON</Option><option value='TRAIL BUILDER'>TRAIL BUILDER</Option><option value='WATER CART'>WATER CART</Option><option value='WELDING PLANT'>WELDING PLANT</Option>";

        document.getElementById('vehicleType').innerHTML = string;

      }




  }


</script>

<script type="text/javascript">

    function Qcheck(){

     
            var Qnumber        = document.getElementById('quotationNumber').value;
            var premiumAmount  = document.getElementById('premiumAmount').value;
            var fuelType       = document.getElementById('fuelType').value;
            var engineCapacity = document.getElementById('engineCapacity').value;



            if(fuelType != 'Electric' && engineCapacity == "" ){

              
               document.getElementById("perror").innerHTML = "Please provide you Engine Capacity details above";
               return false;

            }

          //var testIt = /^[0-9]{2}[A-Z]{3}[0-9]{5}/;
           var testIt = /^[a-z0-9]+$/i;
           var pattern = /^\d*\.?\d*$/;

            if(Qnumber.length > 11){

                 document.getElementById('Qerror').innerHTML = "Quotation Number can contain only 11 digits.";
                 document.getElementById('perror').innerHTML = "";
                 return false;

            }

            if(!testIt.test(Qnumber)){


                document.getElementById('Qerror').innerHTML = "Invalid Quotation Number.";
                document.getElementById('perror').innerHTML = "";
                return false;

            }

            if(!pattern.test(premiumAmount)){

               document.getElementById('perror').innerHTML = "Invalid Premium Amount( don't use ',' for number seperations ).";
               document.getElementById('Qerror').innerHTML = "";
                return false;

            }

                document.getElementById('Qerror').innerHTML = "";
                document.getElementById('perror').innerHTML = "";

            return tue;

        }

</script>