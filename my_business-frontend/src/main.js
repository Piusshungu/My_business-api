import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.config.productionTip = false


Vue.use(VueRouter)

import Login from './components/Login.vue';

const routes = [
  { path: '/', component: Login },
]

const router = new VueRouter({
  mode: 'history',
  routes
})

new Vue({
  router,
  render: h => h(Login)
}).$mount('#app')
