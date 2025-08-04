<template>
  <form @submit.prevent="onSubmit">
    <input v-model="email" placeholder="Email" />
    <input v-model="password" type="password" placeholder="Senha" />
    <button type="submit">Entrar</button>
    <p v-if="error">{{ error }}</p>
  </form>
</template>

<script setup>
import { ref, defineEmits } from 'vue'

const emit = defineEmits(['login-success'])

const email = ref('')
const password = ref('')
const error = ref('')

import auth from '@/store/auth'

const onSubmit = async () => {
  try {
    await auth.login({ email: email.value, password: password.value })
    emit('login-success')
  } catch (err) {
    error.value = 'Email ou senha inválidos'
  }
}
</script>