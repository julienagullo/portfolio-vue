<template>
  <div id="source" class="content">
    <h1>Projets open source</h1>
    <hr class="hr-gray" />
    <section class="project portfolio-vue">
      <h2>portfolio Vue</h2>
      <img src="~@/assets/img/source-vuejs.png" class="logo" width="65" height="25" alt="Vuejs">
      <p>Code source de ce portfolio en ligne réalisé avec Vuejs et Bootstrap pour découvrir ce framework JavaScript.</p>
      <a href="https://github.com/julienagullo/portfolio-vue" target="_blank" class="btn btn-primary" title="Projet rwdKit sur Github"><i class="bi bi-github"></i> Voir le projet</a>
    </section>
    <section class="project cookiesconsent">
      <h2>cookies Consent</h2>
      <img src="~@/assets/img/source-jquery.png" class="logo" width="102" height="25" alt="jQuery write less, do more">
      <p>Librairie jQuery servant à charger ou non Google Analytics par un modal de consentement sur son site Internet.</p>
      <a href="https://github.com/julienagullo/cookies-consent" target="_blank" class="btn btn-primary" title="Projet cookiesConsent sur Github"><i class="bi bi-github"></i> Voir le projet</a>
      <a href="https://jagullo.fr/cookies-consent/" target="_blank" class="btn btn-primary" title="Démo de la librairie cookiesConsent"><i class="bi bi-window"></i> Démo</a>
    </section>
    <section class="project rwdkit">
      <h2>rwdKit</h2>
      <img src="~@/assets/img/source-jquery.png" class="logo" width="102" height="25" alt="jQuery write less, do more">
      <p>Librairie jQuery facilitant le développement d'interface responsive en affichant le nom du breakpoint courant.</p>
      <a href="https://github.com/julienagullo/rwdKit" target="_blank" class="btn btn-primary" title="Projet rwdKit sur Github"><i class="bi bi-github"></i> Voir le projet</a>
      <a href="https://jagullo.fr/rwdkit/" target="_blank" class="btn btn-primary" title="Démo de la librairie rwdKit"><i class="bi bi-window"></i> Démo</a>
    </section>
  </div>
</template>

<script>
import Scrollbar from 'smooth-scrollbar'
import anime from 'animejs/lib/anime.es.js'

export default {
  name: 'Source',
  data() {
    return {
      scrollBar: Scrollbar,
    }
  },
  mounted() {
    this.scrollBar = Scrollbar.init(document.querySelector('#source'), {damping: 0.2})
    anime({targets: '.content', opacity: 1, duration: 150, easing: 'easeInOutCirc'})
  },
}
</script>

<style scoped lang="scss">
@import 'src/assets/scss/variables';
.content {
  section.project {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #c0c0c0;
    -webkit-box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.08);
    box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.08);
    border-radius: 3px;
    h2,
    .logo {
      float: left;
    }
    .logo {
      margin: 2px 0 0 15px;
    }
    p {
      clear: both;
      padding-top: 7px;
      text-shadow: 0 0 0.2em #fafafa, 0 0 0.2em #fafafa, 0 0 0.2em #fafafa;
    }
    .btn {
      font-size: 1.4rem;
      font-weight: bold;
      text-transform: uppercase;
      background-color: $color-blue;
      i {
        font-size: 1.5rem;
        margin-right: 5px;
      }
      &:hover {
        background-color: $color-blue-hover;
      }
      &:last-child {
        margin-left: 20px;
      }
    }
  }
  section.project.portfolio-vue .btn {
    margin-left: 0;
  }
  .portfolio-vue {
    background: #fafafa url('~@/assets/img/banner-portfoliovue.jpg') no-repeat right center;
  }
  .cookiesconsent {
    background: #fafafa url('~@/assets/img/banner-cookiesconsent.jpg') no-repeat right center;
  }
  .rwdkit {
    background: #fafafa url('~@/assets/img/banner-rwdkit.jpg') no-repeat right center;
  }
}
/* Responsive */
@media (max-width: 576px) {
  .content section.project {
    .btn {
      display: block;
      width: 100%;
      margin: 15px 0 0 !important;
    }
  }
}
@media (max-width: 768px) {
  .content section.project {
    background: #fafafa;
  }
}
</style>
