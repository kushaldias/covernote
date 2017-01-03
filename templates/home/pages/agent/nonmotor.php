<div class="row">
<div class="twelve columns"> 
		<div class="two columns"> </div>
        <div class="ten columns"> 
        
        
        	<div class="panel panel-default" style="background-color:#FFF">
            
            <input name="product" id="product" value="nonMotor" type="hidden" />
            <div class="row">                	
              <div class="col-sm-6" style="margin-top:-20px;"><h3>Non-Motor</h3></div>            
            </div>
            	  	
           	<div class="row" style="padding-bottom:25px;">
           		<div class="col-sm-3"><label style="margin-top:10px;">Product :</label></div>
                    <div class="btn-group" style="padding-left:15px;">
                        <label class="btn btn-primary" data-bind="css: { 'active': selectedOption() === 'Option 1' }">
                            <input type="radio" name="options" id="option1" value="Dwelling House" data-bind="checked: selectedOption, checkedValue: 'Option 1'">Dwelling House
                        </label>
                        <label class="btn btn-primary" data-bind="css: { 'active': selectedOption() === 'Option 2' }">
                            <input type="radio" name="options" id="option2" value="Fire Business Premise" data-bind="checked: selectedOption, checkedValue: 'Option 2'">Fire Business Premise
                        </label>
                        
                        <input name="nonmotorProductType" id="nonmotorProductType" type="hidden" />
                    </div>
              </div>   
            
                <!-------------------------------------------------------------------------------------->
                <hr />
                <!-------------------------------------------------------------------------------------->
            
                <div class="row">
                    	<div class="col-lg-3">
                        	<label style="margin-top:10px;">Joint Policy Holder :</label>                            
                        </div>
                        <div class="col-lg-6">
                      		<input style="font-weight:700;" name="jointPolicyHolder" id="jointPolicyHolder" type="text" />	
                     	</div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-lg-3"><label style="margin-top:10px;">Financial Institution:</label></div>
                        <div class="col-lg-6">
                      		<input style="font-weight:700;" name="financialInstitution" id="financialInstitution" type="text" />	
                     	</div>
                    </div>
              
                <!-------------------------------------------------------------------------------------->
                <hr />
                <!-------------------------------------------------------------------------------------->
              
              <div class="row">                    	
                  <div class="col-sm-6"><h5><i class="glyphicon glyphicon-calendar" style="padding-right:10px;"></i>Period</h5></div>            
              </div>   
                 
                 <div class="row">
                    <div class="col-lg-3"><label style="margin-top:10px;">Cover Period :</label></div>
                    <div class="col-lg-3">
                        <select id="policyDuration" name="policyDuration" class="form-control" onchange="ExpirayDateCalculation()">
                              <option value="60">60 Days</option>
                              <option value="15">15 Days</option>
                              <option value="30">30 Days</option>
                              <option value="45">45 Days</option>                              
                        </select>	
                    </div><input name="coverPeriodInput" id="coverPeriodInput" value="60 Days" type="hidden" />
                </div>
                
                <div class="hide" style="margin-top:15px;">
                    <div class="col-lg-3"><label style="margin-top:10px;">Policy Start Date :</label></div>
                    <div class="col-lg-3">
                        <input style="font-weight:700;" name="policyStartDate" id="policyStartDate" value="<?php echo date("Y/m/d"); ?>" type="text" required />	
                    </div>
                    <div class="col-lg-3"><label style="margin-top:10px;">Policy Expiration Date:</label></div>
                    <div class="col-lg-3">
                        <input style="font-weight:700;" name="policyExpirationDate" id="policyExpirationDate" type="text" required />	
                    </div>
                </div>
                
                
                
                <!-------------------------------------------------------------------------------------->
                <hr />
                <!-------------------------------------------------------------------------------------->
                
                
                <div class="row">                    	
                  <div class="col-sm-6"><h5><i class="glyphicon glyphicon-hand-right" style="padding-right:10px;"></i>Sum Insured Break Down</h5></div>            
              </div> 
                             
                
                <div class="row">
                    <div class="col-lg-7"><label style="margin-top:10px;">A) On Building Including its permanent fixtures and fittings :</label></div>
                    <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon">LKR.</span>
                          <input type="text" class="form-control" style="font-weight:700;" onkeyup="suminsuredCalculation();premiumCalculation();" name="onBuilding" id="onBuilding">
                        </div>	
                    </div>
                </div>  
                
                <div class="row">
                    <div class="col-lg-7"><label style="margin-top:10px;">B) On Parapet wall and gate(s) :</label></div>
                    <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon">LKR.</span>
                          <input type="text" class="form-control" style="font-weight:700;" onkeyup="suminsuredCalculation();premiumCalculation();" name="onParapet" id="onParapet">
                        </div>	
                    </div>
                </div>  
                
                <div class="row">
                    <div class="col-lg-7"><label style="margin-top:10px;">C) On Furniture :</label></div>
                    <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon">LKR.</span>
                          <input type="text" class="form-control" style="font-weight:700;" onkeyup="suminsuredCalculation();premiumCalculation();" name="onFurniture" id="onFurniture">
                        </div>	
                    </div>
                </div> 
                
                
                <div class="row">
                    <div class="col-lg-7"><label style="margin-top:10px;">D) On Electrical and electronic appliances :</label></div>
                    <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon">LKR.</span>
                          <input type="text" class="form-control" style="font-weight:700;" onkeyup="suminsuredCalculation();premiumCalculation();" name="onElectronic" id="onElectronic">
                        </div>	
                    </div>
                </div> 
                
                
                <div class="row" id="onMachineryDiv">
                    <div class="col-lg-7"><label style="margin-top:10px;">E) On Machinery (List to be Submited) :</label></div>
                    <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon">LKR.</span>
                          <input type="text" class="form-control" style="font-weight:700;" onkeyup="suminsuredCalculation();premiumCalculation();" name="onMachinery" id="onMachinery">
                        </div>	
                    </div>
                </div> 
                    
                
                <div class="row">
                    <div class="col-lg-7"><label style="margin-top:10px;" id="onStockLable">F) On Stock :</label></div>
                    <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon">LKR.</span>
                          <input type="text" class="form-control" style="font-weight:700;" onkeyup="suminsuredCalculation();premiumCalculation();" name="onStock" id="onStock">
                        </div>	
                    </div>
                </div>   
                
                <div class="row">
                    <div class="col-lg-7"><label style="margin-top:10px;" id="onOtherLable">G) On Other content :</label></div>
                    <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon">LKR.</span>
                          <input type="text" class="form-control" style="font-weight:700;" onkeyup="suminsuredCalculation();premiumCalculation();" name="onOther" id="onOther">
                        </div>	
                    </div>
                </div>  
                
                <div class="row" style="margin-top:15px;">
                    <div class="col-lg-7"><label style="margin-top:10px;">Sum Insured :</label></div>
                    <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon" style="border-color: rgba(18, 140, 32, 1.2);">LKR.</span>
                          <input type="text" class="form-control" style="font-weight:700;border-color: rgba(18, 140, 32, 1.2);font-size:16px;" name="sumInsured" id="sumInsured" readonly="readonly">
                          <input type="hidden" class="form-control" name="sumInsuredValue" id="sumInsuredValue">
                        </div>	
                    </div>
                </div>
                
                <!-------------------------------------------------------------------------------------->
                <hr />
                <!-------------------------------------------------------------------------------------->
                
                
                <div class="row">                    	
                  <div class="col-sm-7"><h5><i class="glyphicon glyphicon-fire" style="padding-right:10px;"></i>Perils (Covers)</h5></div>  
                  <div class="col-sm-5"><h5><i class="glyphicon glyphicon-info-sign" style="padding-right:10px;"></i>Pending Requirements</h5></div>          
              </div> 
                
                
               
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Fire & Lighting as basic Cover :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="fireLighting" id="b1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="fireLighting" id="b2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="fireLighting" id="fireLighting" value="yes" type="hidden" />
                    </div>
                    <div class="col-lg-4"><label style="margin-top:10px;">Pending Inspection :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="pendingInspection" id="b1" data-toggle="button" class="btn btn-xs btn-default">
                            <input type="button" value="No" name="pendingInspection" id="b2" data-toggle="button" class="btn btn-xs btn-info active">
                        </div><input name="pendingInspection" id="pendingInspection" value="no" type="hidden" />	
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Malicious Damage (MD) :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="maliciosDamage" id="maliciosDamageb1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="maliciosDamage" id="maliciosDamageb2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="maliciosDamage" id="maliciosDamage" value="yes" type="hidden" />	
                    </div>
                    <div class="col-lg-4"><label style="margin-top:10px;">Pending Payment :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="pendingPayment" id="b1" data-toggle="button" class="btn btn-xs btn-default">
                            <input type="button" value="No" name="pendingPayment" id="b2" data-toggle="button" class="btn btn-xs btn-info active">
                        </div><input name="pendingPayment" id="pendingPayment" value="no" type="hidden" />	
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">explosion :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="xPolosion" id="b1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="xPolosion" id="b2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="xPolosion" id="xPolosion" value="yes" type="hidden" />	
                    </div>
                    <div class="col-lg-4"><label style="margin-top:10px;">DC Proposal Form :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                          	<input type="button" value="yes" name="dcProposal" id="b1" data-toggle="button" class="btn btn-xs btn-default">
                            <input type="button" value="No" name="dcProposal" id="b2" data-toggle="button" class="btn btn-xs btn-info active">
                        </div><input name="dcProposal" id="dcProposal" value="no" type="hidden" />		
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Impact Damage :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                           	<input type="button" value="yes" name="impactDamage" id="b1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="impactDamage" id="b2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="impactDamage" id="impactDamage" value="yes" type="hidden" />		
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Aircraft Damage :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="aircraftDamage" id="b1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="aircraftDamage" id="b2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="aircraftDamage" id="aircraftDamage" value="yes" type="hidden" />	
                    </div>
                </div> 
                
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Cyclone Storm Tempest (CST) :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="cycloneStorm" id="cycloneStormb1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="cycloneStorm" id="cycloneStormb2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="cycloneStorm" id="cycloneStorm" value="yes" type="hidden" />	
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Flood :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="flood" id="floodb1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="flood" id="floodb2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="flood" id="flood" value="yes" type="hidden" />	
                    </div>
                </div> 
                
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Earthquake :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="earthquake" id="earthquakeb1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="earthquake" id="earthquakeb2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="earthquake" id="earthquake" value="yes" type="hidden" />
                    </div>
                </div> 
                
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Other Special Natural :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="otherSpecific" id="otherSpecificb1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="otherSpecific" id="otherSpecificb2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="otherSpecific" id="otherSpecific" value="yes" type="hidden" />
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Electrical Extra (EE) :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="electricalExtra" id="b1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="electricalExtra" id="b2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="electricalExtra" id="electricalExtra" value="yes" type="hidden" />	
                    </div>
                </div> 
                
                
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Bursting & Over Flowing of water pipes (BOT) :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                           	<input type="button" value="yes" name="burstingOver" id="b1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="burstingOver" id="b2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="burstingOver" id="burstingOver" value="yes" type="hidden" />		
                    </div>                         
                </div> 
                
                
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Burglary On Contents :</label></div>
                    <div class="col-lg-2">
                       <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="burglaryContent" id="b1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="burglaryContent" id="b2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="burglaryContent" id="burglaryContent" value="yes" type="hidden" />	
                    </div> 
                </div> 
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Burglary First Loss % :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="burglaryLoss" id="b1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="burglaryLoss" id="b2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="burglaryLoss" id="burglaryLoss" value="yes" type="hidden" />
                    </div>	
                    <div class="col-lg-2" id="burglaryLossDiv">
                        <select id="burglaryLossCombo" name="burglaryLossCombo" class="form-control">
                            <option value="100">100%</option>
                            <option value="5">5%</option>
                            <option value="10">10%</option>
                            <option value="50">50%</option>
                            <option value="75">75%</option>                              
                        </select>
                    </div>
                </div>
                
                
                <!-------------------------------------------------------------------------------------->
                <hr />
                <!-------------------------------------------------------------------------------------->
                
                <div class="row">
                    <div class="col-lg-6">
                    	<h6><i class="glyphicon glyphicon-warning-sign" style="padding-right:10px;"></i>Warranties/Clues/Excess & Special Condition</h6>
                    </div> 
                </div>
                
                <div class="row">
                    <div class="col-lg-6">
                    	<textarea class="field" id="warranties" name="warranties" rows="5" placeholder="Enter a short synopsis">As Agreed</textarea>
                    </div> 
                </div>
                
                
                <!-------------------------------------------------------------------------------------->
                <hr />
                <!-------------------------------------------------------------------------------------->
                
                <div class="panel" style="border-color:#F00;background-color:#FFF;">
                <div class="row">
                	
                    <div class="col-lg-4"><label style="margin-top:10px;">Strike, Riot & Civil Commotion (SRCC) :</label></div>
                    <div class="col-lg-2">
                        <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="strikeRiot" id="b1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="strikeRiot" id="b2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="strikeRiot" id="strikeRiot" value="yes" type="hidden" />
                    </div>                    
                </div> 
                
                
                <div class="row">
                    <div class="col-lg-4"><label style="margin-top:10px;">Terrorism (TC) :</label></div>
                    <div class="col-lg-2">
                       <div class="btn-group btn-toggle" data-toggle-name="sort_options" data-toggle="buttons-radio" style="margin-top:5px;">
                            <input type="button" value="yes" name="terrorism" id="b1" data-toggle="button" class="btn btn-xs btn-info active">
                            <input type="button" value="No" name="terrorism" id="b2" data-toggle="button" class="btn btn-xs btn-default">
                        </div><input name="terrorism" id="terrorism" value="yes" type="hidden" />	
                    </div>                    
                </div>                 
                </div>	
                
                

              
                <!-------------------------------------------------------------------------------------->
                <hr />
                <!-------------------------------------------------------------------------------------->
                
                
                <div class="row">                    	
                  <div class="col-sm-6"><h5><i class="glyphicon glyphicon-tag" style="padding-right:10px;"></i>Premium</h5></div>            
              </div> 
              
              <div class="row">
                  <div class="col-lg-4"><label style="margin-top:10px;">Policy Period :</label></div>
                  <div class="col-lg-3">
                      <select id="policyPeriod" name="policyPeriod" class="form-control" onchange="premiumCalculation()">
                      		<option value="100">12 Months</option>
                      <?php  foreach($fw->agent($_SESSION['USERID'])->getAllShortPeriodRates() as $v){?>
                        	<option value="<?php echo $v['rate'] ?>"><?php echo $v['type']; ?></option>
                      <?php }?>	                             
                      </select>	
                      <input name="policyPeriodInput" id="policyPeriodInput" value="12 Months" type="hidden" />
                  </div>
               </div>   
                
                
                <div class="row" style="margin-top:15px;">
                    <div class="col-lg-4"><label style="margin-top:10px;">Policy Period :</label></div>
                    <div class="col-lg-2">
                        <input style="font-weight:700;" name="policyStartDateB" id="policyStartDateB" value="<?php echo date("Y-m-d"); ?>" type="text" readonly/>	
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1"><label style="margin-top:10px;">To :</label></div>
                    <div class="col-lg-2">
                        <input style="font-weight:700;" name="policyExpirationDateCalB" id="policyExpirationDateB" type="text" readonly/>	
                    </div>
                </div>
                            
                <div class="row" style="margin-top:15px;">
                      <div class="col-lg-4"></div>
                      <div class="col-lg-3"><label style="font-weight:700">Rate</label></div>
                      <div class="col-lg-2"><label style="font-weight:700">Premium</label></div>
                </div> 

                <div class="row" style="padding-top:15px;">
                      <div class="col-lg-4"><label>BASIC :</label></div>
                      <div class="col-lg-3"><input name="basicRate" id="basicRate" type="text" value="0.05" onkeyup="premiumCalculation()" required="required"/></div>
                      <div class="col-lg-2">
                          <label id="basicPremium" style="margin-top:8px;">500.00</label>
                          <input name="basicPremiumInput" id="basicPremiumInput" value="500" type="hidden"/>
                      </div>
                </div> 
              
              <div class="row" style="padding-top:15px;" id="srccDiv">
                    <div class="col-lg-4"><label>SRCC :</label></div>
                    <div class="col-lg-3">
                    	<span class="label label-default" id="srccRate">0.0300%</span>
                        <input name="srccRateInput" id="srccRateInput" value="0.03" type="hidden"/>
                    </div>
                    <div class="col-lg-2">
                    	<label id="srccPremium"></label>
                        <input name="srccPremiumInput" id="srccPremiumInput" value="0" type="hidden"/>
                    </div>
              </div> 
              
              <div class="row" style="padding-top:15px;" id="tcDiv">
                    <div class="col-lg-4"><label>TC :</label></div>
                    <div class="col-lg-3">
                    	<span class="label label-default" id="tcRate">0.0125%</span>
                        <input name="tcRateInput" id="tcRateInput" value="0.0125" type="hidden"/>
                    </div>
                    <div class="col-lg-2">
                    	<label id="tcPremium"></label>
                        <input name="tcPremiumInput" id="tcPremiumInput" value="0" type="hidden"/>
                    </div>
              </div> 
                            
              <div class="row" style="padding-top:15px;">
                    <div class="col-lg-4"><label>Admin Fee (0.3%) :</label></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-2">
                    	<label id="adminFee"></label>
                        <input name="adminFeeInput" id="adminFeeInput" value="0" type="hidden"/>
                     </div>
              </div> 
              
              <div class="row" style="padding-top:15px;">
                    <div class="col-lg-4"><label>Policy Fee :</label></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-2"><label id="policyFee"></label>
                    <input name="policyFeeInput" id="policyFeeInput" value="0" type="hidden"/></div>
              </div> 
              
              <div class="row" style="padding-top:15px;">
                    <div class="col-lg-4"><label>Stamp Fee :</label></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-2">
                    	<label id="stampFee"></label>
                    	<input name="stampFeInput" id="stampFeInput" value="0" type="hidden"/>
                    </div>
              </div> 
              
              <div class="row" style="padding-top:15px;">
                    <div class="col-lg-4"><label>NBT (2%) :</label></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-2">
                    	<label id="nbt"></label>
                   	 	<input name="nbtInput" id="nbtInput" value="0" type="hidden"/>
                    </div>
              </div> 
              
              <div class="row" style="padding-top:15px;">
                    <div class="col-lg-4"><label>VAT (11%) :</label></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-2">
                    	<label id="vat"></label>
                    	<input name="vatInput" id="vatInput" value="0" type="hidden"/>
                    </div>
              </div> 
              
              <div class="row" style="padding-top:15px;">
                    <div class="col-lg-4"><label>Gross Premium (W/O Tax) :</label></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-2">
                    	<label id="grossPremium"></label>
                    	<input name="grossPremiumInput" id="grossPremiumInput" value="0" type="hidden"/>vat
                    </div>
              </div> 
              
              <div class="row" style="padding-top:15px;">
                    <div class="col-lg-4"><label style="font-size:16;font-weight:700">Net Premium (With Tax) :</label></div>
                    <div class="col-lg-3"></div>
                    <div class="col-lg-2">
                    	<label id="netPremium" style="font-size:16;font-weight:700"></label>
                    	<input name="netPremiumInput" id="netPremiumInput" value="0" type="hidden"/>
                  	</div>
              </div> 
              
              
              
              
              <!-------------------------------------------------------------------------------------->
                <hr />
                <!-------------------------------------------------------------------------------------->
           
       		</div> 	
    	</div>    
        

