<div class="content-wrapper">
	<!-- Headernya -->
	<section class="content-header">
		<h1><?php echo $title; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<form class="form-horizontal form-label-left" action="<?php echo site_url('dosen/prosesEditDosen'); ?>" method="post" enctype="multipart/form-data">
						<div class="box-body"></div>
						<div class="form-group">
							<input type="hidden" class="form-control" value="<?php echo $dosen[0]->id_dosen; ?>" name="id_dosen">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">NIP</label>
							<div class="col-md-3 col-sm-6 col-xs-8">
								<input type="hidden" name="nip" value="<?php echo $dosen[0]->nip; ?>" class="form-control" maxlength="18">
								<input type="text" disabled class="form-control" value="<?php echo $dosen[0]->nip; ?>" maxlength="18">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Dosen</label>
							<div class="col-md-6 col-sm-6 col-xs-8">
								<input type="text" name="nama" value="<?php echo $dosen[0]->nama; ?>" class="form-control" maxlength="50">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">No Telepon</label>
							<div class="col-md-3 col-sm-6 col-xs-8">
								<input type="text" name="no_tlp" value="<?php echo $dosen[0]->no_tlp; ?>" class="form-control" maxlength="13">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">E-Mail</label>
							<div class="col-md-3 col-sm-6 col-xs-8">
								<input type="email" name="email" value="<?php echo $dosen[0]->email; ?>" class="form-control" maxlength="50">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
							<div class="col-md-6 col-sm-6 col-xs-8">
								<textarea class="form-control" name="alamat"><?php echo $dosen[0]->alamat; ?></textarea>
							</div>
						</div>
						<div class="box-footer">
							<a href="<?php echo site_url('dosen/tampilDosen'); ?>" class="btn btn-default">Kembali</a>
							<button type="submit" class="btn btn-primary pull-right">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>