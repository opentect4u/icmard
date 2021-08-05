	<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
				 <h2>Add Stock Item</h2> 
          <span class="confirm-div" style="float:right; color:green;">
            <?php if(null != $this->session->flashdata('msg')) 
                  { echo $this->session->flashdata('msg');};?>
                      <?php //echo validation_errors(); ?>

                      
                  </span>
				 </div>
				 
				<div class="row">
       
					 <div class="col-sm-12"> 
				<form  action ="<?=base_url()?>index.php/adm/add_stkitem" method="post" id="form">
        <div class="form-group row">
				<div class="col-sm-1">
				  <label><b> Category</b></label>
				</div>
        <div class="col-sm-6">
				   <select name="catg" class="form-control required" id="catg" required>

						<option value="">Select</option>

						<?php

							foreach($catgdtls as $catg){

						?>

							<option value="<?php echo $catg->category;?>"><?php echo $catg->category;?></option>

						<?php

							}

						?>     

						</select>
				</div>
			</div>
					
  <div class="form-group row">
                <div class="col-sm-1">
				  <label><b>Name</b></label>
				</div>
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="" name="item_name" id="itemname">
    </div>
  </div>
   <!-- <div class="form-group row">
    <div class="col-sm-1">
				  <label>
				  </label>
				</div>
    <div class="col-sm-2">
     <input type="checkbox" id="license" name="license" value="1">
    <b>License</b>

  </div>
  <div class="col-sm-2">
    <input type="checkbox" id="Insurance" name="Insurance" value="1">
    <b>Insurance</b>
    </div>
    <div class="col-sm-2">
    <input type="checkbox" id="amc" name="amc" value="1">
    <b>AMC</b>
    </div>
  </div> -->
					
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


	<!-- <script>

    $('#form').submit(function(event){

              var valid = 0;
              var item  = $("#itemname").val();
           
             if($("#license").prop('checked') == true){

                  valid = valid+1;
    
              }else{

                   valid = valid+0;
              }

              if($("#Insurance").prop('checked') == true){

                  valid = valid+1;
    
              }else{

                   valid = valid+0;
              }

              if($("#amc").prop('checked') == true){

                  valid = valid+1;
    
              }else{

                   valid = valid+0;
              }
                    if(item != ''){

                         if(valid == 0){

                         alert("Please Check At least One Check box");
                         event.preventDefault();

                         }else{

                         $('#submit').attr('type', 'submit');

                          }


                    }else{

                         alert("Please Give Item Name");
                         event.preventDefault();
                    }

                      
                        
            });
                    
   
</script> -->