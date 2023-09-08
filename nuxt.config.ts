export default defineNuxtConfig({
  css: ["@/assets/scss/main.scss"],
  modules: [
    '@nuxt/content',
    '@unocss/nuxt',
    '@nuxtjs/color-mode'
  ],
  content: {
    documentDriven: false
  },
  colorMode: {
    classSuffix: ''
  },
  extends: '@nuxt-themes/typography' 
})
