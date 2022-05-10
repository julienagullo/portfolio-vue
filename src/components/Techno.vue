<template>
  <div class="col-12 col-sm-12 col-md-6 col-lg-4 item-soft" @mouseover="showTechno" @mouseleave="hideTechno" itemprop="itemListElement" itemscope itemtype="http://schema.org/Offer">
    <img :src="picture" width="100" height="100" :alt="name">
    <div class="description" itemprop="itemOffered" itemscope itemtype="http://schema.org/Service">
      <h3 itemprop="name">{{ name }}</h3>
      <p itemprop="description">{{ desc }}</p>
    </div>
  </div>
</template>

<script>
import anime from 'animejs/lib/anime.es.js'

export default {
  name: 'Techno',
  props: ['name', 'logo', 'desc'],
  data() {
    return {
      animation: anime,
    }
  },
  mounted() {
    const image = this.$el.getElementsByTagName('img')[0]
    image.style.transform = 'scale(0.7)'
  },
  methods: {
    initTechno() {
      const title = this.$el.getElementsByTagName('h3')[0]
      title.innerHTML = title.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
      const paragraph = this.$el.getElementsByTagName('p')[0]
      paragraph.innerHTML = paragraph.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    },
    showTechno() {
      const title = this.$el.getElementsByTagName('h3')[0]
      const image = this.$el.getElementsByTagName('img')[0]
      const paragraph = this.$el.getElementsByTagName('p')[0]
      if (title.getElementsByTagName('span').length == 0) {
        this.initTechno()
      }
      this.animation({
        targets: image,
        scale: 0.8,
        duration: 200,
        easing: 'easeInOutSine',
      })
      this.animation.timeline({ loop: false })
        .add({
          targets: title.getElementsByClassName('letter'),
          opacity: [1, 0],
          easing: 'easeInOutSine',
          duration: 25,
          delay: anime.stagger(30, {direction: 'reverse'}),
          complete: () => {
            title.style.display = 'none'
          },
        })
        .add({
          targets: paragraph.getElementsByClassName('letter'),
          opacity: [0, 1],
          easing: 'easeInOutSine',
          duration: 25,
          delay: anime.stagger(15),
          begin: () => {
            paragraph.style.display = 'inline-block'
          },
        })
    },
    hideTechno() {
      const title = this.$el.getElementsByTagName('h3')[0]
      const image = this.$el.getElementsByTagName('img')[0]
      const paragraph = this.$el.getElementsByTagName('p')[0]
      this.animation.remove([image, title.getElementsByClassName('letter'), paragraph.getElementsByClassName('letter')])
      this.animation({
        targets: image,
        scale: 0.7,
        duration: 200,
        easing: 'easeInOutSine',
      })
      this.animation({
        targets: paragraph.getElementsByClassName('letter'),
        opacity: [1, 0],
        duration: 200,
        easing: 'easeInOutSine',
        complete: () => {
          paragraph.style.display = 'none'
          anime({
            targets: title.getElementsByClassName('letter'),
            opacity: [0, 1],
            duration: 200,
            easing: 'easeInOutSine',
            begin: () => {
              title.style.display = 'block'
            },
          })
        },
      })
    },
  },
  computed: {
    picture: function() {
      return require('../assets/img/' + this.logo)
    },
  },
}
</script>

<style scoped lang="scss">
@import 'src/assets/scss/variables';
.item-soft {
  display: flex;
  flex-direction: row;
  align-items: center;
  margin-bottom: 20px;
  border-radius: 3px;
  transition: background-color 200ms ease-in-out, box-shadow 200ms ease-in-out;
  img {
    pointer-events: none;
    margin-right: 10px;
  }
  .description {
    pointer-events: none;
    h3 {
      pointer-events: none;
    }
    p {
      display: none;
      margin-bottom: 0;
    }
  }
}
.item-soft:hover {
  background-color: #fafafa;
  -webkit-box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.08);
  box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.08);
}
</style>
