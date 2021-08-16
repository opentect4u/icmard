	<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
				 <h2>Add Licence</h2> 
          <span class="confirm-div" style="float:right; color:green;">
            <?php if(null != $this->session->flashdata('msg')) 
                  { echo $this->session->flashdata('msg');};?>
                      <?php //echo validation_errors(); ?>

                      
                  </span>
				 </div>
				 
				<div class="row">
					 <div class="col-sm-12"> 
				<form  action ="<?=base_url()?>index.php/adm/add_insu" method="post" id="form">
  
			
			

		   <div class="form-group row">
			<div class="col-sm-1">
			  <label><b>Name Of Equipment</b></label>
			</div>
			
			<div class="col-sm-9">
			  <!-- <input type="text" class="form-control" placeholder="" name="Item" id="Item"> -->
			  <select name="item" class="form-control required" id="item" required>

						<option value="">Select</option>

						<?php

							foreach($itemdtls as $item){

						?>

							<option value="<?php echo $item->id;?>"><?php echo $item->item_name;?></option>

						<?php

							}

						?>     

						</select>
			</div>
			</div>
			<!-- <div class="col-sm-1">
			  <label><b>Install Location</b></label>
			</div>
			
			<div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="instl_loc" id="instl_loc">
			</div>
		   </div> -->
   
		   <!-- <div class="form-group row">
				<div class="col-sm-1">
				  <label><b>Installation Dt</b></label>
				</div>
				
				<div class="col-sm-4">
				  <input type="date" class="form-control" placeholder="" name="instl_dt" id="instl_dt" required>
				</div>
				<div class="col-sm-1">
				  <label><b>Period</b></label>
				</div>
				<div class="col-sm-4">
				<select class="form-control required" id="period" name="period" required>

						<option value="">Select</option>

						<option value="M">Monthly</option>

						<option value="Q">Quarterly</option>

						<option value="H">Half Yearly</option>

						<option value="Y">Yearly</option>
					</select>
					</div>
				</div>   -->
	   <div class="form-group row">
				<div class="col-sm-1">
				  <label><b>Period From</b></label>
				</div>
				
				<div class="col-sm-4">
				  <input type="date" class="form-control" placeholder="" name="frm_dt" id="frm_dt" required>
				</div>
				<div class="col-sm-1">
				  <label><b>Period To</b></label>
				  </div>
				 <div class="col-sm-4">
				  <input type="date" class="form-control" placeholder="" name="to_dt" id="to_dt">
				  </div>	
	   </div>
	   <div class="form-group row">
				<!-- <div class="col-sm-1">
				  <label><b>Renew From</b></label>
				</div>
				
				<div class="col-sm-4">
				  <input type="date" class="form-control" placeholder="" name="rnw_from" id="rnw_from" required>
				</div> -->
				<div class="col-sm-1">
				  <label><b>Remarks</b></label>
				  </div>
				 <div class="col-sm-9">
				  <textarea  class="form-control" placeholder="" name="Remarks" id="Remarks"></textarea>
				  </div>	
	   </div>
	   	 
		
		   
		   <div class="form-group row">
				  
				<div class="col-sm-1">
				  <label><b>Authority Of Concern</b></label>
				</div>
				<div class="col-sm-9">
				  <textarea  class="form-control" placeholder="" name="auth_person" id="auth_person" required></textarea>
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

$(document).ready(function(){

	var rent_per_sqrt  = 0;
    var covd_area      = 0;
    var rnt_pr_mth     = 0;
	$('#rent_per_sqrt').change(function(){
		rent_per_sqrt= $('#rent_per_sqrt').val();
		covd_area= $('#covd_area').val();
		rnt_pr_mth=rent_per_sqrt * covd_area;
	//  $('.qty').eq($('.ro').index(this)).val(0); 	
		// alert(rnt_pr_mth);
		$('#rent_per_mnth').val(rnt_pr_mth);
	})

});

</script> 

<script>

$(document).ready(function(){

	var rent_per_sqrt  = 0;
    var covd_area      = 0;
    var rnt_pr_mth     = 0;
	$('#covd_area').change(function(){
		
		rent_per_sqrt= $('#rent_per_sqrt').val();
		covd_area= $('#covd_area').val();
		rnt_pr_mth=rent_per_sqrt * covd_area;
	//  $('.qty').eq($('.ro').index(this)).val(0); 	
		// alert('hi');
		$('#rent_per_mnth').val(rnt_pr_mth);
	})

});

</script> 