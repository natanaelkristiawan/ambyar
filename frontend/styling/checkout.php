<?php include 'metadata.php'; ?>
<?php include 'main-navigation-checkout.php'; ?>
<main class="l-site-content push-main-navigation">

    <section class="l-section l-checkout">
        <div class="l-section-shrink">

            <form id="form-product-checkout">

                <section class="c-checkout-delivery-location col-xxs-12">
                    <div class="c-card p-t-20 p-b-20">
                        <div class="l-section-shrink middle-xxs">
                            <div class="col-xxs-6">
                                <p class="small-2 medium secondary">Delivery location</p>
                            </div>
                            <div class="col-xxs-6 u-text-align-right">
                                <a href="javascript:void(0)" class="o-button btn-small btn-primary fn-toggle-modal-checkout-delivery-location"><span class="small-2">Change</span></a>
                            </div>
                            <div class="col-xxs-12 p-t-10 p-b-10">
                                <h6 class="small accent">Jl. Bhineka Jati Jaya No. 6</h6>
                            </div>
                            <div class="col-xxs-12">
                                <div class="c-input-control-panel with-icon icon-left icon-right">
                                    <i data-feather="file-text" width="16" height="16"></i>
                                    <input type="text" class="c-input fn-checkout-add-note-location" placeholder="Add notes to delivery location"/>
                                    <i data-feather="x" width="16" height="16"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <hr class="m-t-20 m-b-20"/>

                <section class="c-checkout-customer-data col-xxs-12">
                    <div class="c-card p-t-20 p-b-20">
                        <div class="l-section-shrink">
                            <div class="col-xxs-12">
                                <p class="small-2 secondary">Please add your name and your phone number, for order confirmation needs</p>
                            </div>
                            <div class="col-xxs-12 p-t-10">

                                <label for="checkout-customer-data-name" class="medium small-2 secondary p-b-10 u-display-block">Your name</label>
                                <div class="c-input-control-panel with-icon icon-right m-b-15">
                                    <!-- note: remove class 'is-hidden' to display alert components -->
                                    <div class="c-alert alert-negative is-hidden m-b-10">
                                        <p class="small-2 medium">Error Message.</p>
                                    </div>
                                    <!-- note: add class 'is-valid' to .c-input for status valid -->
                                    <!-- note: add class 'is-invalid' to .c-input for status invalid -->
                                    <input type="text" class="c-input" placeholder="Your name" id="checkout-customer-data-name" required/>
                                    <i data-feather="check-circle" class="is-hidden" width="16" height="16"></i>
                                </div>

                                <label for="checkout-customer-data-email" class="medium small-2 secondary p-b-10 u-display-block">Your name</label>
                                <div class="c-input-control-panel with-icon icon-right m-b-15">
                                    <!-- note: remove class 'is-hidden' to display alert components -->
                                    <div class="c-alert alert-negative is-hidden m-b-10">
                                        <p class="small-2 medium">Error Message.</p>
                                    </div>
                                    <!-- note: add class 'is-valid' to .c-input for status valid -->
                                    <!-- note: add class 'is-invalid' to .c-input for status invalid -->
                                    <input type="email" class="c-input" placeholder="Your email" id="checkout-customer-data-email" required/>
                                    <i data-feather="check-circle" class="is-hidden" width="16" height="16"></i>
                                </div>

                                <label for="checkout-customer-data-phone-number" class="medium small-2 secondary p-b-10 u-display-block">Your phone number</label>
                                <div class="c-input-control-panel c-phone-number with-icon icon-right">
                                    <!-- note: remove class 'is-hidden' to display alert components -->
                                    <div class="c-alert alert-negative is-hidden m-b-10">
                                        <p class="small-2 medium negative">Error Message.</p>
                                    </div>
                                    <span id="phone-area-code" class="small-2">+62</span>
                                    <!-- note: add class 'is-valid' to .c-input for status valid -->
                                    <!-- note: add class 'is-invalid' to .c-input for status invalid -->
                                    <input type="tel" class="c-input" placeholder="" id="checkout-customer-data-phone-number" required/>
                                    <i data-feather="check-circle" class="is-hidden" width="16" height="16"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <hr class="m-t-20 m-b-20"/>

                <section class="product-list-container fn-product-list-group" data-title="Order item(s)" id="ordered-product">
                    <div class="l-section">
                        <div class="l-section-shrink">

                            <div class="col-xxs-12 panel-heading p-b-30">
                                <h6 class="heading">Order item(s)</h6>
                                <a href="javascript:void(0)" class="o-button btn-small btn-primary">
                                    <i data-feather="plus" class="m-r-5" width="16" height="16"></i>
                                    <span class="small-2">Add more</span>                                    
                                </a>
                            </div>

                            <!-- PRODUCT ITEM -->
                            <div class="c-product-list col-xxs-12" product-id="tuna-steak">
                                <div class="l-section-shrink">
                                    <div class="left">
                                        <div class="image fn-toggle-product-detail">
                                            <img
                                                src="img/uploads/demo/product-list/thumbnail--tuna-steak.jpg" 
                                                srcset="img/uploads/demo/product-list/thumbnail--tuna-steak@2x.jpg 2x,
                                                img/uploads/demo/product-list/thumbnail--tuna-steak@3x.jpg 3x" 
                                            />
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="top p-b-10">
                                            <label class="title p-b-5">Tuna Steak</label>
                                            <p class="small-2">Tuna steaks with orange juice, soy sauce, olive oil, lemon juice.</p>
                                        </div>
                                        <div class="bottom">
                                            <input type="hidden" readonly class="fn-sub-total-value"/>
                                            <span class="price small-2 fn-price">55000</span>
                                            <div class="btn-action">

                                                <input type="hidden" readonly class="fn-note-message"/>
                                                <a href="javascript:void(0)" class="o-button btn-small btn-accent m-r-10 fn-toggle-m-product-note is-visible">
                                                    <i data-feather="edit" class="m-r-5" width="16" height="16"></i>
                                                    <span class="small-2">Add note</span>
                                                </a>

                                                <div class="btn-product-qty is-visible">
                                                    <input type="number" name="quantity" id="" value="1" disabled>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PRODUCT ITEM -->

                            <!-- PRODUCT ITEM -->
                            <div class="c-product-list col-xxs-12" product-id="beef-spaghetti">
                                <div class="l-section-shrink">
                                    <div class="left">
                                        <div class="image fn-toggle-product-detail">
                                            <img
                                                src="img/uploads/demo/product-list/thumbnail--tuna-steak.jpg" 
                                                srcset="img/uploads/demo/product-list/thumbnail--tuna-steak@2x.jpg 2x,
                                                img/uploads/demo/product-list/thumbnail--tuna-steak@3x.jpg 3x" 
                                            />
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="top p-b-10">
                                            <label class="title p-b-5">Spaghetti Sauce with Ground Beef</label>
                                            <p class="small-2">Spaghetti ground beef, tomato sauce, tomato paste, green bell pepper.</p>
                                        </div>
                                        <div class="bottom">
                                            <input type="hidden" readonly class="fn-sub-total-value"/>
                                            <span class="price small-2 fn-price">30000</span>
                                            <div class="btn-action">

                                                <input type="hidden" readonly class="fn-note-message"/>
                                                <a href="javascript:void(0)" class="o-button btn-small btn-accent m-r-10 fn-toggle-m-product-note is-visible">
                                                    <i data-feather="edit" class="m-r-5" width="16" height="16"></i>
                                                    <span class="small-2">Add note</span>
                                                </a>

                                                <div class="btn-product-qty is-visible">
                                                    <input type="number" name="quantity" id="" value="1" disabled>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PRODUCT ITEM -->

                            <!-- PRODUCT ITEM -->
                            <div class="c-product-list col-xxs-12" product-id="club-sandwich">
                                <div class="l-section-shrink">
                                    <div class="left">
                                        <div class="image fn-toggle-product-detail">
                                            <img
                                                src="img/uploads/demo/product-list/thumbnail--tuna-steak.jpg" 
                                                srcset="img/uploads/demo/product-list/thumbnail--tuna-steak@2x.jpg 2x,
                                                img/uploads/demo/product-list/thumbnail--tuna-steak@3x.jpg 3x" 
                                            />
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="top p-b-10">
                                            <label class="title p-b-5">Club Sandwich</label>
                                            <p class="small-2">Cheddar cheese, sliced ham, tomato, lettuce, mayonnaise.</p>
                                        </div>
                                        <div class="bottom">
                                            <input type="hidden" readonly class="fn-sub-total-value"/>
                                            <span class="price small-2 fn-price">22000</span>
                                            <div class="btn-action">

                                                <input type="hidden" readonly class="fn-note-message"/>
                                                <a href="javascript:void(0)" class="o-button btn-small btn-accent m-r-10 fn-toggle-m-product-note is-visible">
                                                    <i data-feather="edit" class="m-r-5" width="16" height="16"></i>
                                                    <span class="small-2">Add note</span>
                                                </a>

                                                <div class="btn-product-qty is-visible">
                                                    <input type="number" name="quantity" id="" value="1" disabled>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PRODUCT ITEM -->

                        </div>
                    </div>
                </section>

                <hr class="m-b-20"/>

                <div class="c-checkout-promo-code col-xxs-12">
                    <div class="c-card p-t-20 p-b-20">
                        <div class="l-section-shrink middle-xxs">
                            <div class="col-xxs-12 p-b-10">
                                <div class="c-input-control-panel with-icon icon-right">
                                    <!-- note: remove class 'is-hidden' to display alert components -->
                                    <div class="c-alert alert-negative is-hidden m-b-10">
                                        <p class="small-2 medium negative">Error Message.</p>
                                    </div>
                                    <!-- note: add class 'is-valid' to .c-input for status valid -->
                                    <!-- note: add class 'is-invalid' to .c-input for status invalid -->
                                    <input type="text" class="c-input medium" placeholder="Input promo code" />
                                    <i data-feather="check-circle" class="is-hidden" width="16" height="16"></i>
                                </div>
                            </div>
                            <div class="col-xxs-6 panel-left">
                                <a href="javascript:void(0)" class="c-link fn-toggle-modal-checkout-promo-list"><span class="small-2">Show all promo</span></a>
                            </div>
                            <div class="col-xxs-6 panel-right u-text-align-right">
                                <!-- flow: after user add code promo, hide button use code & display button clear code -->
                                <!-- note: add class 'is-hidden' to button use code to hide this button -->
                                <a href="javascript:void(0)" class="o-button btn-small btn-primary disabled"><span class="small-2">Use code</span></a>

                                <!-- flow: if button clear code is clicked, hide button clear code & display button use code -->
                                <!-- note: remove class 'is-hidden' to button clear code to display this button -->
                                <a href="javascript:void(0)" class="o-button btn-small btn-primary fn-clear-promo-code is-hidden"><span class="small-2">Clear code</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="m-t-20 m-b-20"/>

                <div class="c-checkout-payment-method col-xxs-12">
                    <div class="c-card p-t-20 p-b-20">
                        <div class="l-section-shrink middle-xxs">

                            <div class="col-xxs-6">
                                <p class="small-2 medium secondary">Payment Method</p>
                            </div>
                            <div class="col-xxs-6 u-text-align-right">
                                <a href="javascript:void(0)" class="o-button btn-small btn-primary fn-toggle-modal-checkout-payment-method-list"><span class="small-2">Change</span></a>
                            </div>

                            <!-- PAYMENT METHOD :: EMONEY -->
                            <div class="col-xxs-12 p-t-20" id="payment-method-emoney" style="display: none;">
                                <div class="l-section-shrink middle-xxs">
                                    <div class="col-xxs-6 label">
                                        <img 
                                            src="img/uploads/icons/payment-method/icon--gopay.jpg" 
                                            srcset="img/uploads/icons/payment-method/icon--gopay@2x.jpg 2x, 
                                            img/uploads/icons/payment-method/icon--gopay@3x.jpg 3x" 
                                            class="payment-icon" 
                                        />
                                        <span class="small-1 medium primary">Gopay</span>
                                    </div>
                                    <div class="col-xxs-6 u-text-align-right">
                                        <span class="small-1 medium secondary">Delivery fee <span class="value fn-price">5000</span></span>
                                    </div>
                                    <hr class="dashed m-t-10 m-b-10"/>
                                    <div class="col-xxs-12 requirement">
                                        <p class="small-2">Phone number registered in gojek account</p>
                                        <label for="checkout-gopay-phone-number" class="medium small-2 secondary p-b-10 u-display-block">Your phone number</label>
                                        <div class="c-input-control-panel c-phone-number with-icon icon-right">
                                            <!-- note: remove class 'is-hidden' to display alert components -->
                                            <div class="c-alert alert-negative is-hidden m-b-10">
                                                <p class="small-2 medium negative">Error Message.</p>
                                            </div>
                                            <span id="phone-area-code" class="small-2">+62</span>
                                            <!-- note: add class 'is-valid' to .c-input for status valid -->
                                            <!-- note: add class 'is-invalid' to .c-input for status invalid -->
                                            <input type="tel" class="c-input" placeholder="" id="checkout-gopay-phone-number" required/>
                                            <i data-feather="check-circle" class="is-hidden" width="16" height="16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAYMENT METHOD :: EMONEY -->

                            <!-- PAYMENT METHOD :: TRANSFER BANK -->
                            <div class="col-xxs-12 p-t-20" id="payment-method-transfer-bank" style="display: none;">
                                <div class="l-section-shrink middle-xxs">
                                    <div class="col-xxs-6 label">
                                        <img 
                                            src="img/uploads/icons/payment-method/icon--tb-bca.jpg" 
                                            srcset="img/uploads/icons/payment-method/icon--tb-bca@2x.jpg 2x, 
                                            img/uploads/icons/payment-method/icon--tb-bca@3x.jpg 3x" 
                                            class="payment-icon" 
                                        />
                                        <span class="small-1 medium primary">Transfer Bank</span>
                                    </div>
                                    <div class="col-xxs-6 u-text-align-right">
                                        <span class="small-1 medium secondary">Delivery fee <span class="value fn-price">5000</span></span>
                                    </div>
                                    <hr class="dashed m-t-10 m-b-10"/>
                                    <div class="col-xxs-12">
                                        <div class="c-alert alert-warning m-b-10">
                                            <p class="small-2 medium">Payments using bank transfer method, will incur <strong>additional costs for the unique code</strong> used to simplify the verification process.</p>
                                        </div>
                                    </div>
                                    <div class="col-xxs-12 requirement">
                                        <span class="small-1 medium secondary">Bank account information</span>
                                        <div class="c-input-control-panel with-icon icon-right m-t-10">
                                            <!-- note: remove class 'is-hidden' to display alert components -->
                                            <div class="c-alert alert-negative is-hidden m-b-10">
                                                <p class="small-2 medium">Error Message.</p>
                                            </div>
                                            <!-- note: add class 'is-valid' to .c-input for status valid -->
                                            <!-- note: add class 'is-invalid' to .c-input for status invalid -->
                                            <input type="number" class="c-input" placeholder="Your bank account number" id="checkout-payment-method-bank-account-user-number" required/>
                                            <i data-feather="check-circle" class="is-hidden" width="16" height="16"></i>
                                        </div>
                                        <div class="c-input-control-panel with-icon icon-right m-t-10">
                                            <!-- note: remove class 'is-hidden' to display alert components -->
                                            <div class="c-alert alert-negative is-hidden m-b-10">
                                                <p class="small-2 medium">Error Message.</p>
                                            </div>
                                            <!-- note: add class 'is-valid' to .c-input for status valid -->
                                            <!-- note: add class 'is-invalid' to .c-input for status invalid -->
                                            <input type="text" class="c-input" placeholder="Your name (as it appears on your account)" id="checkout-payment-method-bank-account-user-name" required/>
                                            <i data-feather="check-circle" class="is-hidden" width="16" height="16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAYMENT METHOD :: TRANSFER BANK -->

                            <!-- PAYMENT METHOD :: CASH -->
                            <div class="col-xxs-12 p-t-20" id="payment-method-cash">
                                <div class="l-section-shrink middle-xxs">
                                    <div class="col-xxs-6 label">
                                        <img 
                                            src="img/uploads/icons/payment-method/icon--cash.jpg" 
                                            srcset="img/uploads/icons/payment-method/icon--cash@2x.jpg 2x, 
                                            img/uploads/icons/payment-method/icon--cash@3x.jpg 3x" 
                                            class="payment-icon" 
                                        />
                                        <span class="small-1 medium primary">Cash</span>
                                    </div>
                                    <div class="col-xxs-6 u-text-align-right">
                                        <span class="small-1 medium secondary">Delivery fee <span class="value fn-price">5000</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAYMENT METHOD :: CASH -->

                        </div>
                    </div>
                </div>

                <hr class="m-t-20 m-b-20"/>

                <div class="c-checkout-payment-detail col-xxs-12">

                    <div class="l-section-shrink">
                        <div class="col-xxs-12 panel-heading p-b-15">
                            <h6 class="heading">Payment details</h6>
                        </div>
                    </div>

                    <div class="l-section-shrink">

                        <!-- List Loop -->
                        <div class="col-xxs-12 p-t-15">
                            <div class="l-section-shrink between-xxs middle-xxs">
                                <div class="col-xxs-8">
                                    <p class="small-1 secondary">Price (estimated)</p>
                                </div>
                                <div class="col-xxs-3 u-text-align-right">
                                    <p class="small-1 secondary fn-price">90000</p>
                                </div>
                            </div>
                        </div>
                        <!-- End List Loop -->

                        <!-- List Loop -->
                        <div class="col-xxs-12 p-t-15">
                            <div class="l-section-shrink between-xxs middle-xxs">
                                <div class="col-xxs-8">
                                    <p class="small-1 secondary">Convenience Fee</p>
                                </div>
                                <div class="col-xxs-3 u-text-align-right">
                                    <p class="small-1 secondary fn-price">Free</p>
                                </div>
                            </div>
                        </div>
                        <!-- End List Loop -->

                        <!-- List Loop -->
                        <div class="col-xxs-12 p-t-15">
                            <div class="l-section-shrink between-xxs middle-xxs">
                                <div class="col-xxs-8">
                                    <p class="small-1 secondary">Delivery Fee</p>
                                </div>
                                <div class="col-xxs-3 u-text-align-right">
                                    <p class="small-1 secondary fn-price">5000</p>
                                </div>
                            </div>
                        </div>
                        <!-- End List Loop -->

                        <hr class="dashed m-t-15 m-b-15">

                        <!-- Total Payment -->
                        <div class="col-xxs-12">
                            <div class="l-section-shrink between-xxs middle-xxs">
                                <div class="col-xxs-8">
                                    <p class="small-1 secondary medium">Total payment</p>
                                </div>
                                <div class="col-xxs-3 u-text-align-right">
                                    <p class="small-1 secondary medium fn-price">95000</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Total Payment -->

                    </div>
                </div>            
            
                <div class="c-card c-fixed-card-bottom p-t-15 p-b-15 fn-btn-order">
                    <div class="l-section-shrink">
                        <div class="col-xxs-12 p-b-10">
                            <div class="c-order order-label-status">
                                <img 
                                    src="img/uploads/icons/payment-method/icon--cash.jpg" 
                                    srcset="img/uploads/icons/payment-method/icon--cash@2x.jpg 2x, 
                                    img/uploads/icons/payment-method/icon--cash@3x.jpg 3x" 
                                    class="payment-icon" 
                                />
                                <span class="small-1 medium primary m-r-auto m-l-5">Cash</span>
                                <span class="small-1">Total Payment |&nbsp;<span class="fn-price">95000</span></span>
                            </div>
                        </div>
                        <div class="col-xxs-12">
                            <button type="submit" class="o-button btn-primary btn-order" disabled>
                                <i data-feather="shopping-bag" class="m-r-10" height="16" width="16"></i>
                                ORDER
                            </button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </section>
</main>
<?php include 'modal-checkout-delivery-location.php'; ?>
<?php include 'modal-checkout-promo-list.php'; ?>
<?php include 'modal-checkout-payment-method.php'; ?>
<?php include 'footer.php'; ?>