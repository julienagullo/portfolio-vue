module.exports = {
  publicPath: process.env.NODE_ENV === 'production' ? '/' : '',
  chainWebpack: config => {
    config.plugin('html').tap(args => {
      args[0].title = 'Développeur web sur Pau, Orthez et Tarbes | jagullo.fr'
      args[0].description = 'Bienvenue sur mon portfolio interactif présentant mes travaux dans le domaine du web, du développement, du graphisme et de la communication sur Pau, Orthez et Tarbes.'
      return args
    })
  }
}