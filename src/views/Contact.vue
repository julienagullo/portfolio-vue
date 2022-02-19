<template>
  <div id="contact" class="content">
    <h1>Demande de renseignement</h1>
    <hr class="hr-gray" />
    <section class="form accordion" id="accordionContact">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingContact">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContact" aria-expanded="true" aria-controls="collapseOne">
            Formulaire de contact
          </button>
        </h2>
        <div id="collapseContact" class="accordion-collapse collapse show" aria-labelledby="headingContact" data-bs-parent="#accordionContact">
          <div class="accordion-body">
            <p>Vous pouvez me contacter pour toute demande de renseignement, pour un projet ou un devis avec le formulaire ci-dessous :</p>
            <transition name="fade" mode="out-in">
              <p v-if="send" class="alert alert-info">Merci, votre email a bien été envoyé.</p>
            </transition>
            <transition name="fade" mode="out-in">
              <p v-if="error" class="alert alert-danger">Désolé une erreur est survenue, veuillez réessayer ultérieurement.</p>
            </transition>
            <form id="form" @submit.prevent="submit" method="post" class="g-2 needs-validation" novalidate>
              <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-sm-3">
                  <label for="form-name" class="form-label">Nom</label>
                  <input id="form-name" v-model="name" type="text" class="form-control">
                  <div class="invalid-tooltip">Veuillez indiquer un nom</div>
                </div>
                <div class="col-md-6 ml-md-3">
                  <label for="form-society" class="form-label">Entreprise</label>
                  <input id="form-society" v-model="society" type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-sm-3">
                  <label for="form-phone" class="form-label">Téléphone</label>
                  <input id="form-phone" v-model="phone" type="tel" class="form-control">
                  <div class="invalid-tooltip">Veuillez indiquer un numéro</div>
                </div>
                <div class="col-md-6 ml-md-3">
                  <label for="form-email" class="form-label">Email</label>
                  <input id="form-email" v-model="email" type="email" class="form-control">
                  <div class="invalid-tooltip">Veuillez indiquer un email</div>
                </div>
              </div>
              <div class="mb-3">
                <label for="form-message" class="form-label">Demande</label>
                <textarea id="form-message" v-model="message" class="form-control" rows="5"></textarea>
                <div class="invalid-tooltip">Veuillez indiquer votre demande</div>
              </div>
              <div class="mb-3">
                <div id="g-recaptcha" class="captcha"></div>
                <div class="invalid-tooltip">Veuillez renseigner le captcha</div>
              </div>
              <p><i>Les informations transmises seront utilisées seulement pour répondre à votre demande.</i></p>
              <div class="mb-3">
                <button type="submit" id="form-submit" class="btn btn-primary">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="accordion privacy" id="accordionPrivacy">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingPrivacy">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrivacy" aria-expanded="true" aria-controls="collapseOne">
            Politique de confidentialité
          </button>
        </h2>
        <div id="collapsePrivacy" class="accordion-collapse collapse" aria-labelledby="headingPrivacy" data-bs-parent="#accordionPrivacy">
          <div class="accordion-body">
            <div id='ppms_cm_privacy_settings' data-editor-centralize='true' data-main-container='true' data-root='true'>
              <div data-disable-select='true'>
                <p>
                  Ce site Internet <b>analyse de façon anonyme</b> le trafic généré par les visiteurs pour améliorer l'expérience utilisateur et détecter des problèmes. Veuillez noter ci-dessous la liste des données utilisateur qui sont enregistrées dans une base de données hébergée en Europe :
                </p>
                <ul>
                  <li>adresse IP masquée (192.168.100.xxx)</li>
                  <li>région du visiteur</li>
                  <li>heure de la visite</li>
                  <li>pages vues par un visiteur</li>
                  <li>temps passé sur chaque page</li>
                  <li>site Internet de référence</li>
                  <li>type d'appareil</li>
                  <li>type de navigateur</li>
                  <li>type de système d'exploitation</li>
                  <li>téléchargements (clics sur des fichiers téléchargeables)</li>
                  <li>clics sur des liens menant à des sites externes</li>
                  <li>temps de génération de la page</li>
                  <li>données de recherche interne</li>
                </ul>
                <p>
                  Pour analyser le trafic et sécuriser le formulaire de contact, <b>nous avons besoin d'enregistrer certains cookies</b> dans votre navigateur :
                </p>
                <ul>
                  <li><b>_pk_ses.[appID].[domainHash] :</b> Montre une session active du visiteur. Si le cookie n'est pas présent, la session s'est terminée il y a plus de 30 minutes.</li>
                  <li><b>_pk_id.[appID].[domainHash] :</b> Utilisé pour reconnaître les visiteurs et retenir leurs différentes propriétés.</li>
                  <li><b>_pk_cvar :</b> Contiens les variables personnalisées qui ont été définies lors de l'affichage de la page précédente. Il n'est pas activé par défaut.</li>
                  <li><b>app_id :</b> Utilisé pour passer un site ou une application ID entre les modules de Piwik PRO : Analytics, Tag Manager, Consent Manager.</li>
                  <li><b>ppms_privacy_[appID] :</b> Enregistre le consentement du visiteur pour la collecte et l'utilisation de ses données personnelles.</li>
                  <li><b>_GRECAPTCHA :</b> Exécuté pour fournir une analyse des risques en sécurisant les formulaires de comtact.</li>
                </ul>
                <p id='ppms_cm_privacy_settings_form_link_text_id'>
                  En cliquant sur <b>Paramètres</b> pouvez gérer votre consentement et arrêter l'analyse de votre session de navigation. Nous collectons et utilisons vos données uniquement à des fins d'analyse pour améliorer le site. <b>Vos données ne sont transmises à aucun tiers ni utilisées à des fins marketing.</b>
                </p>
                <button class='btn btn-primary' id='ppms_cm_privacy_settings_button'>Paramètres</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="accordion mention" id="accordionMention">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingMention">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMention" aria-expanded="true" aria-controls="collapseOne">
            Mention légale
          </button>
        </h2>
        <div id="collapseMention" class="accordion-collapse collapse" aria-labelledby="headingMention" data-bs-parent="#accordionMention">
          <div class="accordion-body">
            <p>
              Le site et le nom de domaine <b>jagullo.fr</b> sont la propriété de :<br><br>
              Mr <img src="~@/assets/img/photo-title.png" width="115" height="70" class="img-title"> Agullo<br>
              10 rue Métairie Foch 31330 Grenade<br>
              Siret : 52981304000035<br>
              Tél. : 07.52.63.77.22<br>
              Email : contact@jagullo.fr<br><br>
              <span>Le site <b>jagullo.fr</b> est optimisé pour les navigateurs de génération récente desktop et mobile (Firefox, Edge, Chrome, Safari, Opéra). Le site est hébergé chez l'entreprise <b>OVHcloud</b> (SIREN 424 761 419) domiciliée au 2 rue Kellermann 59100 Roubaix.</span><br><br>
              <span>Le présent site constitue une oeuvre dont <b>Mr Agullo</b> est l’auteur au sens des articles L.111.1 et suivant du Code de la propriété intellectuelle. Tout le code source du site est disponible en <b>licence MIT</b> sur la plateforme Github mis à part les images du site. Les photographies, textes, slogans, dessins, images, séquences animées sonores ou non ainsi que toutes oeuvres intégrées dans le site sont la propriété de l'auteur ou de tiers l’ayant autorisé à les utiliser.</span>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import axios from 'axios'
