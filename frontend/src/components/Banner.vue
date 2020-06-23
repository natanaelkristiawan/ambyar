<template>
<header class="push-main-navigation m-b-20">
    <div class="l-section">
        <div class="l-section-shrink">
            <div class="col-xs-12">
                <swiper class="fn-m-header-banner" ref="mySwiper" :options="swiperOptions">
                    <swiper-slide 
                        v-for="(list, index) in banners" 
                        v-bind:key="index"
                        v-bind:product="list"
                    > 
                        <img 
                            src="@image/uploads/demo/header-banner/nuan--slide-01.jpg" 
                            srcset="@image/uploads/demo/header-banner/nuan--slide-01@2x.jpg 2x, @image/uploads/demo/header-banner/nuan--slide-01@3x.jpg 3x" 
                            class="swiper-lazy header-banner"
                                
                        />
                        <div class="header-banner-preloader">
                            <div class="placeholder-banner"></div>
                        </div>
                    </swiper-slide>
                    <div class="swiper-pagination" slot="pagination"></div>
                </swiper>
            </div>
        </div>
    </div>
</header>
</template>

<script lang="ts">
import { Component, Vue, Prop } from 'vue-property-decorator'
import { Swiper, SwiperSlide } from 'vue-awesome-swiper'
import 'swiper/css/swiper.css'
@Component({
    components: {
        Swiper, 
        SwiperSlide
    }
})
export default class Banner extends Vue {

    @Prop() readonly banners: [];

    swiperOptions: {} = {
        spaceBetween: 15,
        preloadImages: false,
        lazy: {
            // loadPrevNext: true,
            preloaderClass: 'header-banner-preloader'
        },
        pagination: {
            el: '.swiper-pagination'
        }
    }
}
</script>