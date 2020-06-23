<template>
    <div class="c-card c-fixed-card-bottom p-t-15 p-b-15 fn-btn-checkout" :class="{'is-hidden' : calculation.hidden}">
        <div class="l-section-shrink">
            <div class="col-xxs-12 p-b-10">
                <div class="c-order order-label-status">
                    <span class="small-1"><span class="fn-total-qty">{{ calculation.quantity }}</span>&nbsp;<span>Item</span></span>
                    <span class="small-1">Estimation | {{ calculation.total | numeral(0, 0) }}&nbsp;<span class="fn-price fn-est-price"></span></span>
                </div>
            </div>
            <div class="col-xxs-12">
                <a href="#" class="o-button btn-primary btn-order placeholder-loading slow">
                    <i data-feather="shopping-cart" class="m-r-10" height="16" width="16"></i>
                    CHECKOUT
                </a>
            </div>
        </div>
    </div>
</template>


<script lang="ts">
import { Component, Vue, Prop } from 'vue-property-decorator';
interface TotalCalculation {
    quantity: number;
    total: number;
    hidden: boolean;
}
@Component
export default class Checkout extends Vue {
    @Prop() readonly calculation: TotalCalculation;
}
</script>