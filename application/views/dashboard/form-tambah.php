 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $title;  ?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>

 <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- form start -->
                <form class="form-horizontal form-label-left" action="<?php echo site_url('dashboard/tambahAdmin') ?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP</label>
                      <div class="col-md-3 col-sm-6 col-xs-8">
                        <input type="text" class="form-control" placeholder="Masukan NIP" maxlength="18" name="nip">
                      </div>                      
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" placeholder="Masukan Nama" maxlength="50" name="nama">
                      </div>                      
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                      <div class="col-md-3 col-sm-6 col-xs-8">
                        <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat"></textarea>
                      </div>                      
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">No Tlp</label>
                      <div class="col-md-3 col-sm-6 col-xs-8">
                        <input type="text" class="form-control" placeholder="Masukan No tlp" maxlength="14" name="no_tlp">
                      </div>                      
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                      <div class="col-md-3 col-sm-6 col-xs-8">
                        <input type="text" class="form-control" placeholder="Username" maxlength="30" name="username">
                      </div>                      
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                      <div class="col-md-3 col-sm-6 col-xs-8">
                        <input type="password" class="form-control" placeholder="Password" maxlength="35" name="password">
                      </div>                      
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto</label>
                      <div class="col-md-3 col-sm-6 col-xs-8">
                        <input type="file" name="image">
                        <p class="help-block"></p>
                      </div>                      
                    </div>

                    
                    
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="<?php echo site_url('dashboard/admin');?>" class="btn btn-default">Kembali</a>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
             </div>
          </div>
      </section>
      </div>