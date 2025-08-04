<template>
  <div>
    <h2>Login</h2>
    <LoginForm @login-success="handleSuccess" />
  </div>
</template>

<script setup>
import LoginForm from '@/components/LoginForm.vue'
import { useRouter } from 'vue-router'

const router = useRouter()

const handleSuccess = () => {
  router.push('/')
}
</script>