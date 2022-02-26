module.exports = {
  publicPath: process.env.NODE_ENV === 'production' ? '/' : '',
  chainWebpack: config => {
    config.plugin('html')
      .tap(args => {
        args[0].title = 'Développeur web sur Pau et Tarbes | jagullo.fr'
        args[0].mode = process.env.NODE_ENV
        return args;
      })
  },
}