<template>
  <agile
    ref="project"
    class="project"
    :options="options1"
    :as-nav-for="asNavFor1">
    <div
      class="slide"
      v-for="(slide, index) in slides"
      :key="index"
      :class="`slide--${index}`">
      <img :src="slide.url" :alt="slide.alt" />
      <h3>
        {{ slide.title }}<br>
        <span class="copyright">{{ slide.copyright }}</span>
      </h3>
    </div>
  </agile>
  <agile
    ref="thumbnails"
    class="thumbnails"
    :options="options2"
    :as-nav-for="asNavFor2">
    <div
      class="slide slide--thumbniail"
      v-for="(slide, index) in thumbnails"
      :key="index"
      :class="`slide--${index}`"
      @click="$refs.thumbnails.goTo(index); $refs.project.goTo(index)">
      <img :src="slide" />
    </div>
  </agile>
</template>

<script>
import { VueAgile } from 'vue-agile'

export default {
  name: 'Project',
  components: {
    agile: VueAgile,
  },
  data() {
    return {
      asNavFor1: [],
      asNavFor2: [],
      options1: {
        fade: true,
        dots: false,
        navButtons: false,
      },
      options2: {
        autoplay: false,
        centerMode: true,
        dots: false,
        navButtons: false,
        slidesToShow: 3,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 5,
            },
          },
        ],
      },
      slides: [
        {
          url: require('../assets/img/interface-armoireplus.jpg'),
          alt: 'Développement du site e-commerce armoireplus.fr avec Woocommerce',
          title: 'Aide à l\'amélioration graphique et au développement du site Woocommerce armoireplus.fr',
          copyright: 'Copyright : DBA',
        },
        {
          url: require('../assets/img/interface-mecajetdeau.jpg'),
          alt: 'Développement du site vitrine mecajetdeau.com en PHP',
          title: 'Conception du site Internet vitrine mecajetdeau.com',
          copyright: 'Copyright : Méca Jet d\'Eau | Design : Gabriel Uribe',
        },
        {
          url: require('../assets/img/interface-textbeans.jpg'),
          alt: 'Intégration CSS de la plateforme en ligne TextBeans',
          title: 'Intégration LESS/CSS de la plateforme TextBeans',
          copyright: 'Copyright : Lingocentric | Design : Gabriel Uribe',
        },
        {
          url: require('../assets/img/interface-topwings.jpg'),
          alt: 'Conception graphique et développement du menu radial de l\'application Topwings',
          title: 'Conception graphique et développement du menu radial de l\'application Topwings',
          copyright: 'Copyright : Virtual-IT | Client : Thales Aerospace',
        },
        {
          url: require('../assets/img/interface-airbusds.jpg'),
          alt: 'Conception graphique et développement du magazine interactif pour la mission JUICE',
          title: 'Conception graphique et développement du magazine interactif pour la mission JUICE',
          copyright: 'Copyright : Virtual-IT | Client : AIRBUS DS',
        },
        {
          url: require('../assets/img/interface-spherea.jpg'),
          alt: "Développement de l'application de salon U-TEST ®",
          title: "Développement de l'application de salon U-TEST ®",
          copyright: 'Copyright : Virtual-IT | Client : SPHEREA | Design 2D : Gabriel Uribe | Design 3D : Stéphane Agullo',
        },
      ],
      thumbnails: [
        require('../assets/img/interface-armoireplus_minia.jpg'),
        require('../assets/img/interface-mecajetdeau_minia.jpg'),
        require('../assets/img/interface-textbeans_minia.jpg'),
        require('../assets/img/interface-topwings_minia.jpg'),
        require('../assets/img/interface-airbusds_minia.jpg'),
        require('../assets/img/interface-spherea_minia.jpg'),
      ],
    }
  },
  mounted() {
    this.asNavFor1.push(this.$refs.thumbnails)
    this.asNavFor2.push(this.$refs.main)
  },
}
</script>

<style scoped lang="scss">
@import 'src/assets/scss/variables';
.agile {
  &.project {
    position: relative;
    margin-bottom: 30px;
    .slide {
      flex-direction: column;
      h3 {
        position: absolute;
        text-align: center;
        width: 100%;
        padding: 10px;
        margin: 0;
        bottom: 0;
        color: #fff;
        background-color: $color-dark;
        .copyright {
          font-size: 1.2rem;
        }
      }
    }
    &::after {
      position: absolute;
      content: '';
      width: 0;
      height: 0;
      left: 0;
      right: 0;
      margin: 0 auto;
      border-left: 15px solid transparent;
      border-right: 15px solid transparent;
      border-top: 15px solid $color-dark;
    }
  }
  &.thumbnails {
    margin: 0 -5px;
    width: calc(100% + 10px);
  }
  .slide {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 500px;
    box-sizing: border-box;
    color: #fff;
    &.slide--thumbniail {
      cursor: pointer;
      height: 100px;
      padding: 0 5px;
      transition: opacity 0.3s;
      &:hover {
        opacity: 0.75;
      }
    }
    img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      object-position: top center;
    }
  }
}
/* Responsive */
@media (max-width: 767px) {
  .agile.project {
    .slide {
      height: 300px;
      h3 {
        font-size: 1.4rem;
      }
      img {
        object-fit: cover;
        object-position: top center;
      }
    }
  }
}
</style>
