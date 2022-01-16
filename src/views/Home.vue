<template>
  <div id="home" class="content">
    <h1>Développeur web sur Pau, Orthez et Tarbes</h1>
    <hr class="hr-gray" />
    <section class="intro">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12 col-xl-6">
            <h2>Création <span class="color-red">de site Internet</span> professionnel</h2>
            <p>Bienvenue sur mon site Internet / portfolio dédié au développement web pour les entreprises et les professionnels. Spécialisé depuis 15 ans en gestion de projet, communication, design et développement, j'apporte des solutions techniques en étudiant chaque projet afin de répondre au mieux aux besoins de mes clients.</p>
            <hr class="hr-gray">
            <p>Du cahier des charges à la mise en ligne, je conseille sur chaque étape de votre projet pour déterminer la meilleure approche en terme de communication et de technologie. La création d'un site internet professionnel vous permettra d'augmenter votre visibilité sur les moteurs de recherche et d'améliorer l'image de marque de votre société.</p>
            <a href="/curriculum" class="btn btn-primary" @click.prevent="$emit('navbar-navigate', $event)" data-name="Curriculum" title="Curriculum vitae">Voir mon curriculum</a>
          </div>
          <div class="col-12 col-md-12 col-lg-12 col-xl-6">
            <div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="~@/assets/img/developpement-web.jpg" class="d-block w-100" alt="Conception de site Internet modulable">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>Site Internet modulable</h3>
                    <p>Développement de site Internet par brique logicielle</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <img src="~@/assets/img/arborescence-site.jpg" class="d-block w-100" alt="Étude de l'architecture de site Internet">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>Architecture du site</h3>
                    <p>Réflexion sur l'arborescence de votre site Internet</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <img src="~@/assets/img/arborescence-page.jpg" class="d-block w-100" alt="Étude de la mise en page de site Internet">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>Architecture des pages</h3>
                    <p>Organisation du contenu pour mobile et ordinateur</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contract">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6 freelance">
            <h2>Micro-entreprise</h2>
            <h3><i class="bi bi-clock-history"></i> Projet sur le court terme</h3>
            <p>En tant qu'indépendant j'exerce une activité libérale sous le statut de micro-entreprise. Après étude de vos besoins et de la faisabilité, j'élabore un cahier des charges et une proposition commerciale. Le projet se découpe en différentes phases avec des validations aux étapes clés pour réduire les risques et répondre aux mieux à vos attentes.</p>
          </div>
          <div class="col-12 col-md-12 col-lg-6 employee">
            <h2>Contrat de travail</h2>
            <h3><i class="bi bi-calendar3"></i> Projet sur le moyen et long terme</h3>
            <p>Pour des projets complexes nécessitant du temps de développement je peux me rendre disponible au sein de votre entreprise sous un contrat de travail. Nous élaborerons un planning suivant vos priorités et mettrons en place une organisation efficace. Je propose de travailler avec une méthodologie agile pour améliorer le travail en équipe.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="knowledge">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h2>Découvrir <span class="color-orange">les services</span> proposés</h2>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-3 text-center item-responsive">
            <img src="~@/assets/img/img-responsive.png" width="320" height="350" class="img-fluid" alt="Design responsive de site Internet">
            <h3>Responsive design</h3>
            <p class="align-bottom" @click="closeKnowledge('responsive')">La charte graphique de votre site Internet peut se faire de 2 façons. En utilisant un template gratuit ou payant pour réduire les coûts de développement. Ou bien en élaborant un design original sur-mesure pour présenter le contenu de votre site de façon optimale.</p>
            <button class="btn btn-primary" @click="openKnowledge('responsive')">Plus d'info</button>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-3 text-center item-development">
            <img src="~@/assets/img/img-development.png" width="350" height="350" class="img-fluid" alt="Développement de site Internet">
            <h3>Développement</h3>
            <p class="align-bottom" @click="closeKnowledge('development')">Selon votre budget et vos attentes je peux réaliser un site sous WordPress ou avec le framework Vue.js plus performant et optimisé ou bien un mélange de ces 2 solutions. N'hésitez pas à me contacter pour déterminer la technologie idéale à vos besoins.</p>
            <button class="btn btn-primary" @click="openKnowledge('development')">Plus d'info</button>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-3 text-center item-writing">
            <img src="~@/assets/img/img-writing.png" width="350" height="350" class="img-fluid" alt="Rédaction du contenu de site Internet">
            <h3>Rédaction web</h3>
            <p class="align-bottom" @click="closeKnowledge('writing')">Le contenu de votre site est primordial pour apparaître dans les premières pages des moteurs de recherche. Je propose de vous aider dans la rédaction de vos pages et articles de façon optimisée et de vous conseiller pour réaliser le référencement naturel de votre site.</p>
            <button class="btn btn-primary" @click="openKnowledge('writing')">Plus d'info</button>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-3 text-center item-optimization">
            <img src="~@/assets/img/img-optimization.png" width="350" height="350" class="img-fluid" alt="Optimisation technique de site Internet">
            <h3>Optimisation</h3>
            <p class="align-bottom" @click="closeKnowledge('optimization')">L'optimisation technique et sémantique consiste à améliorer certains facteurs clés d'un site pour augmenter ses positions sur les moteurs de recherche. Vous avez déjà un site ? Utilisez l'outil en ligne Google PageSpeed pour connaître votre score de performance.</p>
            <button class="btn btn-primary" @click="openKnowledge('optimization')">Plus d'info</button>
          </div>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 d-flex flex-column align-items-center">
            <h2 class="text-center">Pour toute demande d'information ou une estimation gratuite</h2>
            <a href="/contact" class="btn btn-primary" @click.prevent="$emit('navbar-navigate', $event)" data-name="Contact" title="Demande de renseignement">Contactez-moi</a>
          </div>
        </div>
      </div>
    </section>
    <section class="techno">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h2>Maîtrise <span class="color-blue">des technologies</span> du web</h2>
          </div>
          <Techno name="Adobe Photoshop" logo="logo-adobe_photoshop.png" desc="Logiciel de retouche d'images et de conception graphique" />
          <Techno name="Adobe Illustrator" logo="logo-adobe_illustrator.png" desc="Logiciel d'édition graphique vectoriel pour le web et le print" />
          <Techno name="Adobe Animate" logo="logo-adobe_animate.png" desc="Logiciel d'animation vectorielle pour le web et la vidéo" />
          <Techno name="Affinity Photo" logo="logo-affinity_photo.png" desc="Logiciel de retouche d'images et de conception graphique" />
          <Techno name="Affinity Designer" logo="logo-affinity_designer.png" desc="Logiciel d'édition graphique vectoriel pour le web et le print" />
          <Techno name="Affinity Publisher" logo="logo-affinity_publisher.png" desc="Logiciel de publication pour l'impression et les documents PDF" />
          <Techno name="PhpStorm" logo="logo-phpstorm.png" desc="Logiciel ou IDE de programmation dédié aux langages du web" />
          <Techno name="Javascript" logo="logo-javascript.png" desc="Langage de programmation pour le développement web" />
          <Techno name="PHP" logo="logo-php.png" desc="Langage de programmation pour le développement web" />
          <Techno name="Postman" logo="logo-postman.png" desc="Logiciel pour tester et faciliter la conception de services web RESTful" />
          <Techno name="MySql" logo="logo-mysql.png" desc="Serveur de bases de données pour le web et les applications" />
          <Techno name="MariaDB" logo="logo-mariadb.png" desc="Serveur de bases de données pour le web et les applications" />
          <Techno name="Github" logo="logo-github.png" desc="Plateforme en ligne d'hébergement et de gestion de développement logiciel" />
          <Techno name="Git" logo="logo-git.png" desc="Logiciel de gestion des versions pour le développement en équipe" />
          <Techno name="Svn" logo="logo-svn.png" desc="Logiciel de gestion des versions pour le développement en équipe" />
          <Techno name="Vue.js" logo="logo-vuejs.png" desc="Framework Javascript pour le développement web et les applications mobiles" />
          <Techno name="jQuery" logo="logo-jquery.png" desc="Framework Javascript pour améliorer les interfaces des pages web" />
          <Techno name="Less" logo="logo-less.png" desc="Préprocesseur CSS pour le développement des feuilles de style" />
          <Techno name="Sass / Scss" logo="logo-sass.png" desc="Préprocesseur CSS pour le développement des feuilles de style" />
          <Techno name="Bootstrap" logo="logo-bootstrap.png" desc="Framework CSS pour faciliter le développement d'interface web" />
          <Techno name="Tailwind CSS" logo="logo-tailwind_css.png" desc="Framework CSS pour faciliter le développement d'interface web" />
          <Techno name="WordPress" logo="logo-wordpress.png" desc="Système de gestion de contenu pour la création de site Internet" />
          <Techno name="Woocommerce" logo="logo-woocommerce.png" desc="Extension de WordPress pour développer une boutique en ligne" />
          <Techno name="Google Analytics" logo="logo-google_analytics.png" desc="Outil en ligne d'analyse d'audience pour un site ou une application mobile" />
          <Techno name="Yourtext Guru" logo="logo-yourtext_guru.png" desc="Outil en ligne pour la rédaction de contenu optimisé au référencement" />
          <Techno name="Screaming Frog" logo="logo-screaming_frog.png" desc="Logiciel d'analyse et d'extraction des données d'un site Internet" />
          <Techno name="Ubersuggest" logo="logo-ubersuggest.png" desc="Outil en ligne pour analyser les mots clés recherchés sur Internet" />
        </div>
      </div>
    </section>
    <section class="quote">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 d-flex flex-column align-items-center">
            <h2 class="text-center">« Tout le monde a une idée. Mais tout est question d'exécuter cette idée et d'encourager les gens à vous aider à travailler dessus. »</h2>
            <p class="text-center">Jack Dorsey - Cofondateur de Twitter</p>
          </div>
        </div>
      </div>
    </section>
    <section class="project">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h2>Focus sur <span class="color-orange">quelques projets</span> réalisés</h2>
          </div>
          <div class="col-12">
            <Project />
          </div>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 d-flex flex-column align-items-center">
            <h2 class="text-center">Besoin d'un conseil pour vous aider dans votre projet ?</h2>
            <a href="/contact" class="btn btn-primary" @click.prevent="$emit('navbar-navigate', $event)" data-name="Contact" title="Demande de renseignement">Contactez-moi</a>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Scrollbar from 'smooth-scrollbar'
