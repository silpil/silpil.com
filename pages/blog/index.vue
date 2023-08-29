<script setup lang="ts">
  const route = useRoute()

  const { data }: any = await useAsyncData('get-document', () => queryContent(route.path).findOne())
  const articles: any = await useAsyncData('articles', () => queryContent(route.path)
    .sort({ date: -1})
    .where({ visible: true }).find())
    console.log(articles.data.value)
</script>


<template>
  <Header />
  <section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-6 lg:px-0 py-24 mx-auto max-w-5xl">
      <h2 class="text-4xl text-gray-800 dark:text-white capitalize lg:text-5xl dark:text-white font-black" v-html="data?.title" />
      <p class="mt-4 mb-20 md:mb-40 text-gray-500 dark:text-white xl:mt-6 dark:text-gray-300">
        {{ data?.description }}
      </p>
      <div class="-my-8 divide-y-2 divide-gray-100">
        <div v-for="article in articles.data.value" class="py-8 flex flex-wrap md:flex-nowrap">
          <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
            <span class="font-semibold title-font text-gray-800 dark:text-white">CATEGORY</span>
            <span class="mt-1 text-gray-500 dark:text-white text-sm">{{ article.createdAt }}</span>
          </div>
          <div class="md:flex-grow">
            <h2 class="text-2xl font-medium text-gray-800 dark:text-white title-font mb-2">{{ article.title}}</h2>
            <p v-html="article.description" class="leading-relaxed dark:text-gray-100/80" />
            <a href="#" class="text-primary-500 inline-flex items-center mt-4">Learn More
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <Contact :content="data.contact" />
  <Footer />
</template>
