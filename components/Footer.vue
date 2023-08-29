<template>
  <footer class="px-4 text-gray-800 dark:text-white">
    <div class="container px-6 py-20 mx-auto">

      <div class="flex flex-col items-center justify-between md:flex-row w-full">
        <Logo class="opacity-50 hover:opacity-100 transition z-10" />

        <div class="flex flex-col sm:flex-row mt-20 md:mt-0 text-center md:text-right">
          <a href="#" class="px-4 py-3 text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-primary-500 dark:hover:text-primary-400 hover:underline">BLOG</a>
          <a href="#" class="px-4 py-3 text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-primary-500 dark:hover:text-primary-400 hover:underline">FREELANCE</a>
          <a href="#" class="px-4 py-3 text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-primary-500 dark:hover:text-primary-400 hover:underline">PROJECTS</a>
          <a href="#" class="px-4 py-3 text-sm text-gray-600 transition-colors duration-300 dark:text-gray-200 hover:text-primary-500 dark:hover:text-primary-400 hover:underline">CONTACTS</a>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'Footer',
  computed: {
    year() {
      return new Date().getFullYear()
    }
  }
}
</script>
