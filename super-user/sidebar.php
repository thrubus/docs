<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../assets/adminlte-2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn waves-effect waves-light btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">SUPER USER</li>
      <li class="active"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li><li class="treeview">
        <a href="#">
          <i class="fa fa-list"></i> <span> Item</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="paket-sewa.php"><i class="fa fa-tag"></i> Paket Sewa</a></li>
          <li class=""><a href="status-driver.php"><i class="fa fa-wheelchair"></i> Status Driver</a></li>
          <li class=""><a href="status-mobil.php"><i class="fa fa-car"></i> Status Mobil</a></li>
          <li class=""><a href="status-order.php"><i class="fa fa-check-square"></i> Status Order</a></li>
          <li class=""><a href="bahan-bakar.php"><i class="fa fa-bolt"></i> Bahan Bakar</a></li>
        </ul>
      </li>
      <li><a href="pool.php"><i class="fa fa-map-pin"></i> Pool</a></li><li class="treeview">
      <li class="treeview">
        <a href="#">
          <i class="fa fa-rocket"></i><span> Radius & Biaya</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="radius.php"><i class="fa fa-street-view"></i> Radius</a></li>
          <li class=""><a href="paket-radius-dan-biaya.php"><i class="fa fa-money"></i> Paket Radius & Biaya</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-car"></i> <span> Mobil</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="jenis-kendaraan.php"><i class="fa fa-tag"></i> Jenis Kendaraan</a></li>
          <li class=""><a href="merk.php"><i class="fa fa-filter"></i> Merk</a></li>
          <li class=""><a href="kategori.php"><i class="fa fa-tags"></i> Kategori</a></li>
          <li class=""><a href="tipe.php"><i class="fa fa-plus"></i> Tipe Mobil</a></li>
        </ul>
      </li>
      <li><a href="demo-paket-harga.php"><i class="fa fa-play-circle"></i> Demo Paket Harga</a></li><li class="treeview">
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cogs"></i> <span>Pengaturan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="pengaturan-harga.php"><i class="fa fa-money"></i> Harga</a></li>
          <li class=""><a href="atur-harga.php"><i class="fa fa-calendar"></i> Jadwal</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'modal-detail-mobil.php' ?>
<?php include 'modal-tambah-tipe.php' ?>