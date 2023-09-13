<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Nota</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Laporan</a></li>
              <li class="breadcrumb-item active">Nota</li>
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
				<div class="card-header">
					<div class="card-title">Data Nota</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-9">
							<table class="table table-bordered table-stripped">
								<thead>
									<th>No</th>
									<th>No_Nota</th>
									<th>Tanggal</th>
									<th>Nama Sampah</th>
									<th>Harga</th>
									<th>Kuantitas</th>
									<th>Jumlah</th>
									<th>
										
									</th>
								</thead>
								<tbody>
									<?php 
										$no = 1;
										foreach($laporan as $data) {
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $data['no_nota']; ?></td>
										<td><?php echo $data['tgl_transaksi']; ?></td>
										<td><?php echo $data['nm_sampah']; ?></td>
										<td><?php echo $data['harga']; ?></td>
										<td><?php echo $data['jml']; ?></td>
										<td><?php echo $data['harga'] * $data['jml']; ?></td>
										<td>
											<a href="<?php echo base_url(); ?>index.php/transaksi/nota/<?php echo $data['no_nota']; ?>"><button type="button" class="btn btn-info btn-sm"><span class="fa fa-info"></span> Detail</button></a>
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
	</div>
</div>