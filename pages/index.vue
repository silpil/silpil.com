<script setup lang="ts">
  const route: any = useRoute()
  const { data }: any = await useAsyncData(`get-${route.name}`, () => queryContent(route.path).findOne())
  const navigation: any = await useAsyncData(`navigation`, () => queryContent('navigation').findOne())
  
  useSeoMeta(data.value.seo)
</script>


<template>
  <Header :links="navigation.data.value.links" />
  <Hero :content="data.hero" />
  <Features id="services" :content="data.services" />
  <Portfolio id="portfolio" :content="data.portfolio" />
  <About id="about" :content="data.about" />
  <Contact id="contacts" :content="data.contacts" />
  <Footer :links="navigation.data.value.links" />
</template>
