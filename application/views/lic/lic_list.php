<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
            <a href="<?=base_url()?>index.php/adm/add_lic"><button type="button" class="btn btn-primary">Add</button></a>
				 <h2>Licence List</h2>
                 <span class="confirm-div" style="float:right; color:green;">
            <?php if(null != $this->session->flashdata('msg')) 
                  { echo $this->session->flashdata('msg');};?>

                  </span>
				 </div>
        
				<div class="row">
					 <div class="col-sm-12"> 
			<table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>No</th>
                <th>Name Of Equipment</th>
                <th> Period From</th>
                <th>Period To</th>
                <!-- <th>Amount</th> -->
                <th>Edit</th>
				<th>Delete</th>
             </tr>
				</thead>
				<tbody>

            <?php 

                        $i = 1;
            foreach($customer as $cust) {?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php if(isset($cust->item_name)){echo $cust->item_name; }?></td>
				<td><?php if(isset($cust->frm_dt)){echo $cust->frm_dt; }?></td>
                <td><?php if(isset($cust->to_dt)){echo $cust->to_dt; }?></td>
                <!-- <td><?php if(isset($cust->total)){echo $cust->total; }?></td> -->
               <!--  <td>Edinburgh</td>
                <td>61</td> -->
                <td><a href="<?=base_url()?>index.php/adm/edit_lic?id=<?php if(isset($cust->id)){echo $cust->id; }?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="editlic"><i class="fa fa-edit menu-icon"></i></a>
                               
                </td>
				<!-- <td> <a href="<?=base_url()?>index.php/adm/del_tenant?id=<?php if(isset($cust->sl_no)){echo $cust->sl_no; }?>" onclick="" class="delete deltenant" title="Delete"><i class="fa fa-trash-o menu-icon" style="color: #bd2130"></i></a>
                </td> -->
                <td><button type="button" name="delete" class="delete"  id="<?=$cust->id;?>"    
                                       
                                       data-toggle="tooltip" data-placement="bottom" title="Delete">

                                       <i class="fa fa-trash-o fa-2x" style="color: #bd2130"></i>
                                   </button> </td>
            </tr>
            
			<?php } ?>

		</tbody>
        <tfoot>
            <tr>
            <th>No</th>
                <th>Name Of Equipment</th>
                <th>Period From</th>
                <th>Period To</th>
                <th>Edit</th>
				<th>Delete</th>
            </tr>
        </tfoot>
    </table>
				</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready( function (){

$('.delete').click(function () {
    // alert('abc');
    var id = $(this).attr('id');
    // echo $sl_no;
    // exit;
    // window.alert("<?php echo $this->session->flashdata('msg'); ?>");
    var result = confirm("Do you really want to delete this record?");
   
    if(result) {

        window.location = "<?php echo site_url('adm/del_lic?id="+id+"');?>";
       

    }
    
});

});

</script>