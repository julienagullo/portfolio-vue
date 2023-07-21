<template>
  <vue-cookie-accept-decline
    :debug="false"
    :forceCookies="true"
    @clicked-accept="cookieClickedAccept"
    elementId="cookieConsent"
    position="bottom-left"
    ref="cookieConsent"
    transitionName="slideFromBottom"
    type="floating">
    <!-- Optional -->
    <template #message>
      <img src="~@/assets/img/cookie-consent.jpg" width="100" height="100" alt="Consentement des cookies">
      <p>De savoureux cookies sont utilisés pour analyser le trafic du site et l'améliorer.</p>
      <a href="/contact" @click.prevent="navigate($event)" data-name="Contact">Plus d'informations</a>
    </template>
    <!-- Optional -->
    <template #declineContent>Refuser</template>
    <!-- Optional -->
    <template #acceptContent>Accepter</template>
  </vue-cookie-accept-decline>
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
    cookieClickedAccept() {
      let script = document.createElement('script')
      script.src = 'https://www.googletagmanager.com/gtag/js?id=G-JLQLPG8D93'
      document.head.append(script)
    },
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
