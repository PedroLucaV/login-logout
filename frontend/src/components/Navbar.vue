<template>
  <nav class="navbar">
    <LogoutButton v-if="token" />
    <LoginButton v-if="!token" />
  </nav>
</template>

<script setup>
import LogoutButton from '@/components/LogoutButton.vue'
import LoginButton from '@/components/LoginButton.vue'
import { ref } from 'vue';
const token = localStorage.getItem('token')
</script>

<style scoped>
.navbar {
  display: flex;
  justify-content: flex-end;
  padding: 1rem;
  background-color: #eee;
}
</style>
