<template>
  <header class="relative">
    <div class="container mx-auto p-6 lg:py-8 flex items-center justify-between text-slate-700 font-semibold text-sm leading-6 dark:text-slate-200">
      <Logo />
      <div class="flex items-center">
        <div class="md:hidden">
          <button type="button" class="text-slate-500 w-8 h-8 flex items-center justify-center hover:text-slate-600 dark:text-slate-400 dark:hover:text-slate-300">
            <span class="sr-only">Navigation</span>
            <svg width="24" height="24" fill="none" aria-hidden="true">
              <path d="M12 6v.01M12 12v.01M12 18v.01M12 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0 6a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0 6a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </button>
        </div>
        <div class="hidden md:flex items-center">
          <nav>
            <ul class="flex items-center gap-x-8 text-zinc-900 dark:text-white text-xl font-black uppercase">
              <li><nuxt-link to="/blog" class="hover:text-primary-500 dark:hover:text-primary-400">Blog</nuxt-link></li>
              <li><nuxt-link to="/freelance" class="hover:text-primary-500 dark:hover:text-primary-400">Freelance</nuxt-link></li>
              <li><nuxt-link to="/projects" class="hover:text-primary-500 dark:hover:text-primary-400">Projects</nuxt-link></li>
              <li><nuxt-link to="/contacts" class="hover:text-primary-500 dark:hover:text-primary-400">Contacts</nuxt-link></li>
            </ul>
          </nav>
          <div class="flex items-center border-l border-slate-200 ml-6 pl-6 dark:border-slate-800">
            <label class="sr-only" id="headlessui-listbox-label-:r1:" data-headlessui-state="">Theme</label>
            <button type="button" id="headlessui-listbox-button-:r2:" aria-haspopup="true" aria-expanded="false" data-headlessui-state="" aria-labelledby="headlessui-listbox-label-:r1: headlessui-listbox-button-:r2:">
              <div class="i-mdi-weather-sunny text-xl text-slate-400 hover:text-primary-500 dark:hover:text-primary-300 dark:hidden"></div>
              <div class="i-mdi-moon-waning-crescent text-xl text-slate-400 hover:text-primary-500 dark:hover:text-primary-300 hidden dark:block"></div>
            </button>
            <!-- <a href="#" class="ml-6 block text-slate-400 hover:text-primary-500 dark:hover:text-primary-300">
              <span class="sr-only">GitHub</span>
              <div class="i-mdi-github text-xl"></div>
            </a> -->
          </div>
        </div>
      </div>
    </div>
  </header>
</template>
