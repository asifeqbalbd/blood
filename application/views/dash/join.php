<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
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
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/register.jpg'); ?>" class="img img-responsive">
                </div>
                <p>Join our community and reach out your hands for the others in need. Just by registering below you will make an agreement
                    with us that you are ready to donate and will be available whenever we will need you.</p>               
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo base_url('dash/join_validation_ins');?>" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-4 form-label">Name</label>
                        <div class="col-md-4">
                            <input type="text" name="firstName" class="form-control" placeholder="First Name" >
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="lastName" class="form-control" placeholder="Last Name" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4" for="email">Email</label>
                        <div class="col-md-8">
                            <input type="email" id="email" class="form-control" name="email" >
                        </div>
                        <span class="text-error"> <?php echo form_error('email');?> </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4" for="dod">D.O.D</label>
                        <div class="col-md-8">
                            <input type="date" id="dod" class="form-control" name="dod" >
                        </div>
                        <span class="text-error"> <?php echo form_error('dod');?> </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4" for="bag">Blood will be needed</label>
                        <div class="col-md-8">
                            <input type="number" id="bag" class="form-control" name="bag" >
                        </div>
                        <span class="text-error"> <?php echo form_error('bag');?> </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4" for="gender">Gender</label>
                        <div class="col-md-8" id="gender">
                            <input type="radio" value="Male" checked="true" class="radio-inline" name="gender" >Male
                            <input type="radio" value="Female" class="radio-inline" name="gender" >Female
                        </div>
                        <span class="text-error"> <?php echo form_error('gender');?> </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4" for="blood_group">Blood Group</label>
                        <div class="col-md-8" id="blood_group">
                            <select name="blood_group" class="form-control">
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                        <span class="text-error"> <?php echo form_error('blood_group');?> </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4" for="address">Address</label>
                        <div class="col-md-8">
                            <textarea id="address" minlength="5" class="form-control" name="address" 
                                      rows="6" placeholder="Please fill out your complete address."></textarea>
                        </div>
                        <span class="text-error"> <?php echo form_error('address');?> </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4" for="city">City</label>
                        <div class="col-md-8">
                            <input type="text"  id="city" class="form-control" name="city" >
                        </div>
                        <span class="text-error"> <?php echo form_error('city');?> </span>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4" for="mobile">Mobile</label>
                        <div class="col-md-8">
                            <input type="number" id="mobile" class="form-control" name="mobile" >
                        </div>
                        <span class="text-error"> <?php echo form_error('mobile');?> </span>
                    </div> 
                    <div class="form-group">
                        <label class="form-label col-md-4"></label>
                        <div class="col-md-8">
                            <button class="btn btn-success" type="submit" >Join</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>