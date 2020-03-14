<style>
	.error{
		color: red;
		text-align: left !important;
	}
</style>
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
			

			<div class="card text-center">
				<div class="card-body login-card-body">
					<?php foreach($data as $row){?>	
					<form action="<?php echo base_url().'labors/edit_action/'?><?php echo $row->id;?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
							
							<p class="text-left">
								<label for="first_name">First Name</label>
								<br>
								<input placeholder="First Name" class="form-control" type="text" name="first_name" id="first_name" value="<?php echo $row->first_name; ?>">
								<div class="error"><?php echo form_error('first_name');?></div>
							</p>

							<p class="text-left">
								<label for="last_name">Last Name</label>
								<br>
								<input placeholder="last Name" class="form-control" type="text" name="last_name" value="<?php echo $row->last_name; ?>" id="last_name">
								<div class="error"><?php echo form_error('last_name');?></div>
							</p>

							<p class="text-left">
								<label for="father_name">Father's Name</label>
								<br>
								<input placeholder="Name of father" class="form-control" type="text" name="father_name" value="<?php echo $row->father_name; ?>" id="father_name">
								<div class="error"><?php echo form_error('father_name');?></div>
							</p>

							<p class="text-left">
								<label for="last_name">Mother's Name</label>
								<br>
						<input placeholder="Name of Mother" class="form-control" type="text" name="mother_name" value="<?php echo $row->mother_name; ?>" id="mother_name">
								<div class="error"><?php echo form_error('last_name');?></div>
							</p>
							
							<p class="text-left">
									<label for="email">Email</label>
									<br>
									<input placeholder="Email" class="form-control" type="text" name="email" value="<?php echo $row->email; ?>" id="email">
									<div class="error"><?php echo form_error('email');?></div>
							</p>

							<p class="text-left">
								<label for="company">Company Name</label>
								<br>
					<input placeholder="Company Name" class="form-control" type="text" name="company" value="<?php echo $row->company; ?>" id="bloodgroup">
								<div class="error"><?php echo form_error('company');?></div>

							</p>

							<p><img style="height: 100px; width: 100px;" src="<?php echo base_url();?>assets/labor_profile/<?php echo $row->picture;?>" alt="">

								<label for="image">Change image</label>
								<br> <br>
					<input class="form-control" type="file" name="picture">
								<div class="error"><?php echo form_error('picture');?></div>
							</p>

							
						<p class="text-left">
								<label for="blood group">Blood Group</label>
								<br>
								<input placeholder="Blood Group" class="form-control" type="text" name="bloodgroup" value="<?php echo $row->bloodgroup; ?>" id="bloodgroup">
								<div class="error"><?php echo form_error('bloodgroup');?></div>
							</p>

							<p class="text-left">
								<label for="phone">Mobile No</label>
								<br>
								<input placeholder="Mobile No" class="form-control" type="text" name="phone" value="<?php echo $row->phone; ?>" id="phone">
								<div class="error"><?php echo form_error('phone');?></div>
							</p>

							<p class="text-left">
								<label for="emergency_phone"> Another Mobile no (in case of Emergency)</label>
								<br>
							<input placeholder="Another Mobile no" class="form-control" type="text" name="emergency_phone" value="<?php echo $row->emergency_phone; ?>" id="emergency_phone">
								<div class="error"><?php echo form_error('emergency_phone');?><div>
							</p>



							<p>
								<input class="btn btn-success" class="form-control" type="submit" name="submit" value="Update">
							</p>

						<?php } ?>

					</form>
				</div>
			</div>
		</div>
	</div><!-- /.container-fluid -->
	</section>
		<!-- /.content -->
	</div>