import Scrollbar from 'smooth-scrollbar'
import anime from 'animejs/lib/anime.es.js'
import 'bootstrap/js/dist/collapse'

export default {
  name: 'Contact',
  data() {
    return {
      name: '',
      society: '',
      email: '',
      phone: '',
      message: '',
      valid: false,
      error: false,
      send: false,
      scrollBar: Scrollbar,
    }
  },
  mounted() {
    Scrollbar.init(document.querySelector('#contact'), {damping: 0.2})
    anime({targets: '.content', opacity: 1, duration: 200, easing: 'easeInOutCirc'})
    document.getElementsByClassName('content')[0].style.height = window.innerHeight + 'px' /* mobile issue */
    this.initCaptcha()
  },
  methods: {
    submit() {
      let inputs = ['name', 'phone', 'email', 'message']
      for (let input of inputs) {
        let element = window['form-'+input]
        if (this.checkInput(input, this[input])) {
          element.classList.add('is-valid')
          element.classList.remove('is-invalid')
          this.valid = true
        } else {
          element.classList.add('is-invalid')
          element.classList.remove('is-valid')
          this.valid = false
          element.focus()
          break
        }
      }
      if (this.valid) {
        let captcha = document.getElementById('g-recaptcha')
        if (window.grecaptcha.getResponse() === '') {
          captcha.classList.add('is-invalid')
          this.valid = false
        } else {
          captcha.classList.remove('is-invalid')
        }
      }
      if (this.valid) {
        axios.post('https://jagullo.fr/mail.php', {
            name: this.name,
            society: this.society,
            email: this.email,
            phone: this.phone,
            message: this.message,
            submit: 1
          })
          .then(response => {
            if (response.data == '1') {
              this.send = true
              this.error = false
              for (const input of window.form.elements) {
                input.value = ''
                input.disabled = true
                input.classList.remove('is-valid', 'is-invalid')
              }
              document.getElementById('g-recaptcha').style.display = 'none'
              window.grecaptcha.reset()
            } else {
              this.send = false
              this.error = true
            }
          })
      }
    },
    checkInput(type, value) {
      switch (type) {
        case 'email':
          return value.match(/^(([^<>()[\]\\.,;:!\s@"']+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)
        case 'name':
        case 'phone':
        case 'message':
          if (value !== '' && value.length > 3) return true
          break
      }
      return false
    },
    initCaptcha() {
      document.getElementById('g-recaptcha').style.display = 'block'
      if (document.getElementById('script-recaptcha') == null) {
        let script = document.createElement('script')
        script.id = 'script-recaptcha'
        script.src = 'https://www.google.com/recaptcha/api.js?onload=onloadCaptcha&render=explicit'
        document.getElementById('app').append(script)
        let self = this
        window.onloadCaptcha = function() {
          self.renderCaptcha()
        }
      }
    },
    renderCaptcha() {
      window.grecaptcha.render('g-recaptcha', {
        sitekey: '6LfKTH0dAAAAAFEst_vWSI06N57kS59I-i9si4rQ',
        size: 'normal',
        badge: 'inline',
        callback: self.callCaptcha,
      })
    },
    callCaptcha() {
      if (window.grecaptcha.getResponse() !== '') {
        document.getElementById('g-recaptcha').classList.remove('is-invalid')
      }
    },
  },
}
</script>

<style scoped lang="scss">
@import "src/assets/scss/variables";
.content {
  section.form,
  section.mention,
  section.privacy {
    background-color: #fafafa;
    border: 1px solid #c0c0c0;
    -webkit-box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.08);
    box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.08);
    margin-bottom: 20px;
    border-radius: 3px;
    padding: 0;
    .accordion-item {
      border: 0;
      background-color: transparent;
      .accordion-header {
        border: 0;
        background-color: transparent;
        .accordion-button {
          color: inherit;
          font-size: inherit;
          text-transform: uppercase;
          background-color: transparent;
          &:hover {
            color: $color-blue;
          }
        }
        .accordion-button:not(.collapsed) {
          background-color: transparent;
          color: inherit;
        }
      }
    }
  }
  section.form {
    .fade-enter-from,
    .fade-leave-to {
      opacity: 0;
    }
    .alert-info,
    .alert-danger {
      font-family: Arial, sans-serif;
      color: #fff;
      font-weight: bold;
      border-radius: 3px;
      border: 0;
      transition: opacity 0.5s ease-in-out;
    }
    .alert-info {
      background-color: $color-blue;
    }
    .alert-danger {
      color: #fff;
      background-color: #bb060a;
    }
    form {
      input,
      textarea {
        font-size: 1.5rem;
      }
      .invalid-tooltip {
        font-size: 1.2rem;
        font-weight: bold;
        top: auto;
      }
      .mb-3 {
        position: relative;
      }
      :deep(.captcha).is-invalid > div {
        border: 1px solid $color-red;
      }
    }
  }
  section.mention {
    .accordion-item {
      .img-title {
        width: 33px;
        height: auto;
        padding-top: 2px;
        image-rendering: high-quality;
        image-rendering: -webkit-optimize-contrast;
      }
    }
  }
}
/* Responsive */
@media (max-width: 410px) {
  .content {
    section.form form :deep(.captcha) {
      transform: scale(0.75) !important;
      -webkit-transform: scale(0.75) !important;
      transform-origin: 0 0 !important;
      -webkit-transform-origin: 0 0 !important;
    }
  }
}
</style>
