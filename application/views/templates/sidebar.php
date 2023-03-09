<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <!-- Query Menu -->
            <?php
            $role_id = $this->session->userdata('role_id');
            $qMenu = "SELECT `user_menu`.`id`, `menu`, `icon` 
                FROM `user_menu` JOIN `user_access_menu`
                ON `user_menu`.`id` = `user_access_menu`.`menu_id` 
                WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC
                ";
            $menu = $this->db->query($qMenu)->result_array();
            ?>

            <!-- Looping Menu -->
            <?php foreach ($menu as $m) : ?>
                <li class="sub-menu">
                    <a class="<?php if ($active_menu == $m['menu']) {
                                    echo "active";
                                } ?>" href="javascript:;">
                        <i class="<?= $m['icon']; ?>"></i>
                        <span><?= $m['menu']; ?></span>
                    </a>

                    <!-- Submenu sesuai dengan menu -->
                    <?php
                    $menu_id = $m['id'];
                    $qSubMenu = "SELECT * FROM `user_sub_menu` WHERE `menu_id` = $menu_id AND `is_active` = 1";
                    $subMenu = $this->db->query($qSubMenu)->result_array();
                    ?>

                    <?php foreach ($subMenu as $sm) : ?>
                        <ul class="sub">
                            <li class="<?php if ($link == $sm['url']) {
                                            echo "active";
                                        } ?>"><a href="<?= base_url($sm['url']) ?>"><?= $sm['title']; ?></a></li>
                        </ul>
                    <?php endforeach;  ?>
                </li>
            <?php endforeach; ?>

            <!-- <li class="sub-menu">
            <a href="javascript:;">
                <i class="icon-legal"></i>
                <span>Panmud Hukum</span>
            </a>
            <ul class="sub">
                <li><a href="boxed_page.html">Register Surat Kuasa</a></li>
            </ul>
        </li> -->

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->