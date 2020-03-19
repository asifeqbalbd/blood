
<div class="container">
	<div class="row mt-3">
		<div class="col-12 pt-2">

			<?php 
				if (isset($error)) 
				{
			?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Sorry!</strong> <?=$error;?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>

			<?php
				}
	 			else if(isset($success))
				{
			?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Congrats!</strong> <?=$success;?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			<?php
				}
			?>
			<div class="card">
				 <div class="card-header">
				    Donor Basic Info
				  </div>
				  <div class="card-body">
				  	<form method="post" enctype="multipart/form-data" action="<?php echo base_url('dash/donor_validation');?>">
				  		<div class="form-group">
					    	<label for="name" class="col-sm-4">Name</label>
					    	<div class="col-sm-4">
					    		<input type="text" id="name" class="form-control" name="firstname" placeholder="First Name">
					    		<span class="text-danger"><?= form_error('firstname'); ?></span>
					    	</div>
					    	<div class="col-sm-4">
					    		<input type="text" id="name" class="form-control" name="lastname" placeholder="Last Name">
					    		<span class="text-danger"><?= form_error('lastname'); ?></span>
					    	</div>
						</div>

						<div class="form-group">
							<label for="pic">Image</label>
							<input type="file" name="picture" class="form-control-file" id="pic">
						</div>

						<div class="form-group">
							<label for="age">Date Of Birth</label>
							<input type="date" id="age" name="age" class="form-control rounded-0" >
							<span class="text-danger"><?= form_error('age'); ?></span>
						</div>

						<div class="form-group">
							<label for="sex">Gender</label>
							<div name="sex" class="form-control rounded-0" id="sex">
								<input type="radio" name="sex" value="Male" checked>  Male
								<input type="radio" name="sex" value="Female">  Female
							</div>
							<span class="text-danger"><?= form_error('sex'); ?></span>
						</div>

						<div class="form-group">
							<label for="b_type">Blood Type</label>
							<div>
								<select name="b_type" class="form-control rounded-0">
									<option name="b_type" value="O+">O+</option>
									<option name="b_type" value="O-">O-</option>
									<option name="b_type" value="A+">A+</option>
									<option name="b_type" value="A-">A-</option>
									<option name="b_type" value="B+">B+</option>
									<option name="b_type" value="B-">B-</option>
									<option name="b_type" value="AB+">AB+</option>
									<option name="b_type" value="AB-">AB-</option>
								</select>
							</div>
							<span class="text-danger"><?= form_error('b_type'); ?></span>
						</div>

						<div class="form-group">
							<label for="address">Address</label>
							<textarea rows="8" name="address" class="form-control rounded-0" placeholder="Village,post,thana...." ></textarea>
							<span class="text-danger"><?= form_error('address'); ?></span>
						</div>

						<div class="form-group">
							<label for="city">City</label>
							<input type="text" id="city" name="city" class="form-control rounded-0" >
							<span class="text-danger"><?= form_error('city'); ?></span>
						</div>

						<div class="form-group">
							<label for="mobile">Mobile</label>
							<input type="number" id="mobile" name="mobile" class="form-control rounded-0" min="0" max="10000000000">
							<span class="text-danger"><?= form_error('mobile'); ?></span>
						</div>
						

						<div class="text-center">
							<h1>Donor Medical Info</h1>
						</div>

						<div class="form-group">
							<label for="don_date">Date of Donation</label>
							<input type="date" id="don_date" name="don_date" class="form-control rounded-0" >
							<span class="text-danger"><?= form_error('don_date'); ?></span>
						</div>

						<div class="form-group">
							<label for="stats">Statistics</label>
							<input type="text" id="stats" name="stats" class="form-control rounded-0" >
							<span class="text-danger"><?= form_error('stats'); ?></span>
						</div>

						<div class="form-group">
							<label for="temp">Temperature</label>
							<input type="text" id="temp" name="temp" class="form-control rounded-0" >
							<span class="text-danger"><?= form_error('temp'); ?></span>
						</div>

						<div class="form-group">
							<label for="pulse">Pulse</label>
							<input type="number" min="0" max="300" id="pulse" name="pulse" class="form-control rounded-0" >
							<span class="text-danger"><?= form_error('pulse'); ?></span>
						</div>

						<div class="form-group">
							<label for="bp">Blood Pressure</label>
							<input type="text" id="bp" name="bp" class="form-control rounded-0" >
							<span class="text-danger"><?= form_error('bp'); ?></span>
						</div>

						<div class="form-group">
							<label for="weight">Weight</label>
							<input type="text" id="weight" name="weight" class="form-control rounded-0" >
							<span class="text-danger"><?= form_error('weight'); ?></span>
						</div>

						<div class="form-group">
							<label for="hemoglobin">Hemoglobin</label>
							<input type="text" id="hemoglobin" name="hemoglobin" class="form-control rounded-0" >
							<span class="text-danger"><?= form_error('hemoglobin'); ?></span>
						</div>

						<div class="form-group">
							<label for="hbsag">HBsAg</label>
							<input type="text" id="hbsag" name="hbsag" class="form-control rounded-0" >
							<span class="text-danger"><?= form_error('hbsag'); ?></span>
						</div>

						<div class="form-group">
							<label for="aids">Aids</label>
							<input type="text" id="aids" name="aids" class="form-control rounded-0" >
							<span class="text-danger"><?= form_error('aids'); ?></span>
						</div>

						<div class="form-group">
							<button class="btn btn-success">Add</button>
							<button class="btn btn-danger">cancel</button>
						</div>
					</form>
				  </div>
			</div>
		</div>
	</div>	
</div>