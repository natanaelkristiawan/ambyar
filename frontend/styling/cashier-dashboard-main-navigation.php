<div class="main-navigation">
    <div class="l-section-fluid bg">
        <div class="l-section-shrink middle-xxs between-xxs">

            <div class="col-xxs-6 panel-left">
                <a href="index.php" class="c-link logo">
                    <img 
                        src="img/uploads/demo/logo--nuan.png" 
                        srcset="img/uploads/demo/logo--nuan@2x.png 2x, img/uploads/demo/logo--nuan@3x.png 3x" 
                        alt="Back to homepage" 
                    />
                </a>
            </div>

            <div class="col-xxs-6 panel-right">
                <ul class="navbar">
                    <li class="nav-item">
                        <!-- add class is-new if store have new notification list and remove class is-new if no order on status "menunggu konfirmasi" -->
                        <a href="javascript:void(0)" class="c-link btn-bell fn-toggle-m-notification is-new">
                            <i data-feather="bell"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="c-link btn-search fn-toggle-m-search">
                            <i data-feather="search"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="cashier-dashboard-login.php" class="c-link btn-log-out">
                            <i data-feather="log-out"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="fn-search-bar col-xxs-12 panel-search">
                <a href="javascript:void(0)" class="c-link btn-search push-left fn-toggle-close-m-search">
                    <i data-feather="arrow-left"></i>
                </a>
                <div class="c-search-bar">
                    <input type="search" placeholder="Search order ID"/>
                </div>
            </div>

        </div>
    </div>

    <!-- Dropdown -->
    <div class="fn-m-notification-dropdown notification-dropdown">
        <p class="primary medium small-1">Order Notifikasi</p>

        <!-- loop item -->
        <a class="dropdown-item" href="#">
            <div class="thumbnail">
                <i data-feather="info" width="18" height="18"></i>
            </div>
            <div class="content">
                <h6 class="heading xsmall"><span class="accent">New order</span> - NUAN#1</h6>
                <p class="secondary small-1">From: <strong>Rossy</strong></p>
                <p class="secondary small-2">at: 19 May 2020, 10:00 AM</p>
            </div>
        </a>
        <!-- loop item -->

        <!-- loop item -->
        <a class="dropdown-item" href="#">
            <div class="thumbnail">
                <i data-feather="info" width="18" height="18"></i>
            </div>
            <div class="content">
                <h6 class="heading xsmall"><span class="accent">New order</span> - NUAN#2</h6>
                <p class="secondary small-1">From: <strong>Rossy</strong></p>
                <p class="secondary small-2">at: 19 May 2020, 10:00 AM</p>
            </div>
        </a>
        <!-- loop item -->

        <!-- loop item -->
        <a class="dropdown-item" href="#">
            <div class="thumbnail">
                <i data-feather="info" width="18" height="18"></i>
            </div>
            <div class="content">
                <h6 class="heading xsmall"><span class="accent">New order</span> - NUAN#3</h6>
                <p class="secondary small-1">From: <strong>Rossy</strong></p>
                <p class="secondary small-2">at: 19 May 2020, 10:00 AM</p>
            </div>
        </a>
        <!-- loop item -->

    </div>
    <div class="sandbox"></div>
    <!-- end Dropdown -->

</div> <!-- .main-navigation -->