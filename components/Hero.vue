<script setup lang="ts">
  defineProps({
    content: Object
  })
</script>

<template>
  <section class="-mt-35 h-screen flex items-center">
    <div class="px-6 sm:px-12 mx-auto max-w-7xl">
      <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 sm:text-center mt-40 md:mt-15">
        <p class="px-0 mb-8 text-md text-gray-600 dark:text-white md:text-lg lg:px-24" v-html="content?.description" />
        <h1
          class="mb-8 text-4xl font-extrabold leading-none tracking-normal text-gray-900 dark:text-white md:text-6xl md:tracking-tight sm:mx-auto"
          style="max-width: 600px"
          v-html="content?.title"
        />
        <div class="px-0 mb-8 text-lg text-gray-600 dark:text-white md:text-xl lg:px-24 leading-snug" v-html="content?.text" />
      </div>
    </div>
  </section>
</template>
