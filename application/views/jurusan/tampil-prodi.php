 	     <!-- DataTables -->
    <link rel="stylesheet" href="<php echo base_url('plugins/datatables/dataTables.bootstrap.css');?>">

    <!-- DataTables -->
    <script src="<php echo base_url('plugins/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<php echo base_url('plugins/datatables/dataTables.bootstrap.min.js');?>"></script>
    

      <!-- Content Wrapper. Contains page content -->
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
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  
                  <div class="nav navbar-nav navbar-left">
                    <form method="post" action="<?#php echo site_url('dosen/cari'); ?>" class="navbar-form navbar-left" role="search">
                      <div class="form-group col-md-12 col-sm-6 col-xs-12">
                        <a href="<?php echo site_url('jurusan/tambahProdi'); ?>" class="btn btn-primary">Tambah</a>
                        <input type="text" class="form-control" placeholder="Cari" name="cari" >

                      </div>
                    </form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                      	<th class="text-center">No</th>
                        <th class="text-center">Jurusan</th>
                        <th class="text-center">Prodi</th>
                        <th class="text-center" colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no=0; foreach($prodi as $row): $no++;?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row->nama_jurusan; ?></td>
                        <td><?php echo $row->nama_prodi; ?></td>
                        <td class="text-center"><a href="<?php echo site_url('jurusan/editProdi/'.$row->id_prodi);?>"><i class="glyphicon glyphicon-edit"></i></td>
                        <td class="text-center"><a href="<?php echo site_url('jurusan/hapusProdi/'.$row->id_prodi);?>"><i class="glyphicon glyphicon-trash"></i></td>
                      </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                      
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>