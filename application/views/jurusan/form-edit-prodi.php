<div class="content-wrapper">
	<!-- Headernya -->
	<section class="content-header">
		<h1><?php echo $title; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<form class="form-horizontal form-label-left" action="<?php echo site_url('jurusan/prosesEditProdi'); ?>" method="post">
						<div class="box-body"></div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Prodi</label>
							<div class="col-md-3 col-sm-6 col-xs-8">
								<input type="hidden" name="id_prodi" value="<?php echo $prodi[0]->id_prodi; ?>">
								<input type="text" name="nama_prodi" value="<?php echo $prodi[0]->nama_prodi; ?>" class="form-control" >
							</div>
						</div>
						<div class="box-footer">
							<a href="<?php echo site_url('jurusan/tampilProdi'); ?>" class="btn btn-default">Kembali</a>
							<button type="submit" class="btn btn-primary pull-right">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>