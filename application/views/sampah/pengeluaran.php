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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/sampah/data'); ?>"> Sampah </a></li>
              <li class="breadcrumb-item active">Pengeluaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="contain er-fluid">
		<div class="row">
            <div class="col-lg-12">
                <idv class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pengeluaran</h4>
                    </div>
                    <div class="card-body">
                    
               
                        <table class="table table-bordered table-stripped">
                            <thead>
                                <th width="20">No</th>
                                <th>ID Transaksi</th>
                                <th>Kode Sampah</th>
                                <th>Nama Sampah</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                        
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($datapengeluaran as $pengeluaran) {
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $pengeluaran['id_transaksi'];?></td>
                                    <td><?php echo $pengeluaran['kd_sampah'];?></td>
                                    <td><?php echo $pengeluaran['nm_sampah'];?></td>
                                    <td><?php echo $pengeluaran['jml'];?></td>
                                    <td><?php echo number_format($pengeluaran['harga'],0,',','.');?></td>
                                    <td><?php echo number_format($pengeluaran['jml'] * $pengeluaran['harga'],0,',','.');?></td>
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

