
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Labors</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Labors</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
	 <!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<!-- Small boxes (Stat box) -->
	</div>
	<!-- /.login-logo -->
	<div class="card text-center w-50 m-auto">
		<div class="card-body login-card-body">
			<div id="infoMessage"><?php echo $message;?></div>

			<div class="card text-center">
				<div class="card-body login-card-body">
					<form action="<?php echo base_url().'labors/create' ?>" method="post" accept-charset="utf-8">

							<p class="text-left">
								<label for="first_name">First Name</label>
								<br>
								<input placeholder="First Name" class="form-control" type="text" name="first_name"  value="" id="first_name">
							</p>

							<p class="text-left">
								<label for="last_name">Last Name</label>
								<br>
								<input placeholder="last Name" class="form-control" type="text" name="last_name" value="" id="last_name">
							</p>

							<p class="text-left">
								<label for="father_name">Father Name</label>
								<br>
								<input placeholder="Father Name" class="form-control" type="text" name="father_name" value="" id="father_name">
							</p>

							<p class="text-left">
								<label for="last_name">Mother Name</label>
								<br>
								<input placeholder="last Name" class="form-control" type="text" name="last_name" value="" id="last_name">
							</p>

							<p class="text-left">
								<label for="company">Company</label>
								<br>
								<input placeholder="Company" class="form-control" type="text" name="company" value="" id="company">
							</p>

							<p class="text-left">
									<label for="email">Email</label>
									<br>
									<input placeholder="Email" class="form-control" type="text" name="email" value="" id="email">
							</p>

							<p class="text-left">
								<label for="phone">Phine</label>
								<br>
								<input placeholder="Phone" class="form-control" type="text" name="phone" value="" id="phone">
							</p>

							<p class="text-left">
								<label for="emergency_phone">Emergency Phone</label>
								<br>
								<input placeholder="Phone" class="form-control" type="text" name="emergency_phone" value="" id="emergency_phone">
							</p>



							<!--<p>
								<label for="password"></label>
								<br>
								<input placeholder="First Name" class="form-control" type="password" name="password" value="" id="password">
							</p>

							<p>
								<label for="password_confirm"></label>
								<br>
								<input placeholder="First Name" class="form-control" type="password" name="password_confirm" value="" id="password_confirm">
							</p>-->

							<p>
								<input class="btn btn-success" class="form-control" type="submit" name="submit" value="submit">
							</p>

					</form>
				</div>
			</div>
		</div>
	</div><!-- /.container-fluid -->
	</section>
		<!-- /.content -->
	</div>

