<div class="content-wrapper" style="min-height: 1302.12px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Mobile Legends</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Mobile Legends</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- /.row -->
			<div class="row">
				<div class="col-12">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Edit Data</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form action="/topup/admin/mobile_legends/update" method="POST">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Id</label>
									<input type="hidden" class="form-control" id="exampleInputEmail1" name="id" value="<?php echo $querymole->id ?>">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Nominal Diamond</label>
									<input type="text" class="form-control" id="exampleInputEmail1" name="nominal" value="<?php echo $querymole->nominal ?>">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Harga</label>
									<input type="text" class="form-control" id="exampleInputPassword1" name="harga" value="<?php echo $querymole->harga ?>">
								</div>
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
