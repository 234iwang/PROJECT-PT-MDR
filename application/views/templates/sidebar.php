<body class="fixed-navbar">

    <div class="page-wrapper">
        <!-- START HEADER-->

        <header class="header">
            <div class="page-brand">
                <a class="link" href="<?= base_url('assets'); ?>index.html">
                    <span class="brand">PT MDR
                        <span class="brand-tip">(admin)</span>
                    </span>
                    <span class="brand-mini"></span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Search here...">
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-inbox">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i>
                            <span class="badge badge-primary envelope-badge">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>1 New</strong> Messages</span>
                                    <a class="pull-right" href="<?= base_url('assets'); ?>mailbox.html">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="<?= base_url('assets'); ?>./img/users/u1.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"> </div>silfi<small class="text-muted float-right">Just now</small>
                                                <div class="font-13">Your proposal interested me.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="<?= base_url('assets'); ?>./img/users/u2.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>ilmia<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="<?= base_url('assets'); ?>./img/users/u3.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>iwang<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="<?= base_url('assets'); ?>./img/users/u4.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>rahma<small class="text-muted float-right">3 hrs</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>1 New</strong> Notifications</span>
                                    <a class="pull-right" href="<?= base_url('assets'); ?>javascript:;">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="<?= base_url('assets'); ?>./img/admin-avatar.png" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?= base_url('assets'); ?>profile.html"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="<?= base_url('assets'); ?>profile.html"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="<?= base_url('assets'); ?>javascript:;"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="<?= base_url('assets'); ?>login.html"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="<?= base_url('assets'); ?>./img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">Admin</div><small>Administrator</small>
                    </div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="<?= base_url('dashboard'); ?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="<?= base_url('peminjaman'); ?>"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Peminjaman</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('assets'); ?>colors.html">Request</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>typography.html">Replace</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>panels.html">Pinjam</a>
                            </li>
                            <!-- <li>
                                <a href="<?= base_url('assets'); ?>buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>alerts_tooltips.html">Alerts &amp; Tooltips</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>badges_progress.html">Badges &amp; Progress</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>lists.html">List</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>cards.html">Card</a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('Barang'); ?>"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Barang</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('assets'); ?>form_basic.html">Basic Forms</a>
                            </li>
                            <a href="<?= base_url('assets'); ?>form_validation.html">Form Validation</a>
                    </li>
                    <li>
                        <a href="<?= base_url('assets'); ?>text_editors.html">Text Editors</a>
                    </li>
                </ul>
                </li>
                <li>
                    <a href="<?= base_url('tabel'); ?>"><i class="sidebar-item-icon fa fa-table"></i>
                        <span class="nav-label">Tables</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="<?= base_url('assets'); ?>table_basic.html">Basic Tables</a>
                        </li>
                        <li>
                            <a href="<?= base_url('assets'); ?>datatables.html">Datatables</a>
                        </li>
                    </ul>
                </li>
                <!-- <li>
                        <a href="<?= base_url('assets'); ?>javascript:;"><i class="sidebar-item-icon fa fa-bar-chart"></i>
                            <span class="nav-label">Charts</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('assets'); ?>charts_flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>charts_morris.html">Morris Charts</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>chartjs.html">Chart.js</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>charts_sparkline.html">Sparkline Charts</a>
                            </li>
                        </ul>
                    </li> -->
                <!-- <li>
                        <a href="<?= base_url('assets'); ?>javascript:;"><i class="sidebar-item-icon fa fa-map"></i>
                            <span class="nav-label">Maps</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('assets'); ?>maps_vector.html">Vector maps</a>
                            </li>
                        </ul>
                    </li> -->

                <!-- <li class="heading">PAGES</li>
                    <li>
                        <a href="<?= base_url('assets'); ?>javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                            <span class="nav-label">Mailbox</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('assets'); ?>mailbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>mail_view.html">Mail view</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>mail_compose.html">Compose mail</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('assets'); ?>calendar.html"><i class="sidebar-item-icon fa fa-calendar"></i>
                            <span class="nav-label">Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('assets'); ?>javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Pages</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('assets'); ?>invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>login.html">Login</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>register.html">Register</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>lockscreen.html">Lockscreen</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>forgot_password.html">Forgot password</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>error_404.html">404 error</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>error_500.html">500 error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('assets'); ?>javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                            <span class="nav-label">Menu Levels</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('assets'); ?>javascript:;">Level 2</a>
                            </li>
                            <li>
                                <a href="<?= base_url('assets'); ?>javascript:;">
                                    <span class="nav-label">Level 2</span><i class="fa fa-angle-left arrow"></i></a>
                                <ul class="nav-3-level collapse">
                                    <li>
                                        <a href="<?= base_url('assets'); ?>javascript:;">Level 3</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('assets'); ?>javascript:;">Level 3</a>
                                    </li> -->
                </ul>
                </li>
                </ul>
                </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">