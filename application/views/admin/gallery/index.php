
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Galleries</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    <a class="btn btn-success" href="<?php echo base_url().'gallery/create' ?>">Add new gallery</a>
    <br>
    <br>
    <?php if($this->session->flashdata('message')){?>

    <div id="infoMessage" style="font-size: 20px;
        color: green;
        font-weight: bold;">
          <?php echo $this->session->flashdata('message');?>
        <br>
    </div>

    <?php } ?>
   
    <table class="table table-bordered" cellpadding=0 cellspacing=10>
      <tr>
        <th>Sl no</th>
        <th>picture</th>
        <th>Action</th>
      </tr>
      <?php 
       $i = 0;
      foreach ($data as $data): $i++;?>
      
      <tr>
        <td><?php echo $i?></td>
        <td><img style="height: 50px; width: 50px;" src="<?php echo base_url();?>assets/images/gallery/<?php echo $data->name;?>" alt=""></td>
        <td>
          <a href="<?php echo base_url();?>gallery/edit/<?php echo $data->id?>" class="btn btn-success btn-sm">Edit</a>
          <a href="<?php echo base_url();?>gallery/delete/<?php echo $data->id?>" onclick="return confirm('Are you sure you want to Remove this record?');" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      <?php endforeach;?>
    </table>
       </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
