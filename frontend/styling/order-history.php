<?php include 'metadata.php'; ?>
<main class="l-site-content">

    <div class="main-navigation">
        <div class="l-section-fluid bg">
            <div class="l-section-shrink middle-xxs between-xxs">

                <div class="col-xxs-6 panel-left">
                    <a href="index.php" class="c-link logo">
                        <img src="{{ setting('store.store_logo') }}"
                            srcset="{{ setting('store.store_logo_2x') }} 2x, {{ setting('store.store_logo_3x') }} 3x"
                            alt="Back to homepage" />
                    </a>
                </div>

                <div class="col-xxs-6 panel-right">
                    <a href="index.php" class="c-link o-button btn-home m-l-auto">
                        <i data-feather="home"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <section class="l-section l-order-history push-main-navigation">

        <div class="l-section-shrink">

            <div class="col-xxs-12 panel-header">
                <h6 class="heading small primary p-b-10">Order detail</h6>
                <div class="l-section-shrink between-xxs middle-xxs">
                    <div class="col-xxs-12 p-t-10 p-b-10">
                        <span class="small-2 medium u-display-block p-b-5">Status</span>
                        <span class="small-1 medium u-display-block positive p-b-10">Order complete</span>
                        <hr class="devider" />
                    </div>
                    <div class="col-xxs-4">
                        <span class="small-1">Order date</span>
                    </div>
                    <div class="col-xxs-8 u-text-align-right">
                        <span class="small-1 medium">9 May 2020 | 10:28 WITA</span>
                    </div>
                    <div class="col-xxs-12 p-t-10">
                        <hr class="devider" />
                        <span class="small-1 u-display-block p-t-10 p-b-10">INV/01/20200905</span>
                        <hr class="devider" />
                    </div>
                </div>
            </div>

            <div class="col-xxs-12 panel-product p-t-30 p-b-30">
                <h6 class="heading small primary p-b-20">Ordered Item</h6>

                <div class="l-section-shrink">

                    <!-- PRODUCT ITEM -->
                    <div class="c-product-list col-xxs-12" product-id="tuna-steak">
                        <div class="l-section-shrink">
                            <div class="left">
                                <div class="image">
                                    <img src="img/uploads/demo/product-list/thumbnail--tuna-steak.jpg" srcset="img/uploads/demo/product-list/thumbnail--tuna-steak@2x.jpg 2x,
                                        img/uploads/demo/product-list/thumbnail--tuna-steak@3x.jpg 3x" />
                                </div>
                            </div>
                            <div class="right">
                                <div class="top p-b-10">
                                    <label class="title p-b-5">Tuna Steak</label>
                                    <p class="small-2">Tuna steaks with orange juice, soy sauce, olive oil, lemon juice.
                                    </p>
                                </div>
                                <div class="bottom">
                                    <input type="hidden" readonly class="fn-sub-total-value" />
                                    <span class="price small-2 fn-price">55000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRODUCT ITEM -->

                    <!-- PRODUCT ITEM -->
                    <div class="c-product-list col-xxs-12" product-id="beef-spaghetti">
                        <div class="l-section-shrink">
                            <div class="left">
                                <div class="image">
                                    <img src="img/uploads/demo/product-list/thumbnail--tuna-steak.jpg" srcset="img/uploads/demo/product-list/thumbnail--tuna-steak@2x.jpg 2x,
                                        img/uploads/demo/product-list/thumbnail--tuna-steak@3x.jpg 3x" />
                                </div>
                            </div>
                            <div class="right">
                                <div class="top p-b-10">
                                    <label class="title p-b-5">Spaghetti Sauce with Ground Beef</label>
                                    <p class="small-2">Spaghetti ground beef, tomato sauce, tomato paste, green bell
                                        pepper.</p>
                                </div>
                                <div class="bottom">
                                    <input type="hidden" readonly class="fn-sub-total-value" />
                                    <span class="price small-2 fn-price">30000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRODUCT ITEM -->

                    <!-- PRODUCT ITEM -->
                    <div class="c-product-list col-xxs-12" product-id="club-sandwich">
                        <div class="l-section-shrink">
                            <div class="left">
                                <div class="image">
                                    <img src="img/uploads/demo/product-list/thumbnail--tuna-steak.jpg" srcset="img/uploads/demo/product-list/thumbnail--tuna-steak@2x.jpg 2x,
                                        img/uploads/demo/product-list/thumbnail--tuna-steak@3x.jpg 3x" />
                                </div>
                            </div>
                            <div class="right">
                                <div class="top p-b-10">
                                    <label class="title p-b-5">Club Sandwich</label>
                                    <p class="small-2">Cheddar cheese, sliced ham, tomato, lettuce, mayonnaise.</p>
                                </div>
                                <div class="bottom">
                                    <input type="hidden" readonly class="fn-sub-total-value" />
                                    <span class="price small-2 fn-price">22000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRODUCT ITEM -->

                </div>
            </div>

            <div class="col-xxs-12 panel-order-detail">
                <div class="l-section-shrink">

                    <div class="c-end-screen-payment-detail col-xxs-12 p-t-20 p-b-20">
                        <h6 class="heading small secondary p-b-20">Delivery details</h6>
                        <div class="panel-delivery-detail">
                            <div class="figure">
                                <div class="bounds">
                                    <img class="svg store-location" src="img/uploads/payment-detail/figure--store-location.svg"/>
                                </div>
                            </div>
                            <div class="label">
                                <span class="small-1 medium primary p-b-5">Store Location</span>
                                <span class="small-2 secondry">FoodPrint Dewi Sri</span>
                            </div>
                        </div>
                        <div class="panel-delivery-detail">
                            <div class="figure">
                                <div class="bounds">
                                    <img class="svg delivery-location" src="img/uploads/payment-detail/figure--delivery-location.svg"/>
                                </div>
                            </div>
                            <div class="label">
                                <span class="small-1 medium primary p-b-5">Delivery Location</span>
                                <span class="small-2 secondry">Jl. Bhineka Jati Jaya No. 6</span>
                            </div>
                            <div class="figure-step"><span></span><span></span><span></span></div>
                        </div>                
                    </div>
        
                    <hr class="dashed"/>
        
                    <div class="c-end-screen-payment-detail col-xxs-12 p-t-20 p-b-20">
                        <h6 class="heading small secondary p-b-20">Recipient's name</h6>
                        <div class="panel-delivery-detail">
                            <div class="c-payment-detail-list">
                                <div class="l-section-shrink">
                                    <div class="col-xxs-6">
                                        <span class="small-2 medium secondary">Lisa Jacoabs</span>
                                    </div>
                                    <div class="col-xxs-6 u-text-align-right">
                                        <span class="small-2 medium secondary">+62 81234567890</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <hr/>
        
                    <div class="c-end-screen-payment-detail col-xxs-12 p-t-20">
                        <h6 class="heading small secondary p-b-20">Order items</h6>
                        <div class="panel-delivery-detail">
                            <div class="c-payment-detail-list group">
                                <ul>
                                    <li class="item">
                                        <span class="small-2 medium secondary">Spaghetti Sauce with Ground Beef</span>
                                        <span class="small-2 medium secondary u-text-align-right">1</span>
                                    </li>
                                    <li class="item">
                                        <span class="small-2 medium secondary">Club Sandwich</span>
                                        <span class="small-2 medium secondary u-text-align-right">1</span>
                                    </li>
                                    <li class="item">
                                        <span class="small-2 medium secondary">Orange Juice</span>
                                        <span class="small-2 medium secondary u-text-align-right">1</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
        
                    <div class="c-end-screen-payment-detail col-xxs-12 p-t-20">
                        <h6 class="heading small secondary p-b-20">Payment details</h6>
                        <div class="panel-delivery-detail">
                            <div class="c-payment-detail-list group">
                                <ul>
                                    <li class="item">
                                        <span class="small-2 medium secondary">Price</span>
                                        <span class="small-2 medium secondary u-text-align-right fn-price">90000</span>
                                    </li>
                                    <li class="item">
                                        <span class="small-2 medium secondary">Convenience fee</span>
                                        <span class="small-2 medium secondary u-text-align-right fn-price">free</span>
                                    </li>
                                    <li class="item">
                                        <span class="small-2 medium secondary">Delivery fee</span>
                                        <span class="small-2 medium secondary u-text-align-right fn-price">5000</span>
                                    </li>
                                    <li class="item">
                                        <span class="small-2 medium secondary">Total</span>
                                        <span class="small-2 medium secondary u-text-align-right fn-price">95000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
        
                    <div class="c-end-screen-payment-detail col-xxs-12 p-t-20">
                        <h6 class="heading small secondary p-b-20">Payment Method</h6>
                        <div class="panel-delivery-detail">
                            <div class="c-payment-detail-list group">
                                <ul>
                                    <li class="item">
                                        <span class="small-2 medium secondary">Gopay ( Manual transfer )</span>
                                        <span class="small-2 medium secondary u-text-align-right fn-price">95000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="c-card c-fixed-card-bottom p-t-15 p-b-15 fn-btn-helper">
                        <div class="l-section-shrink">
                            <div class="col-xxs-12">
                                <a href="javascript:void(0)" class="o-button btn-primary btn-help">
                                    Contact us for more information
                                </a>
                            </div>
                        </div>
                    </div>        

                </div>
            </div>

    </section>
</main>
<?php include 'footer.php'; ?>
