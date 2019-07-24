<template>
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
</template>

<script>
export default {
    data(){
        return{
            
        }
    }
}
</script>

