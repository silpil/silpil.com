<script setup lang="ts">
  const { content } = defineProps({
    content: Object
  })
</script>


<template>
  <Section :color="false">
    <div class="container px-6 mx-auto">
      <div class="lg:flex lg:items-center">
        <div class="w-full space-y-12 lg:w-1/2 ">
          <div>
            <h2 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">{{ content?.title }}</h2>

            <div class="mt-2">
              <span class="inline-block w-20 h-1 bg-primary-500 rounded-full"></span>
              <span class="inline-block w-5 h-1 ml-1 bg-primary-500 rounded-full"></span>
              <span class="inline-block w-2 h-1 ml-1 bg-primary-500 rounded-full"></span>
            </div>
          </div>

          <div v-for="card in content?.cards" class="md:flex md:items-start md:-mx-4">
            <span class="inline-block p-2 text-primary-500 bg-primary-100 rounded-xl md:mx-4 dark:text-white dark:bg-primary-500">
              <div :class="['text-2xl', card.icon]" />
            </span>

            <div class="mt-4 md:mx-4 md:mt-0">
              <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">{{ card.title }}</h1>

              <p class="mt-3 text-gray-500 dark:text-gray-300">
                {{ card.text }}
              </p>
            </div>
          </div>
        </div>

        <div class="hidden lg:flex lg:w-1/2 lg:justify-center">
          <img class="w-[28rem] h-[28rem] object-cover xl:w-[34rem] xl:h-[34rem] rounded-full" src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=755&q=80" alt="">
        </div>
      </div>

      <hr class="mb-20 mt-40 border-gray-200 dark:border-gray-700">

      <div class="grid grid-cols-2 gap-8 md:grid-cols-4 lg:grid-cols-4">
        <!-- TODO: add img hidden if dark mode on store -->
        <div v-for="logo in content?.logos" class="flex items-center justify-center col-span-2 md:col-span-2 lg:col-span-1 p-8 space-y-3">
          <img :src="logo.black" alt="" style="width: 150px; height: auto;" class="dark:display-none">
          <img :src="logo.white" alt="" style="width: 150px; height: auto;" class="display-none dark:display-block">
        </div>
      </div>
    </div>
  </Section>
</template>
