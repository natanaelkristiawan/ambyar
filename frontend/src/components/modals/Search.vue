<template>
<div id="fn-search-wrapper" class="l-modal-search modal-overlay white">
    <div class="modal-container">
        <div class="modal-safebox">
            <div class="modal-bounds top">
                
                <div class="l-section modal">
                    <div class="l-section-shrink">
                        <div class="product-list-container">
                            <Product 
                                v-for="(product, index) in dataProduct" 
                                v-bind:key="index"
                                v-bind:product="product"
                                @increase="appendData"
                                @decrease="removeData"
                                @showNote="showNote"
                            >
                            </Product>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</template>

<script lang="ts">
import { Component, Vue, Emit } from 'vue-property-decorator';
import Product from '@/components/global/Product.vue'
@Component({
    components : {
        Product
    }
})
export default class Search extends Vue {
    dataProduct = [
        {
            id: 'product-1',
            name: 'Spaghetti Sauce with Ground Beef', 
            description: 'Spaghetti ground beef, tomato sauce, tomato paste, green bell pepper.', 
            price: 10000,
            image: ''
        },
        {
            id: 'product-2',
            name: 'Spaghetti Sauce with Ground Beef', 
            description: 'Spaghetti ground beef, tomato sauce, tomato paste, green bell pepper.', 
            price: 20000,
            image: ''
        },
        {
            id: 'product-3',
            name: 'Spaghetti Sauce with Ground Beef', 
            description: 'Spaghetti ground beef, tomato sauce, tomato paste, green bell pepper.', 
            price: 40000,
            image: ''
        }
    ]

    counterProduct = 0;
    counterPrice = 0;
    response;

    @Emit('appendData')
    appendData(value) {
        this.counterProduct = this.counterProduct + 1;
        this.counterPrice = this.counterPrice + value;
        this.response = {
            quantity : this.counterProduct,
            total : this.counterPrice
        };
        return this.response;
    }
    @Emit('removeData')
    removeData(value) {
        this.counterProduct = this.counterProduct - 1;
        this.counterPrice = this.counterPrice - value;
        this.response = {
            quantity : this.counterProduct,
            total : this.counterPrice
        };
        return this.response;
    }


    @Emit('showNote')
    showNote(value){
        return value;
    }

}
</script>