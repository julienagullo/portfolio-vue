import { createRouter, createWebHistory } from 'vue-router'

const siteUrl = 'https://jagullo.fr'

const routes = [
  {
    path: '/',
    name: 'Home',
    meta: {
      title: 'Webmaster et développeur web sur Pau et Tarbes | jagullo.fr',
      description: 'Bienvenue sur mon site Internet présentant mes travaux dans le domaine du web, du développement, du graphisme et de la communication sur Pau et Tarbes.',
    },
    component: () => import('../views/Home.vue'),
  },
  {
    path: '/curriculum',
    name: 'Curriculum',
    meta: {
      title: 'Expériences et projets professionnels | jagullo.fr',
      description: 'Découvrir mon curriculum et l\'ensemble de mes projets dans le domaine du web, du design et de la programmation sur Pau et Tarbes.',
    },
    component: () => import('../views/Curriculum.vue'),
  },
  {
    path: '/open-source',
    name: 'Source',
    meta: {
      title: 'Projets open-sources en développement web | jagullo.fr',
      description: 'Découvrir tous mes projets open sources pour le développement web et particulièrement avec les frameworks Vue.js et jQuery.',
    },
    component: () => import('../views/Source.vue'),
  },
  {
    path: '/contact',
    name: 'Contact',
    meta: {
      title: 'Demande de contact pour du développement web | jagullo.fr',
      description: 'Contactez-moi pour toute demande de renseignements, de conseils ou de devis en conception de site Internet sur Pau et Tarbes.',
    },
    component: () => import('../views/Contact.vue'),
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'NotFound',
    meta: {
      title: 'Page non trouvée | jagullo.fr',
      description: 'Désolé la page demandée n\'existe pas.',
    },
    component: () => import('../views/NotFound.vue'),
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
})

router.afterEach((to) => {
  document.title = to.meta['title']
  document.querySelector('link[rel="canonical"]').href = siteUrl + to.path
  document.querySelector('meta[name="description"]').setAttribute("content", to.meta['description'])
})

export default router
