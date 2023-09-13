 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Laporan</a></li>
              <li class="breadcrumb-item active">Jual Beli</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-sm-6 col-md-3">
			<div class="card">
				<form action="<?php echo base_url(); ?>index.php/laporan/cetak" method="get">
				<div class="card-header">
					<h5 class="card-title">Filter Laporan</h5>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Dari</label>
										<input type="date" class="form-control" name="dari">
									</div>
									<div class="col-md-6">
										<label>Sampai</label>
										<input type="date" class="form-control" name="sampai">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary btn-sm" type="submit"><span class=""></span> Proses</button>
				</div>
				</form>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</div>