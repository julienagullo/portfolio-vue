<template>
  <div id="sidebar" @mouseenter="showScroll" @mouseleave="hideScroll">
    <div class="sidebar-header">
      <div class="close" @click="close">
        <button title="Fermer Profil">X</button>
      </div>
      <div class="photo">
        <img :src="getPhoto()" alt="Développeur web sur Pau, Orthez et Tarbes" width="300" height="356">
      </div>
    </div>
    <div class="sidebar-content">
      <h2>Informations</h2>
      <p class="border-blue">
        <img src="~@/assets/img/photo-title.png" width="115" height="70" class="img-title"> AGULLO<br>
        07 52 63 77 22<br>
        contact@jagullo.fr
      </p>
      <h2>Compétences</h2>
      <p class="border-orange">
        Gestion projet multimédia<br>
        Graphisme <span class="attr">[web & print]</span><br>
        Développement <span class="attr">[web]</span><br>
        Optimisation <span class="attr">[web]</span><br>
        Rédaction <span class="attr">[web]</span><br>
        Veille stratégique
      </p>
      <h2>Connaissances</h2>
      <p class="border-red">
        <span class="title">Logiciels</span><br>
        Photoshop, Illustrator, Animate, Affinity, PhpStorm, WordPress, WooCommerce, Apache, PhpMyAdmin, Node.js, Git, Svn
      </p>
      <p class="border-red">
        <span class="title">Langages</span><br>
        HTML, CSS, LESS, SCSS, PHP, JS, SQL<br>
        Framework : Bootstrap, jQuery, Vue.js
      </p>
      <p class="border-red">
        <span class="title">Langue vivante</span><br>
        Anglais intermédiaire
      </p>
      <h2>Centres d'intérêt</h2>
      <p class="border-blue">
        <span class="title">Général</span><br>
        Écologie, Littérature, Cinéma
      </p>
      <p class="border-blue">
        <span class="title">Informatique</span><br>
        Internet, Programmation, PAO
      </p>
      <p class="border-blue">
        <span class="title">Sport</span><br>
        Running, Musculation, Tennis
      </p>
    </div>
  </div>
</template>

<script>
import Scrollbar from 'smooth-scrollbar'

export default {
  name: 'Sidebar',
  data() {
    return {
      open: false,
      counter: -1,
      scrollBar: Scrollbar,
    }
  },
  mounted() {
    this.scrollBar = Scrollbar.init(document.querySelector('#sidebar'), {damping: 0.2})
    document.getElementById('sidebar').style.height = window.innerHeight + 'px' /* mobile issue */
  },
  methods: {
    close() {
      this.open = false
      document.getElementById('sidebar').classList.remove('open')
      document.getElementsByClassName('wrapper')[0].classList.remove('sidebar')
      this.$emit('open-sidebar', false)
    },
    toogle() {
      this.open = !this.open
      const sidebar = document.getElementById('sidebar')
      const wrapper = document.getElementsByClassName('wrapper')[0]
      if (this.open) {
        this.counter = this.counter >= 5 ? 1 : this.counter + 1
        wrapper.classList.add('sidebar')
        sidebar.classList.add('open')
      } else {
        wrapper.classList.remove('sidebar')
        sidebar.classList.remove('open')
      }
      this.$emit('open-sidebar', this.open)
    },
    showScroll() {
      const scrollbar = document.getElementById('sidebar').getElementsByClassName('scrollbar-track-y')[0]
      scrollbar.classList.add('show')
      this.scrollBar.update()
    },
    hideScroll() {
      const scrollbar = document.getElementById('sidebar').getElementsByClassName('scrollbar-track-y')[0]
      scrollbar.classList.remove('show')
      this.scrollBar.update()
    },
    getPhoto() {
      return this.counter > 0
        ? require('../assets/img/photo-profil-' + this.counter + '.jpg')
        : require('../assets/img/photo-profil-1.jpg')
    },
  },
}
</script>

<style scoped lang="scss">
@import 'src/assets/scss/variables';
#sidebar {
  position: absolute;
  width: 250px;
  top: 0;
  left: 0;
  height: 100vh;
  margin: 0;
  padding: 0;
  line-height: 1.3;
  background: #f1f1f1;
  border-right: 1px solid #dbdbdb;
  overflow-y: scroll;
  transform: translateX(-250px);
  transition: transform $delay-anim ease-in-out;
  box-shadow: 9px 0 11px rgba(0, 0, 0, 0.15);
  z-index: 999;
  &.open {
    transform: translateX(175px);
  }
  .sidebar-header {
    height: 200px;
    padding: 15px;
    clear: both;
    .close {
      width: 40px;
      height: 40px;
      text-align: center;
      cursor: pointer;
      float: right;
      button {
        border: 0;
        font-size: 2rem;
        color: $color-gray;
        background-color: transparent;
        transition: color 200ms ease-in-out;
      }
    }
    .close:hover button {
      color: $color-orange;
    }
    .photo {
      width: 175px;
      padding: 0 5px 5px;
      background-color: #fff;
      box-shadow: 3px 3px 9px rgba(0, 0, 0, 0.2);
      float: left;
      img {
        width: 165px;
        height: auto;
      }
    }
  }
  .sidebar-content {
    padding: 15px;
    .img-title {
      width: 38px;
      height: auto;
      padding-top: 2px;
      image-rendering: high-quality;
      image-rendering: -webkit-optimize-contrast;
    }
    h2 {
      font-size: 1.75rem;
      color: $color-gray;
      margin-top: 20px;
      text-align: left;
      text-transform: uppercase;
    }
    p {
      width: 100%;
      font-size: 1.5rem;
      text-align: left;
      margin-top: 20px;
      padding-left: 10px;
      border-left: 2px solid;
      .title {
        font-size: 1.4rem;
        color: $color-gray;
        text-transform: uppercase;
      }
      .attr {
        font-size: 1.3rem;
        color: $color-gray;
      }
    }
  }
}
/* Responsive */
@media (max-width: 576px) {
  #sidebar {
    &.open {
      transform: translateX(40px);
    }
  }
}
</style>
