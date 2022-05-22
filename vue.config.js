module.exports = {
  publicPath: process.env.NODE_ENV === 'production' ? '/' : '',
  chainWebpack: config => {
    config.plugin('html')
      .tap(args => {
        args[0].canonical = 'https://jagullo.fr/'
        args[0].title = 'Webmaster et développeur web sur Pau et Tarbes | jagullo.fr'
        args[0].description = 'Bienvenue sur mon site Internet présentant mes travaux dans le domaine du web, du développement, du graphisme et de la communication sur Pau et Tarbes.'
        args[0].mode = process.env.NODE_ENV
        return args;
      })
  },
}
