<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Marketplace | <?php echo $data['judul']; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- title logo bina -->
  <link rel="icon" type="image/png" href="<?php echo BASEURL; ?>/img/logo.png">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>/dist/css/adminlte.min.css">
  <!-- My Style CSS -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/main.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed" onload="inisiasi()">
<!-- Site wrapper -->
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

      <!-- Notifications Dropdown Menu -->
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-bell" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
        </div>
      </li>

      <!-- Menu Logout -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#logout" href="#">
          <i class="fas fa-sign-out-alt"></i>
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-1">
    <!-- Brand Logo -->
    <a href="<?php echo BASEURL ?>/home" class="brand-link" >
      <img src="<?php echo BASEURL; ?>/img/logobinaapps.png" alt="Bina Apps Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light"> <b>Marketplace</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo BASEURL; ?>/img/profile_default.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $data['dataSession']['adm_name'];  ?></a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- menu untuk admin -->
          <?php if ( $_SESSION['role_id'] == 1 ) { ?>
          
          <li class="nav-header"><b>ADMINISTRATOR</b></li>

          <!-- dashboard administrator -->
          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/home" class="nav-link <?= ($data['judul'] == 'Dashboard' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-header"><b>MENU</b></li>

            <!-- category -->
            <li class="nav-item ">
              <a href="<?php echo BASEURL; ?>/category" class="nav-link <?= ($data['judul'] == 'Category' ) ? 'active' : '' ?>">
              <i class="fas fa-clone nav-icon"></i>
                <p>
                  Category
                </p>
              </a>
            </li>

          <!-- shipping -->
          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/shipping" class="nav-link <?= ($data['judul'] == 'Shipping' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Shiping
              </p>
            </a>
          </li>

          <!-- orders -->
          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/orders" class="nav-link <?= ($data['judul'] == 'Orders' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>
                Orders
              </p>
            </a>
          </li>

          <!-- payment -->
          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/payment" class="nav-link <?= ($data['judul'] == 'Payment' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Payment
              </p>
            </a>
          </li>

          <!-- members -->
          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/members" class="nav-link <?= ($data['judul'] == 'Member' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Member
              </p>
            </a>
          </li>

          <!-- kota dan provinsi -->
          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/city" class="nav-link <?= ($data['judul'] == 'Kota' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-city"></i>
              <p>
                City & Province
              </p>
            </a>
          </li>

          <!-- consultant -->
          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/consultant" class="nav-link <?= ($data['judul'] == 'Consultant' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Consultant
              </p>
            </a>
          </li>

          <!-- builder -->
          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/builder" class="nav-link <?= ($data['judul'] == 'Builder' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Builder
              </p>
            </a>
          </li>

          <!-- Users -->
          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/user" class="nav-link <?= ($data['judul'] == 'Users' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-portrait"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          <!-- Retail -->
          <li class="nav-item has-treeview <?= ($data['judul'] == 'Retail' )? 'menu-open' : '' ?> ">
            <a href="<?php echo BASEURL; ?>/retail" class="nav-link <?= ($data['judul'] == 'Retail' )? 'active' : '' ?>">
            <i class="nav-icon fas fa-store-alt"></i>
              <p>
                Retail
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASEURL; ?>/retail/aktif" class="nav-link <?= ($data['subjudul'] == 'aktif' ) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aktif</p>
                </a>
              </li>
              <li class="nav-item">
              <li class="nav-item">
                <a href="<?php echo BASEURL; ?>/retail/ditolak" class="nav-link <?= ($data['subjudul'] == 'ditolak' ) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rejected</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASEURL; ?>/retail/review" class="nav-link <?= ($data['subjudul'] == 'review' ) ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perlu Persetujuan</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Chat -->
          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/chat" class="nav-link <?= ($data['judul'] == 'Chat' ) ? 'active' : '' ?>">
            <i class="far fa-comment-alt nav-icon"></i>
              <p>
                Chat
              </p>
            </a>
          </li>

          <!-- Laporan -->
          <li class="nav-item has-treeview <?= ($data['judul'] == 'Laporan' )? 'menu-open' : '' ?> ">
            <a href="<?php echo BASEURL; ?>/retail" class="nav-link <?= ($data['judul'] == 'Laporan' )? 'active' : '' ?>">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo BASEURL; ?>/laporan" class="nav-link <?= ($data['subjudul'] == 'dashboard' ) ? 'active' : '' ?>">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASEURL; ?>/laporan/penjualan" class="nav-link <?= ($data['subjudul'] == 'penjualan' ) ? 'active' : '' ?>">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Laporan Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
              <li class="nav-item">
                <a href="<?php echo BASEURL; ?>/laporan/terbanyak" class="nav-link <?= ($data['subjudul'] == 'terbanyak' ) ? 'active' : '' ?>">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Penjualan Terbanyak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASEURL; ?>/laporan/periode" class="nav-link <?= ($data['subjudul'] == 'periode' ) ? 'active' : '' ?>">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Periode Penjualan</p>
                </a>
              </li>
            </ul>
          </li>

          
          
          <?php } ?>
          <!-- batas akhir if  -->
          

          <!-- login untuk customer service -->
          <?php if ( $_SESSION['role_id'] == 2 ) { ?>

          <li class="nav-header"><b>CUSTOMER SERVICE</b></li>

          <?php if ( $data['judul'] == 'Dashboard' ) { ?>
            <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/home/cs" class="nav-link active">
          <?php } else { ?>
            <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/home/cs" class="nav-link">
          <?php } ?>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header"><b>MENU</b></li>
            <li class="nav-item ">
              <a href="<?php echo BASEURL; ?>/category" class="nav-link <?= ($data['judul'] == 'Category' ) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Category
                </p>
              </a>
            </li>

          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/orders" class="nav-link <?= ($data['judul'] == 'Orders' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>
                Orders
              </p>
            </a>
          </li>
          <?php } ?>

          <!-- login untuk spv -->

          <?php if ( $_SESSION['role_id'] == 3 ) { ?>

          <li class="nav-header"><b>SUPERVISOR</b></li>
          
          <?php if ( $data['judul'] == 'Dashboard' ) { ?>
            <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/home/spv" class="nav-link active">
          <?php } else { ?>
            <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/home/spv" class="nav-link">
          <?php } ?>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header"><b>MENU</b></li>
            <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/members" class="nav-link <?= ($data['judul'] == 'Member' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Member
              </p>
            </a>
          </li>
          <?php } ?>


          <li class="nav-header"><b>ACCOUNT</b></li>
          <li class="nav-item ">
            <a href="<?php echo BASEURL; ?>/profile" class="nav-link <?= ($data['judul'] == 'Profile' ) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#logout">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>