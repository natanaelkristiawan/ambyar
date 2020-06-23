<template>
<div id="fn-product-note-wrapper" class="l-modal-product-note modal-overlay white" :note-for="product.id" :class="{'is-active' : product.status}">
    <div class="modal-container">
        <div class="modal-safebox">
            <div class="modal-bounds top">
                
                <div class="l-section modal"> 

                    <a @click="close" href="javascript:void(0)" class="o-button btn-rounded btn-primary m-l-auto fn-toggle-close-modal">
                        <x-icon size="16"></x-icon>
                    </a>

                    <div class="l-section-shrink">
                        
                        <div class="c-product-note col-xxs-12 p-t-20">
                            <div class="c-card p-t-20 p-b-20">
                                <h6 class="p-b-10">Add note to your dish</h6>
                                <form id="form-product-add-note" class="fn-max-length-typing">
                                    <textarea id="note-textarea" placeholder="Example: Make my food spicy.."></textarea>
                                    <div class="btn-action-wrapper">
                                        <span class="fn-product-note-limit limit-text small-2"><span class="fn-count">0</span>&nbsp;/&nbsp;<span class="fn-count-max">200</span></span>
                                        <button type="submit" class="o-button btn-small btn-negative fn-btn-clear is-hidden" disabled>Delete note</button>
                                        <button type="submit" class="o-button btn-small btn-positive fn-btn-submit" disabled>Add note</button>
                                    </div>                                    
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script lang="ts">
import { Component, Vue, Prop, Emit } from 'vue-property-decorator';
import { XIcon } from 'vue-feather-icons'
interface DataProduct{
    [data: string]: {id: string; name: string; description: string; price: number; image: string; status: boolean };
}
@Component({
    components: {
        XIcon
    }
})
export default class Notes extends Vue {
    response;
    
    @Prop() readonly product!: DataProduct;
    @Emit('close')
    close(){
        return true;
    }
}
</script>