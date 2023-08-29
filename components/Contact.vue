<script setup lang="ts">
  const { content } = defineProps({
    content: Object
  })
</script>

<template>
  <section class="container px-6 mx-auto">
    <div class="max-w-5xl mx-auto rounded-xl py-24 px-12 lg:pt-35 lg:pb-12 mb-25 border-1 border-gray-400/5 dark:border-gray-300/5 bg-primary-100/30 dark:bg-gray-100/3">
      <div class="text-center">
        <h2 class="text-2xl text-gray-800 dark:text-white capitalize lg:text-4xl font-black">{{ content?.title }}</h2>
        <p class="mt-4 text-gray-500 xl:mt-6 dark:text-gray-300 max-w-2xl mx-auto">{{ content?.description }}</p>
        <div class="flex flex-col sm:flex-row justify-center items-center mt-12 text-center">
          <span class="inline-block text-primary-500">
            <div class="w-12 sm:mr-4 text-5xl i-ic-outline-mail" width="48" height="48" />
          </span>

          <a :href="`mailto:${content?.email}?subject=${content?.message}`" class="text-xl sm:text-3xl text-gray-600 dark:text-white font-bold tracking-tight hover:underline">{{ content?.email }}</a>
        </div>
      </div>
      <div class="hidden flex w-full justify-center mt-20 md:mt-25 md:mb-15">
        <a href="/">
          <span class="inline-block text-yellow-300">
            <div class="w-12 mr-4 text-5xl i-ic-twotone-waving-hand" width="48" height="48" />
          </span>
        </a>
      </div>
    </div>
  </section>
</template>
