<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            
          </ul>
          <div class="search-element">
            
            <div class="search-backdrop"></div>
            
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          </li>
          <li class="dropdown"><a href="#" class="nav-link nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block">Hello, <?php echo $this->session->userdata('nama') ?> !</div></a>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">HALAMAN ADMIN</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ADM</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="<?php echo (strpos(current_url(), "admin/dashboard") !== false) ? "active" : ""?>"><a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Beranda</span></a></li>
              <li class="menu-header">Master Data</li>

              <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-car"></i><span>Data Mobil</span></a>
              <ul class="dropdown-menu" style="display: none;">
                <li class="<?php echo (strpos(current_url(), "admin/data_mobil") !== false) ? "active" : ""?>"><a class="nav-link" href="<?php echo base_url('admin/data_mobil') ?>"><span>Data Mobil</span></a></li>

              <li class="<?php echo (strpos(current_url(), "admin/data_type") !== false) ? "active" : ""?>"><a class="nav-link" href="<?php echo base_url('admin/data_type') ?>"><span>Data Type Mobil</span></a></li>

              </ul>
             </li>

              
              <li class="<?php echo (strpos(current_url(), "admin/data_customer") !== false) ? "active" : ""?>"><a class="nav-link" href="<?php echo base_url('admin/data_customer') ?>"><i class="fas fa-address-book"></i> <span>Data Customer</span></a></li>

              <li class="<?php echo (strpos(current_url(), "admin/transaksi") !== false) ? "active" : ""?>"><a class="nav-link" href="<?php echo base_url('admin/transaksi') ?>"><i class="fas fa-random"></i> <span>Data Transaksi</span></a></li>
              <li class="<?php echo (strpos(current_url(), "admin/data_user") !== false) ? "active" : ""?>"><a class="nav-link" href="<?php echo base_url('admin/data_user') ?>"><i class="fas fa-user"></i> <span>Data User</span></a></li>
              

              <li class="menu-header">Output Data</li>
              <li class="<?php echo (strpos(current_url(), "admin/laporan") !== false) ? "active" : ""?>"><a class="nav-link" href="<?php echo base_url('admin/laporan') ?>"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a></li>

              

              

              <li><a class="nav-link" href="<?php echo base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>

            </ul>
        </aside>
      </div>