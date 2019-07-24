import Vue from "vue";
import App from "./App.vue";
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css' // Ensure you are using css-loader
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import router from './router/routes'

Vue.productionTip = false;

Vue.use(Vuetify,{
    iconfont: 'mdi'
})

Vue.config.productionTip = false;

new Vue({
    el: '#app',
    router,
    render: h => h(App)
}).$mount("#app");
