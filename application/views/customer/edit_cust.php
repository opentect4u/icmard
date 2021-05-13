	<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
				 <h2>Edit  Customer</h2> 
          <span class="confirm-div" style="float:right; color:green;">
            <?php if(null != $this->session->flashdata('msg')) 
                  { echo $this->session->flashdata('msg');};?>
                      <?php //echo validation_errors(); ?>

                      
                  </span>
				 </div>
				 
				<div class="row">
					 <div class="col-sm-12"> 
				<form  action ="<?=base_url()?>index.php/adm/edit_cust" method="post" id="form">
					<input type="hidden" value="<?php if(isset($cust->uin)){echo $cust->uin; }?>" name="uin">
					
			<div class="form-group row">
				<div class="col-sm-1">
				  <label><b> Name</b></label>
				</div>
				
				<div class="col-sm-6">
				  <input type="text" class="form-control" placeholder="" name="cust_name" id="itemname" required value="<?php if(isset($cust->cust_name)){echo $cust->cust_name; }?>">
				</div>
				<div class="col-sm-1">
				  <label><b> Type</b></label>
				</div>

				<div class="col-sm-3">
				   <select class="form-control"  name="cust_type" id="cust_type">
					  <option value="">Select</option>
					  <option value="C" <?php if(isset($cust->cust_type) && $cust->cust_type == 'C'){echo "selected"; }?>>Customer</option>
					  <option value="V" <?php if(isset($cust->cust_type) && $cust->cust_type == 'V'){echo "selected"; }?>>Vendor</option>
					  <option value="T" <?php if(isset($cust->cust_type) && $cust->cust_type == 'T'){echo "selected"; }?>>Tenant</option>
					 
				   </select>
				</div>
			</div>

		   <div class="form-group row">
			<div class="col-sm-1">
			  <label><b>Address 1</b></label>
			</div>
			
			<div class="col-sm-10">
			  <input type="text" class="form-control" placeholder="" name="addr_line1" id="itemname" value="<?php if(isset($cust->addr_line1)){echo $cust->addr_line1; }?>">
			</div>
		   </div>
   
		   <div class="form-group row">
			<div class="col-sm-1">
			  <label><b>Address 2</b></label>
			</div>
			
			<div class="col-sm-10">
			  <input type="text" class="form-control" placeholder="" name="addr_line2" value="<?php if(isset($cust->addr_line2)){echo $cust->addr_line2; }?>">
			</div>
		   </div>
	   <div class="form-group row">
				<div class="col-sm-1">
				  <label><b>Pin</b></label>
				</div>
				
				<div class="col-sm-2">
				  <input type="text" class="form-control" placeholder="" name="pin" id="pin" required value="<?php if(isset($cust->pin)){echo $cust->pin; }?>">
				</div>
				  <div class="col-sm-1">
				  <label><b>GSTIN</b></label>
				  </div>
				 <div class="col-sm-3">
				  <input type="text" class="form-control" placeholder="" name="gstin" value="<?php if(isset($cust->gstin)){echo $cust->gstin; }?>">
				  </div>
				  <div class="col-sm-1">
				  <label><b>PAN</b></label>
				  </div>
				 <div class="col-sm-3">
				  <input type="text" class="form-control" placeholder="" name="pan" id="itemname" value="<?php if(isset($cust->pan)){echo $cust->pan; }?>">
				  </div>
	   </div>
		<div class="form-group row">
				<div class="col-sm-1">
				  <label><b>TAN</b></label>
				</div>
				<div class="col-sm-3">
				  <input type="text" class="form-control" placeholder="" name="tan" id="itemname" value="<?php if(isset($cust->tan)){echo $cust->tan; }?>">
				</div>
				  
	   </div>
   
    <div class="form-group row" id="prop" style="display:none">
			
			  <div class="col-sm-1">
			  <label><b>Propieter name</b></label>
			  </div>
			 <div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="propieter_namr" id="itemname" value="<?php if(isset($cust->propieter_namr)){echo $cust->propieter_namr; }?>">
			  </div>
			  <div class="col-sm-2">
			  <label><b>Contact Person</b></label>
			  </div>
			 <div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="contact_person" id="itemname" value="<?php if(isset($cust->contact_person)){echo $cust->contact_person; }?>">
			  </div>
   </div>
    <div class="form-group row">
			
			  <div class="col-sm-1">
			  <label><b>Mobile Number</b></label>
			  </div>
			 <div class="col-sm-2">
			  <input type="text" class="form-control" placeholder="" name="mobile_no" id="itemname" value="<?php if(isset($cust->mobile_no)){echo $cust->mobile_no; }?>">
			  </div>
			  <div class="col-sm-1">
			  <label><b>Email</b></label>
			  </div>
			 <div class="col-sm-3">
			  <input type="text" class="form-control" placeholder="" name="email" id="itemname" value="<?php if(isset($cust->email)){echo $cust->email; }?>">
			  </div>
			  <div class="col-sm-1">
			  <label><b>Company type</b></label>
			  </div>
			 <div class="col-sm-3">
			  <select class="form-control"  name="company_type">
			 
				  <option value="">Select</option>
				  <option value="P" <?php if(isset($cust->company_type) && $cust->company_type == 'P'){echo "selected"; }?>>Private Ltd</option>
				  <option value="R" <?php if(isset($cust->company_type) && $cust->company_type == 'R'){echo "selected"; }?>>Partnership</option>
				  <option value="I" <?php if(isset($cust->company_type) && $cust->company_type == 'I'){echo "selected"; }?>>Individual</option>
				  <option value="L" <?php if(isset($cust->company_type) && $cust->company_type == 'L'){echo "selected"; }?>>Public Ltd</option>
				  <option value="G" <?php if(isset($cust->company_type) && $cust->company_type == 'G'){echo "selected"; }?>>Govt.Organisation</option>
				  <option value="O" <?php if(isset($cust->company_type) && $cust->company_type == 'O'){echo "selected"; }?>>Others</option>
				 
			   </select>
			 
			  </div>
        </div>
        <div class="form-group row">
			
			  <div class="col-sm-1">
			  <label><b>Bank name</b></label>
			  </div>
			 <div class="col-sm-2">
			  <input type="text" class="form-control" placeholder="" name="bank_name" id="itemname" value="<?php if(isset($cust->bank_name)){echo $cust->bank_name; }?>">
			  </div>
			  <div class="col-sm-1">
			  <label><b>Branch name</b></label>
			  </div>
			 <div class="col-sm-3">
			  <input type="text" class="form-control" placeholder="" name="branch_name" id="itemname" value="<?php if(isset($cust->branch_name)){echo $cust->branch_name; }?>">
			  </div>
			  <div class="col-sm-1">
			  <label><b>Ac no</b></label>
			  </div>
			 <div class="col-sm-3">
			  <input type="text" class="form-control" placeholder="" name="ac_no" id="itemname" value="<?php if(isset($cust->ac_no)){echo $cust->ac_no; }?>">
			  </div>
   </div>
   <div class="form-group row">
			
			  <div class="col-sm-1">
			  <label><b>IFS code</b></label>
			  </div>
			 <div class="col-sm-2">
			  <input type="text" class="form-control" placeholder="" name="ifs_code" id="itemname" value="<?php if(isset($cust->ifs_code)){echo $cust->ifs_code; }?>">
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