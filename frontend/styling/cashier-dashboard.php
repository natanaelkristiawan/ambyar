<?php include 'metadata.php'; ?>
<?php include 'cashier-dashboard-main-navigation.php'; ?>
<main class="l-site-content push-main-navigation">

    <div class="col-xs-12 m-b-20 c-message">
        <div class="c-card positive">
            <a href="javascript:void(0)" class="c-link btn-message-close fn-message-close"><i class="white" data-feather="x" width="16" height="16"></i></a>
            <div class="c-card-header p-r-15 p-b-5 p-l-15">
                <h6 class="small white">Berhasil</h6>
            </div>
            <div class="c-card-body p-r-15 p-l-15">
                <p class="white body-2 m-b-15">Pesanan <strong>Nuan#1</strong> berhasil diubah menjadi "Pesanan sedang diproses"</p>
                <a href="#" class="o-button btn-small btn-white"><span class="small-1">Lihat order detail</span></a>
            </div>            
        </div>    
    </div>

    <section class="l-section-fluid l-cashier-dashboard-order-progress">
        <div class="l-section-shrink">

            <ul class="c-nav-tabs fn-nav-tabs">
                <li class="nav-item">
                    <a href="javascript:void(0)" id="tab-menunggu-konfirmasi" class="nav-link">Menunggu konfirmasi<span class="badge">5</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" id="tab-pesanan-diproses" class="nav-link">Pesanan sedang diproses<span class="badge">0</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" id="tab-pesanan-diatar" class="nav-link">Pesanan diantarkan<span class="badge">0</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" id="tab-pesanan-diterima" class="nav-link">Pesanan diterima<span class="badge">0</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" id="tab-pesanan-dibatalkan" class="nav-link">Pesanan dibatalkan<span class="badge">0</span></a>
                </li>
            </ul>

            <div class="c-content-tabs fn-content-tabs cashier-dashboard-order-progress">

                <!-- START TAB MENUNGGU KONFIRMASI -->
                <div id="tab-menunggu-konfirmasi-c" class="tab-panel active">
                    
                    <a href="cashier-order-detail.php" class="panel-link">
                        <div class="c-card">
                            <div class="c-card-header">
                                <div class="l-section-shrink">
                                    <div class="col-xs-6">
                                        <p class="primary medium small-1">Nuan#1</p>
                                    </div>
                                    <div class="col-xs-6 u-text-align-right">
                                        <p class="secondary small-1">2020-05-15 20:03:32</p>
                                    </div>
                                </div>
                            </div>
                            <div class="c-card-body">
                                <div class="l-section-shrink">
                                    <div class="col-xs-10 left">
                                        <p class="primary small-1 p-b-5">From: <strong>Rossy</strong></p>
                                        <p class="secondary small-1">+6281399001835</p>
                                    </div>
                                    <div class="col-xs-2 right">
                                        <i data-feather="chevron-right" width="16" height="16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="cashier-order-detail.php" class="panel-link">
                        <div class="c-card">
                            <div class="c-card-header">
                                <div class="l-section-shrink">
                                    <div class="col-xs-6">
                                        <p class="primary medium small-1">Nuan#2</p>
                                    </div>
                                    <div class="col-xs-6 u-text-align-right">
                                        <p class="secondary small-1">2020-05-15 20:03:32</p>
                                    </div>
                                </div>
                            </div>
                            <div class="c-card-body">
                                <div class="l-section-shrink">
                                    <div class="col-xs-10 left">
                                        <p class="primary small-1 p-b-5">From: <strong>Rossy</strong></p>
                                        <p class="secondary small-1">+6281399001835</p>
                                    </div>
                                    <div class="col-xs-2 right">
                                        <i data-feather="chevron-right" width="16" height="16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="cashier-order-detail.php" class="panel-link">
                        <div class="c-card">
                            <div class="c-card-header">
                                <div class="l-section-shrink">
                                    <div class="col-xs-6">
                                        <p class="primary medium small-1">Nuan#3</p>
                                    </div>
                                    <div class="col-xs-6 u-text-align-right">
                                        <p class="secondary small-1">2020-05-15 20:03:32</p>
                                    </div>
                                </div>
                            </div>
                            <div class="c-card-body">
                                <div class="l-section-shrink">
                                    <div class="col-xs-10 left">
                                        <p class="primary small-1 p-b-5">From: <strong>Rossy</strong></p>
                                        <p class="secondary small-1">+6281399001835</p>
                                    </div>
                                    <div class="col-xs-2 right">
                                        <i data-feather="chevron-right" width="16" height="16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="cashier-order-detail.php" class="panel-link">
                        <div class="c-card">
                            <div class="c-card-header">
                                <div class="l-section-shrink">
                                    <div class="col-xs-6">
                                        <p class="primary medium small-1">Nuan#4</p>
                                    </div>
                                    <div class="col-xs-6 u-text-align-right">
                                        <p class="secondary small-1">2020-05-15 20:03:32</p>
                                    </div>
                                </div>
                            </div>
                            <div class="c-card-body">
                                <div class="l-section-shrink">
                                    <div class="col-xs-10 left">
                                        <p class="primary small-1 p-b-5">From: <strong>Rossy</strong></p>
                                        <p class="secondary small-1">+6281399001835</p>
                                    </div>
                                    <div class="col-xs-2 right">
                                        <i data-feather="chevron-right" width="16" height="16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="cashier-order-detail.php" class="panel-link">
                        <div class="c-card">
                            <div class="c-card-header">
                                <div class="l-section-shrink">
                                    <div class="col-xs-6">
                                        <p class="primary medium small-1">Nuan#5</p>
                                    </div>
                                    <div class="col-xs-6 u-text-align-right">
                                        <p class="secondary small-1">2020-05-15 20:03:32</p>
                                    </div>
                                </div>
                            </div>
                            <div class="c-card-body">
                                <div class="l-section-shrink">
                                    <div class="col-xs-10 left">
                                        <p class="primary small-1 p-b-5">From: <strong>Rossy</strong></p>
                                        <p class="secondary small-1">+6281399001835</p>
                                    </div>
                                    <div class="col-xs-2 right">
                                        <i data-feather="chevron-right" width="16" height="16"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <!-- END TAB MENUNGGU KONFIRMASI -->

                <!-- START TAB PESANAN SEDANG DIPROSES -->
                <div id="tab-pesanan-diproses-c" class="tab-panel">
                    
                    <div class="c-card">
                        <div class="c-card-body hr">
                            <div class="l-section-shrink">
                                <div class="col-xs-12">
                                    <p class="primary small-1 u-text-align-center">Belum ada data transaksi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END TAB PESANAN SEDANG DIPROSES -->

                <!-- START TAB PESANAN DIANTARKAN -->
                <div id="tab-pesanan-diatar-c" class="tab-panel">
                    
                    <div class="c-card">
                        <div class="c-card-body hr">
                            <div class="l-section-shrink">
                                <div class="col-xs-12">
                                    <p class="primary small-1 u-text-align-center">Belum ada data transaksi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END TAB PESANAN DIANTARKAN -->

                <!-- START TAB PESANAN DITERIMA -->
                <div id="tab-pesanan-diterima-c" class="tab-panel">

                    <div class="c-card">
                        <div class="c-card-body hr">
                            <div class="l-section-shrink">
                                <div class="col-xs-12">
                                    <p class="primary small-1 u-text-align-center">Belum ada data transaksi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END TAB PESANAN DITERIMA -->

                <!-- START TAB PESANAN DIBATALKAN -->
                <div id="tab-pesanan-dibatalkan-c" class="tab-panel">

                    <div class="c-card">
                        <div class="c-card-body hr">
                            <div class="l-section-shrink">
                                <div class="col-xs-12">
                                    <p class="primary small-1 u-text-align-center">Belum ada data transaksi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END TAB PESANAN DIBATALKAN -->
            </div>

        </div>
    </section>

    <a href="javascript:void(0)" class="o-button btn-rounded btn-primary btn-back-to-top fn-force-to-top">
        <i data-feather="arrow-up"></i>
    </a>

</main>
<?php include 'modal-search-cashier-dashboard-order.php'; ?>
<?php include 'cashier-dashboard-footer.php'; ?>