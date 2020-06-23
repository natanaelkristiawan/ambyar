<template>
    <div class="c-delivery-location col-xxs-12">
        <div class="l-section-shrink">
            <div class="col-xxs-8">
                <h6 class="heading p-b-5">Delivery from</h6>
                <p class="subheading small-2">Sorted by fastest delivery location</p>
            </div>
            <div class="col-xxs-4">
                <a href="javascript:void(0)" class="o-button btn-rounded btn-primary m-l-auto fn-toggle-delivery-location">
                    <chevron-down-icon size="18"></chevron-down-icon>
                </a>
            </div>

            <div class="col-xxs-12">
                <div class="c-card m-t-20">
                    <div class="l-section-shrink middle-xxs">
                        <div class="col-xxs-12">
                            <h6 class="accent p-b-5">NUAN Restaurant</h6>
                            <p class="subheading small-1 p-b-10">Choose your own Shabu bowl and stiry fry: Mala Sichuan, Chicken Collagen & Thai Tomyam.</p>
                            
                            <div class="c-btn-share-wrapper p-b-20">
                                <a href="javascript:void(0)" class="o-button btn-small btn-primary fn-toggle-share-group">
                                    <share-2-icon size="16"></share-2-icon>
                                    Bagikan halaman ini     
                                </a>
                            </div>
                        </div>
                        <hr class="dashed m-t-0 m-b-15"/>
                        <div class="col-xxs-8">
                            <p class="primary medium small-1 p-b-5">Address</p>
                            <p class="subheading small-2">Green Ville Blok BK No 8, Jakarta Barat, DKI Jakarta 11510 Indonesia</p>
                        </div>
                        <div class="col-xxs-4 p-l-0">
                            <a href="javascript:void(0)" class="c-link map-thumbnail m-l-auto fn-toggle-store-location">
                                <img 
                                    src="@image/uploads/demo/thumbnail--map-delivery-location.jpg" 
                                    srcset="@image/uploads/demo/thumbnail--map-delivery-location@2x.jpg 2x, @image/uploads/demo/thumbnail--map-delivery-location@3x.jpg 3x" 
                                    class="figure-thumbnail"
                                />
                                <div class="map-spot">
                                    <div class="spot"></div>
                                    <div class="line"></div>
                                </div>
                            </a>
                        </div>

                        <hr class="dashed m-t-15 m-b-20"/>
                        
                        <div class="col-xxs-12 label-information">
                            <clock-icon size="16" class="m-r-5 main-100"></clock-icon><span class="small-2"><b class="medium">15 - 25 mins</b></span>
                            <map-pin-icon size="16" class="m-r-5 m-l-20"></map-pin-icon><span class="small-2"><b class="medium">1.4 km from your location</b></span>
                        </div>
                    </div>
                </div>

                <!-- Dropdown location -->
                <div class="c-card fn-dropdown-location">

                        <div class="c-dropdown-list">
                            <div class="l-section-shrink">

                                <!-- Loop item-->
                                <div class="list col-xxs-12">
                                    <a href="javascript:void(0)" class="c-link">
                                        <div class="l-section-shrink between-xxs bottom-xxs">
                                            <div class="panel-left col-xxs-8">
                                                <h6 class="accent p-b-5">FoodPrint Dewi Sri</h6>
                                                <p class="subheading small-2">Jl. Dewi Sri No.68, Legian, Kuta, Kabupaten Badung, Bali 80361</p>
                                            </div>
                                            <div class="panel-right col-xxs-4 p-l-0 p-b-5">
                                                <map-pin-icon size="16" class="m-r-5"></map-pin-icon><span class="small-2"><b class="medium">1.4 km</b></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- End Loop item-->

                                <!-- Loop item-->
                                <div class="list col-xxs-12">
                                    <a href="javascript:void(0)" class="c-link">
                                        <div class="l-section-shrink between-xxs bottom-xxs">
                                            <div class="panel-left col-xxs-8">
                                                <h6 class="accent p-b-5">FoodPrint Dewi Sri</h6>
                                                <p class="subheading small-2">Jl. Dewi Sri No.68, Legian, Kuta, Kabupaten Badung, Bali 80361</p>
                                            </div>
                                            <div class="panel-right col-xxs-4 p-l-0 p-b-5">
                                                <map-pin-icon size="16" class="m-r-5"></map-pin-icon><span class="small-2"><b class="medium">1.4 km</b></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- End Loop item-->

                                <!-- Loop item-->
                                <div class="list col-xxs-12">
                                    <a href="javascript:void(0)" class="c-link">
                                        <div class="l-section-shrink between-xxs bottom-xxs">
                                            <div class="panel-left col-xxs-8">
                                                <h6 class="accent p-b-5">FoodPrint Dewi Sri</h6>
                                                <p class="subheading small-2">Jl. Dewi Sri No.68, Legian, Kuta, Kabupaten Badung, Bali 80361</p>
                                            </div>
                                            <div class="panel-right col-xxs-4 p-l-0 p-b-5">
                                               <map-pin-icon size="16" class="m-r-5"></map-pin-icon><span class="small-2"><b class="medium">1.4 km</b></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- End Loop item-->

                            </div>
                        </div>

                </div>
                <!-- end Dropdown location -->

            </div>
        </div>                    
    </div>
</template>


<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';
import { Share2Icon, ChevronDownIcon, MapPinIcon, ClockIcon } from 'vue-feather-icons'
@Component({
    components: {
        Share2Icon,
        ChevronDownIcon,
        MapPinIcon,
        ClockIcon
    }
})
export default class Location extends Vue {
    
}
</script>