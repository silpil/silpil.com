<script setup lang="ts">
  defineProps({
    content: Object
  })
</script>

<template>
  <Section>
    <div class="container px-6 py-10 mx-auto">
      <h2 class="text-2xl text-gray-800 lg:text-3xl dark:text-white font-black">{{ content?.title }}</h2>

      <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
        <div v-for="project in content?.projects" class="overflow-hidden bg-cover rounded-lg h-96 group" :style="`background-image:url(${project.image}); background-position: top;`">
          <div class="flex flex-col justify-center w-full h-full px-13 py-10 transition-opacity duration-700 opacity-0 backdrop-blur-sm group-hover:opacity-100" :class="project.color">
            <h3 class="mt-4 text-xl font-semibold text-white capitalize">{{ project.title }}</h3>
            <p class="mt-2 text-md tracking-wider text-white ">{{ project.description }}</p>
          </div>
        </div>
        <div class="rounded-lg border-gray-400/5 dark:border-gray-300/5 bg-primary-100/30 dark:bg-gray-100/3 h-96">
          <div class="flex flex-col justify-center w-full h-full px-13 py-10">
            <h3 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white capitalize">Your project here</h3>
            <p class="mt-2 text-md tracking-wider text-gray-800 dark:text-white ">Start a project <a href="mailto:info@ooos.site" class="text-primary-500 font-semibold">info@ooos.site</a></p>
          </div>
        </div>
      </div>
    </div>
  </Section>
</template>
