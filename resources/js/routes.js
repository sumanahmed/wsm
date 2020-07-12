import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import Dashboard from './components/pages/Dashboard.vue'
import Client from './components/pages/Client.vue'
export const routes = [
	{
        path : '/',
        name:'dashboard',
		component: Dashboard
	},
	{
        path : '/client',
        name:'client',        
		component: Client
	},
];
