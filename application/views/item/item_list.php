<div class="main-panel">
		<div class="content-wrapper">
			<div class="card">
			 <div class="card-body">
				 
				 
				 <div class="titleSec">
            <a href="<?=base_url()?>index.php/adm/add_item"><button type="button" class="btn btn-primary">Add</button></a>
				 <h2>Item List</h2>
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
                <th>Edit</th>
				<th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php 

                        $i = 1;
            foreach($items as $item) {?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php if(isset($item->item_name)){echo $item->item_name; }?></td>
               <!--  <td>Edinburgh</td>
                <td>61</td> -->
                <td><a href="<?=base_url()?>index.php/adm/edit_item?id=<?php if(isset($item->id)){echo $item->id; }?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="deletCus"><i class="fa fa-edit menu-icon"></i></a>
                           
                </td>
				<td><a href="<?=base_url()?>index.php/adm/del_item?id=<?php if(isset($item->id)){echo $item->id; }?>" onclick="" class="delete editeCus" title="Delete"><i class="fa fa-trash-o menu-icon" style="color: #bd2130"></i></a>
                </td>
            </tr>
            
			<?php } ?>

		</tbody>
        <tfoot>
            <tr>
               <th>No</th>
                <th>Name</th>
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
