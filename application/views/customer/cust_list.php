<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
            <a href="<?=base_url()?>index.php/adm/add_customer"><button type="button" class="btn btn-primary">Add</button></a>
				 <h2>Stakeholders List</h2>
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
                <th>Name</th>
                <th>UIN</th>
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
                <td><?php if(isset($cust->cust_name)){echo $cust->cust_name; }?></td>
				<td><?php if(isset($cust->uin)){echo $cust->uin; }?></td>
               <!--  <td>Edinburgh</td>
                <td>61</td> -->
                <td><a href="<?=base_url()?>index.php/adm/edit_cust?id=<?php if(isset($cust->uin)){echo $cust->uin; }?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="deletCus"><i class="fa fa-edit menu-icon"></i></a>
                               
                </td>
				<td> <a href="<?=base_url()?>index.php/adm/del_cust?id=<?php if(isset($cust->uin)){echo $cust->uin; }?>" onclick="" class="delete editeCus" title="Delete"><i class="fa fa-trash-o menu-icon" style="color: #bd2130"></i></a>
                </td>
            </tr>
            
			<?php } ?>

		</tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>UIN</th>
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
