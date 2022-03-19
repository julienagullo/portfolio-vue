<template>
  <div class="wrapper">
    <Navbar ref="navbar" @toogle-sidebar="toogleSidebar" @toggle-darkmode="toogleDarkmode" />
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
  data() {
    return {
      darkmode: false,
      firstLoad: undefined,
    }
  },
  mounted() {
    window.addEventListener('resize', this.resize)
  },
  methods: {
    toogleDarkmode() {
      this.darkmode = !this.darkmode
      if (this.darkmode) {
        document.body.classList.add('dark')
      } else {
        document.body.classList.remove('dark')
      }
    },
    toogleSidebar() {
      this.$refs.sidebar.toogle()
    },
    sidebarIcon(open) {
      this.$refs.navbar.sidebarIcon(open)
    },
    navigate(e) {
      this.$refs.navbar.navigate(e)
    },
    resize() {
      this.$refs.sidebar.init()
      this.$refs.navbar.init()
    },
  },
}
</script>
