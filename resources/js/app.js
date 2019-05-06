
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vuex from 'vuex'



require('./bootstrap');

window.Vue = require('vue');
Vue.use(Vuex);
const moment = require('moment');

require('moment/locale/pt-br');

Vue.use(require('vue-moment'),{
	moment
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('box-info', require('./components/BoxInfo.vue').default);
Vue.component('table-responsive', require('./components/TableResponsive.vue').default);
Vue.component('chart-pie', require('./components/ChartPie.vue').default);
Vue.component('recently-added-products', require('./components/RecentlyAddedProducts.vue').default);
Vue.component('box-product', require('./components/BoxProduct.vue').default);
Vue.component('shopping-cart', require('./components/ShoppingCart.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const store = new Vuex.Store({
  state: {
    cart: {
    	products:{},
    	client:{
    		is_partner:0,
    		name: '',
    		email: ''	
    	}
    	
    }
  },
  mutations: {
    setProducts (val) {
      state.cart.products;
    },
    setPartner(state,is_partner){
    	state.cart.client.is_partner = is_partner;
    },
    setName(state,name){
    	state.cart.client.name = name;
    },
    setEmail(state,email){
    	state.cart.client.email = email;
    }
  }
})
window.eventBusCart = new Vue({});//transfere informações entre componente produto e carrinho

const app = new Vue({
    el: '#app',
    store
});


