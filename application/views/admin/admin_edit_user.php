	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">Forms</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Forms</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-xs-12">
				<?php echo $this->session->flashdata('success_user'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Edit User</div>
					<div class="panel-body">
						<?php echo form_open_multipart('admin/edit_user_save', '', ['uplusr' => $data_user['user_add']]); ?>
						<div class="col-md-6">
							<div class="form-group">
								<label>Provinsi</label>
								<select class="form-control" name="provinsi" id="provinsi">
									<?php foreach ($provinsi as $data_provinsi): ?>
										<?php if ($data_user['user_provinsi'] == $data_provinsi['id']): ?>
											<option value="<?php echo $data_provinsi['id'] ?>" selected><?php echo $data_provinsi['nama'] ?></option>
										<?php else: ?>
											<option value="<?php echo $data_provinsi['id'] ?>"><?php echo $data_provinsi['nama'] ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label>Kabupaten/Kota</label>
								<select class="form-control" name="kabupaten" id="kabkota">
									<?php $data_kabkota = $this->iklan_model->get_data_kabkota($data_user['user_provinsi']) ?>
									<?php foreach ($data_kabkota as $kota): ?>
										<?php if ($data_user['user_kota'] == $kota['id']): ?>
											<option value="<?php echo $kota['id'] ?>" selected><?php echo $kota['nama'] ?></option>
										<?php else: ?>
											<option value="<?php echo $kota['id'] ?>"><?php echo $kota['nama'] ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label>Kecamatan</label>
								<select class="form-control" name="kecamatan" id="kecamatan">
									<?php $data_kecamatan = $this->iklan_model->get_data_kecamatan($data_user['user_kota']) ?>
									<?php foreach ($data_kecamatan as $kecamatan): ?>
										<?php if ($data_user['user_kecamatan'] == $kecamatan['id']): ?>
											<option value="<?php echo $kecamatan['id'] ?>" selected><?php echo $kecamatan['nama'] ?></option>
										<?php else: ?>
											<option value="<?php echo $kecamatan['id'] ?>"><?php echo $kecamatan['nama'] ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" class="form-control" placeholder="Nama kamu ..." value="<?php echo $data_user['user_nama'] ?>">
							</div>
							<div class="form-group">
								<label>Telepon/HP</label>
								<input type="text" class="form-control" name="telpon" placeholder="example: 085xxx" value="<?php echo $data_user['user_telpon'] ?>">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $data_user['user_alamat'] ?>">
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea class="form-control" name="deskripsi" rows="6" placeholder="Ciri-ciri kamu ..."><?php echo $data_user['user_deskripsi'] ?></textarea>
							</div>
							<div class="form-group">
								<label style="display:block;">Foto Upload</label>
								<label class="chs-img" style="width:255px;padding: 35px 0;">
									<img id="foto_profil" <?php echo ($data_user['user_picture']) ? 'src='.base_url('images/user_iklan/'.$this->admin->tanggal_indonesia(date('Y-m-d-N', strtotime($data_user['user_add']))).$data_user['user_picture']) : '' ?> width="252" height="112">
									<span class="glyphicon glyphicon-eye-open"></span>
									<input type="file" name='foto_upload' onchange="loadImage(this, 'foto_profil', 252, 112)" style="display:none;">
								</label>
								<p class="help-block" style="display:block;">Example block-level help text here.</p>
							</div>
							<input type="hidden" name="kd_user" value="<?php echo $data_user['user_kode'] ?>">
							<label>HAK AKSES</label>
							<div class="form-group has-success">
								<select class="form-control" name="hak_akses">
									<option value="admin" <?php echo $data_user['user_type'] == 'admin' ? 'selected' : '' ?>>Admin</option>
									<option value="general" <?php echo $data_user['user_type'] == 'general' ? 'selected' : '' ?>>General</option>
								</select>
							</div>
							<!-- <div class="form-group has-warning">
								<input class="form-control" placeholder="Warning">
							</div>
							<div class="form-group has-error">
								<input class="form-control" placeholder="Error">
							</div> -->
							<br>
							<button type="submit" name="submit" class="btn btn-primary">Simpan Iklan</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
							<?php echo form_close() ?>
							<script>
								function loadImage(i, elemen, w ,h){
									if (i.files && i.files[0]) {
										var reader = new FileReader();

										reader.onload = function(e){
											$('#'+elemen).attr('src', e.target.result).width(w).height(h);
										}
										reader.readAsDataURL(i.files[0]);
									}
								}
							</script>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->

	</div><!--/.main-->
