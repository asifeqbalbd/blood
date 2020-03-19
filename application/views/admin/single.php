<div class="alert alert-primary" role="alert">
	<?php
	if(isset($msg)){
		echo "<p>".$msg."</p>";
	}
	?>
</div>
<div class="text-center">
	<h3>Profile of Donor Medical Info</h3>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card">
				<?php 
				if (isset($result)) 
				{
					foreach ($result->result() as $row) {
						$timedb = $row->don_date;	
						$time = strtotime($timedb);
						$date = date('M d, Y', $time);
						?>
						<div class="form-group">
						<img src="<?=base_url('/upload/').$row->image;?>" alt="" class="card-img-top" width="100px" height="200px">
					</div>
					<div>
						<div class="col-sm-6">
							Name:
						</div>
						<div class="col-sm-6">
							<?=$row->name;?>
						</div>
					</div>
					<div>
						<div class="col-sm-6">
							Date of Donation :
						</div>
						<div class="col-sm-6">
							<?=$row->don_date;?>
						</div>
					</div>
					<div>
						<div class="col-sm-6">
							Statistics :
						</div>
						<div class="col-sm-6">
							<?=$row->stats;?>
						</div>
					</div>
					<div>
						<div class="col-sm-6">
							Temperature :
						</div>
						<div class="col-sm-6">
							<?=$row->temp;?>
						</div>
					</div>
					<div>
						<div class="col-sm-6">
							Pulse :
						</div>
						<div class="col-sm-6">
							<?=$row->pulse;?>
						</div>
					</div>
					<div>
						<div class="col-sm-6">
							Blood Pressure :
						</div>
						<div class="col-sm-6">
							<?=$row->bp;?>
						</div>
					</div>
					<div>
						<div class="col-sm-6">
							Weight :
						</div>
						<div class="col-sm-6">
							<?=$row->weight;?>
						</div>
					</div>
					<div>
						<div class="col-sm-6">
							Hemoglobin :
						</div>
						<div class="col-sm-6">
							<?=$row->hemoglobin;?>
						</div>
					</div>
					<div>
						<div class="col-sm-6">
							HBsAg :
						</div>
						<div class="col-sm-6">
							<?=$row->hbsag;?>
						</div>
					</div>
					<div>
						<div class="col-sm-6">
							Aids :
						</div>
						<div class="col-sm-6">
							<?=$row->aids;?>
						</div>
					</div>

					
						<?php
					}	
					
				} 
				?>
			</div>
		</div>
	</div>
</div>