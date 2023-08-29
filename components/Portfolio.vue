<script setup lang="ts">
  defineProps({
    content: Object
  })
</script>

<template>
  <Section>
    <div class="container px-6 mx-auto">
      <h2 class="text-2xl text-gray-800 lg:text-3xl dark:text-white font-black">{{ content?.title }}</h2>

      <div class="mt-8 xl:mt-16 lg:flex lg:-mx-12">
        <div class="lg:mx-12">
          <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Skills:</h2>

          <div class="mt-4 space-y-4 lg:mt-8">
            <nuxt-link v-for="toc in content?.skills" :to="toc.link" class="block text-gray-500 dark:text-gray-300 hover:underline">
              {{ toc.text }}
            </nuxt-link>
          </div>
        </div>

        <div class="flex-1 mt-8 lg:mx-12 lg:mt-0">
          <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3 ">
            <div v-for="project in content?.projects">
              <img class="object-cover w-full rounded-lg h-96 " :src="project.image" :alt="project.title">
              <h2 class="mt-4 text-xl font-semibold text-gray-800 capitalize dark:text-white">{{ project.title }}</h2>
              <p class="mt-2 text-lg tracking-wider text-primary-500 uppercase dark:text-primary-400 ">{{ project.type }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Section>
</template>
