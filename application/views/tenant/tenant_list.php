<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
            <a href="<?=base_url()?>index.php/adm/add_tenant"><button type="button" class="btn btn-primary">Add</button></a>
				 <h2>Tenant List</h2>
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
                <th>Tenant Name</th>
                <th>Ageemennt Effect from</th>
                <th>Agreement Expired on</th>
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
                <td><?php if(isset($cust->name)){echo $cust->name; }?></td>
				<td><?php if(isset($cust->agree_st_dt)){echo $cust->agree_st_dt; }?></td>
                <td><?php if(isset($cust->agree_end_dt)){echo $cust->agree_end_dt; }?></td>
               <!--  <td>Edinburgh</td>
                <td>61</td> -->
                <td><a href="<?=base_url()?>index.php/adm/edit_tenant?id=<?php if(isset($cust->id)){echo $cust->id; }?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="edittenant"><i class="fa fa-edit menu-icon"></i></a>
                               
                </td>
				<td> <a href="<?=base_url()?>index.php/adm/del_tenant?id=<?php if(isset($cust->id)){echo $cust->id; }?>" onclick="" class="delete deltenant" title="Delete"><i class="fa fa-trash-o menu-icon" style="color: #bd2130"></i></a>
                </td>
            </tr>
            
			<?php } ?>

		</tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Tenant Name</th>
                <th>Ageemennt Effect from</th>
                <th>Agreement Expired on</th>
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
