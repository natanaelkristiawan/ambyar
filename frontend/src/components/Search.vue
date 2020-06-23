<template>
    <nav id="product-cat-menu" class="fn-product-list-offset">
        <select class="fn-product-cat-val">
            <option value="3">Best Seller</option>
            <option value="5">Burger & Steak</option>
            <option value="2">Soup</option>
            <option value="4">Dessert</option>
            <option value="2">Drinks</option>
            <option value="4">Rice & Salad</option>
            <option value="4">Menu Set</option>
        </select>
    </nav>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';

@Component
export default class Search extends Vue {
  
}
</script>