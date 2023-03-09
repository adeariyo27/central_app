<!--topbar start-->
<header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
    </div>
    <!--logo start-->
    <a href="<?= base_url('admin/index') ?>" class="logo hidden-phone"><img src="<?= base_url('assets/img/gallery/logo_ca.png') ?>" height="25"><span> CAPS TUN</span> PALU</a>
    <!--logo end-->
    <div class=" top-nav ">
        <!--search & user info start-->
        <ul class=" nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder="Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img alt="" class="img-profile" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                    <span class="username"><?= $user['name']; ?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="ac"><a href="<?= base_url('user'); ?>"><i class=" icon-user"></i>Profile</a></li>
                    <li><a href="<?= base_url('admin/setupSatker') ?>"><i class="icon-cog"></i> Settings</a></li>
                    <li><a href="<?= base_url('auth/logout') ?>"><i class="icon-key"></i> Log Out</a>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>
<!--topbar end-->