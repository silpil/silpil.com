<script setup lang='ts'>
  import { onMounted, onUnmounted } from 'vue'

  useHead({
    script: [
      {
        src: 'https://umami.silpil.com/umami.js',
        async: true,
        defer: true,
        tagPosition: 'bodyClose',
        'data-website-id': 'fabd34aa-deb7-4a47-b0e0-546f18aa27f4'
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