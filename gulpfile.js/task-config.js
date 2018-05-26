module.exports = {
  html        : false,
  images      : true,
  fonts       : true,
  static      : true,
  svgSprite   : true,
  ghPages     : true,
  stylesheets : true,

  javascripts: {
    entry: {
      // files paths are relative to
      // javascripts.dest in path-config.json
      app: ["app.js"]
    }
  },

  browserSync: {
    proxy: {
      target: "https://charlie.dev/"
    },
    files: ["../templates"]
  },

  production: {
    rev: true
  }
}
