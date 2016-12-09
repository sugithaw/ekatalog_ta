<div class="content-wrapper">
	<!-- Headernya -->
	<section class="content-header">
		<h1><?php echo $title; ?></h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<form class="form-horizontal form-label-left" action="<?php #echo site_url('jurusan/prosesTambahProdi'); ?>" method="post">
						<div class="box-body"></div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">NIM</label>
							<div class="col-md-3 col-sm-6 col-xs-8">
								<input type="text" name="nim" placeholder="NIM" class="form-control" >
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
							<div class="col-md-3 col-sm-6 col-xs-8">
								<input type="text" name="nama" placeholder="Nama Mahasiswa" class="form-control" >
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Jurusan</label>
							<div class="col-md-3 col-sm-6 col-xs-8">
								<select name="id_jurusan" class="form-control">
									<option value="" disabled selected>Pilih Jurusan</option>
									<?php foreach ($jurusan as $key ): ?>
									<option value="<?php echo $key->id_jurusan ?>"><?php echo $key->nama_jurusan; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Prodi</label>
							<div class="col-md-3 col-sm-6 col-xs-8">
								<select name="id_prodi" class="form-control">
									<option value="" disabled selected>Pilih Prodi</option>
									<?php foreach ($prodi as $key ): ?>
									<option value="<?php echo $key->id_jurusan ?>"><?php echo $key->nama_prodi; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">E-Mail</label>
							<div class="col-md-3 col-sm-6 col-xs-8">
								<input type="text" name="email" placeholder="E-Mail" class="form-control" >
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