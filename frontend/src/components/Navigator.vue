<template>
<div class="main-navigation" :class="active">
    <div class="l-section-fluid bg">

        <div class="l-section-shrink middle-xxs between-xxs">

            <div class="col-xxs-6 panel-left">
                <a href="index.php" class="c-link logo">
                    <img 
                        src="@image/uploads/demo/logo--nuan.png" 
                        srcset="@image/uploads/demo/logo--nuan@2x.png 2x, @image/uploads/demo/logo--nuan@3x.png 3x" 
                        alt="Back to homepage" 
                    />
                </a>
            </div>

            <div class="col-xxs-6 panel-right">
                <a @click="activate" href="javascript:void(0)" class="c-link btn-search fn-toggle-m-search m-l-auto">
                    <search-icon size="1.5x"></search-icon>
                </a>
            </div>

            <div class="fn-search-bar col-xxs-12 panel-search">
                <a @click="deActivate"  href="javascript:void(0)" class="c-link btn-search push-left fn-toggle-close-m-search">
                    <arrow-left-icon size="1.5x"></arrow-left-icon>
                </a>
                <div class="c-search-bar">
                    <input type="search" placeholder="Search food..."/>
                </div>
            </div>

        </div>
    </div>
</div> <!-- .main-navigation -->
</template>

<script lang="ts">
import { Component, Vue, Emit } from 'vue-property-decorator'
import { SearchIcon, ArrowLeftIcon } from 'vue-feather-icons'
@Component({
  components: {
    SearchIcon,
    ArrowLeftIcon
  }
})
export default class Navigator extends Vue {
    active = '';
    @Emit('active')
    activate(){
        this.active = 'is-search-on'
    }
    @Emit('deActive')
    deActivate(){
        this.active = ''
    }
}
</script>