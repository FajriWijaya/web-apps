<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa-brands fa-optin-monster"></i>
                </div>
                <div class="sidebar-brand-text mx-3">FD Apps</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

    
            
            <?php if(in_groups('admin')):?>
            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Heading -->
            <div class="sidebar-heading">
                User Manegement
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('admin')?>">
                <i class="fa-solid fa-users"></i>
                    <span>Manage Users</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('user')?>">
                    <i class="fa-solid fa-user-pen"></i>
                    <span>User Edit</span></a>
            </li>

            <?php endif;?>
        
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>