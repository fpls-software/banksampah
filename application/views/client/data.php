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
              <li class="breadcrumb-item active">Client</li>
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
								<h5 class="card-title">Data Client</h5>
							</div>
							<div class="col-lg-6 text-right">
								<a href="<?php echo base_url(); ?>index.php/client/tambah"><button type="button" class="btn btn-info btn-sm"><span class="fa fa-plus"></span> Tambah Data</button></a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<table id="example2" class="table table-bordered table-stripped">
							<thead>
								<th width="20">No</th>
								<th width="140">Id Client</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Aksi</th>
							</thead>
							<tbody>
								<?php 
									$no = 1;
									foreach($dataclient as $data) {
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $data['id_client'];?> </td>
									<td><?php echo $data['nama'];?> </td>
									<td><?php echo $data['alamat'];?> </td>
									<td>
										<a href="<?php echo base_url(); ?>index.php/client/edit/<?php echo $data['id_client']; ?>"><button type="button" class="btn btn-success btn-sm"><span class="fa fa-edit"></span></button></a> 
										<a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?php echo base_url(); ?>index.php/client/hapus/<?php echo $data['id_client']; ?>"><button type="button" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></button></a>
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