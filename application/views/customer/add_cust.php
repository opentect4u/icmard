	<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
				 <h2>Add  Customer</h2> 
          <span class="confirm-div" style="float:right; color:green;">
            <?php if(null != $this->session->flashdata('msg')) 
                  { echo $this->session->flashdata('msg');};?>
                      <?php //echo validation_errors(); ?>

                      
                  </span>
				 </div>
				 
				<div class="row">
					 <div class="col-sm-12"> 
				<form  action ="<?=base_url()?>index.php/adm/add_item" method="post" id="form">
  
					
  <div class="form-group row">
    <div class="col-sm-2">
      <label><b> Name</b></label>
    </div>
    
    <div class="col-sm-6">
      <input type="text" class="form-control" placeholder="Enter Customer name" name="item_name" id="itemname">
    </div>
    <div class="col-sm-1">
      <label><b> Type</b></label>
    </div>

    <div class="col-sm-3">
       <select class="form-control">
          <option value="">Select</option>
          <option value="C">Customer</option>
          <option value="V">Vendor</option>
          <option value="T">Tenant</option>
         
       </select>
    </div>
  </div>

   <div class="form-group row">
    <div class="col-sm-2">
      <label><b>Customer Name</b></label>
    </div>
    
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Enter Customer name" name="item_name" id="itemname">
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
                    
   
</script>