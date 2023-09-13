<?php foreach($datauser as $data) {} ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-user"></i> <?php echo $data['username']; ?></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>index.php/dashboard" class="brand-link">
      <img src="<?php echo base_url();?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">BankSampah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $data['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php 
            if ($data['level'] == 'admin') {

          ?>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
		      <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/sampah/data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Sampah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/client/data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/sampah/pemasukan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/sampah/pengeluaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengeluaran</p>
                </a>
              </li>
            </ul>
          </li>
		     <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/laporan/jualbeli" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jual Beli</p>
                </a>
              </li>
			    <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/laporan/nota" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/auth/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          <?php } ?>
          <?php 
            if($data['level']=='pimpinan') {
              
            
          ?>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/laporan/jualbeli" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jual Beli</p>
                </a>
              </li>
			      <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/laporan/nota" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nota</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/auth/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
            </ul>
          </li>
          <?php } ?>
          <?php 
            if($data['level']=='masyarakat') {
              
          ?>
           <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/auth/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>