<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Manajemen Produk</div>
                    <a class="nav-link" href="<?php echo site_url('dashboard/view_data'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Data Produk
                    </a>
                    <a class="nav-link" href="<?php echo site_url('dashboard/add_product'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                        Tambah Produk
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo base_url('assets/layout-static.html'); ?>">Static Navigation</a>
                            <a class="nav-link" href="<?php echo base_url('assets/layout-sidenav-light.html'); ?>">Light Sidenav</a>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="<?php echo base_url('assets/charts.html'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="<?php echo base_url('assets/tables.html'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Toko Kuker TI
            </div>
        </nav>
    </div>
