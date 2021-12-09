  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/dashboard_admin') ?>">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/data_ikan') ?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Data Ikan</span>
            </a>
          </li> -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Data</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/data_ikan') ?>"><span class="menu-title">Data Ikan</span></a>
            <li class="nav-item"><a class="nav-link" href="#"><span class="menu-title">Data Penjualan</span></a>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
  <!-- partial -->