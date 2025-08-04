<template>
  <nav class="navbar">
    <LogoutButton />
  </nav>
</template>

<script setup>
import LogoutButton from '@/components/LogoutButton.vue'
</script>

<style scoped>
.navbar {
  display: flex;
  justify-content: flex-end;
  padding: 1rem;
  background-color: #eee;
}
</style>
