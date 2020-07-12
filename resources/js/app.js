import Vue from 'vue';
require('./bootstrap');

import axios from 'axios'
import VueRouter from 'vue-router'
import {routes} from './routes';
Vue.use(axios, VueRouter)

Vue.prototype.$axios     = axios;
Vue.prototype.$base_path = 'http://localhost:8000/api/';
Vue.component('App', require('./components/layout/App.vue').default);

const router = new VueRouter({	
    routes,
    mode:'history'    
});

new Vue({   
    router:router,
}).$mount('#app')