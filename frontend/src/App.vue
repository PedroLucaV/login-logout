<script setup>
import router from './router';

const route = router.currentRoute.value;
console.log(route);
</script>

<template>
  <main>
    <router-view></router-view>
  </main>
</template>

<style scoped>
</style>
