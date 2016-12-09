 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $title;  ?>
          </h1>
        </section>

 <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <!-- form start -->
                <form class="form-horizontal form-label-left" action="<?php echo site_url('dashboard/proses_edit') ?>" method="post" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP</label>
                      <div class="col-md-3 col-sm-6 col-xs-8">
                        <input type="hidden" class="form-control" value="<?php echo $admin[0]->id_admin; ?>" maxlength="18" name="id">

                        <input type="hidden" class="form-control" value="<?php echo $admin[0]->nip; ?>" maxlength="18" name="nip">
                        <input type="text" disabled class="form-control" value="<?php echo $admin[0]->nip; ?>" maxlength="18">
                      </div>                      
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <input type="text" class="form-control" value="<?php echo $admin[0]->nama; ?>" maxlength="50" name="nama">
                      </div>                      
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                      <div class="col-md-3 col-sm-6 col-xs-8">
                        <textarea class="form-control" rows="3" name="alamat"><?php echo $admin[0]->alamat; ?></textarea>
                      </div>                      
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">No Tlp</label>
                      <div class="col-md-3 col-sm-6 col-xs-8">
                        <input type="text" class="form-control" value="<?php echo $admin[0]->no_tlp; ?>" maxlength="14" name="no_tlp">
                      </div>                      
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Username</label>
                      <div class="col-md-3 col-sm-6 col-xs-8">
                        <input type="hidden" class="form-control" value="<?php echo $admin[0]->username; ?>" maxlength="30" name="username">
                        <input type="text" disabled class="form-control" value="<?php echo $admin[0]->username; ?>" maxlength="30">
                      </div>                      
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                      <div class="col-md-3 col-sm-6 col-xs-8">
                        <img src="<?php echo base_url('assets/img/admin/'.$admin[0]->image); ?>" height="200px" width="200px" alt="<?php echo base_url('assets/img/admin/default.jpg'); ?>">
                      </div>                      
                    </div>

                    <div class="form-group">
                      <input type="hidden" name="img_tmp" value="<?php echo $admin[0]->image; ?>">
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