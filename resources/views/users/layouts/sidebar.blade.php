<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
     <!--  <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('lte/dist/img/noprofil.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <p>Nama User</p>
          <small>username</small>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> -->
      <!-- /.search form -->



      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="header"></li>

        <li class="{{ request()->is('users/dashboard') ? 'active' : '' }}">
          <a href="/users/dashboard"><i class="fa fa-home"></i><span>Dashboard</span></a>
        </li>

        <!-- <li class="{{ request()->is('users/data-penduduk') ? 'active' : '' }}">
          <a href="/users/data-penduduk"><i class="fa fa-home"></i><span>Data Penduduk</span></a>
        </li> -->

        <li class="{{ request()->is('users/kriteria-alternatif') ? 'active' : '' }}">
          <a href="/users/kriteria-alternatif"><i class="fa fa-file"></i><span>Kriteria & Alternatif</span></a>
        </li>

        <li class="treeview{{ request()->is('users/analisa-ahp/ahp-kriteria') ? ' active menu-open' : '' }}{{ request()->is('users/analisa-ahp/ahp-alternatif') ? ' active menu-open' : '' }}{{ request()->is('users/analisa-ahp/ahp-perangkingan') ? ' active menu-open' : '' }}" style="height: auto;">
          <a href="#">
            <i class="fa fa-database"></i> <span>Analisa AHP</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="{{ request()->is('users/analisa-ahp/ahp-kriteria') ? 'active' : '' }}">
              <a href="/users/analisa-ahp/ahp-kriteria"><i class="fa fa-file"></i><span>Analisa Kriteria</span></a>
            </li>

            <li class="{{ request()->is('users/analisa-ahp/ahp-alternatif') ? 'active' : '' }}">
              <a href="/users/analisa-ahp/ahp-alternatif"><i class="fa fa-file"></i><span>Analisa Alternatif</span></a>
            </li>

            <li class="{{ request()->is('users/analisa-ahp/ahp-perangkingan') ? 'active' : '' }}">
              <a href="/users/analisa-ahp/ahp-perangkingan"><i class="fa fa-file"></i><span>Perangkingan AHP</span></a>
            </li>
          </ul>

        </li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>