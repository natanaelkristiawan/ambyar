<template>
<div class="c-product-list col-xxs-12" :product-id="product.id">
    <div class="l-section-shrink">
        <div class="left">
            <div class="image fn-toggle-product-detail">
                <img
                    src="@image/uploads/demo/product-list/thumbnail--tuna-steak.jpg" 
                    srcset="@image/uploads/demo/product-list/thumbnail--tuna-steak@2x.jpg 2x,
                    @image/uploads/demo/product-list/thumbnail--tuna-steak@3x.jpg 3x" 
                />
            </div>
        </div>
        <div class="right">
            <div class="top p-b-10">
                <label class="title p-b-5">{{ product.name }}</label>
                <p class="small-2">{{ product.description }}</p>
            </div>
            <div class="bottom">
                <input type="hidden" readonly class="fn-sub-total-value"/>
                <span class="price small-2 fn-price">{{ product.price | numeral(0,0) }} </span>
                <div class="btn-action">

                    <input type="hidden" readonly class="fn-note-message"/>
                    <a @click="showNote" href="javascript:void(0)" class="o-button btn-small btn-accent m-r-10 fn-toggle-m-product-note" :class="{'is-visible' : show}">
                        <i data-feather="edit" class="m-r-5" width="16" height="16"></i>
                        <span class="small-2">Add note</span>
                    </a>

                    <a @click="addQuantity" href="javascript:void(0)" class="o-button btn-small btn-primary fn-toggle-btn-qty" :class="{'is-hidden' : show}" >
                        <span class="small-2">Add</span>
                        <i data-feather="plus" class="m-l-5" width="16" height="16"></i>
                    </a>

                    <!-- note: add class 'is-visible' to show button product quantity -->
                    <div class="btn-product-qty" :class="{'is-visible' : show}">
                        <input type="number" name="quantity" id="" :value="count" disabled>
                        <div @click="increase" class="inc fn-product-qty">+</div><div @click="decrease" class="dec fn-product-qty">-</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script lang="ts">
import { Component, Vue, Prop, Emit } from 'vue-property-decorator';
interface DataProduct {
    [data: string]: {id: string; name: string; description: string; price: number; image: string };
}
@Component
export default class Product extends Vue {
    @Prop() readonly product: DataProduct;
    show = false;
    count = 0;
    price;

    response;
    
    addQuantity(): void {
        this.show = true;
        this.increase();
    }
    @Emit('increase')
    increase() {
        this.count = this.count + 1;
        this.price = this.product.price
        return this.price;
    }
    @Emit('decrease')
    decrease() {
        this.count = this.count - 1;
        if(this.count == 0){
          this.show = false;
        } 

        return this.price;
    }

    @Emit('showNote')
    showNote(){
        this.response = this.product;
        this.response['status'] = true;
        return this.response;
    }
}

</script>