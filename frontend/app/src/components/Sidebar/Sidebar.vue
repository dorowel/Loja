<script>
import SidebarLink from "@/components/Sidebar/SidebarLink.vue";
import { collapsed, toggleSidebar, sidebarWidth } from './state'
export default {
  props: {},
  components: { SidebarLink },
  setup() {
    return { collapsed, toggleSidebar, sidebarWidth }
  },

}
</script>

<template>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <div class="sidebar" :style="{ width: sidebarWidth }">
    <h1>
      <span v-if="collapsed">
        <div>V</div>
        <div>S</div>
      </span>
      <span v-else><img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="125" height="125" /></span>

    </h1>
    <br>
    <br>
    <br>
    <br>

    <SidebarLink to="/" icon="fa fa-home">Inicio</SidebarLink>
    <SidebarLink to="/register" icon="fa fa-columns">Cadastro</SidebarLink>
    <SidebarLink to="/analise" icon="fa fa-bar-chart">Análise</SidebarLink>
    <SidebarLink to="/relatorio" icon="fa fa-image">Relatório</SidebarLink>
    <SidebarLink to="/sair" icon="fa fa-share-square-o">Sair</SidebarLink>

    <span
        class="collapse-icon"
        :class="{ 'rotate-180': collapsed }"
        @click="toggleSidebar"
    >
      <i class="fa fa-angle-double-left"></i>
    </span>
  </div>
</template>

<style>
:root {
  --sidebar-bg-color: #2f855a;
  --sidebar-item-hover: #38a169;
  --sidebar-item-active: #276749;
}
</style>

<style scoped>
.sidebar {
  color: white;
  background-color: var(--sidebar-bg-color);
  float: left;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  bottom: 0;
  padding: 0.5em;
  transition: 0.3s ease;
  display: flex;
  flex-direction: column;
}
.sidebar h1 {
  height: 2.5em;
}
.collapse-icon {
  position: absolute;
  bottom: 0;
  padding: 0.75em;
  color: rgba(255, 255, 255, 0.7);
  transition: 0.2s linear;
}
.rotate-180 {
  transform: rotate(180deg);
  transition: 0.2s linear;
}

.logo {
  display: block;
  margin: 0 auto 2rem;
}
</style>