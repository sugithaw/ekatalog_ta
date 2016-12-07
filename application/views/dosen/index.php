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
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  
                  <div class="nav navbar-nav navbar-left">
                    <form method="post" action="<?php echo site_url('dosen/cari'); ?>" class="navbar-form navbar-left" role="search">
                      <div class="form-group col-md-12 col-sm-6 col-xs-3">
                        <a href="<?php echo site_url('dosen/tambahDosen'); ?>" class="btn btn-primary">Tambah</a>
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
                        <th class="text-center">Nama Dosen</th>
                        <th class="text-center">NIP</th>
                        <th class="text-center">No Telepon</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center" colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no=0; foreach($dosen as $row): $no++;?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->nip; ?></td>
                        <td><?php echo $row->no_tlp; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->alamat; ?></td>
                        <td class="text-center"><a href="<?php echo site_url('dosen/editDosen/'.$row->id_dosen);?>"><i class="glyphicon glyphicon-edit"></i></td>
                        <td class="text-center"><a href="<?php echo site_url('dosen/hapusDosen/'.$row->id_dosen);?>"><i class="glyphicon glyphicon-trash"></i></td>
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