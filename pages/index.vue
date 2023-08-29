<script setup lang="ts">
  const route = useRoute()

  const { data }: any = await useAsyncData('get-document', () => queryContent(route.path).findOne())
</script>


<template>
  <Header />
  <Hero :content="data.hero" />
  <Features :content="data.features" />
  <Portfolio :content="data.portfolio" />
  <About :content="data.about" />
  <Contact :content="data.contact" />
  <Footer />
</template>
