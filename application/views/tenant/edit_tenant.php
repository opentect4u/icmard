	<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
				 <h2>Edit  Tenant</h2> 
          <span class="confirm-div" style="float:right; color:green;">
            <?php if(null != $this->session->flashdata('msg')) 
                  { echo $this->session->flashdata('msg');};?>
                      <?php //echo validation_errors(); ?>

                      
                  </span>
				 </div>
				 
				<div class="row">
					 <div class="col-sm-12"> 
				<form  action ="<?=base_url()?>index.php/adm/edit_tenant" method="post" id="form">
					<input type="hidden" value="<?php if(isset($cust->id)){echo $cust->id; }?>" name="id">
					
			
			<div class="form-group row">
				<div class="col-sm-1">
				  <label><b> Name</b></label>
				</div>
				
				<div class="col-sm-9">
				  <input type="text" class="form-control" placeholder="" name="t_name" id="t_name" readonly value="<?php if(isset($cust->name)){echo $cust->name; }?>">
				</div>
				
			</div>

		   <div class="form-group row">
			<div class="col-sm-1">
			  <label><b>Floor No</b></label>
			</div>
			
			<div class="col-sm-4">
			  <input type="number" class="form-control" placeholder="" name="floor_no" id="floor_no" value="<?php if(isset($cust->floor_no)){echo $cust->floor_no; }?>">
			</div>
			<div class="col-sm-1">
			  <label><b>Room No</b></label>
			</div>
			
			<div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="room_no" value="<?php if(isset($cust->room_no)){echo $cust->room_no; }?>">
			</div>
		   </div>
   
		   
   
       <div class="form-group row" >
			
			  <div class="col-sm-1">
			  <label><b>Agreement Start Date</b></label>
			  </div>
			 <div class="col-sm-4">
			  <input type="date" class="form-control" placeholder="" name="agree_st_dt" id="agree_st_dt" value="<?php if(isset($cust->agree_st_dt)){echo $cust->agree_st_dt; }?>">
			  </div>
			  <div class="col-sm-1">
			  <label><b>Agreement End Date</b></label>
			  </div>
			 <div class="col-sm-4">
			  <input type="date" class="form-control" placeholder="" name="agree_end_dt" id="agree_end_dt" value="<?php if(isset($cust->agree_end_dt)){echo $cust->agree_end_dt; }?>">
			  </div>
       </div>
  
		 <div class="form-group row">
			
			  <div class="col-sm-1">
			  <label><b>Covered Area</b></label>
			  </div>
			 <div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="covd_area" id="covd_area" value="<?php if(isset($cust->covd_area)){echo $cust->covd_area; }?>">
			  </div>
			  <div class="col-sm-1">
			  <label><b>Rent Per SQRT</b></label>
			  </div>
			 <div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="rent_per_sqrt" id="rent_per_sqrt" value="<?php if(isset($cust->rent_per_sqrt)){echo $cust->rent_per_sqrt; }?>">
			  </div>
			  
        </div>
        <div class="form-group row">
			
			  <div class="col-sm-1">
			  <label><b>Rent Per Month</b></label>
			  </div>
			 <div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="rent_per_mnth" id="rent_per_mnth" value="<?php if(isset($cust->rent_per_mnth)){echo $cust->rent_per_mnth; }?>">
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
		alert(rnt_pr_mth);
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
	