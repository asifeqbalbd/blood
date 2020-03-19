
<div row>
    <div class="col-4 mx-auto">
      <form  method="post" action="<?php echo base_url('main/search');?>">
        
        <div class="form-group">
          <input type="search" class="form-control" id="search" name="search" placeholder="Search here"><br>
          <button type="submit" class="btn btn-primary">Search</button>
        </div></div> 
      </form>
	<div class="row">
		<div class="text-center">
			<table class="table table-striped text-dark" id="Table">
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>Image</th>
					<th>Date of Birth</th>
					<th>Gender</th>
					<th>Blood Type</th>
					<th>Address</th>
					<th>City</th>
					<th>Mobile</th>
					<th>Add Time</th>
					<th>Donor Medical Info</th>
					<th>Delate</th>
				</tr>

				<?php 
					if (isset($result)) 
					{
						$count=1;
						foreach ($result->result() as $row) {
							$timedb = $row->date;	
						$time = strtotime($timedb);
						$datet = date('M d, Y', $time);
				?>			
				<tr>
					<td><?= $count; ?></td>
					<td><?=$row->name;?></td>
					<td><img width="100px" src="<?=base_url('/upload/').$row->image;?>" alt=""></td>
					<td><?=$row->age;?></td>
					<td><?=$row->sex;?></td>
					<td><?=$row->b_type;?></td>
					<td><?=$row->address;?></td>
					<td><?=$row->city;?></td>
					<td><?=$row->mobile;?></td>
					<td><?=$datet;?></td>
					<td><a class="card-link" href="<?=base_url('dash/single/').$row->id;?>">Medical Info</a></td>
					<td><a class="delete_data" href='<?php echo base_url("dash/deletedata/").$row->id; ?>'> Delete</a></td>
				</tr>
				<?php
							$count++;
						}	
						
					} 
				?>
			</table>
		</div>
	</div>
</div>

	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	      $(document).ready( function () {
	          $('#Table').DataTable();
	      } );
    </script>