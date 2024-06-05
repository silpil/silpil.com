<script setup lang='ts'>
  import { onMounted, onUnmounted } from 'vue'

  useHead({
    script: [
      {
        src: 'https://metrika.silpil.com/script.js',
        defer: true,
        'data-website-id': 'fe45b77c-fc5c-40fc-ba0b-ba38f74afb05'
      }
    ]
  })

  onMounted(() => {
    const gradientCursor: any = document.querySelector('.cursor')
    const contentWrapper: any = document.querySelector('main')

    function setCursorHeight() {
      gradientCursor.style.height = `${contentWrapper.offsetHeight}px`
    }

    function handleMouseMove(e: MouseEvent) {
      const scrollTop = document.documentElement.scrollTop || document.body.scrollTop
      gradientCursor.style.background = `radial-gradient(800px at ${e.clientX}px ${e.clientY + scrollTop}px, rgba(126,91,239, 0.1), transparent 80%)`
      setCursorHeight()
    }

    document.addEventListener('mousemove', handleMouseMove)
    window.addEventListener('resize', () => setCursorHeight())

    onUnmounted(() => {
      document.removeEventListener('mousemove', handleMouseMove)
      window.removeEventListener('resize', setCursorHeight)
    })
  })
</script>

<template>
  <div class="cursor z-0 transition duration-300" />
  <main class="bg-white dark:bg-black font-sans overflow-hidden">
    <slot />
  </main>
</template>

<style scoped>
.cursor {
  pointer-events: none;
  position: absolute;
  inset: 0;
}
</style>