<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
				 <h2>Edit  AMC</h2> 
          <span class="confirm-div" style="float:right; color:green;">
            <?php if(null != $this->session->flashdata('msg')) 
                  { echo $this->session->flashdata('msg');};?>
                      <?php //echo validation_errors(); ?>

                      
                  </span>
				 </div>
				 
				<div class="row">
					 <div class="col-sm-12"> 
				<form  action ="<?=base_url()?>index.php/adm/edit_amc" method="post" id="form">
					<input type="hidden" value="<?php if(isset($cust->id)){echo $cust->id; }?>" name="id">
					
					<div class="form-group row">
				<div class="col-sm-1">
				  <label><b> Name</b></label>
				</div>
				
				<div class="col-sm-9">
				  <!-- <input type="text" class="form-control" placeholder="" name="t_name" id="t_name" required> -->
				 
				  <select name="comp_id" id="comp_id" class="form-control item" required>
                              <option value="">Select </option>
                            <?php
                                foreach($custdtls as $row)
                            { ?>
                            
                                <option value="<?php echo $row->uin; ?>"<?php echo($cust->comp_id==$row->uin)?'selected':'';?>><?php echo $row->cust_name; ?></option>
                            <?php
                            } ?>
                            </select> 
				</div>
			</div>

			
			<div class="form-group row">
				<div class="col-sm-1">
				  <label><b> Item</b></label>
				</div>
				
				<div class="col-sm-4">
				  <!-- <input type="text" class="form-control" placeholder="" name="item" id="item"  value="<?php if(isset($cust->name)){echo $cust->name; }?>"> -->

				  <select name="item" id="item" class="form-control item" required>
                              <option value="">Select Item</option>
                            <?php
                                foreach($item as $row)
                            { ?>
                            
                                <option value="<?php echo $row->id; ?>"<?php echo($cust->item==$row->id)?'selected':'';?>><?php echo $row->item_name; ?></option>
                            <?php
                            } ?>
                            </select> 
				</div>
				<div class="col-sm-1">
			  <!-- <label><b>Install Location</b></label>
			</div>
			
			<div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="instl_loc" id="instl_loc" value="<?php if(isset($cust->instl_loc)){echo $cust->instl_loc; }?>">
			</div> -->
			<label><b>Item Serial</b></label>
			</div>
			
			<div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="item_serial" id="item_serial" value="<?php if(isset($cust->item_serial)){echo $cust->item_serial; }?>">
			</div>
			</div>
			<div class="form-group row">
			<div class="col-sm-1">
				  <label><b>Install Date</b></label>
				  </div>
				 <div class="col-sm-4">
				  <input type="date" class="form-control" placeholder="" name="instl_dt" id="instl_dt" value="<?php if(isset($cust->instl_dt)){echo $cust->instl_dt; }?>">
				  </div>	
				  <div class="col-sm-1">
				 <label><b>Install Location</b></label>
			</div>
			
			<div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="instl_loc" id="instl_loc" value="<?php if(isset($cust->instl_loc)){echo $cust->instl_loc; }?>" required>
			</div>
				
	   </div>
			<div class="form-group row">
				<div class="col-sm-1">
				  <label><b>Amc Start Dt</b></label>
				</div>
				
				<div class="col-sm-4">
				  <input type="date" class="form-control" placeholder="" name="frm_dt" id="frm_dt" value="<?php if(isset($cust->frm_dt)){echo $cust->frm_dt; }?>" required>
				</div>
				<div class="col-sm-1">
				  <label><b>AMC End Date</b></label>
				  </div>
				 <div class="col-sm-4">
				  <input type="date" class="form-control" placeholder="" name="to_dt" id="to_dt" value="<?php if(isset($cust->to_dt)){echo $cust->to_dt; }?>" required>
				  </div>	
	   </div>
		      
	   <div class="form-group row">
				  

				  <div class="col-sm-1">
				  <label><b>AMC Charge</b></label>
				  </div>
				 <div class="col-sm-4">
				  <input type="text" class="form-control" placeholder="" name="amc_chrg" id="amc_chrg" value="<?php if(isset($cust->amc_chrg)){echo $cust->amc_chrg; }?>">
				  </div>
				<div class="col-sm-1">
				  <label><b>GST RT</b></label>
				</div>
				<div class="col-sm-4">
				  <input type="text" class="form-control" placeholder="" name="gst_rt" id="gst_rt" value="<?php if(isset($cust->gst_rt)){echo $cust->gst_rt; }?>" required>
				</div>
				  
	   </div>
	   <div class="form-group row">
			<div class="col-sm-1">
			  <label><b>CGST</b></label>
			</div>
			
			<div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="cgst" id="cgst" value="<?php if(isset($cust->cgst)){echo $cust->cgst; }?>">
			</div>
			
			<div class="col-sm-1">
			  <label><b>SGST</b></label>
			</div>
			
			<div class="col-sm-4">
			  <input type="text" class="form-control" placeholder="" name="sgst" id="sgst" value="<?php if(isset($cust->sgst)){echo $cust->sgst; }?>">
			</div>
		   </div>
	 <div class="form-group row" >
	 <div class="col-sm-1">
				  <label><b>Total</b></label>
				  </div>
				 <div class="col-sm-4">
				  <input type="text" class="form-control" placeholder="" name="total" id="total" value="<?php if(isset($cust->total)){echo $cust->total; }?>"readonly>
				  </div>
				  <div class="col-sm-1">
				  <label><b>Period</b></label>
				  </div>
				 <div class="col-sm-4">
				 
				  <select class="form-control required" id="period" name="period" required>

                            <option value="M" <?php echo ($cust->period == 'M')? 'selected' : '';?>>Monthly</option>

                            <option value="Q" <?php echo ($cust->period == 'Q')? 'selected' : '';?>>Quarterly</option>

                            <option value="H" <?php echo ($cust->period == 'H')? 'selected' : '';?>>Half Yearly</option>

							<option value="H" <?php echo ($cust->period == 'Y')? 'selected' : '';?>>Yearly</option>
                            
                        </select>
				  </div>
				  </div>
				  <div class="form-group row" >
			<div class="col-sm-1">
			<label><b>Remarks</b></label>
			</div>
		   <div class="col-sm-9">
			<textarea class="form-control" placeholder="" name="remarks" id="remarks" ><?php echo $cust->remarks; ?></textarea>
			</div>
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

	var amc_chrg  = 0;
    var gst_rt    = 0;
    var cgst     = 0;
	var sgst     = 0;
	var total    = 0 ;
	$('#gst_rt').change(function(){
		amc_chrg= $('#amc_chrg').val();
		gst_rt= $('#gst_rt').val();
		cgst=(amc_chrg * gst_rt/100)/2;
	    sgst=(amc_chrg * gst_rt/100)/2;
		total=parseFloat(amc_chrg ) + parseFloat(cgst) +parseFloat( sgst);
	//  $('.qty').eq($('.ro').index(this)).val(0); 	
		// alert(rnt_pr_mth);
		$('#cgst').val(cgst);
		$('#sgst').val(sgst);
		$('#total').val(total);
	})

});

