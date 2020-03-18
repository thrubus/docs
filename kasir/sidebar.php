<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="kasir.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Adinda Maulina</p>
          <a href="#">Kasir</a>
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
        <li class="header">KASIR</li>
        <li class=""><a href="http://demo.okkarent.id/kasir/dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
        <li><a href="lihat-jadwal.php?params=booking"><i class="fa fa-calendar-check-o"></i> Lihat Jadwal</a></li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-dollar"></i> <span>Saldo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="lihat-saldo.php"><i class="fa fa-check-square-o"></i> Lihat saldo</a></li>
            <li class=""><a href="uang-muka.php"><i class="fa fa-money"></i> Uang muka</a></li>
            <li class="active"><a href="pembiayaan-bengkel.php"><i class="fa fa-pie-chart"></i> Pembiayaan Bengkel</a></li>
            <li class=""><a href="lihat-saldo.php"><i class="fa fa-pie-chart"></i> Pembiayaan Kantor</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cube"></i> <span>Inventoris</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="index.html"><i class="fa fa-check-square-o"></i> Order Mobil</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="index.html"><i class="fa fa-check-square-o"></i> Order Mobil</a></li>
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
  <?php include 'modal-jadikan-terjadwal.php' ?>
  <?php include 'modal-jadikan-proses.php' ?>
  <?php include 'modal-jadikan-close.php' ?>
  <?php include 'modal-jadikan-cancel.php' ?>
  <?php include 'modal-konfirmasi-uang-muka.php' ?>
  <?php include 'modal-detail-uang-muka.php' ?>