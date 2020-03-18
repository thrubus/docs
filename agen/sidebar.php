<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="agen.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Nella Henny</p>
        <a href="#">Agen</a>
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
      <li class="header">AGEN</li>
      <li class="active"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
      <li><a href="tambah-order.php"><i class="fa fa-cart-plus"></i> Tambah Order</a></li>
      <li><a href="lihat-jadwal.php?params=telepon-masuk"><i class="fa fa-calendar-check-o"></i> Lihat Jadwal</a></li>
      <li><a href="javascript:viod(0)" data-toggle="modal" data-target="#modal-atur-jadwal"><i class="fa fa-calendar"></i> Atur Jadwal</a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-bar-chart"></i> <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <!-- <li class=""><a href="index.html"><i class="fa fa-check-square-o"></i> Lihat Order</a></li>
          <li><a href="index2.html"><i class="fa fa-calendar-check-o"></i> Lihat Jadwal</a></li> -->
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cogs"></i> <span>Pengaturan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="index.html"><i class="fa fa-id-badge"></i> Profile</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'modal-atur-jadwal.php' ?>
<?php include 'modal-detail-mobil.php' ?>
<?php include 'modal-jadikan-telepon-masuk.php' ?>
<?php include 'modal-jadikan-booking.php' ?>
<?php include 'modal-jadikan-cancel.php' ?>