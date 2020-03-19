<div row>
    <div class="col-4 mx-auto">
      <form  method="post" action="<?php echo base_url('main/search');?>">
        
        <div class="form-group">
          <input type="search" class="form-control" id="search" name="search" placeholder="Search here"><br>
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
        
      </form> 
    </div> 
</div>


  </div>
	<div class="container">
	<div class="col-10 mx-auto text-center">
		<div class="text-center ">
			<table class="table table-striped text-dark">
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>Email</th>
					<th>D.O.D</th>
					<th>Blood will be needed</th>
					<th>Gender</th>
					<th>Blood Group</th>
					<th>Address</th>
					<th>City</th>
					<th>Mobile</th>
					<th>Join</th>
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
					<td><?=$row->email;?></td>
					<td><?=$row->dod;?></td>
					<td><?=$row->bag;?></td>
					<td><?=$row->gender;?></td>
					<td><?=$row->blood_group;?></td>
					<td><?=$row->address;?></td>
					<td><?=$row->city;?></td>
					<td><?=$row->mobile;?></td>
					<td><?=$datet;?></td>
					<td><a class="delete_data" href='<?php echo base_url("auth/deletedata_join/").$row->id; ?>'> Delete</a></td>
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