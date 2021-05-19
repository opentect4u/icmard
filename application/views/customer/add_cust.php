	<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
				 <h2>Add Stakeholders</h2> 
          <span class="confirm-div" style="float:right; color:green;">
            <?php if(null != $this->session->flashdata('msg')) 
                  { echo $this->session->flashdata('msg');};?>
                      <?php //echo validation_errors(); ?>

                      
                  </span>
				 </div>
				 
				<div class="row">
					 <div class="col-sm-12"> 
				<form  action ="<?=base_url()?>index.php/adm/add_customer" method="post" id="form">
  
					
			<div class="form-group row">
				
				<div class="col-sm-1">
				  <label><b> Type</b></label>
				</div>

				<div class="col-sm-3">
				   <select class="form-control"  name="cust_type" id="cust_type">
					  <option value="">Select</option>
					  <option value="C">Customer</option>
					  <option value="V">Vendor</option>
					  <option value="T">Tenant</option>
					 
				   </select>
				</div>
			</div>
			
			<div class="form-group row">
				<div class="col-sm-1">
				  <label><b> Name</b></label>
				</div>
				
				<div class="col-sm-10">
				  <input type="text" class="form-control" placeholder="" name="cust_name" id="itemname" required>
				</div>
			</div>

		   <div class="form-group row">
			<div class="col-sm-1">
			  <label><b>Address 1</b></label>
			</div>
			
			<div class="col-sm-10">
			  <input type="text" class="form-control" placeholder="" name="addr_line1" id="itemname">
			</div>
		   </div>
   
		   <div class="form-group row">
			<div class="col-sm-1">
			  <label><b>Address 2</b></label>
			</div>
			
			<div class="col-sm-10">
			  <input type="text" class="form-control" placeholder="" name="addr_line2" id="itemname">
			</div>
		   </div>
	   <div class="form-group row">
				<div class="col-sm-1">
				  <label><b>Pin</b></label>
				</div>
				
				<div class="col-sm-3">
				  <input type="text" class="form-control" placeholder="" name="pin" id="pin" required>
				</div>
				
	   </div>
	   	   <div class="form-group row">
				  <div class="col-sm-1">
				  <label><b>GSTIN</b></label>
				  </div>
				 <div class="col-sm-3">
				  <input type="text" class="form-control" placeholder="" name="gstin" id="itemname">
				  </div>

				  <div class="col-sm-1">
				  <label><b>PAN</b></label>
				  </div>
				 <div class="col-sm-3">
				  <input type="text" class="form-control" placeholder="" name="pan" id="itemname">
				  </div>
				<div class="col-sm-1">
				  <label><b>TAN</b></label>
				</div>
				<div class="col-sm-2">
				  <input type="text" class="form-control" placeholder="" name="tan" id="itemname">
				</div>
				  
	   </div>
   
		<div class="form-group row" id="prop" style="display:none">
				
				  <div class="col-sm-1">
				  <label><b>Propieter name</b></label>
				  </div>
				 <div class="col-sm-4">
				  <input type="text" class="form-control" placeholder="" name="propieter_namr" id="itemname">
				  </div>
				  <div class="col-sm-2">
				  <label><b>Contact Person</b></label>
				  </div>
				 <div class="col-sm-4">
				  <input type="text" class="form-control" placeholder="" name="contact_person" id="itemname">
				  </div>
	   </div>
    <div class="form-group row">
			
			 
			  <div class="col-sm-1">
			  <label><b>Company type</b></label>
			  </div>
			 <div class="col-sm-3">
			  <select class="form-control"  name="company_type">
			 
				  <option value="">Select</option>
				  <option value="P">Private Ltd</option>
				  <option value="R">Partnership</option>
				  <option value="I">Individual</option>
				  <option value="L">Public Ltd</option>
				  <option value="G">Govt.Organisation</option>
				  <option value="O">Others</option>
				 
			   </select>
			 
			  </div>
        </div>
		 <div class="form-group row">
			
			  <div class="col-sm-1">
			  <label><b>Mobile Number</b></label>
			  </div>
			 <div class="col-sm-3">
			  <input type="text" class="form-control" placeholder="" name="mobile_no" id="itemname">
			  </div>
			  <div class="col-sm-1">
			  <label><b>Email</b></label>
			  </div>
			 <div class="col-sm-3">
			  <input type="text" class="form-control" placeholder="" name="email" id="itemname">
			  </div>
        </div>
        <div class="form-group row">
			
			  <div class="col-sm-1">
			  <label><b>Bank name</b></label>
			  </div>
			 <div class="col-sm-3">
			  <input type="text" class="form-control" placeholder="" name="bank_name" id="itemname">
			  </div>
			  <div class="col-sm-1">
			  <label><b>Branch name</b></label>
			  </div>
			 <div class="col-sm-3">
			  <input type="text" class="form-control" placeholder="" name="branch_name" id="itemname">
			  </div>
			  
        </div>
		<div class="form-group row">
			
			 
			  <div class="col-sm-1">
			  <label><b>Ac no</b></label>
			  </div>
			 <div class="col-sm-3">
			  <input type="text" class="form-control" placeholder="" name="ac_no" id="itemname">
			  </div>
			   <div class="col-sm-1">
			  <label><b>IFS code</b></label>
			  </div>
			 <div class="col-sm-3">
			  <input type="text" class="form-control" placeholder="" name="ifs_code" id="itemname">
			  </div>
        </div>
  
   
					
	<div class="form-group row">
		<div class="col-sm-12 btnSubmitSec">
		  <input type="submit" class="btn btn-info" id="submit" name="submit" value="Submit">
	<!--		<input type="reset" onclick="" class="btn btn-info" value="Cancel">-->
		</div>
	  </div>				
					
</form> 
						 
						 
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
	<script>


			
			$("#cust_type").change(function(){
				
				
				var cust_type = $("#cust_type").val();
				
				if(cust_type == 'C')
				{
				
				$("#prop").hide();
				}else{
					
					$("#prop").show();
				}
				
                
             });
                    
   
</script>