import anime from 'animejs/lib/anime.es.js'
import Techno from '@/components/Techno'
import Project from '@/components/Project'

export default {
  name: 'Home',
  components: {Techno, Project},
  data() {
    return {
      scrollBar: Scrollbar,
    }
  },
  mounted() {
    document.title = 'Développeur web sur Pau, Orthez et Tarbes | jagullo.fr'
    this.scrollBar = Scrollbar.init(document.querySelector('#home'), {damping: 0.2})
    anime({targets: '.content', opacity: 1, duration: 350, easing: 'easeInOutCirc'})
    document.getElementsByClassName('content')[0].style.height = window.innerHeight + 'px' /* mobile issue */
  },
  methods: {
    openKnowledge(target) {
      const element = document.getElementsByClassName('item-' + target)[0].getElementsByTagName('p')[0]
      element.style.pointerEvents = 'auto'
      anime({
        targets: element,
        opacity: 1,
        top: ['-200px', '0'],
        duration: 500,
        easing: 'easeInOutBack',
      })
    },
    closeKnowledge(target) {
      const element = document.getElementsByClassName('item-' + target)[0].getElementsByTagName('p')[0]
      element.style.pointerEvents = 'none'
      anime({
        targets: element,
        opacity: 0,
        top: ['0', '300px'],
        duration: 350,
        easing: 'easeInBack',
        complete: () => {
          element.style.top = 0
        },
      })
    },
  },
}
</script>

