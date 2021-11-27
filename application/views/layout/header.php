<header class="header  header_fixed header_offset">
    <div class="header__container">
        <div class="header__wrapper container-fluid">
            <div class="header__inner"><a href="<?php echo site_url('home'); ?>" class="logo header__logo">Aura Putra Wijaya</a><button type="button" class="header__menu-button"><span class="header__menu-button-inner"></span></button></div>
        </div>
        <div class="header-fixed">
            <div class="header-fixed__bottom container">
                <ul class="top-menu header-fixed__menu">
                    <li class="top-menu__menu-item">
                        <div class="dropdown">
                            <a href="<?php echo site_url('home'); ?>" class="dropdown__trigger top-menu__menu-link">Beranda</a>
                        </div>
                    </li>
                    <li class="top-menu__menu-item">
                        <div class="dropdown">
                            <a href="<?php echo site_url('home/service'); ?>" class="dropdown__trigger top-menu__menu-link">Services</a>
                        </div>
                    </li>
                    <li class="top-menu__menu-item">
                        <div class="dropdown">
                            <a href="<?php echo site_url('blog'); ?>" class="dropdown__trigger top-menu__menu-link">Blog</a>
                        </div>
                    </li>
                    <li class="top-menu__menu-item">
                        <div class="dropdown">
                            <a href="<?php echo site_url('project'); ?>" class="dropdown__trigger top-menu__menu-link">Projects</a>
                        </div>
                    </li>
                    <li class="top-menu__menu-item">
                        <div class="dropdown">
                            <a href="<?php echo site_url('home/about'); ?>" class="dropdown__trigger top-menu__menu-link">About</a>
                        </div>
                    </li>
                    <li class="top-menu__menu-item">
                        <div class="dropdown">
                            <a href="<?php echo site_url('home/contact'); ?>" class="dropdown__trigger top-menu__menu-link">Contact Us</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header__overlay"></div>
    <div class="menu-panel header__menu">
        <div class="menu-panel__inner">
            <button type="button" class="header__menu-button header__menu-button_fixed"><span class="header__menu-button-inner"></span></button>
            <div class="menu-panel__menu">
                <div class="menu-panel__menu-item">
                    <a href="<?php echo site_url('home'); ?>" data-toggle="collapse" class="menu-panel__menu-link menu-panel__menu-link menu-panel__menu-link_active">Beranda</a>
                </div>
                <div class="menu-panel__menu-item">
                    <a href="<?php echo site_url('home/service'); ?>" data-toggle="collapse" class="menu-panel__menu-link collapsed">Services</a>
                </div>
                <div class="menu-panel__menu-item">
                    <a href="<?php echo site_url('blog'); ?>" data-toggle="collapse" class="menu-panel__menu-link collapsed collapsed">Blog</a>
                </div>
                <div class="menu-panel__menu-item">
                    <a href="<?php echo site_url('project'); ?>" data-toggle="collapse" class="menu-panel__menu-link collapsed collapsed">Projects</a>
                </div>
                <div class="menu-panel__menu-item">
                    <a href="<?php echo site_url('home/about'); ?>" data-toggle="collapse" class="menu-panel__menu-link collapsed collapsed">About</a>
                </div>
                <div class="menu-panel__menu-item">
                    <a href="<?php echo site_url('home/contact'); ?>" data-toggle="collapse" class="menu-panel__menu-link collapsed collapsed">Contact Us</a>
                </div>
            </div>
            <div class="menu-panel__footer">
                <div class="socials menu-panel__socials">
                    <a href="#" class="socials__social icofont-twitter">
                        <div class="visually-hidden">twitter</div>
                    </a>
                    <a href="#" class="socials__social icofont-facebook">
                        <div class="visually-hidden">facebook</div>
                    </a>
                    <a href="#" class="socials__social icofont-youtube">
                        <div class="visually-hidden">youtube</div>
                    </a>
                    <a href="#" class="socials__social icofont-instagram">
                        <div class="visually-hidden">instagram</div>
                    </a>
                </div>
                <div class="menu-panel__bottom">
                    <div class="menu-panel__author">Develop by <a href="#">GOX Team</a></div>
                </div>
            </div>
        </div>
    </div>
</header>