</div>
</div>
<script type="text/javascript">

$('#datepicker').datepicker();

//================ PGAE LOAD FOR EXPIRAY DATE 60 ========
window.onload = function(){
	ExpirayDateCalculation();
};
//=======================================================
//=======================================================================
$(".dropdown-menu li a").click(function(){
 	var selText = $(this).text();
  	$(this).parents('.btn-group').find('.dropdown-toggle').html(selText);
});
//=======================================================================
//================ FUNCTION FOR PRODUCT ASSIGN =========================================
jQuery(function ($) {
    $(document).on('change', 'input:radio[id^="option"]', function (event) {
     	var productType =$("input[name='options']:checked").val();
		document.getElementById('nonmotorProductType').value = productType;
		//=============== Product SRCC & TC VALUE ASIGN =================== srccRateInput tcRateInput
		if(productType == 'Dwelling House'){
			document.getElementById('srccRate').innerHTML = '0.03000%';
			document.getElementById('srccRateInput').value = '0.03';
			document.getElementById('tcRate').innerHTML = '0.01250%';
			document.getElementById('tcRateInput').value = '0.0125';
                        
                        $("#onMachineryDiv").attr("class", "row");
                        document.getElementById('onStockLable').innerHTML = 'F) On Stock :';
                        document.getElementById('onOtherLable').innerHTML = 'G) On Other content :';
			premiumCalculation();
			}
		if(productType == 'Fire Business Premise'){
			document.getElementById('srccRate').innerHTML = '0.05000%';
			document.getElementById('srccRateInput').value = '0.05';
			document.getElementById('tcRate').innerHTML = '0.03750%';
			document.getElementById('tcRateInput').value = '0.0375';
                        
                        $("#onMachineryDiv").attr("class", "hide");
                        document.getElementById('onStockLable').innerHTML = 'E) On Personal Effects (List to be Submited) :';
                        document.getElementById('onOtherLable').innerHTML = 'F) On Other content :';
			premiumCalculation();
			}
		//=================================================================
    });
//======================================================================================
//===================== YESNO OPTION VALIDATING AND ASIGN ==============================	
	//=====================================================================//
	$(document).on('click', 'input:button[name="fireLighting"]', function (event) {	
		var fire = $('input[name="fireLighting"].active').val();
		document.getElementById('fireLighting').value = fire;
    });
	$(document).on('click', 'input:button[name="pendingInspection"]', function (event) {		
		var pendingInspection = $('input[name="pendingInspection"].active').val();
		document.getElementById('pendingInspection').value = pendingInspection;
    });
	$(document).on('click', 'input:button[name="maliciosDamage"]', function (event) {		
		var maliciosDamage = $('input[name="maliciosDamage"].active').val();
		document.getElementById('maliciosDamage').value = maliciosDamage;
		//==========SRCC->No = Malicious->No backwords===========
		var strikeRiotb=document.getElementById('strikeRiot').value;
		if(strikeRiotb=='No'){
			$("#maliciosDamageb1").attr("class", "btn btn-xs btn-default");
			$("#maliciosDamageb2").attr("class", "btn btn-xs btn-info active");
			document.getElementById('maliciosDamage').value = 'No';
			}
		//=======================================================	
    });
	
	$(document).on('click', 'input:button[name="pendingPayment"]', function (event) {		
		var pendingPayment = $('input[name="pendingPayment"].active').val();
		document.getElementById('pendingPayment').value = pendingPayment;
    });
	$(document).on('click', 'input:button[name="xPolosion"]', function (event) {		
		var xPolosion = $('input[name="xPolosion"].active').val();
		document.getElementById('xPolosion').value = xPolosion;
    });
	$(document).on('click', 'input:button[name="dcProposal"]', function (event) {		
		var dcProposal = $('input[name="dcProposal"].active').val();
		document.getElementById('dcProposal').value = dcProposal;
    });
	$(document).on('click', 'input:button[name="impactDamage"]', function (event) {		
		var impactDamage = $('input[name="impactDamage"].active').val();
		document.getElementById('impactDamage').value = impactDamage;
    });
	$(document).on('click', 'input:button[name="aircraftDamage"]', function (event) {		
		var aircraftDamage = $('input[name="aircraftDamage"].active').val();
		document.getElementById('aircraftDamage').value = aircraftDamage;
    });
	$(document).on('click', 'input:button[name="cycloneStorm"]', function (event) {		
		var cycloneStorm = $('input[name="cycloneStorm"].active').val();
		document.getElementById('cycloneStorm').value = cycloneStorm;
		//==========FLOOD->Yes = CST->No Backwords================
		//==SP Natural->Yes = CST->Yes | FLOOD->Yes | Eartc->Yes=B
		var floodb = document.getElementById('flood').value;
		var otherSpecificb = document.getElementById('otherSpecific').value;
		var earthquakeb = document.getElementById('earthquake').value;
		if(otherSpecificb=='yes' || floodb=='yes' || earthquakeb=='yes'){
			$("#cycloneStormb1").attr("class", "btn btn-xs btn-info active");
			$("#cycloneStormb2").attr("class", "btn btn-xs btn-default");
			document.getElementById('cycloneStorm').value = 'yes';
		}
		//========================================================
    });
	$(document).on('click', 'input:button[name="flood"]', function (event) {		
		var flood = $('input[name="flood"].active').val();
		document.getElementById('flood').value = flood;
		//==========FLOOD->Yes = CST->Yes========================
		if(flood=='yes'){
			$("#cycloneStormb1").attr("class", "btn btn-xs btn-info active");
			$("#cycloneStormb2").attr("class", "btn btn-xs btn-default");
			document.getElementById('cycloneStorm').value = 'yes';
			}
		//=======================================================	
		//===Earthquake->Yes = CST->Yes | FLOOD->Yes Backwords===
		var earthquakeb = document.getElementById('earthquake').value;
		var otherSpecificb = document.getElementById('otherSpecific').value;
		if(earthquakeb=='yes' || otherSpecificb=='yes'){
			$("#floodb1").attr("class", "btn btn-xs btn-info active");
			$("#floodb2").attr("class", "btn btn-xs btn-default");
			document.getElementById('earthquake').value = 'yes';
			}
    });
	$(document).on('click', 'input:button[name="earthquake"]', function (event) {		
		var earthquake = $('input[name="earthquake"].active').val();
		document.getElementById('earthquake').value = earthquake;
		//==========Earthquake->Yes = CST->Yes | FLOOD->Yes=======
		if(earthquake=='yes'){
			$("#floodb1").attr("class", "btn btn-xs btn-info active");
			$("#floodb2").attr("class", "btn btn-xs btn-default");
			document.getElementById('earthquake').value = 'yes';
			//----------------------------------------------------
			$("#cycloneStormb1").attr("class", "btn btn-xs btn-info active");
			$("#cycloneStormb2").attr("class", "btn btn-xs btn-default");
			document.getElementById('cycloneStorm').value = 'yes';
			}
		//========================================================	
		//==SP Natural->Yes = CST->Yes | FLOOD->Yes | Eartc->Yes=B
		var otherSpecificb = document.getElementById('otherSpecific').value;
		var earthquakeb = document.getElementById('earthquake').value;
		if(otherSpecificb=='yes' || earthquakeb=='yes'){
			$("#earthquakeb1").attr("class", "btn btn-xs btn-info active");
			$("#earthquakeb2").attr("class", "btn btn-xs btn-default");
			document.getElementById('otherSpecific').value = 'yes';
		}
		//========================================================
    });
	$(document).on('click', 'input:button[name="otherSpecific"]', function (event) {		
		var otherSpecific = $('input[name="otherSpecific"].active').val();
		document.getElementById('otherSpecific').value = otherSpecific;
		//==SP Natural->Yes = CST->Yes | FLOOD->Yes | Earth->Yes==
		if(otherSpecific=='yes'){
			$("#earthquakeb1").attr("class", "btn btn-xs btn-info active");
			$("#earthquakeb2").attr("class", "btn btn-xs btn-default");
			document.getElementById('otherSpecific').value = 'yes';
			//----------------------------------------------------
			$("#cycloneStormb1").attr("class", "btn btn-xs btn-info active");
			$("#cycloneStormb2").attr("class", "btn btn-xs btn-default");
			document.getElementById('cycloneStorm').value = 'yes';
			//----------------------------------------------------
			$("#floodb1").attr("class", "btn btn-xs btn-info active");
			$("#floodb2").attr("class", "btn btn-xs btn-default");
			document.getElementById('earthquake').value = 'yes';
			}
		//========================================================	
    });
	$(document).on('click', 'input:button[name="electricalExtra"]', function (event) {		
		var electricalExtra = $('input[name="electricalExtra"].active').val();
		document.getElementById('electricalExtra').value = electricalExtra;
    });
	$(document).on('click', 'input:button[name="strikeRiot"]', function (event) {		
		var strikeRiot = $('input[name="strikeRiot"].active').val();
		document.getElementById('strikeRiot').value = strikeRiot;
		//==========SRCC->No = Malicious->No=====================
		if(strikeRiot=='No'){
			$("#maliciosDamageb1").attr("class", "btn btn-xs btn-default");
			$("#maliciosDamageb2").attr("class", "btn btn-xs btn-info active");
			document.getElementById('maliciosDamage').value = 'No';
			}
		//=======================================================
		//========== SRCC Activation Div ========================
		if(strikeRiot=='No'){$("#srccDiv").attr("class", "hide"); premiumCalculation();}
		if(strikeRiot=='yes'){$("#srccDiv").attr("class", "row"); premiumCalculation();}
		//=======================================================	
    });
	$(document).on('click', 'input:button[name="terrorism"]', function (event) {		
		var terrorism = $('input[name="terrorism"].active').val();
		document.getElementById('terrorism').value = terrorism;
		//============ TC Activation Div ========================
		if(terrorism=='No'){$("#tcDiv").attr("class", "hide"); premiumCalculation();}
		if(terrorism=='yes'){$("#tcDiv").attr("class", "row"); premiumCalculation();}
		//=======================================================	
    });
	$(document).on('click', 'input:button[name="burstingOver"]', function (event) {		
		var burstingOver = $('input[name="burstingOver"].active').val();
		document.getElementById('burstingOver').value = burstingOver;
    });
	$(document).on('click', 'input:button[name="burglaryContent"]', function (event) {		
		var burglaryContent = $('input[name="burglaryContent"].active').val();
		document.getElementById('burglaryContent').value = burglaryContent;
    });
	$(document).on('click', 'input:button[name="burglaryLoss"]', function (event) {		
		var burglaryLoss = $('input[name="burglaryLoss"].active').val();
		document.getElementById('burglaryLoss').value = burglaryLoss;
                //============ TC burglaryLoss Div ========================
		if(burglaryLoss=='No'){$("#burglaryLossDiv").attr("class", "hide");}
		if(burglaryLoss=='yes'){$("#burglaryLossDiv").attr("class", "col-lg-2");}
		//=======================================================
    });
});
//======================================================================================
//==============================================================
$('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');  
    
    if ($(this).find('.btn-primary').size()>0) {
    	$(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').size()>0) {
    	$(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').size()>0) {
    	$(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').size()>0) {
    	$(this).find('.btn').toggleClass('btn-info');
    }
    
    $(this).find('.btn').toggleClass('btn-default');
       
});
//==============================================================
//================ FUNCTION FOR EXPIRAY DATE CALCULATION ================================
function ExpirayDateCalculation(){
	var coverPeriod = 60;
	var e = document.getElementById("policyDuration");
	coverPeriod = parseInt(e.options[e.selectedIndex].value);
	coverPeriodInput = e.options[e.selectedIndex].text;
	document.getElementById('coverPeriodInput').value = coverPeriodInput;
	
	var someDate = new Date();
	var numberOfDaysToAdd = coverPeriod;
	someDate.setDate(someDate.getDate() + numberOfDaysToAdd); 
	
	var dd = someDate.getDate().toString();
	var mm = (someDate.getMonth() + 1).toString();
	var y = someDate.getFullYear().toString();
	
	var someFormattedDate = y + '/' + (mm[1]?mm:"0"+mm[0]) + '/' + (dd[1]?dd:"0"+dd[0]);
	
	document.getElementById('policyExpirationDate').value = someFormattedDate; 

	}
//======================================================================================
//================= SUM INSURED CALCULATION CALCULATION ================================
function suminsuredCalculation(){
	
	var onBuilding		=	document.getElementById('onBuilding').value;
	var onParapet		=	document.getElementById('onParapet').value;	
	var onFurniture		=	document.getElementById('onFurniture').value;
	var onElectronic	=	document.getElementById('onElectronic').value;
	var onMachinery		=	document.getElementById('onMachinery').value;
	var onStock		=	document.getElementById('onStock').value;
	var onOther		=	document.getElementById('onOther').value;
	
	if($('#onBuilding').val() 	== ''){onBuilding	= 0;}
	if($('#onParapet').val() 	== ''){onParapet	= 0;}
	if($('#onFurniture').val() 	== ''){onFurniture	= 0;}
	if($('#onElectronic').val() == ''){onElectronic	= 0;}
	if($('#onMachinery').val() 	== ''){onMachinery	= 0;}
	if($('#onStock').val() 		== ''){onStock		= 0;}
	if($('#onOther').val() 		== ''){onOther		= 0;}
	
	
	var sumInsured 		= 	parseFloat(onBuilding) + parseFloat(onParapet) + parseFloat(onFurniture) + parseFloat(onElectronic) + parseFloat(onMachinery) + parseFloat(onStock) + parseFloat(onOther);
	document.getElementById('sumInsured').value = money_format(sumInsured);
	//=========== ACTUAL VALUE FOR CALCULATION ==============================
	document.getElementById('sumInsuredValue').value = sumInsured;
	}
//======================================================================================
//================================  PREMIUM CALCULATION ================================
function premiumCalculation(){
	
	var shortPeriodRate = 100;
	var spr             = document.getElementById("policyPeriod");
	shortPeriodRate     = parseInt(spr.options[spr.selectedIndex].value);
	var shortPeriodDate = spr.options[ spr.selectedIndex ].text;  
	//================== hidden assign ======================================================
	document.getElementById("policyPeriodInput").value = spr.options[spr.selectedIndex].text;
	//=======================================================================================
	
	var sumInsured	= document.getElementById("sumInsuredValue").value;
	var basicRate 	= document.getElementById("basicRate").value;
	var srcc	= document.getElementById("srccRateInput").value;
	var tc 		= document.getElementById("tcRateInput").value;    
	
	//============================= BASIC PREMIUM CALCULATION ==========================================
	var shortPrecentage =  parseFloat(shortPeriodRate) / 100;
	var basicPremium	= ((parseFloat(sumInsured) * parseFloat(basicRate)) * parseFloat(shortPrecentage)/100); 
	if(basicPremium < 500){basicPremium = 500;}
	document.getElementById("basicPremium").innerHTML 	= money_format(basicPremium);
	document.getElementById("basicPremiumInput").value 	= basicPremium; 
	//===================================================================================================
         
    
	var currentDate = new Date();
	var nextDate 	= ''; 
	
	var spd 	= shortPeriodDate.split(" ");
	var spdDate	= spd[0];
	
	//================ FOR 3 & 10 DAYS ===============================
	if(shortPeriodRate  == 5 || shortPeriodRate == 10){ 
		var month 		= currentDate.getMonth()+ 1;
		var day 		= currentDate.getDate() + parseFloat(spdDate);
		var year 		= currentDate.getFullYear();
		if(month < 10){ month = "0" + month;}
		nextDate 		= (year + '/' + month + '/' + day);
		nextDate 		= new Date(nextDate);
                
                Date.prototype.toLocaleFormat = Date.prototype.toLocaleFormat || function(pattern) {
                    return pattern.replace(/%Y/g, this.getFullYear()).replace(/%m/g, (this.getMonth() + 1)).replace(/%d/g, this.getDate());
                };
                
                nextDate		= nextDate.toLocaleFormat('%Y-%m-%d'); 

		}
	//================================================================
	//================ FOR Months ==============================================
	if(shortPeriodRate  != 5 && shortPeriodRate != 10 && shortPeriodRate != 25){ 
		var month 		= (currentDate.getMonth()+ 1) +  parseFloat(spdDate);
		var day 		= currentDate.getDate();
		var year 		= currentDate.getFullYear();		
                if(parseFloat(month) > 12){ 
                    month = 12 - month;
                    month = Math.abs(month);
                    year  = currentDate.getFullYear() + 1;
                }
                if(month < 10){ month = "0" + month;}
		nextDate 		= (year + '/' + month + '/' + day); 
		nextDate 		= new Date(nextDate);
                
                Date.prototype.toLocaleFormat = Date.prototype.toLocaleFormat || function(pattern) {
                    return pattern.replace(/%Y/g, this.getFullYear()).replace(/%m/g, (this.getMonth() + 1)).replace(/%d/g, this.getDate());
                };
		nextDate		= nextDate.toLocaleFormat('%Y-%m-%d');
             
		}

	//===========================================================================
	//========================= DATE DIFFERENCE ==========================================
	var oneDay 		= 24*60*60*1000;	
	var firstDate 		= new Date(currentDate); 
	var secondDate 		= new Date(nextDate);	//alert(secondDate);
	var dateDifference 	= Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay)); 
        if(shortPeriodRate  == 100){dateDifference = 365;}
	dateDifference 		= Math.round(dateDifference); 
        document.getElementById("policyExpirationDateB").value   =   nextDate;
	//====================================================================================
	//===================== SRCC PREMIUM CALCULATION ==============================================
	var srccLogic		= document.getElementById('strikeRiot').value; 
	if(srccLogic == 'yes'){
            var srccPrecentage 	=  parseFloat(dateDifference) / 365; 
            var srccPremium	=  (parseFloat(sumInsured) * parseFloat(srcc) * parseFloat(srccPrecentage)/100); 
            document.getElementById("srccPremium").innerHTML 		= 	money_format(srccPremium);
            document.getElementById("srccPremiumInput").value 		= 	srccPremium;
	} else { 
            srccPremium 	= 0;
            srccPrecentage 	= 1;
            document.getElementById("srccPremium").innerHTML 		= 	money_format(srccPremium);
            document.getElementById("srccPremiumInput").value 		= 	srccPremium;
	}
	//=============================================================================================
	//========================= TC PREMIUM CALCULATION ==========================================
	var tcLogic			= document.getElementById('terrorism').value; //alert(srccLogic);
	if(tcLogic == 'yes'){
            var tcPrecentage 	=  parseFloat(dateDifference) / 365; 
            var tcPremium		=	(parseFloat(sumInsured) * parseFloat(tc) * parseFloat(tcPrecentage)/100); 
            document.getElementById("tcPremium").innerHTML 			= 	money_format(tcPremium);
            document.getElementById("tcPremiumInput").value 		= 	tcPremium;
	} else { 
            tcPremium       = 0;
            tcPrecentage 	= 1;
            document.getElementById("tcPremium").innerHTML 			= 	money_format(tcPremium);
            document.getElementById("tcPremiumInput").value 		= 	tcPremium;
	}
	//===========================================================================================
	//==================== ADMIN FEE CALCULATION =======================================
        var adminFeeTotal       =  basicPremium +  srccPremium + tcPremium;
	var adminFee		= (parseFloat(adminFeeTotal) * 0.3) / 100 ;
	document.getElementById("adminFee").innerHTML 			=	money_format(adminFee);
	document.getElementById("adminFeeInput").value 			= 	adminFee;
	//==================================================================================
	//================== POLICY FEE======================================
	document.getElementById("policyFee").innerHTML 			=	"450.00";
	document.getElementById("policyFeeInput").value 		= 	"450";
	//===================================================================
	//================== STAMPFEE CALCULATION ===========================
	var totalUp 		= 	parseFloat(basicPremium) + parseFloat(srccPremium) + parseFloat(tcPremium) + parseFloat(adminFee) + parseFloat(450);
	var stampFee		= 	Math.ceil((totalUp * 0.1) / 100);
	//var stampFeeS		=	(totalUp * 0.1) / 100;
	//var roundUpString	= 	stampFeeS.toString();
	//var roundUpVal		= 	roundUpString.split(".");
	//var roundUpValT		=	roundUpVal[1]; var roundUpValTV =  	parseFloat(roundUpValT);
	//if(roundUpValTV > 0){ stampFee 	=	stampFee + 1;}
	document.getElementById("stampFee").innerHTML 			=	money_format(stampFee);
	document.getElementById("stampFeInput").value 			= 	stampFee;
	//================================================================================
	//================= NBT CALCULATION ==============================================
	var nbtPremium		=	((totalUp * 2) / 98); 
	document.getElementById("nbt").innerHTML 				=	money_format(nbtPremium);
	document.getElementById("nbtInput").value 				= 	nbtPremium;
	//================================================================================
	//================ VAT CALCULATION ===============================================
	var totalForVAT		=	parseFloat(totalUp) + parseFloat(nbtPremium); 
	var VATPremium		=  ((totalForVAT * 11) / 100);
	document.getElementById("vat").innerHTML 				=	money_format(VATPremium);
	document.getElementById("vatInput").value 				= 	VATPremium;
	//================================================================================
	//=============== GROSS CALCULATION ================
	var grossPremium	= 	parseFloat(totalForVAT) + parseFloat(stampFee);
	document.getElementById("grossPremium").innerHTML 		=	money_format(grossPremium);
	document.getElementById("grossPremiumInput").value 		= 	grossPremium;
	//==================================================
	//=============== NETPREMIUM CALCULATION ===========
	var netPremium		= 	parseFloat(grossPremium) + parseFloat(VATPremium);
	document.getElementById("netPremium").innerHTML 		=	money_format(netPremium);
	document.getElementById("netPremiumInput").value 		= 	netPremium;
	//==================================================
}
//===============================================================================================
//=========== FUNCTION TO CONVERT CURENCY =====
function money_format(n) {
	n += '';
	x = n.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	
	var r=/(\d+)(\d{3})/;
	
	while (r.test(x1)) {
		x1 = x1.replace(r, '$1' + ',' + '$2');
	}
	
	x2 = Number(x2).toFixed(2);	
	return x1 + x2.substr(1);
}	
//===========================================
//======================================================================================

</script>