	<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
				 <h2>Create Item</h2> 
          <span class="confirm-div" style="float:right; color:green;">
            <?php if(null != $this->session->flashdata('msg')) 
                  { echo $this->session->flashdata('msg');};?>
                      <?php //echo validation_errors(); ?>

                      
                  </span>
				 </div>
				 
				<div class="row">
					 <div class="col-sm-6"> 
				<form  action ="<?=base_url()?>index.php/adm/add_item" method="post" id="form">
  
					
  <div class="form-group row">
    
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="enter Item name" name="item_name" id="itemname">
    </div>
  </div>
   <div class="form-group row">
    
    <div class="col-sm-4">
     <input type="checkbox" id="license" name="license" value="1">
    <b>License</b>

  </div>
  <div class="col-sm-4">
    <input type="checkbox" id="Insurance" name="Insurance" value="1">
    <b>Insurance</b>
    </div>
    <div class="col-sm-4">
    <input type="checkbox" id="amc" name="amc" value="1">
    <b>AMC</b>
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