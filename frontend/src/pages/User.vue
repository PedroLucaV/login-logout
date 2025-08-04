<script setup>
import { ref, onMounted } from 'vue'
import Navbar from '@/components/Navbar.vue'
import api from '@/services/api'

const user = ref(null)

onMounted(async () => {
  try {
    const response = await api.get('/auth/me');
    user.value = response.data.data
    
  } catch (err) {
    console.error('Erro ao buscar usuário:', err.message)
  }
})
</script>

<template>
  <Navbar />
  <div v-if="user">
    <h2>Bem-vindo, {{ user.name }}</h2>
  </div>
</template>