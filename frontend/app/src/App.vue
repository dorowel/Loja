<template>
  <div :style="{ 'margin-left': sidebarWidth }">
    <Navbar v-if="$route.path !== '/login'"/>
    <Sidebar v-if="$route.path !== '/login'" />
    <router-view />
  </div>
</template>

<script>
import Sidebar from './components/Sidebar/Sidebar.vue'
import { sidebarWidth } from './components/Sidebar/state'
import Navbar from './components/Sidebar/Navbar.vue';

export default {
  components: { Sidebar, Navbar },

  setup() {
    return { sidebarWidth }
  },
}
</script>
<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#nav {
  padding: 30px;
}
#nav a {
  font-weight: bold;
  color: #2c3e50;
}
#nav a.router-link-exact-active {
  color: #42b983;
}

/* Estilos globais para todos os componentes dentro do escopo do componente pai */
nav {
  background-color: #333;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav ul li {
  margin-left: 20px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
}



</style>