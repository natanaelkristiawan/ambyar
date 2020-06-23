<!-- note: add class 'is-active' to modal-overlay to display modal -->
<div id="fn-modal-checkout-delivery-location-wrapper" class="l-modal-checkout-delivery-location modal-overlay">
    <div class="modal-container">
        <div class="modal-safebox">
            <div class="modal-bounds bottom">
                
                <div class="l-section modal">
                    <div class="l-section-shrink">
                        <div class="col-xxs-12 panel-heading p-t-5">
                            <div class="safebox">
                                <a href="javascript:void(0)" class="c-link fn-toggle-close-select-on-map">
                                    <i data-feather="arrow-left" class="default"></i>
                                </a>
                                <h6 class="small primary fn-test">Select delivery location</h6>
                            </div>
                        </div>
                    </div>

                    <div class="panel-map l-section-shrink">
                        <div class="map-container">
                            <div id="map" style="height: 100%;"></div>
                            <div class="location-detail is-loading">
                                <div class="panel placeholder">
                                    <div class="icon">
                                        <div class="placeholder-loading"></div>
                                    </div>
                                    <div class="address">
                                        <div class="placeholder-loading"></div>
                                        <div class="placeholder-loading"></div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="icon">
                                        <i data-feather="target"></i>
                                    </div>
                                    <div class="address">
                                        <h6 class="heading xsmall primary p-b-5">Jl. Bukit Barisan No.3</h6>
                                        <p class="small-2 secondary">Jl. Bukit Barisan No.3, Pemecutan, Kec. Denpasar Bar., Kota Denpasar, Bali 80232, Indonesia</p>
                                    </div>
                                    <div class="btn-action-wrapper p-t-20">
                                        <a href="javascript:void(0)" class="o-button btn-primary">Use location</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-option l-section-shrink">                        
                        <div class="col-xxs-12 panel-search p-t-5">
                            <div class="c-input-control-panel with-icon icon-left">
                                <input class="c-input input-big" type="search" placeholder="Search location">
                                <i data-feather="search" width="16px" height="16px" class="m-r-10"></i>
                            </div>
                        </div>

                        <div class="devider m-t-20 m-b-20">
                            <span class="small-2 medium primary">OR</span>
                            <hr class="dashed" />
                        </div>

                        <div class="col-xxs-12 panel-btn-action">
                            <a href="javascript:void(0)" class="o-button btn-with-icon btn-primary fn-toggle-checkout-delivery-location-map">
                                <i data-feather="map" class="m-r-10" width="16" height="16"></i>
                                <span class="medium">Select on map</span>
                            </a>
                        </div>

                        <hr class="m-t-20 m-b-20"/>

                        <div class="col-xxs-12 panel-location-option p-b-20">
                            <div class="c-checkout-delivery-location-list">
                                <a href="javascript:void(0)" class="c-link default">
                                    <i data-feather="target" width="16" height="16" class="m-r-15"></i>
                                    <div class="detail">
                                        <span class="small-1 primary medium p-b-5">Your current location</span>
                                        <span class="small-2 secondary">Jl. Bhineka Jati Jaya No. 6</span>
                                    </div>
                                </a>                                    
                            </div>
                        </div>
                    </div>

                </div>

                <div class="sandbox"></div>

            </div>
        </div>
    </div>
</div>