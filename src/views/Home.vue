<template>
  <div id="home" class="content">
    <h1>Webmaster et développeur web sur Pau et Tarbes</h1>
    <hr class="hr-gray" />
    <section class="intro">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12 col-xl-6 intro-description">
            <h2>Création <span class="color-red">de sites Internet</span> professionnels</h2>
            <p>Bienvenue sur mon site / portfolio dédié <strong>au développement web</strong> pour les entreprises et les professionnels. Spécialisé depuis 15 ans en gestion de projet, communication, design et programmation, j'apporte des solutions techniques en étudiant chaque projet afin de répondre au mieux aux besoins de mes clients.</p>
            <hr class="hr-gray">
            <p>Du cahier des charges à la mise en ligne, je conseille sur chaque étape de votre projet pour déterminer la meilleure approche en termes de communication et de technologie. <strong>La création d'un site professionnel</strong> vous permettra d'augmenter votre visibilité sur les moteurs de recherche et d'améliorer l'image de marque de votre société.</p>
            <a href="/curriculum" class="btn btn-primary" @click.prevent="$emit('navbar-navigate', $event)" data-name="Curriculum" title="Curriculum vitae">Voir mon curriculum</a>
          </div>
          <div class="col-12 col-md-12 col-lg-12 col-xl-6 intro-carousel">
            <div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="~@/assets/img/developpement-web.jpg" width="720" height="400" class="d-block w-100" alt="Conception de site Internet modulable sur Pau">
                  <div class="carousel-caption d-block">
                    <h3>Site entièrement modulable</h3>
                    <p>Mise en place de site par brique logicielle</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <img src="~@/assets/img/arborescence-site.jpg" width="720" height="400" class="d-block w-100" alt="Étude de l'architecture de votre site sur Tarbes">
                  <div class="carousel-caption d-block">
                    <h3>Architecture de votre site</h3>
                    <p>Réflexion sur l'arborescence de votre site</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <img src="~@/assets/img/arborescence-page.jpg" width="720" height="400" class="d-block w-100" alt="Intégration html pour desktop et mobile sur Pau">
                  <div class="carousel-caption d-block">
                    <h3>Mise en page HTML optimisée</h3>
                    <p>Organisation du contenu pour desktop et mobile</p>
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
            <h2>Microentreprise</h2>
            <h3><i class="bi bi-clock-history"></i> Projet sur le court terme</h3>
            <p>En tant qu'indépendant, j'exerce une activité libérale sous le statut de microentreprise. Après étude de vos besoins et de la faisabilité, j'élabore un cahier des charges et une proposition commerciale. Le projet se découpe en différentes phases avec des validations aux étapes clés pour réduire les risques et répondre aux mieux à vos attentes.</p>
          </div>
          <div class="col-12 col-md-12 col-lg-6 employee">
            <h2>Contrat de travail</h2>
            <h3><i class="bi bi-calendar3"></i> Projet sur le long terme</h3>
            <p>Pour des projets complexes nécessitant du temps de développement, je peux me rendre disponible au sein de votre entreprise sous un contrat de travail. Nous élaborerons un planning suivant vos priorités et mettrons en place une organisation efficace. Je propose de travailler avec une méthodologie agile pour améliorer le travail en équipe.</p>
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
          <div class="col-12 col-md-6 col-lg-6 col-xl-3 text-center item-responsive" itemscope itemtype="http://schema.org/Service">
            <img src="~@/assets/img/img-responsive.png" width="320" height="350" class="img-fluid" alt="Design responsive de site sur Pau" itemprop="image" >
            <h3 itemprop="name">Responsive design</h3>
            <p class="align-bottom" @click="closeKnowledge('responsive')" itemprop="description">La charte graphique de votre site peut se faire en utilisant un template gratuit ou payant afin de réduire le budget final. Si vous souhaitez un design plus original ou un site web très optimisé, je réalise des interfaces graphiques et les intègre au sein de vos pages.</p>
            <button class="btn btn-primary" @click="openKnowledge('responsive')">Plus d'info</button>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-3 text-center item-development" itemscope itemtype="http://schema.org/Service">
            <img src="~@/assets/img/img-development.png" width="350" height="350" class="img-fluid" alt="Développeur professionnel sur Pau" itemprop="image" >
            <h3 itemprop="name">Développement</h3>
            <p class="align-bottom" @click="closeKnowledge('development')" itemprop="description">Je conçois des sites avec WordPress et Woocommerce afin de disposer d'un site clé en main administrable. Pour un site vitrine ou une application web, j'utilise les frameworks Vue.js ou Symfony selon vos besoins. Contactez-moi pour déterminer la technologie idéale pour votre projet.</p>
            <button class="btn btn-primary" @click="openKnowledge('development')">Plus d'info</button>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-3 text-center item-writing" itemscope itemtype="http://schema.org/Service">
            <img src="~@/assets/img/img-writing.png" width="350" height="350" class="img-fluid" alt="Rédaction de contenu optimisé SEO" itemprop="image" >
            <h3 itemprop="name">Rédaction web</h3>
            <p class="align-bottom" @click="closeKnowledge('writing')" itemprop="description">Le contenu de votre site est primordial pour apparaître dans les premières pages des moteurs de recherche. Je propose de vous aider dans la rédaction de vos pages et articles de façon optimisée et de vous conseiller pour réaliser le référencement naturel de votre site.</p>
            <button class="btn btn-primary" @click="openKnowledge('writing')">Plus d'info</button>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-3 text-center item-optimization" itemscope itemtype="http://schema.org/Service">
            <img src="~@/assets/img/img-optimization.png" width="350" height="350" class="img-fluid" alt="Optimisation technique de site" itemprop="image" >
            <h3 itemprop="name">Optimisation</h3>
            <p class="align-bottom" @click="closeKnowledge('optimization')" itemprop="description">L'optimisation technique et sémantique consiste à améliorer certains facteurs clés pour augmenter ses positions sur les moteurs de recherche. Vous avez déjà un site ? Utilisez un outil en ligne comme PageSpeed ou GTmetrix pour connaître votre score de performance.</p>
            <button class="btn btn-primary" @click="openKnowledge('optimization')">Plus d'info</button>
          </div>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 d-flex flex-column align-items-center">
            <h2 class="text-center">Besoin d'un conseil, une demande d'information ou un projet en développement web ?</h2>
            <a href="/contact" class="btn btn-primary" @click.prevent="$emit('navbar-navigate', $event)" data-name="Contact" title="Devis pour la création d'un site Internet">Contactez-moi</a>
          </div>
        </div>
      </div>
    </section>
    <section class="techno">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h2>Partage de <span class="color-blue">mes connaissances</span> sur Pau et Tarbes</h2>
          </div>
        </div>
        <div class="row techno-content" itemscope itemtype="http://schema.org/OfferCatalog">
          <h3 itemprop="name"><i class="bi bi-brush"></i> Graphisme</h3>
          <Techno name="Adobe Photoshop" logo="logo-adobe_photoshop.png" desc="Logiciel de retouche d'images et de conception graphique" />
          <Techno name="Adobe Illustrator" logo="logo-adobe_illustrator.png" desc="Logiciel d'édition graphique pour un rendu vectoriel" />
          <Techno name="Adobe Animate" logo="logo-adobe_animate.png" desc="Logiciel d'animation vectorielle pour le web et la vidéo" />
          <Techno name="Affinity Photo" logo="logo-affinity_photo.png" desc="Logiciel de retouche d'images et de conception graphique" />
          <Techno name="Affinity Designer" logo="logo-affinity_designer.png" desc="Logiciel d'édition graphique pour un rendu vectoriel" />
          <Techno name="Affinity Publisher" logo="logo-affinity_publisher.png" desc="Logiciel de publication pour l'impression et les documents PDF" />
        </div>
        <div class="row techno-content" itemscope itemtype="http://schema.org/OfferCatalog">
          <h3 itemprop="name"><i class="bi bi-window"></i> Développement</h3>
          <Techno name="PhpStorm" logo="logo-phpstorm.png" desc="Logiciel ou IDE de programmation dédié aux langages du web" />
          <Techno name="PHP" logo="logo-php.png" desc="Langage de programmation côté serveur pour application, site et api" />
          <Techno name="JavaScript" logo="logo-javascript.png" desc="Langage de programmation côté client et serveur pour application, site et api" />
          <Techno name="HTML" logo="logo-html.png" desc="Langage de balises pour la structure des pages Internet" />
          <Techno name="Sass / Scss" logo="logo-sass.png" desc="Préprocesseur CSS pour aider le travail des développeurs web" />
          <Techno name="Less" logo="logo-less.png" desc="Préprocesseur CSS pour faciliter le travail des intégrateurs web" />
          <Techno name="WordPress" logo="logo-wordpress.png" desc="Système de gestion de contenu pour la création de sites Internet" />
          <Techno name="Woocommerce" logo="logo-woocommerce.png" desc="Extension de WordPress pour développer une boutique en ligne" />
          <Techno name="Symfony" logo="logo-symfony.png" desc="Framework PHP pour le développement web et d'API RESTful" />
          <Techno name="jQuery" logo="logo-jquery.png" desc="Framework JavaScript pour améliorer l’interactivité d’une page HTML" />
          <Techno name="Vue.js" logo="logo-vuejs.png" desc="Framework JavaScript pour développer des sites et des applications mobiles" />
          <Techno name="Bootstrap" logo="logo-bootstrap.png" desc="Framework CSS pour créer des interfaces HTML tout support" />
          <Techno name="MySql" logo="logo-mysql.png" desc="Serveur de bases de données pour gérer le contenu dynamique" />
          <Techno name="MariaDB" logo="logo-mariadb.png" desc="Serveur de bases de données pour gérer le contenu dynamique" />
          <Techno name="Github" logo="logo-github.png" desc="Plateforme en ligne d'hébergement et de partage de code source" />
          <Techno name="Git" logo="logo-git.png" desc="Logiciel de versioning pour le travail collaboratif" />
          <Techno name="Svn" logo="logo-svn.png" desc="Logiciel de gestion de version pour le travail en équipe" />
          <Techno name="Postman" logo="logo-postman.png" desc="Logiciel pour aider les développeurs dans la mise en place d'api" />
        </div>
        <div class="row techno-content" itemscope itemtype="http://schema.org/OfferCatalog">
          <h3 itemprop="name"><i class="bi bi-globe"></i> Référencement / marketing</h3>
          <Techno name="Yourtext Guru" logo="logo-yourtext_guru.png" desc="Outil en ligne pour la rédaction de contenu optimisé au référencement" />
          <Techno name="Screaming Frog" logo="logo-screaming_frog.png" desc="Logiciel d'analyse de code source et d'extraction des données en ligne" />
          <Techno name="Ubersuggest" logo="logo-ubersuggest.png" desc="Outil en ligne pour analyser les mots clés recherchés sur les moteurs" />
          <Techno name="Google Analytics" logo="logo-google_analytics.png" desc="Outil en ligne d'analyse d'audience pour un site ou une application mobile" />
          <Techno name="Stripe" logo="logo-stripe.png" desc="Plateforme de paiement en ligne avec une API et des solutions avancées" />
          <Techno name="MailerLite" logo="logo-mailerlite.png" desc="Plateforme de marketing relationnel pour l'emailing et les newsletters" />
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
          <div class="col-12 project-carousel">
            <div id="carouselProject" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Foxyz"></button>
                <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="1" aria-label="Armoire Plus"></button>
                <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="2" aria-label="Méca Jet d'Eau"></button>
                <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="3" aria-label="Toul-Immo Rénovation"></button>
                <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="4" aria-label="TextBeans"></button>
                <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="5" aria-label="Topwings"></button>
                <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="6" aria-label="JUICE"></button>
                <button type="button" data-bs-target="#carouselProject" data-bs-slide-to="7" aria-label="U-TEST"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <picture>
                    <img
                      src="~@/assets/img/interface-foxyz_mob.jpg"
                      srcset="~@/assets/img/interface-foxyz_mob.jpg 480w, ~@/assets/img/interface-foxyz.jpg 960w"
                      sizes="(max-width: 767px) 480px, 960px"
                      width="480" height="300"
                      class="d-block w-100"
                      alt="Développement de logiciel full web en PHP et JavaScript">
                  </picture>
                  <div class="carousel-caption">
                    <h3>Aide au développement de l'ERP et refonte du site Internet foxyz.fr</h3>
                    <p>Copyright : Foxyz</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <picture>
                    <img
                        src="~@/assets/img/interface-armoireplus_mob.jpg"
                        srcset="~@/assets/img/interface-armoireplus_mob.jpg 480w, ~@/assets/img/interface-armoireplus.jpg 960w"
                        sizes="(max-width: 767px) 480px, 960px"
                        width="480" height="300"
                        class="d-block w-100"
                        alt="Création de boutique e-commerce sur Pau avec WordPress et Woocommerce">
                  </picture>
                  <div class="carousel-caption">
                    <h3>Amélioration de la charte graphique et des fonctionnalités du site armoireplus.fr</h3>
                    <p>Copyright : DBA</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <picture>
                    <img
                      src="~@/assets/img/interface-mecajetdeau_mob.jpg"
                      srcset="~@/assets/img/interface-mecajetdeau_mob.jpg 480w, ~@/assets/img/interface-mecajetdeau.jpg 960w"
                      sizes="(max-width: 767px) 480px, 960px"
                      width="480" height="300"
                      class="d-block w-100"
                      alt="Développeur sur Pau spécialisé en WordPress et Symfony">
                  </picture>
                  <div class="carousel-caption">
                    <h3>Conception et référencement du site Internet vitrine mecajetdeau.com</h3>
                    <p>Copyright : Méca Jet d'Eau | Design : Gabriel Uribe</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <picture>
                    <img
                      src="~@/assets/img/interface-toulimmo_mob.jpg"
                      srcset="~@/assets/img/interface-toulimmo_mob.jpg 480w, ~@/assets/img/interface-toulimmo.jpg 960w"
                      sizes="(max-width: 767px) 480px, 960px"
                      width="480" height="300"
                      class="d-block w-100"
                      alt="Développeur freelance sur Pau pour la création de site Internet de qualité">
                  </picture>
                  <div class="carousel-caption">
                    <h3>Création de la charte graphique et du site toulimmo-renovation.fr</h3>
                    <p>Copyright : Toul-Immo Réalisation</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <picture>
                    <img
                      src="~@/assets/img/interface-textbeans_mob.jpg"
                      srcset="~@/assets/img/interface-textbeans_mob.jpg 480w, ~@/assets/img/interface-textbeans.jpg 960w"
                      sizes="(max-width: 767px) 480px, 960px"
                      width="480" height="300"
                      class="d-block w-100"
                      alt="Webmaster freelance pour du développement web sur Tarbes">
                  </picture>
                  <div class="carousel-caption">
                    <h3>Intégration LESS/CSS et optimisation de la plateforme TextBeans</h3>
                    <p>Copyright : Lingocentric | Design : Gabriel Uribe</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <picture>
                    <img
                      src="~@/assets/img/interface-topwings_mob.jpg"
                      srcset="~@/assets/img/interface-topwings_mob.jpg 480w, ~@/assets/img/interface-topwings.jpg 960w"
                      sizes="(max-width: 767px) 480px, 960px"
                      width="480" height="270"
                      class="d-block w-100"
                      alt="Développeur freelance sur Pau et Tarbes pour application web">
                  </picture>
                  <div class="carousel-caption">
                    <h3>Conception graphique et aide au développement de l'application de salon Topwings</h3>
                    <p>Copyright : Virtual-IT | Client : Thales Aerospace</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <picture>
                    <img
                      src="~@/assets/img/interface-airbusds_mob.jpg"
                      srcset="~@/assets/img/interface-airbusds_mob.jpg 480w, ~@/assets/img/interface-airbusds.jpg 960w"
                      sizes="(max-width: 767px) 480px, 960px"
                      width="480" height="300"
                      class="d-block w-100"
                      alt="Conception d'interface graphique pour web et mobile">
                  </picture>
                  <div class="carousel-caption">
                    <h3>Réalisation graphique et développement du magazine interactif pour la mission JUICE</h3>
                    <p>Copyright : Virtual-IT | Client : AIRBUS DS</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <picture>
                    <img
                      src="~@/assets/img/interface-spherea_mob.jpg"
                      srcset="~@/assets/img/interface-spherea_mob.jpg 480w, ~@/assets/img/interface-spherea.jpg 960w"
                      sizes="(max-width: 767px) 480px, 960px"
                      width="480" height="270"
                      class="d-block w-100"
                      alt="Développeur d'application web et webmaster freelance sur Pau">
                  </picture>
                  <div class="carousel-caption">
                    <h3>Suivi projet et conception de l'application de salon interactive U-TEST ®</h3>
                    <p>Copyright : Virtual-IT | Client : SPHEREA | Design 2D : Gabriel Uribe | Design 3D : Stéphane Agullo</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselProject" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="blog">
      <div class="container-fluid">
        <div class="row list-posts">
          <div class="col-12">
            <h2>Derniers <span class="color-blue">articles publiés</span> sur le blog</h2>
          </div>
          <div v-for="post in this.posts" :key="post.id" class="col-12 col-md-6 col-lg-6 col-xl-3 post">
            <div class="post-content">
              <h3>{{ post.render_title }}</h3>
              <h4 class="color-orange">{{ new Date(post.date).toLocaleDateString('fr-fr') }}</h4>
              <p v-html="post.excerpt.rendered"></p>
              <a class="btn btn-primary" :href="post.link">Voir l'article</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 d-flex flex-column align-items-center">
            <h2 class="text-center">Besoin d'un webmaster sur Pau ou Tarbes pour vous aider dans votre projet professionnel ?</h2>
            <a href="/contact" class="btn btn-primary" @click.prevent="$emit('navbar-navigate', $event)" data-name="Contact" title="Demande de renseignement pour un webmaster">Contactez-moi</a>
          </div>
        </div>
      </div>
    </section>
    <div class="background-mountain"></div>
  </div>
