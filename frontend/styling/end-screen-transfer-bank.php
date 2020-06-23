<?php include 'metadata.php'; ?>
<main class="l-site-content">

    <section class="l-section l-end-screen">

        <div class="l-section-shrink l-payment-information">

            <section class="c-end-screen-heading col-xxs-12 u-text-align-center p-t-30 p-r-30 p-l-30">
                <h4 class="heading primary p-b-20">Thank You</h6>
                <p class="small-1 secondary p-b-5">Hi there, thank you for your order of</p>
                <p class="small-1 secondary p-b-20">IDR&nbsp;<span class="fn-price">95240</span>&nbsp;<span>(Order #1141)</span>.</p>
                <p class="small-1 secondary">Please make payment immediately, we will contact you as soon as possible to confirm your order</p>
            </section>

            <section class="c-end-screen-time-countdown col-xxs-12 u-text-align-center p-t-20 p-b-20">
                <span class="small-2 warning">Remaining payment time</span>
                <div class="fn-countdown c-countdown"></div>
            </section>

            <hr/>

            <section class="c-end-screen-payment-method col-xxs-12 p-t-20 p-b-20">
                <h6 class="heading primary p-b-20">Amount to be paid</h6>
                <div class="l-section-shrink between-xxs middle-xxs">
                    <div class="panel-left col-xxs-7">
                        <h6 class="heading small negative">IDR <span class="fn-price" id="amount-to-paid">95240</span></h6>
                    </div>
                    <div class="panel-right col-xxs-5 u-text-align-right">
                        <a href="javascript:void(0)" class="o-button btn-small btn-warning fn-copy-text" data-clipboard-text="95240">
                            <i data-feather="copy" width="16" height="16"></i>
                            <span class="small-2">Copy amount</span>
                        </a>
                    </div>
                </div>                    
            </section>

            <hr class="dashed"/>

            <section class="c-end-screen-payment-method col-xxs-12 p-t-20 p-b-20">
                <div class="l-section-shrink between-xxs middle-xxs">
                    <div class="panel-note col-xxs-12 p-b-20">
                        <div class="c-alert alert-warning">
                            <p class="small-2 medium">Please transfers right up to the last <strong>3 digits</strong>, the difference in the amount of payment will hamper the verification process</p>
                        </div>
                    </div>
                    <div class="panel-left col-xxs-4">
                        <img src="img/uploads/thumbnails/thumbnail--bank-bca.png" 
                                srcset="img/uploads/thumbnails/thumbnail--bank-bca@2x.png 2x, 
                                img/uploads/thumbnails/thumbnail--bank-bca@3x.png 3x" 
                                class="qr-code" 
                        />
                    </div>
                    <div class="panel-right col-xxs-7 u-text-align-right">
                        <h6 class="heading small primary">123 177 3434</h6>
                        <p class="secondary medium small-2 p-b-10">PT. FoodPrint Maju Indonesia</p>
                        <a href="javascript:void(0)" class="o-button btn-small btn-warning fn-copy-text" data-clipboard-text="1231773434">
                            <i data-feather="copy" width="16" height="16"></i>
                            <span class="small-2">Copy account number</span>
                        </a>
                    </div>
                    <div class="panel-note col-xxs-12 p-t-30 u-text-align-center">
                        <p class="small-2 medium">Transfers are not recommended via LLG / Clearing / SKBNI</p>
                    </div>
                </div>
            </section>
            
            <hr class="dashed"/>

            <div class="c-end-screen-payment-method col-xxs-12 p-t-20 p-b-20">
                <div class="l-section-shrink between-xxs middle-xxs">
                    <div class="col-xxs-12">
                        <p class="small-2 secondary u-text-align-center">For the security of your transaction, be sure not to inform the proof and payment data to anyone except FoodPrint</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="l-section-shrink l-payment-detail">

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
                                <span class="small-2 medium accent o-note">Note: note product disini ya :)</span>
                            </li>
                            <li class="item">
                                <span class="small-2 medium secondary">Club Sandwich</span>
                                <span class="small-2 medium secondary u-text-align-right">1</span>
                                <span class="small-2 medium accent o-note">Note: note product disini ya :)</span>
                            </li>
                            <li class="item">
                                <span class="small-2 medium secondary">Orange Juice</span>
                                <span class="small-2 medium secondary u-text-align-right">1</span>
                                <span class="small-2 medium accent o-note">Note: note product disini ya :)</span>
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
                                <span class="small-2 medium secondary">Unique code</span>
                                <span class="small-2 medium secondary u-text-align-right fn-price">240</span>
                            </li>
                            <li class="item">
                                <span class="small-2 medium secondary">Total</span>
                                <span class="small-2 medium secondary u-text-align-right fn-price">95240</span>
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
                                <span class="small-2 medium secondary">Transfer Bank ( Bank Central Asia )</span>
                                <span class="small-2 medium secondary u-text-align-right fn-price">95240</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="c-card c-fixed-card-bottom p-t-15 p-b-15 fn-btn-helper">
                <div class="l-section-shrink">
                    <div class="col-xxs-12 p-b-10">
                        <a href="javascript:void(0)" class="o-button btn-warning btn-help">
                            <i data-feather="download" width="16" height="16" class="m-r-10"></i>
                            Download receipt
                        </a>
                    </div>
                    <div class="col-xxs-12">
                        <a href="javascript:void(0)" class="o-button btn-primary btn-help">
                            Contact us for more information
                        </a>
                    </div>
                </div>
            </div>

            <!-- Notification Copy Text -->
            <div class="c-notification-bar primary fn-notification-bar fn-close-notification">
                <div class="l-section-fluid">
                    <div class="bounds">
                        <p class="small-1 medium fn-copy-text">Text Copied!</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
</main>
<?php include 'footer.php'; ?>