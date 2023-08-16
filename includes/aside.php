  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php?demo=yes" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?=$title?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">SaadiDK</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="./index.php?demo=yes" class="nav-link">
                <i class="far fa-circle text-danger nav-icon"></i>
                <p class="year-selected"></p>
                </a>
            </li>
            <span class="tax-filing-sec d-none">
            <span class="text-muted">INCOME TAX</span>
            <li class="nav-item">
              <a href="#!" class="nav-link d-flex align-items-center justify-content-between">
                <span>TAXABLE INCOME</span>
                <p>0</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link d-flex align-items-center justify-content-between">
                <span>TAX CHARGE</span>
                <p>0</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link d-flex align-items-center justify-content-between">
                <span>TAX PAID</span>
                <p>0</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link d-flex align-items-center justify-content-between">
                <span>PAYABLE</span>
                <p>0</p>
              </a>
            </li>
            <span class="text-muted">WEALTH RECONCILIATION</span>
            <li class="nav-item">
              <a href="#!" class="nav-link d-flex align-items-center justify-content-between">
                <span>INCOME</span>
                <p>0</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link d-flex align-items-center justify-content-between">
                <span>TAX PAID</span>
                <p>0</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link d-flex align-items-center justify-content-between">
                <span>CLOSING WEALTH</span>
                <p>0</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link d-flex align-items-center justify-content-between">
                <span>DIFFERENCE</span>
                <p>0</p>
              </a>
            </li>
            </span>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
