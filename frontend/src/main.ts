import Vue from 'vue'
import App from './App.vue'
import router from './router'
import "@style/nuan.scss"
import vueNumeralFilterInstaller from 'vue-numeral-filter';

Vue.config.productionTip = false
Vue.use(vueNumeralFilterInstaller, { locale: 'it' });
new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
