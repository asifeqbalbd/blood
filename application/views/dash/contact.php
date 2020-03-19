
<div class="alo" align="center">
  <img src="<?php echo base_url(); ?>assets/contact.png" style="height:200px;">
</div>
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
	<form class="contact_us" action="<?php echo base_url('dash/con_validation_ins');?>" method="post" >
		<input type="text" name="name" class="form-control rounded-0" placeholder="Your Full Nmae..">
    <span class="text-error"> <?php echo form_error('name');?> </span><br>

		<input type="email" name="email" class="form-control rounded-0" placeholder="Your  Email..">
    <span class="text-error"> <?php echo form_error('email');?> </span><br>

		,<textarea name="details" class="form-control rounded-0" rows="5" placeholder="whats your problem.."></textarea>
    <span class="text-error"> <?php echo form_error('details');?> </span>

		 <div class="form-group">
        <button class="btn btn-success" type="submit">Send</button>
        <button class="btn btn-danger" type="reset">Reset</button>
            <!-- <button type="preview">
                    <a  href='<?=base_url("Main/index/")?>'>DataTable</a>
              </button> -->
      </div>
		
	</form>