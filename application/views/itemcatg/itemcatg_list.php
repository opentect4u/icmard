<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
            <a href="<?=base_url()?>index.php/adm/add_itemcatg"><button type="button" class="btn btn-primary">Add</button></a>
				 <h2>Item Category</h2>
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
                <th>Category</th>
                <th>Edit</th>
				<th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php 

            $i = 1;
            foreach($itemcatg as $item) {?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td style="display:none;"><?php echo $item->sl_no; ?></td>
                <td><?php if(isset($item->category)){echo $item->category; }?></td>
               <!--  <td>Edinburgh</td>
                <td>61</td> -->
                <td><a href="<?=base_url()?>index.php/adm/edit_itemcatg?sl_no=<?php if(isset($item->sl_no)){echo $item->sl_no; }?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="edit"><i class="fa fa-edit menu-icon"></i></a>
                           
               
                <td><button type="button" name="delete" class="delete"  id="<?=$item->sl_no;?>"    
                                       
                                       data-toggle="tooltip" data-placement="bottom" title="Delete">

                                       <i class="fa fa-trash-o fa-2x" style="color: #bd2130"></i>
                                   </button> </td>
            </tr>
            
			<?php } ?>

		</tbody>
        <tfoot>
            <tr>
               <th>No</th>
                <th>Category</th>
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

                window.location = "<?php echo site_url('adm/del_itemcatg?sl_no="+id+"');?>";
               

            }
            
        });

    });

</script>