<template>
  <footer class="px-4 text-gray-800 dark:text-white">
    <div class="container px-6 py-20 mx-auto">

      <div class="flex flex-col items-center justify-between md:flex-row w-full">
        <Logo class="opacity-50 hover:opacity-100 transition z-10" />

        <ul class="flex flex-col sm:flex-row mt-20 md:mt-0 text-center md:text-right">
          <li v-for="{ link, text } in links" class="my-4 md:my-0">
            <a :href="link" class="px-4 py-3 text-sm text-gray-600 transition-colors uppercase duration-300 dark:text-gray-200 hover:text-primary-500 dark:hover:text-primary-400 hover:underline">{{ text }}</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'Footer',
  props: {
    links: {
      type: Array,
      default: () => []
    }
  },
  computed: {
    year() {
      return new Date().getFullYear()
    }
  }
}
</script>
