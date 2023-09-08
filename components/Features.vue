<script setup lang="ts">
  defineProps({
    content: Object
  })
</script>

<template>
  <Section>
    <div class="container px-6 mx-auto md:-mt-80">
      <h2 class="text-2xl text-gray-800 capitalize lg:text-3xl dark:text-white font-black" v-html="content?.title" />

      <p class="mt-4 text-gray-500 xl:mt-6 dark:text-gray-300">
        {{ content?.description }}
      </p>

      <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">

        <div v-for="card in content?.cards" class="p-8 space-y-3 border-1 border-gray-400/5 dark:border-gray-300/5 bg-primary-100/30 dark:bg-gray-100/3 rounded-xl">
          <span class="inline-block text-primary-500 dark:text-primary-400">
            <div :class="['text-5xl', card.icon]" />
          </span>

          <h2 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">
            {{ card.title }}
          </h2>

          <p class="text-gray-500 dark:text-gray-300">
            {{ card.text }}
          </p>
        </div>
      </div>
    </div>
  </Section>
</template>
