<template>
  <button @click="logout" class="logout-button">
    Logout
  </button>
</template>

<script setup>
import auth from '@/store/auth'
import { useRouter } from 'vue-router'

const router = useRouter()

const logout = () => {
  auth.logout()
  router.push('/login')
}
</script>

<style scoped>

</style>
