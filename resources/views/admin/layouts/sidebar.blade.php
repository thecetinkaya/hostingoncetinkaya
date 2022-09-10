<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin/dashboard')}}" class="brand-link">
        <img src="/assets/img/burak2.png" alt="AdminLTE Logo" class="col-12 p-2 rounded-circle ">
        
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{url('admin/dashboard')}}" class="nav-link {{(request()->is('admin/dashboard')) ? 'active' : ''}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item {{(request()->is('admin/icerikyonetimi**')) ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{(request()->is('admin/icerikyonetimi**')) ? 'active' : ''}}">
                    <i class="nav-icon fas fa-briefcase"></i>
                    <p>
                        Content
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{url('admin/icerikyonetimi/becerilerim')}}" class="nav-link {{(request()->is('admin/icerikyonetimi/becerilerim**')) ? 'active' : ''}}">
                            <i class=" 	fa fa-desktop nav-icon"></i>
                            <p>Skills</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/icerikyonetimi/portfolyom')}}" class="nav-link {{(request()->is('admin/icerikyonetimi/portfolyom**')) ? 'active' : ''}}">
                            <i class="fa fa-hashtag nav-icon"></i>
                            <p>Portfolios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/icerikyonetimi/egitimim')}}" class="nav-link {{(request()->is('admin/icerikyonetimi/egitimim**')) ? 'active' : ''}}">
                            <i class="fa fa-book nav-icon"></i>
                            <p>Educations</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/icerikyonetimi/deneyimim')}}" class="nav-link {{(request()->is('admin/icerikyonetimi/deneyimim**')) ? 'active' : ''}}">
                            <i class=" 	fa fa-code nav-icon"></i>
                            <p>Experiences</p>
                        </a>
                    </li>
                    
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/mesajlar')}}" class="nav-link {{(request()->is('admin/mesajlar**')) ? 'active' : ''}}">
                    <i class="fa fa-comments nav-icon"></i>
                    <p>Messages</p>
                </a>
            </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
