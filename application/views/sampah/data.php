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
              <li class="breadcrumb-item active">Sampah</li>
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
						<div class="row">
							<div class="col-lg-6">
								<h5 class="card-title">Data Sampah</h5>
							</div>
							<div class="col-lg-6 text-right">
								<a href="<?php echo base_url(); ?>index.php/sampah/tambah"><button type="button" class="btn btn-info btn-sm"><span class="fa fa-plus"></span> Tambah Data</button></a>
								<a href="<?php echo base_url(); ?>index.php/sampah/pemasukan"><button type="button" class="btn btn-info btn-sm">Pemasukan</button></a>
								<a href="<?php echo base_url(); ?>index.php/sampah/pengeluaran"><button type="button" class="btn btn-info btn-sm">Pengeluaran</button></a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table id="example2" class="table table-bordered table-stripped">
							<thead>
								<th>No</th>
								<th>Kode</th>
								<th>Nama Sampah</th>
								<th>Satuan</th>
								<th>Harga Beli</th>
								<th>Harga Jual</th>
								<th>Aksi</th>
							</thead>
							<tbody>
								<?php 
									$no=1;
									foreach($datasampah as $data) {
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $data['kd_sampah']; ?></td>
									<td><?php echo $data['nm_sampah']; ?></td>
									<td><?php echo $data['satuan']; ?></td>
									<td><?php echo "Rp".number_format($data['harga_beli'],0,',','.'); ?></td>
									<td><?php echo "Rp".number_format($data['harga_jual'],0,',','.'); ?></td>
									<td>
										<a href="<?php echo base_url(); ?>index.php/sampah/edit/<?php echo $data['kd_sampah']; ?>"><button type="button" class="btn btn-success btn-sm"><span class="fa fa-edit"></span></button></a> 
										<a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?php echo base_url(); ?>index.php/sampah/hapus/<?php echo $data['kd_sampah']; ?>"><button type="button" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></button></a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div>