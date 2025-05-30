import { defineStore } from 'pinia'
import { ref } from 'vue'
import api from '@/api'

export const useProgramStore = defineStore('program', () => {
  const programs = ref([])
  const loading = ref(false)
  const error = ref(null)

  async function fetchPrograms() {
    loading.value = true
    error.value = null
    try {
      const res = await api.get('/programs')
      programs.value = res.data
    } catch (err) {
      console.error(err)
      error.value = 'Failed to load programs'
    } finally {
      loading.value = false
    }
  }

  return {
    programs,
    loading,
    error,
    fetchPrograms,
  }
})
