	<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
				 <h2>Edit Item Category</h2> 
          <span class="confirm-div" style="float:right; color:green;">
            <?php if(null != $this->session->flashdata('msg')) 
                  { echo $this->session->flashdata('msg');};?>
                      <?php //echo validation_errors(); ?>

                      
                  </span>
				 </div>
				 
				<div class="row">
					 <div class="col-sm-6"> 
				<form  action ="<?=base_url()?>index.php/adm/edit_itemcatg" method="post">
  <input type="hidden"  id="sl_no" name="sl_no" class="form-control" value="<?php if(isset($item->sl_no)){echo $item->sl_no; }?>" >
					
  <div class="form-group row">
    
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="enter category" name="category" value="<?php if(isset($item->category)){echo $item->category; }?>">
    </div>
  </div>
   <!-- <div class="form-group row">
    
    <div class="col-sm-4">
     <input type="checkbox" id="license" name="license" value="1" <?php if(isset($item->license) && $item->license ==1 ){echo "checked"; }?>>
    <b>License</b>

  </div>
  <div class="col-sm-4">
    <input type="checkbox" id="Insurance" name="Insurance" value="1" <?php if(isset($item->Insurance) && $item->Insurance ==1 ){echo "checked"; }?>>
    <b>Insurance</b>
    </div>
    <div class="col-sm-4">
    <input type="checkbox" id="amc" name="amc" value="1" <?php if(isset($item->amc) && $item->amc ==1 ){echo "checked"; }?>>
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
	