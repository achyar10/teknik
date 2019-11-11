<div class="left-side-menu">
    <div class="slimscroll-menu">
        <div class="user-box text-center">
            <img src="<?php echo media_url() ?>images/default.jpeg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-lg">
            <div class="dropdown">
                <a href="#" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"><?php echo ucfirst($this->fullname) ?></a>
            </div>
        </div>

        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="<?php echo site_url('home') ?>">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Beranda </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('item') ?>">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Katalog Produk </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('category') ?>">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Kategori Produk </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('post') ?>">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Redaksi </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('client') ?>">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Partner </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('gallery') ?>">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Kegiatan </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('user') ?>">
                        <i class="mdi mdi-account-multiple"></i>
                        <span> Pengguna </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('setting') ?>">
                        <i class="mdi mdi-settings"></i>
                        <span> Pengaturan </span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>