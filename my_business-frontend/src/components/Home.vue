<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      fixed
      app
    >
    <v-spacer></v-spacer>
    
      <v-list dense>
        <v-list-tile 
        v-for="item in menuItems"
         :key="item"
         router
         :to="item.link">
          <v-list-tile-action>
            <v-icon>{{item.icon}}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            {{item.title}}
          </v-list-tile-content>
        </v-list-tile>  
      </v-list>

    </v-navigation-drawer>

    <div id="toolbar">
    <v-toolbar color="#009688" dark fixed app>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>Application</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn color="#009688">Logout
          <v-icon>person</v-icon>
      </v-btn>
    </v-toolbar>
    </div>
    <main>
      <router-view></router-view>
    </main>

    </v-app>
</template>

<script>
  
</script>
<script>
export default {
  data(){
    return{
      drawer: false,
      menuItems: [
        {icon: 'home', title: 'Home', link: '/home'},
        {icon: 'shopping_cart', title: 'Products', link: '/products'},
        {icon: 'contact_mail', title: 'Daily Productions', link: '/dailyproductions'},
        {icon: 'shopping_cart', title: 'Orders', link: '/orders'},
        {icon: 'attach_money', title: 'Expenditures', link: '/expenses'},
        {icon: 'settings', title: 'Account setting', link: '/setting'},
        {icon: 'person', title: 'Logout', link: '/logout'}
      ]
    }
  }
}
</script>

<style>
#inspire{
    font-display: robboto;
    margin-top: 10px;
    font-size: xx-small;
    margin-left: 04%;
}
.toolbar{
    font-size: x-small;
}
</style>