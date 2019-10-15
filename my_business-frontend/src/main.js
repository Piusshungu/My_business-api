import Vue from "vue";
import App from "./App.vue";
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css' // Ensure you are using css-loader
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import router from './router/routes'
import DataTable from 'laravel-vue-datatable';

Vue.productionTip = false;

Vue.use(DataTable);

Vue.use(Vuetify,{
    iconfont: 'mdi'
})

Vue.config.productionTip = false;

 /* eslint-disable */

new Vue({
    el: '#app',
    router,
    render: h => h(App)
}).$mount("#app");

new products-table({
    el: '#prdoducts-table',
    data: {
        items: [],
        hasError: true,
        newItems: {'name_of_product': '', 'category': '', 'country': '', 'number_of_products': ''},
    },
})
function createIteam(){
    var _this = this;
    var input = this.newItem;
    if(input['name_of_product'] == '' || input['category'] == '' || input[number_of_products] == '' || input[country] == ''){
        this.hasError = false;
    }else{
        this.hasError = true;
        axios.post('/productsItems', input).then(function(response){
            _this.newItem = {'name': ''};
            _this.getVueItems()
        });
    }
}