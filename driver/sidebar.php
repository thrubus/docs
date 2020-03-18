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
        <li class="header">BENGKEL</li>
        <li class="active"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class=""><a href="keluhan.php"><i class="fa fa-comment-o"></i> Keluhan</a></li>
        <li class=""><a href="dashboard.php"><i class="fa fa-cogs"></i> Perbaikan</a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<?php include 'modal-ajukan-perbaikan.php' ?>