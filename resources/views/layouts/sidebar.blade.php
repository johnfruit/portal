  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
       <!--  <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        <!-- </div> --> 
      </div>
      <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="/home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         <!--  <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul> -->
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Websites</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('web.index') }}">
            <i class="fa fa-circle-o text-aqua">
            </i>Web List</a></li>
            <li><a href="{{ route('web.create') }}"><i class="fa fa-circle-o text-aqua"></i>Web Create</a></li>
            <!-- <li><a href="{{ route('web.create') }}"><i class="fa fa-circle-o text-aqua"></i>Web Create</a></li> -->
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Telco</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('telco.index') }}"><i class="fa fa-circle-o text-aqua"></i>Telco List</a></li>
            <li><a href="{{ route('telco.create') }}"><i class="fa fa-circle-o text-aqua"></i>Telco Create</a></li>
          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>RFC</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('rfc.index') }}"><i class="fa fa-circle-o text-aqua"></i>RFC List</a></li>
            <li><a href="{{ route('rfc.create') }}"><i class="fa fa-circle-o text-aqua"></i>RFC Create</a></li>
          </ul>
        </li>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Servers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('rfc.index') }}"><i class="fa fa-circle-o text-aqua"></i>Server List</a></li>
            <li><a href="{{ route('rfc.create') }}"><i class="fa fa-circle-o text-aqua"></i>Server Create</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>