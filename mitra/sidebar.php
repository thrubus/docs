<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="mitra.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Cika Pratiwi</p>
          <a href="#">Mitra</a>
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
        <?php $url = pathinfo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") ?>
        <li class="header">MITRA</li>
        <li class="<?= $active = ($url['filename'] == "dashboard") ? "active" : '' ; ?>"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="<?= $active = ($url['filename'] == "daftar-investor") ? "active" : '' ; ?> treeview">
          <a href="#">
            <i class="fa fa-handshake-o"></i> <span>Investor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="javascript:viod(0)" data-toggle="modal" data-target="#modal-tambah-investor"><i class="fa fa-user-plus"></i> Tambah Investor</a></li>
            <li><a href="daftar-investor.php"><i class="fa fa-list"></i> Daftar Investor</a></li>
          </ul>
        </li>
        <li class="<?= $active = ($url['filename'] == "daftar-agen") ? "active" : '' ; ?> treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Agen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="javascript:viod(0)" data-toggle="modal" data-target="#modal-tambah-agen"><i class="fa fa-user-plus"></i> Tambah Agen</a></li>
            <li><a href="daftar-agen.php"><i class="fa fa-list"></i> Daftar Agen</a></li>
          </ul>
        </li>
        <li class="<?= $active = ($url['filename'] == "daftar-kasir") ? "active" : '' ; ?> treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Kasir</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="javascript:viod(0)" data-toggle="modal" data-target="#modal-tambah-kasir"><i class="fa fa-user-plus"></i> Tambah Kasir</a></li>
            <li><a href="daftar-kasir.php"><i class="fa fa-list"></i> Daftar Kasir</a></li>
          </ul>
        </li>
        <li class="<?= $active = ($url['filename'] == "daftar-driver") ? "active" : '' ; ?> treeview">
          <a href="#">
            <i class="fa fa-wheelchair"></i> <span>Driver</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="javascript:viod(0)" data-toggle="modal" data-target="#modal-tambah-driver"><i class="fa fa-user-plus"></i> Tambah Driver</a></li>
            <li class="<?= $active = ($url['filename'] == "daftar-driver") ? "active" : '' ; ?>"><a href="daftar-driver.php"><i class="fa fa-list"></i> Daftar Driver</a></li>
          </ul>
        </li>
        <li class="<?= $active = ($url['filename'] == "daftar-mobil") ? "active" : '' ; ?> treeview">
          <a href="#">
            <i class="fa fa-car"></i> <span>Mobil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="javascript:viod(0)" data-toggle="modal" data-target="#modal-tambah-mobil"><i class="fa fa-plus"></i> Tambah Mobil</a></li>
            <li><a href="daftar-mobil.php"><i class="fa fa-list"></i> Daftar Mobil</a></li>
            <li><a href="atur-driver.php"><i class="fa fa-cog"></i> Atur Driver</a></li>
          </ul>
        </li>
        <li class="<?= $active = ($url['filename'] == "lihat-jadwal") ? "active" : '' ; ?> treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="lihat-jadwal.php?params=telepon-masuk"><i class="fa fa-calendar-check-o"></i> Lihat Jadwal</a></li>
            <li class=""><a href="javascript:viod(0)" data-toggle="modal" data-target="#modal-atur-jadwal"><i class="fa fa-calendar"></i> Atur Jadwal</a></li>
          </ul>
        </li>
        <li class="<?= $active = ($url['filename'] == "daftar-") ? "active" : '' ; ?> treeview">
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
        <li class="<?= $active = ($url['filename'] == "daftar-") ? "active" : '' ; ?> treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="atur-harga.php"><i class="fa fa-money"></i> Harga</a></li>
            <li class=""><a href="atur-harga.php"><i class="fa fa-thumbs-o-up"></i> Layanan</a></li>
            <li class=""><a href="javascript:viod(0)" data-toggle="modal" data-target="#modal-atur-jadwal"><i class="fa fa-calendar"></i> Atur jadwal</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php include 'modal-tambah-agen.php' ?>
  <?php include 'modal-tambah-kasir.php' ?>
  <?php include 'modal-tambah-investor.php' ?>
  <?php include 'modal-tambah-driver.php' ?>
  <?php include 'modal-tambah-mobil.php' ?>
  <?php include 'modal-atur-jadwal.php' ?>
  <?php include 'modal-nonaktifkan.php' ?>
  <?php include 'modal-aktifkan.php' ?>
  <?php include 'modal-tangguhkan.php' ?>
  <?php include 'modal-tambah-pengaturan-harga.php' ?>
  <?php include 'modal-filter-lihat-order.php' ?>