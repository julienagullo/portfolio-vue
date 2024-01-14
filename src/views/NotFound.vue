<template>
  <div id="notfound" class="content">
    <h1>Page non trouvée</h1>
    <hr class="hr-gray" />
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <img
              src="~@/assets/img/page-404.jpg"
              srcset="~@/assets/img/page-404.sm.jpg 720w, ~@/assets/img/page-404.jpg 1440w"
              alt="Page 404">
            <h2>La page que vous recherchez n'existe pas</h2>
            <p>Vous pouvez utiliser le menu de navigation pour revenir sur le site.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Scrollbar from 'smooth-scrollbar'
import anime from 'animejs/lib/anime.es.js'

export default {
  name: 'NotFound',
  data() {
    return {
      scrollBar: Scrollbar,
    }
  },
  mounted() {
    this.scrollBar = Scrollbar.init(document.querySelector('#notfound'), {damping: 0.5})
    anime({targets: '.content', opacity: 1, duration: 150, easing: 'easeInOutCirc'})
  },
}
</script>

<style scoped lang="scss">
@import 'src/assets/scss/variables';
.content {
  section {
    img {
      width: 100%;
      height: auto;
      margin-bottom: 20px;
      border-radius: 5px;
    }
  }
}
</style>
