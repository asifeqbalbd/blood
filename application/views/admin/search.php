
<div data>
    <div class="col-4 mx-auto">
      <form  method="post" action="<?php echo base_url('main/search');?>">
        
        <div class="form-group">
          <input type="search" class="form-control" id="search" name="search" placeholder="Search here"><br>
          <button type="submit" class="btn btn-primary">Search</button>
        </div></div> 
      </form>
	<div class="data">
		<div class="text-center">
			<table class="table table-striped text-dark">
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
					if (isset($search_result)) 
					{
						$count=1;
						foreach ($search_result as $data) {
				?>			
				<tr>
					<td><?= $count; ?></td>
					<td><?=$data->name;?></td>
					<td><img width="100px" src="<?=base_url('/upload/').$data->image;?>" alt=""></td>
					<td><?=$data->age;?></td>
					<td><?=$data->sex;?></td>
					<td><?=$data->b_type;?></td>
					<td><?=$data->address;?></td>
					<td><?=$data->city;?></td>
					<td><?=$data->mobile;?></td>
					<td><?=$data->date;?></td>
					<td><a class="card-link" href="<?=base_url('dash/single/').$data->id;?>">Read More</a></td>
					<td><a class="delete_data" href='<?php echo base_url("dash/deletedata/").$data->id; ?>'> Delete</a></td>
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