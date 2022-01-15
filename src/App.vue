<template>
  <div class="wrapper">
    <Navbar ref="navbar" @toogle-sidebar="toogleSidebar" />
    <Sidebar ref="sidebar" @open-sidebar="sidebarIcon" />
    <router-view ref="content" @navbar-navigate="navigate" />
  </div>
</template>

<script>
import Sidebar from '@/components/Sidebar'
import Navbar from '@/components/Navbar'

export default {
  components: {
    Navbar,
    Sidebar,
  },
  mounted() {
    document.body.style.height = document.documentElement.style.height = window.innerHeight + 'px' /* mobile issue */
  },
  methods: {
    toogleSidebar() {
      this.$refs.sidebar.toogle()
    },
    sidebarIcon(open) {
      this.$refs.navbar.sidebarIcon(open)
    },
    navigate(e) {
      this.$refs.navbar.navigate(e)
    },
  },
}
</script>
