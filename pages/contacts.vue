<script setup lang="ts">
const route = useRoute()

const { data }: any = await useAsyncData('get-document', () => queryContent(route.path).findOne())
</script>


<template>
  <Header />
  <Contact :content="data.contact" class="mt-30" />
  <Footer />
</template>
