import Vue from 'vue'
import Router from 'vue-router'
import VueRouter from 'vue-router';
import Admin from '@/components/Admin'
import DailyProductions from '@/components/DailyProductions'
import Expenses from '@/components/Expenses'
import Home from '@/components/Home'
import Manager from '@/components/Manager'
import Orders from '@/components/Orders'
import Products from '@/components/Products'
import Signin from '@/components/Signin'
import Signup from '@/components/Signup'
import AccountSettings from '@/components/AccountSettings'


import App from '@/App.vue';


Vue.use(VueRouter)


export default new Router({
    routes: [{
        path: '/',
        name: 'Home',
        component: App
    },
    {
        path: '/admin',
        name: 'Admin',
        component: Admin
    },
    {
        path: '/dailyproductions',
        name: 'Daily Productions',
        component: DailyProductions
    },
    {
        path: '/products',
        name: '/Products',
        component: Products
    },
    {
        path: '/expenses',
        name: 'Expenses',
        component: Expenses
    },
    {
        path: '/home',
        name: 'Home page',
        component: Home
    },
    {
        path: '/manager',
        name: 'Manager',
        component: Manager
    },
    {
        path: '/orders',
        name: 'Orders',
        component: Orders
    },
    {
        path: '/login',
        name: 'Login',
        component: Signin
    },
    {
        path: '/logout',
        name: 'Logout',

    },
    {
        path: '/register',
        name: 'Register',
        component: Signup
    },
    {
        path: '/account',
        name: 'Account',
        component: AccountSettings
    }
    ],
    mode: 'history'
})