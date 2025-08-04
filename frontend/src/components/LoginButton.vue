<template>
  <button @click="login" class="login-button">
    Login
  </button>
</template>

<script setup>
import { useRouter } from 'vue-router'

const router = useRouter();

const login = () => {
  router.push('/login')
}
</script>

<style scoped>

</style>
