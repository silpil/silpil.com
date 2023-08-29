// https://nuxt.com/docs/guide/directory-structure/nuxt.config#nuxt-config-file
export default defineNuxtConfig({
  css: ["@/assets/scss/main.scss"],
  modules: [
    '@nuxt/content',
    '@unocss/nuxt'
  ],
  content: {
    documentDriven: false
  },
  extends: '@nuxt-themes/typography'
})
