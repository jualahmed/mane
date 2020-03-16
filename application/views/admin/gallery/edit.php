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
						<h1 class="m-0 text-dark">Update Gallery</h1>
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
					<form action="<?php echo base_url().'gallery/edit_action/'?><?php echo $row->id;?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

							
								<p class="text-left">
									
							<p><img style="height: 100px; width: 100px;" src="<?php echo base_url();?>assets/images/gallery/<?php echo $row->name;?>" alt="">
								</p>
							

							<p>
								<p class="text-left">
								<label for="image">Uplaod a new image</label>
								<br>
					<input class="form-control" type="file" name="name">
								<div class="error"><?php echo form_error('name');?></div>

							

							<p>
								<input class="btn btn-success" class="form-control" type="submit" name="submit" value="Update">
							</p>

					</form>
				<?php } ?>
				</div>
			</div>
		</div>
	</div><!-- /.container-fluid -->
	</section>
		<!-- /.content -->
	</div>

