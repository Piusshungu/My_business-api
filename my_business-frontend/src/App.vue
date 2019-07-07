<template>

</template>

<script>
import Login from './components/Login.vue'
const routes = [
  { path: '/', component: Login },
]

const router = new VueRouter({
  mode: 'history',
  routes
})


export default {
  name: 'login',
  components: {
    Login
  }
}
</script>

<style>

</style>