<style scoped lang="scss">
@import 'src/assets/scss/variables';
.content {
  section {
    position: relative;
    margin-bottom: 60px;
    h2 {
      margin-bottom: 30px;
    }
    h3 {
      margin-bottom: 10px;
    }
    p {
      text-align: justify;
    }
    i.bi {
      margin-right: 5px;
    }
    &:last-child {
      margin-bottom: 0;
    }
  }
  section.intro {
    .row > div:first-child {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: flex-start;
      h2 {
        margin-bottom: 20px;
      }
      hr {
        margin: 10px 0 20px;
      }
      .btn {
        margin-top: 10px;
      }
    }
    .row > div:last-child {
      display: flex;
      flex-direction: column;
      justify-content: center;
      max-width: 800px;
      margin: 0 auto;
      .carousel .carousel-inner {
        border-radius: 3px;
        .carousel-item {
          border-radius: 3px;
          transition: transform 750ms ease-in-out;
          .carousel-caption {
            right: 0;
            left: 0;
            bottom: 0;
            color: #fff;
            padding-bottom: 2.75rem;
            background-color: rgba(0, 0, 0, 0.7);
            p {
              text-align: center;
            }
          }
        }
      }
    }
  }
  section.contract {
    .freelance,
    .employee {
      color: #fff;
      padding: 20px;
      h2 {
        margin-bottom: 20px;
      }
    }
    .freelance {
      border-radius: 3px 0 0 3px;
      background-color: $color-dark;
    }
    .employee {
      border-radius: 0 3px 3px 0;
      background-color: $color-blue-hover;
    }
  }
  section.knowledge {
    div[class*="item"] {
      position: relative;
      margin-bottom: 0;
      img {
        max-width: 200px;
        height: auto;
        z-index: 1;
      }
      h3 {
        margin: 10px auto;
      }
      p {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        pointer-events: none;
        opacity: 0;
        top: 0;
        left: 10px;
        width: calc(100% - 10px);
        height: 100%;
        color: #fff;
        border-radius: 5px;
        padding: 15px;
        z-index: 2;
        cursor: pointer;
        box-shadow: none;
        transition: box-shadow 200ms ease-in-out;
      }
      p:hover {
        box-shadow: 0 0 7px rgba(0, 0, 0, 0.5);
      }
      .btn {
        width: calc(100% - 20px);
      }
    }
    .item-responsive p {
      background-color: $color-blue;
    }
    .item-development p {
      background-color: $color-orange;
    }
    .item-writing p {
      background-color: $color-red;
    }
    .item-optimization p {
      background-color: $color-dark;
    }
  }
  section.contact {
    padding: 30px;
    color: #fff;
    background-color: $color-blue-hover;
    h2 {
      margin-bottom: 20px;
    }
  }
  section.quote {
    padding: 30px;
    color: #fff;
    background-color: $color-blue-hover;
    h2 {
      font-size: 1.5rem;
      margin-bottom: 20px;
    }
    p {
      margin-bottom: 0;
    }
  }
  section.project {
    :deep(.my-gallery) {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }
  }
}
/* Responsive */
@media (max-width: 991px) {
  .content {
    section.contract {
      .freelance {
        border-radius: 5px 5px 0 0;
      }
      .employee {
        border-radius: 0 0 5px 5px;
      }
    }
  }
}
@media (max-width: 1201px) {
  .content {
    section.intro {
      .row > div:last-child {
        margin-top: 30px;
      }
    }
    section.knowledge {
      div[class*="item"] {
        margin-bottom: 20px;
      }
    }
  }
}
</style>
