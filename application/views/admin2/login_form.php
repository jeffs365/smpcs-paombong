
<html>
<head>
<title>cPanel</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>

<div class="container">
	<div>
	<?php
		if (isset($fail_login_message)) {
			echo '<div class="alert alert-danger alert-dismissible text-center" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  	<span aria-hidden="true">&times;</span>
					  </button>
			  			<p>'.$fail_login_message.'</p>
					</div>';
		}
	?>
		<div class="modal-dialog modal-sm">
		  <div class="modal-content">
		      <div class="modal-header">
		          <h4>cPanel Login</h4>
		      </div>
		      <div class="modal-body">
		          <?php echo form_open('admin2/user_authentication/login'); ?>
		            <div class="form-group">
		              <input type="text" class="form-control input-sm" name="userid" id="userid" placeholder="User ID" required>
		            </div>
		            <div class="form-group">
		              <input type="password" class="form-control input-sm" name="pass" id="pass" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		              <input class="btn btn-primary btn-sm btn-block" type="submit" value=" Login " name="submit"/>
		            </div>
		          </form>
		      </div>
		  </div>
		  </div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>