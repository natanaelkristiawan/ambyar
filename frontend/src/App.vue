<template>
  <div id="app">

    <Navigator @active="showModalSearch" @deActive="hideModalSearch" />
    <Search />
    <Banner v-bind:banners="dataBanner"/>
    <router-view :calculation="calculation"/>
    <SearchModal :class="searchClass" @appendData="countTotalProduct" @removeData="countTotalProduct"  @showNote="note"  />
    <NotesModal v-bind:product="dataNote" @close="note"/>
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator'
import Navigator from '@/components/Navigator.vue'
import Search from '@/components/Search.vue'
import Banner from '@/components/Banner.vue'
import SearchModal from '@/components/modals/Search.vue'
import NotesModal from '@/components/modals/Notes.vue'

@Component({
  components: {
    Navigator,
    Search,
    SearchModal,
    Banner,
    NotesModal
  }
})

export default class App extends Vue {
  
  searchClass = '';
  totalProduct;

  dataNote = {
    id: '',
    name: '',
    description: '',
    price: '', 
    image: '',
    status: false 
  };

  show = false;

  calculation = {
    quantity: 0,
    total: 0,
    hidden: true
  }

  dataBanner = [
    'image/uploads/demo/header-banner/nuan--slide-01.jpg',
    'image/uploads/demo/header-banner/nuan--slide-01.jpg',
    'image/uploads/demo/header-banner/nuan--slide-01.jpg',
    'image/uploads/demo/header-banner/nuan--slide-01.jpg',
  ];

  showModalSearch() {
    this.searchClass = 'is-active';
  }

  hideModalSearch() {
    this.searchClass = '';
  }

  countTotalProduct(value) {
    this.calculation = {
      quantity: value.quantity,
      total: value.total,
      hidden: value.total ? false : true
    }
  }

  note(value){
    this.dataNote = value
  }
}
</script>