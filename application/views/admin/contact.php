
  </div>
	<div class="container">
	<div class="col-10 mx-auto text-center">
		<div class="text-center ">
			<table class="table table-striped text-dark">
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>email</th>
					<th>Massage</th>
					<th>Time</th>
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
					<td><?=$row->details;?></td>
					<td><?=$datet;?></td>
					<td><a class="delete_data" href='<?php echo base_url("auth/deletedata/").$row->id; ?>'> Delete</a></td>
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