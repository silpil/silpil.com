<script lang="ts" setup>
  const isOpen: Ref<boolean> = ref(false)
  const { links } = defineProps({
    links: Array<any>
  })
</script>

<template>
  <header class="relative">
    <div class="container mx-auto p-6 lg:py-8 flex items-center justify-between text-slate-700 font-semibold text-sm leading-6 dark:text-slate-200">
      <Logo class="shrink-0" />
      <div class="flex flex-col">
        <div class="md:hidden">
          <button @click="isOpen = !isOpen" type="button" class="text-slate-500 w-8 h-8 flex items-center justify-center hover:text-slate-600 dark:text-slate-400 dark:hover:text-slate-300">
            <span class="sr-only">Navigation</span>
            <div v-if="!isOpen" class="i-mdi-menu text-3xl" />
            <div v-if="isOpen" class="i-mdi-close text-3xl" />
          </button>
        </div>
        <div :class="isOpen ? 'absolute top-full left-0 w-full bg-white/95 dark:bg-primary-900/95 z-10 p-6' : 'hidden md:flex items-center'">
          <nav>
            <ul class="flex flex-col md:flex-row items-center gap-y-4 md:gap-y-0 text-zinc-900 dark:text-white lg:text-xl font-black uppercase">
              <li v-for="{ link, text } in links">
                <a :href="link" class="hover:text-primary-500 dark:hover:text-primary-400 block px-4 py-2 md:py-0">{{ text }}</a>
              </li>
            </ul>
          </nav>
          <div class="flex items-center justify-center md:border-l border-slate-200 mt-4 md:mt-0 ml-0 md:ml-6 p-4 md:p-0 md:pl-6 dark:border-slate-800">
            <label class="sr-only" id="headlessui-listbox-label-:r1:" data-headlessui-state="">Theme</label>
            <button @click="$colorMode.preference = 'dark'" type="button" id="headlessui-listbox-button-:r2:" class="dark:hidden" aria-haspopup="true" aria-expanded="false" data-headlessui-state="" aria-labelledby="headlessui-listbox-label-:r1: headlessui-listbox-button-:r2:">
              <div class="i-mdi-weather-sunny text-xl text-slate-400 hover:text-primary-500 dark:hover:text-primary-300" />
            </button>
            <button @click="$colorMode.preference = 'light'" type="button" id="headlessui-listbox-button-:r2:" class="hidden dark:block" aria-haspopup="true" aria-expanded="false" data-headlessui-state="" aria-labelledby="headlessui-listbox-label-:r1: headlessui-listbox-button-:r2:">
              <div class="i-mdi-moon-waning-crescent text-xl text-slate-400 hover:text-primary-500 dark:hover:text-primary-300" />
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>