</template>

<script>
import axios from 'axios';
import Scrollbar from 'smooth-scrollbar'
import anime from 'animejs/lib/anime.es.js'
import Techno from '@/components/Techno'
import 'bootstrap/js/dist/carousel'

export default {
  name: 'Home',
  components: {
    Techno,
  },
  data() {
    return {
      posts: [],
      scrollBar: Scrollbar,
    }
  },
  mounted() {
    this.scrollBar = Scrollbar.init(document.querySelector('#home'), {damping: 0.5})
    anime({targets: '.content', opacity: 1, duration: 150, easing: 'easeInOutCirc'})
    this.loadPosts()
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
    loadPosts() {
      axios
        .get('https://jagullo.fr/blog/wp-json/wp/v2/posts', {
          params: {
            per_page: 4,
            page: 1,
          }
        })
        .then(response => {
          this.posts = response.data
          for (const post of this.posts) {
            let title = new DOMParser().parseFromString(post.title.rendered, "text/html")
            post.render_title = title.documentElement.textContent
          }
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
    .intro-description {
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
    .intro-carousel {
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
          img {
            height: auto;
          }
          .carousel-caption {
            right: 0;
            left: 0;
            bottom: 0;
            color: #fff;
            padding-bottom: 2.75rem;
            background-color: rgba(0, 0, 0, 0.75);
            p {
              text-align: center;
            }
          }
        }
      }
      span.carousel-control-prev-icon,
      span.carousel-control-next-icon {
        border-radius: 3px;
        background-size: 70%;
        background-color: $color-dark;
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
  section.techno {
    .techno-content {
      h3 {
        position: relative;
        padding: 10px 15px 10px 50px;
        margin-bottom: 20px;
        border-bottom: 1px solid #d5d5d5;
        i.bi {
          position: absolute;
          width: 40px;
          height: 100%;
          left: 0;
          top: 0;
          color: #818181;
          font-size: 1.5em;
          text-align: center;
          padding-top: 5px;
          border-radius: 3px 0 0 3px;
          transition: color 150ms ease-in-out;
        }
      }
      &:hover {
        i.bi {
          color: $color-orange;
        }
      }
    }
  }
  section.contact,
  section.quote {
    padding: 30px;
    color: #fff;
    background-color: $color-dark;
    h2 {
      margin-bottom: 20px;
    }
  }
  section.quote {
    h2 {
      font-size: 1.7rem;
    }
    p {
      margin-bottom: 0;
    }
  }
  section.project {
    .project-carousel {
      display: flex;
      flex-direction: column;
      justify-content: center;
      .carousel {
        .carousel-inner {
          border-radius: 3px;
          .carousel-item {
            border-radius: 3px;
            background-color: #e3e3e3;
            transition: transform 750ms ease-in-out;
            img {
              width: auto!important;
              height: 540px;
              margin: 0 auto;
            }
            .carousel-caption {
              position: relative!important;
              color: #fff;
              right: 0;
              left: 0;
              bottom: 0;
              padding-bottom: 2.75rem;
              background-color: $color-blue-hover;
              p {
                text-align: center;
              }
            }
          }
        }
        span.carousel-control-prev-icon,
        span.carousel-control-next-icon {
          border-radius: 3px;
          background-size: 70%;
          background-color: $color-blue-hover;
        }
      }
    }
  }
  section.blog {
    .post {
      padding: 0 10px 20px;
      .post-content {
        display: flex;
        flex-direction: column;
        height: 100%;
        padding: 15px;
        border-radius: 3px;
        border: 1px solid #d7d7d7;
        background-color: #fafafa;
        .btn {
          display: block;
          margin: auto auto 0;
        }
      }
    }
  }
}
/* Responsive */
@media (max-width: 576px) {
  .content {
    section.intro {
      .intro-carousel {
        padding: 0;
        .carousel-caption {
          position: relative;
          padding-left: 25px;
          padding-right: 25px;
          background-color: $color-dark!important;
        }
      }
    }
  }
}
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
    section.project {
      .project-carousel {
        .carousel.slide .carousel-inner {
          .carousel-item {
            img {
              width: 100%!important;
              height: auto;
            }
            .carousel-caption {
              padding: 1rem 1rem 2.75rem;
            }
          }
        }
      }
    }
  }
}
@media (max-width: 1199px) {
  .content {
    section.intro {
      .intro-carousel {
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
