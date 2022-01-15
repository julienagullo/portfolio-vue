<template>
  <div id="curriculum" class="content">
    <h1>Curriculum vitae</h1>
    <hr class="hr-gray" />
    <section
      v-for="category of projects"
      :key="category"
      class="cv"
      :class="category.color"
    >
      <h2>{{ category.title }}</h2>
      <ul>
        <li v-for="item in category.datas" :key="item">
          <div class="date">{{ item.date }}</div>
          <div class="details">
            <h3 v-html="item.title"></h3>
            <p v-html="item.detail"></p>
          </div>
        </li>
      </ul>
    </section>
  </div>
</template>

<script>
import CV from '@/cv'
import Scrollbar from 'smooth-scrollbar'
import anime from 'animejs/lib/anime.es.js'

export default {
  name: 'Curriculum',
  data() {
    return {
      projects: CV,
      scrollBar: Scrollbar,
    }
  },
  mounted() {
    document.title = 'Expériences et projets professionnels en développement web | jagullo.fr'
    this.scrollBar = Scrollbar.init(document.querySelector('#curriculum'), {damping: 0.2})
    anime({targets: '.content', opacity: 1, duration: 350, easing: 'easeInOutCirc'})
    document.getElementsByClassName('content')[0].style.height = window.innerHeight + 'px' /* mobile issue */
  },
}
</script>

<style scoped lang="scss">
@import 'src/assets/scss/variables';
.content {
  section.cv {
    font-size: 1.5rem;
    margin-bottom: 50px;
    h2 {
      text-transform: uppercase;
      margin: 20px 0 20px 116px;
    }
    ul {
      position: relative;
      list-style: none;
      li {
        display: flex;
        flex-wrap: nowrap;
        position: relative;
        .date {
          width: 80px;
          margin-right: 20px;
          text-align: center;
        }
        .details {
          display: flex;
          width: calc(100% - 80px);
          box-sizing: border-box;
          flex-direction: column;
          padding-left: 20px;
          border-left: 1px solid #c0c0c0;
          padding-bottom: 20px;
          p {
            display: inline-block;
            color: #5b5b5b;
          }
        }
        &:last-child .details {
          border-right: 0;
          border-image: linear-gradient(to bottom, #c0c0c0, rgba(247, 247, 247, 0)) 1 100%;
        }
      }
      :deep(li) {
        .attr {
          font-size: 1.4rem;
          color: $color-gray;
        }
        a::after {
          content: '';
          display: inline-block;
          width: 15px;
          height: 15px;
          vertical-align: -4px;
          background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(25, 97, 199)" class="bi bi-box-arrow-up-right" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/><path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/></svg>');
          background-repeat: no-repeat;
          background-size: 15px 15px;
          margin-left: 10px;
        }
        &:before {
          position: absolute;
          content: '\2B22';
          color: #f7f7f7;
          font-size: 28px;
          left: 85px;
          top: -14px;
        }
        &:after {
          position: absolute;
          content: '\2B22';
          font-size: 17px;
          left: 91px;
          top: -4px;
        }
      }
    }
    &.blue {
      li:after,
      :deep(li) .details .title {
        color: $color-blue;
      }
      :deep(li) .details .title:hover {
        color: $color-blue-hover;
      }
    }
    &.orange {
      li:after,
      :deep(li) .details .title {
        color: $color-orange;
      }
      :deep(li) .details .title:hover {
        color: $color-orange-hover;
      }
    }
    &.red {
      li:after,
      :deep(li) .details .title {
        color: $color-red;
      }
      :deep(li) .details .title:hover {
        color: $color-red-hover;
      }
    }
  }
  section.cv:last-child {
    margin-bottom: 0;
  }
}
/* Responsive */
@media (max-width: 576px) {
  .content section.cv {
    h2 {
      margin-left: 90px;
    }
    ul {
      padding-left: 0;
      li {
        .date {
          width: 75px;
        }
        .detail {
          width: calc(100% - 75px);
        }
        &:before {
          left: 80px !important;
        }
        &:after {
          left: 85px !important;
        }
      }
    }
  }
}
@media (max-width: 768px) {
  .content section.cv ul li {
    &:before {
      left: 84px;
    }
    &:after {
      left: 89px;
    }
  }
}
@media (max-width: 992px) {
  .content section.cv ul li {
    &:before {
      left: 85px;
    }
    &:after {
      left: 90px;
    }
  }
}
@media (min-width: 1399px) {
  .content section.cv ul li {
    &:before {
      left: 86px;
    }
    &:after {
      left: 92px;
    }
  }
}
</style>
