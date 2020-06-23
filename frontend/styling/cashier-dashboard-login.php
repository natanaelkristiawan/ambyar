<?php include 'metadata.php'; ?>
<main class="l-site-content">

    <section class="l-form-login">
        <div class="d-overlay">
            <div class="d-absolute">
                <div class="d-table">
                    <div class="d-table-cell">

                        <div class="l-section-fluid">
                            <div class="l-section-shrink">
                                            
                                <div class="col-xs-12 col-sm-6 col-lg-4 col-wd-3 m-r-auto m-l-auto">
                                    <div class="c-card">
                                        <div class="auth-form">
                
                                            <div class="form-header">
                                                <div class="brand-logo">
                                                    <img src="img/uploads/demo/logo--nuan.png" 
                                                        srcset="img/uploads/demo/logo--nuan@2x.png 2x, img/uploads/demo/logo--nuan@3x.png 3x" 
                                                        alt="NUAN Restaurant Login"
                                                    />
                                                </div>
                                                <h5 class="heading primary">Hello! let's get started</h5>
                                                <h6 class="subheading secondary small">Sign in to continue.</h6>
                                            </div>
                
                                            <div class="form-body">
                                                <form class="c-cashier-form-login">

                                                    <!-- error validation message -->
                                                    <!-- note: replace class u-hidden to u-display-block to show label error -->
                                                    <label class="negative small-1 m-b-10 u-hidden" id="user-id-error" for="c-order-id">Please enter at least 2 characters.</label>
                                                    <!-- end error validation message -->
                                                    <div class="c-input-control-panel">
                                                        <input id="c-order-id" class="c-input input-big" type="tel" placeholder="User ID" />
                                                    </div>

                                                    <!-- error validation message -->
                                                    <!-- note: replace class u-hidden to u-display-block to show label error -->
                                                    <label class="negative small-1 m-b-10 u-hidden" id="password-error" for="c-user-password">Please enter at least 2 characters.</label>
                                                    <!-- end error validation message -->
                                                    <div class="c-input-control-panel with-icon icon-right">
                                                        <input id="c-user-password" class="c-input input-big" type="password" placeholder="Password" />
                                                        <a href="javascript:void(0)" class="btn-eye fn-toggle-eye off">
                                                            <i data-feather="eye-off" width="16" height="16"></i>
                                                        </a>
                                                    </div>
                        
                                                    <div class="btn-action-wrapper">
                                                        <button class="o-button btn-primary">Sign in</button>
                                                    </div>

                                                </form>
                                            </div>
                
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include 'cashier-dashboard-footer.php'; ?>