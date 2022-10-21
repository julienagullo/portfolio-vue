<template>
  <nav class="navbar">
    <ul id="nav-list">
      <li @click="$emit('toogle-sidebar')"><i class="bi bi-person-bounding-box"></i> <span>Profil</span></li>
      <li @click="navigate($event)" data-name="Home"><i class="bi bi-house"></i> <span>Accueil</span></li>
      <li @click="navigate($event)" data-name="Curriculum"><i class="bi bi-ui-checks"></i> <span>Curriculum</span></li>
      <li @click="navigate($event)" data-name="Source"><i class="bi bi-code-slash"></i> <span>Sources</span></li>
      <li @click="navigate($event)" data-name="Contact"><i class="bi bi-envelope"></i> <span>Contact</span></li>
      <li class="break"></li>
      <li><a href="https://jagullo.fr/blog/" target="_blank"><i class="bi bi-wordpress"></i> <span>Blog</span></a></li>
      <li><a href="https://github.com/julienagullo" target="_blank"><i class="bi bi-github"></i> <span>Github</span></a></li>
    </ul>
    <div class="form-check form-control-lg form-switch">
      <input type="checkbox" class="form-check-input" id="darkMode" @change="$emit('toggle-darkmode')">
      <label class="form-check-label" for="darkMode"><i class="bi bi-moon-fill"></i></label>
    </div>
    <p class="brand">jagullo.fr</p>
  </nav>
</template>

<script>
import anime from 'animejs/lib/anime.es.js'

export default {
  name: 'Navebar',
  mounted() {
    this.$router.isReady().then(() => {
      this.highlight(this.$route.name)
    })
    this.init()
  },
  methods: {
    init() {
      document.getElementsByClassName('navbar')[0].style.height = window.innerHeight + 'px'
    },
    navigate(e) {
      const name = e.target.dataset.name
      if (this.$router.currentRoute.value.name !== name) {
        this.highlight(name)
        anime({
          targets: '#' + this.$router.currentRoute.value.name.toLowerCase(),
          opacity: 0,
          duration: 250,
          easing: 'easeInOutCirc',
          complete: () => {
            this.$router.push({ name: name })
          },
        })
      }
    },
    highlight(name) {
      let list = document.getElementById('nav-list').getElementsByTagName('li')
      for (const item of list) {
        if (item.dataset.name !== undefined) {
          if (item.dataset.name === name) {
            item.classList.add('actived')
          } else {
            item.classList.remove('actived')
          }
        }
      }
    },
    sidebarIcon(open) {
      let icon = document.getElementById('nav-list').getElementsByClassName('bi-person-bounding-box')[0]
      if (open) {
        icon.classList.add('color-orange')
      } else {
        icon.classList.remove('color-orange')
      }
    },
  },
}
</script>

<style scoped lang="scss">
@import 'src/assets/scss/variables';
nav.navbar {
  display: flex;
  flex-direction: column;
  width: 175px;
  height: 100vh;
  top: 0;
  left: 0;
  line-height: 1.6;
  background-color: $color-dark;
  margin: 0;
  padding: 0;
  z-index: 1000;
  ul {
    width: 100%;
    list-style: none;
    margin: 0;
    padding: 0;
    li.break {
      width: auto;
      height: 1px;
      margin: 0 10px;
      background-color: #6b6b6b;
    }
    li:not(.break) {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      cursor: pointer;
      text-align: left;
      padding: 3px 7px 3px 12px;
      transition: background-color 250ms ease-in-out, color 250ms ease-in-out;
      a {
        display: inline-block;
        width: 100%;
        color: inherit;
        text-decoration: none;
      }
      i {
        font-size: 2rem;
        color: #c3c3c3;
        margin: 0 10px 4px 0;
        pointer-events: none;
      }
      span {
        color: #fff;
        font-size: 1.5rem;
        font-weight: bold;
        text-transform: uppercase;
        pointer-events: none;
      }
    }
    li:not(.break):hover,
    li.actived {
      background-color: #2b2e48;
      i, span {
        color: $color-orange;
      }
    }
  }
  .form-switch {
    margin-top: auto;
    justify-self: flex-end;
    .form-check-input {
      display: inline-block;
      margin: 5px 10px 0 0;
    }
    .form-check-label i {
      color: #fff;
    }
  }
  p.brand {
    color: #9d9d9d;
    font-size: 1.65rem;
    justify-self: flex-end;
  }
}
/* Responsive */
@media (max-width: 576px) {
  nav.navbar {
    width: 40px;
    ul#nav-list {
      li.break {
        margin: 0;
      }
      li:not(.break) {
        padding: 3px 0 3px 7px;
        i {
          margin: 0;
        }
        span {
          display: none;
        }
      }
    }
    .form-switch {
      display: flex;
      flex-direction: column-reverse;
      margin-bottom: 10px;
      .form-check-input {
        margin-right: 0;
      }
      .form-check-label {
        padding-left: 2px;
      }
    }
    p {
      display: none;
    }
  }
}
</style>
