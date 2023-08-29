<script setup lang="ts">
  export interface Props {
    color?: boolean,
    margin?: string
  }
  withDefaults(defineProps<Props>(), {
    color: false,
    margin: 'my-30 md:my-50'
  })
</script>

<template>
  <section :class="{ 'bg-primary-100/30 dark:bg-gray-100/3': color, [margin]: margin }">
    <slot />
  </section>
</template>
