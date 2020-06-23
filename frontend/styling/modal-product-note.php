<!-- note: add class 'is-active' to modal-overlay to display modal -->
<div id="fn-product-note-wrapper" class="l-modal-product-note modal-overlay white" note-for="">
    <div class="modal-container">
        <div class="modal-safebox">
            <div class="modal-bounds top">
                
                <div class="l-section modal"> 

                    <a href="javascript:void(0)" class="o-button btn-rounded btn-primary m-l-auto fn-toggle-close-modal">
                        <i data-feather="x" width="16" height="16"></i>
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