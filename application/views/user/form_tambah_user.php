<div class="content">
	<div class="container-fluide">
		<div class="row">

			<div class="col-md-12">
				<div class="card card-primary">
					<!-- form start -->
					<div class="col-md-6 offset-md-2">
						<div class="card-header">
							<div class="float-right">
								<a class="btn btn-warning" href="<?=base_url('user');?>"><i class="fa fa-undo"></i> Kembali</a>
							</div>
						</div>
						<form class="form-horizontal" action="<?=base_url('user/tambah');?>" method="post">
							<div class="card-body">
								<div class="form-group row">
									<label class="col-sm-4 col-form-label" for="nama">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control <?=form_error('nama') ? 'is-invalid' : null;?>" name="nama" id="nama" value="<?=$this->form_validation->set_value('nama');?>">
										<?=form_error('nama', '<span class="error invalid-feedback">', '</span>');?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label"for="username">Username</label>
									<div class="col-sm-8">
										<input type="text" class="form-control <?=form_error('username') ? 'is-invalid' : null;?>" name="username" id="username" value="<?=$this->form_validation->set_value('username');?>">
										<?=form_error('username', '<span class="error invalid-feedback">', '</span>');?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label"for="password">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control <?=form_error('password') ? 'is-invalid' : null;?>" name="password" id="password" autocomplete="off">
										<?=form_error('password', '<span class="error invalid-feedback">', '</span>');?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label"for="password2">Konfirmasi Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control <?=form_error('password2') ? 'is-invalid' : null;?>" name="password2" id="password2" autocomplete="off">
										<?=form_error('password2', '<span class="error invalid-feedback">', '</span>');?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label"for="alamat">Alamat</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="alamat" id="alamat" value="<?=$this->form_validation->set_value('alamat');?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-4 col-form-label"for="level">Hak Akses</label>
									<div class="col-sm-8">
										<select class="form-control" name="level" id="level">
											<option value="1">Admin</option>
											<option value="2" selected>Kasir</option>
										</select>
									</div>
								</div>
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-danger">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
