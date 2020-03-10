<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lo</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

	<div class="login-box">
	<div class="login-logo">
		<div id="infoMessage"><?php echo $message;?></div>
	</div>
	<!-- /.login-logo -->
	<div class="card text-center">
		<div class="card-body login-card-body">
			<h1><?php echo lang('login_heading');?></h1>
			<p><?php echo lang('login_subheading');?></p>


			<?php echo form_open("auth/login");?>

				<p>
					<?php echo lang('login_identity_label', 'identity');?>
					<input type="text" name="identity" value="" id="identity" class="form-control">
				</p>

				<p>
					<?php echo lang('login_password_label', 'password');?>
					<input type="password" name="password" value="" id="password" class="form-control">
				</p>

				<p>
					<?php echo lang('login_remember_label', 'remember');?>
					<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
				</p>


				<p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

			<?php echo form_close();?>

			<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
		</div>
		<!-- /.login-card-body -->
	</div>
</div>

</body>
</html>