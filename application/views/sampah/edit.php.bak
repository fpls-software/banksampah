<?php foreach($datasampah as $data) {} ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/sampah/data">Data Sampah</a></li>
              <li class="breadcrumb-item active">Edit Data Sampah</li>
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
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Edit Data Sampah</h5>
					</div>
					<div class="card-body">
						<form action="<?php echo base_url();?>index.php/sampah/update" method="post">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Kode Sampah</label>
										<input type="text" name="kd_sampah" value="<?php echo $data['kd_sampah']; ?>" class="form-control" readonly>
									</div>
									<div class="form-group">
										<label>Nama Sampah</label>
										<input type="text" name="nm_sampah" value="<?php echo $data['nm_sampah']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>Satuan</label>
										<input type="text" name="satuan" value="<?php echo $data['satuan']; ?>" class="form-control">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Harga Beli</label>
										<input type="text" name="harga_beli" value="<?php echo $data['harga_beli']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>Harga Jual</label>
										<input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>" class="form-control">
									</div>
									<div class="form-group">
										<label>Jenis Sampah</label>
										<select class="form-control" name="jns_sampah">
											<option readonly selected><?php echo $data['jns_sampah']; ?></option>
											<option>Organik</option>
											<option>Non-Organik</option>
										</select>
									</div>
								</div>
							</div>
						
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div>