</script> 

<script>

$(document).ready(function(){

	var amc_chrg  = 0;
    var gst_rt    = 0;
    var cgst     = 0;
	var sgst     = 0;
	var total    = 0 ;
	$('#amc_chrg').change(function(){
		amc_chrg= $('#amc_chrg').val();
		gst_rt= $('#gst_rt').val();
		cgst=(amc_chrg * gst_rt/100)/2;
	    sgst=(amc_chrg * gst_rt/100)/2;
		total=parseFloat(amc_chrg ) + parseFloat(cgst) +parseFloat( sgst);
	//  $('.qty').eq($('.ro').index(this)).val(0); 	
		// alert(rnt_pr_mth);
		$('#cgst').val(cgst);
		$('#sgst').val(sgst);
		$('#total').val(total);
	})

});

</script> 
<script>

// $(document).ready(function(){
$("#frm_dt").change(function(){

var instl_dt = $('#instl_dt').val();
var frm_dt = $('#frm_dt').val();
// var d = new Date();
// var month = d.getMonth()+1;
// var day = d.getDate();
// var output = d.getFullYear() + '-' +
// (month<10 ? '0' : '') + month + '-' +
// (day<10 ? '0' : '') + day;

 console.log(instl_dt);
 console.log(frm_dt);

if(  instl_dt > frm_dt)
{
	console.log('hi');
alert("The installation date must be prior to AMC start date");
$('#submit').attr('type', 'buttom');
return false;
}else{
   $('#submit').attr('type', 'submit');
}
});
// });
</script>

<script>

// $(document).ready(function(){
$("#to_dt").change(function(){

var to_dt = $('#to_dt').val();
var frm_dt = $('#frm_dt').val();
// var d = new Date();
// var month = d.getMonth()+1;
// var day = d.getDate();
// var output = d.getFullYear() + '-' +
// (month<10 ? '0' : '') + month + '-' +
// (day<10 ? '0' : '') + day;

 console.log(to_dt);
 console.log(frm_dt);

if(  to_dt < frm_dt)
{
	console.log('hi');
alert("Amc end date must be greater than start date");
$('#submit').attr('type', 'buttom');
return false;
}else{
   $('#submit').attr('type', 'submit');
}
});
// });
</script>