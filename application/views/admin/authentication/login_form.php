<html>
<head>
<title>cPanel</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/sb-admin-2.css'); ?>">
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
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="login-panel panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-heading">cPanel Login</h4>
              </div>
              <div class="panel-body">
                  <?php echo form_open('admin/authentication/login'); ?>
                  <fieldset>
                    <div class="form-group">
                        <input class="form-control" name="userid" id="userid" placeholder="User ID" required autofocus="" 
                            <?php if(isset($login_cookie)) if($login_cookie['userid'] != '')  echo " value='".$login_cookie['userid']."'"; ?>>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass" id="pass" placeholder="Password" required
                            <?php if(isset($login_cookie)) if($login_cookie['pass'] != '')  echo " value='".$login_cookie['pass']."'"; ?>>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                        </label>
                    </div>
                    <input class="btn btn-lg btn-success btn-block" type="submit" value=" Login " name="submit"/>
                </fieldset>
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