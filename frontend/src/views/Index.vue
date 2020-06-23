<template>
    <main class="l-site-content">
        <section class="l-section">
            <div class="l-section-shrink">
                <Location />
            </div>
            <Checkout :calculation="calculation"/>
        </section>
    </main>
</template>
<script lang="ts">
import { Component, Vue, Prop } from 'vue-property-decorator';
import Checkout from '@/components/global/Checkout.vue';
import Location from '@/components/global/Location.vue';


@Component({
    components : {
        Checkout,
        Location
    }
})
export default class Index extends Vue {
    @Prop() calculation: {}
}
</script>