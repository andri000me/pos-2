<div class="content">
	<div class="container-fluide">
		<div class="row">
			<div class="col-md-6 offset-2">
				<div class="card card-primary card-outline">
					<!-- form start -->
					<div class="card-header">
						<h3 class="card-title">Tambah Unit</h3>
						<div class="float-right">
							<a class="btn btn-warning" href="<?=base_url('unit');?>"><i class="fa fa-undo"></i> Kembali</a>
						</div>
					</div>
					<form class="form-horizontal" action="<?=base_url('unit/tambah');?>" method="post">
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label" for="nama">Nama unit</label>
								<div class="col-sm-8">
									<input type="text" class="form-control <?=form_error('nama') ? 'is-invalid' : null;?>" name="nama" id="nama" value="<?=$this->form_validation->set_value('nama');?>">
									<?=form_error('nama', '<span class="error invalid-feedback">', '</span>');?>
								</div>
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer float-right">
							<button type="submit" class="btn btn-primary">Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
