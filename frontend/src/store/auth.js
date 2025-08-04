import api from '@/services/api'

export default {
  async login(credentials) {
    const response = await api.post('/auth/login', credentials)
    localStorage.setItem('token', response.token);
  },
  logout() {
    localStorage.removeItem('token')
  },
  isAuthenticated() {
    return !!localStorage.getItem('token')
  }
}