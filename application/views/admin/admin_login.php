<?php include_once('admin_header.php');  ?>

<div class="container">
		<?php echo form_open('login/admin_login', ['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Admin Login</legend>
        <?php  if( $error= $this->session->flashdata('Login_Failed')): ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="alert alert-dismissible alert-danger">
                <?= $error ?>
              
            </div>
        </div>
    </div>
<?php endif; ?>
    <div class="row">
    	
    	<div class="col-lg-6">
    		<div class="form-group">
		      <label>UserName</label>
		      <?php echo form_input(['name'=>'username', 'class'=>'form-control', 'placeholder'=>'UserName','value'=>set_value('username')]); ?>
      
    		</div>
    	</div>

    	<div class="col-lg-6">
    		<?php echo form_error('username'); ?>
    	</div>
    </div>

    <div class="row">
    	
    	<div class="col-lg-6">
    		<div class="form-group">
		      <label>Password</label>
		      <?php echo form_password(['name'=>'password', 'class'=>'form-control', 'placeholder'=>'Password']); ?>
    		</div>
    	</div>
    	<div class="col-lg-6">
    		<?php echo form_error('password'); ?>
    	</div>
    </div>
    
    
    
  	<div >
  		<?php echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-secondary']),
  		 			form_submit(['name'=>'submit', 'value'=>'Login', 'class'=>'btn btn-dark']); ?>
	    
    </div>
  </fieldset>
</form>
</div>


<?php include_once('admin_footer.php'); ?>